class SmartHLSPlayer {
    constructor(containerId) {
        this.container = document.getElementById(containerId);
        if (!this.container) {
            throw new Error(`Container with id "${containerId}" not found`);
        }
        
        this.startTime = null;
        this.hls = null;
        this.isReady = false;
        this.isPlaying = false;

        // 初始化播放器
        this.initPlayer();
        
        console.log('🎬 智能HLS播放器初始化完成');
    }

    initPlayer() {
        console.log('🎨 初始化播放器');
        
        // 注入CSS样式
        this.injectStyles();
        
        // 创建HTML结构
        this.createPlayerStructure();
        
        // 获取元素引用
        this.video = this.container.querySelector('#video');
        this.loading = this.container.querySelector('#loading');
        this.ready = this.container.querySelector('#ready');
        this.poster = this.container.querySelector('#poster');
        this.loadingText = this.loading.querySelector('.loading-text');
        this.loadingSubtext = this.loading.querySelector('.loading-subtext');
        this.retryButton = this.loading.querySelector('.retry-button');
        
        // 绑定事件
        this.bindEvents();
    }

    injectStyles() {
        const style = document.createElement('style');
        style.textContent = `
            #video-container {
                position: relative;
                width: 100%;
                max-height: 640px;
                overflow: hidden;
                backdrop-filter: blur(20px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                animation: fadeIn 0.6s ease-in-out;
                /* iOS Safari fix */
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                isolation: isolate;
            }

            .poster-background {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                z-index: 1;
                transition: opacity 0.5s ease;
                /* iOS Safari fix */
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }

            .poster-background.hidden {
                opacity: 0;
                pointer-events: none;
            }

            #video {
                position: relative;
                width: 100%;
                height: 100%;
                max-height: 640px;
                z-index: 2;
                opacity: 0;
                transition: opacity 0.3s ease;
                /* iOS Safari video fix */
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
                background: black;
            }

            #video.show {
                opacity: 1;
            }

            .loading-container {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: none;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: white;
                text-align: center;
                background: rgba(0, 0, 0, 0.8);
                z-index: 10;
                /* iOS Safari fix */
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }

            .loading-spinner {
                width: 60px;
                height: 60px;
                border: 4px solid rgba(255, 255, 255, 0.3);
                border-top: 4px solid #FF8C00;
                border-radius: 50%;
                animation: spin 1s linear infinite;
                margin-bottom: 20px;
                margin-top: 30px;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }

            .loading-text {
                font-size: 18px;
                margin-bottom: 10px;
                font-weight: 500;
                transition: color 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 8px;
            }

            .loading-text.error {
                color: #ff6b6b !important;
            }

            .loading-subtext {
                font-size: 14px;
                font-weight: 500;
                opacity: 0.8;
                margin-bottom: 20px;
            }

            .retry-button {
                background: linear-gradient(135deg, #667eea, #764ba2);
                color: white;
                border: none;
                padding: 8px 16px;
                border-radius: 25px;
                cursor: pointer;
                font-size: 16px;
                font-weight: 600;
                margin-top: 10px;
                margin-bottom: 8px;
                transition: all 0.3s ease;
                box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
                display: none;
                /* iOS Safari fix */
                -webkit-appearance: none;
                -webkit-tap-highlight-color: transparent;
            }

            .retry-button:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
            }

            .retry-button:active {
                transform: translateY(0);
            }

            .retry-button.show {
                display: inline-block;
            }

            .ready-message {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: none;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: white;
                text-align: center;
                background: rgba(0, 0, 0, 0.6);
                z-index: 5;
                /* iOS Safari fix */
                -webkit-transform: translateZ(0);
                transform: translateZ(0);
            }
            
            .ready-message .play-icon {
                width: 80px;
                height: 80px;
                margin: 0 auto 20px;
                cursor: pointer;
                transition: all 0.3s ease;
                /* iOS Safari fix */
                -webkit-tap-highlight-color: transparent;
                -webkit-user-select: none;
                user-select: none;
                position: relative;
                border-radius: 50%;
                background: rgba(255, 140, 0, 0.1);
                border: 3px solid #FF8C00;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 0 20px rgba(255, 140, 0, 0.3);
            }

            .ready-message .play-icon:hover {
                transform: scale(1.1);
                box-shadow: 0 0 30px rgba(255, 165, 0, 0.5);
                border-color: #FFA500;
            }

            .ready-message .play-icon:active {
                transform: scale(0.95);
            }

            .play-triangle {
                width: 0;
                height: 0;
                border-left: 36px solid #FF8C00;
                border-top: 24px solid transparent;
                border-bottom: 24px solid transparent;
                margin-left: 10px;
                transition: border-left-color 0.3s ease;
            }

            .ready-message .play-icon:hover .play-triangle {
                border-left-color: #FFA500;
            }

            .ready-message .play-icon:hover {
                color: #FFA500;
                transform: scale(1.1);
                text-shadow: 0 0 30px rgba(255, 165, 0, 0.8);
            }

            .ready-message .play-icon:active {
                transform: scale(0.95);
            }

            .ready-message .message-text {
                font-size: 18px;
                font-weight: 500;
                text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            }

            .ready-message .message-subtext {
                font-size: 14px;
                opacity: 0.8;
                margin-top: 10px;
                text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            /* iOS Safari specific fixes */
            @supports (-webkit-touch-callout: none) {
                #video-container {
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
                
                .poster-background,
                #video,
                .loading-container,
                .ready-message {
                    -webkit-backface-visibility: hidden;
                    backface-visibility: hidden;
                }
            }
        `;
        
        document.head.appendChild(style);
    }

    createPlayerStructure() {
        this.container.innerHTML = `
                    <div class="poster-background" id="poster"></div>
                    <video id="video" playsinline webkit-playsinline></video>
                    <div id="loading" class="loading-container">
                        <div class="loading-spinner"></div>
                        <div class="loading-text">正在加载视频...</div>
                        <div class="loading-subtext">智能检测最佳线路中</div>
                        <button class="retry-button">
                            重新加载
                        </button>
                    </div>
                    <div id="ready" class="ready-message">
                        <div class="play-icon">
                            <div class="play-triangle"></div>
                        </div>
                        <div class="message-text">视频已准备就绪</div>
                        <div class="message-subtext">点击播放按钮开始观看 <span id="timeused"></span></div>
                    </div>
        `;
    }

    bindEvents() {
        // 绑定重试按钮事件
        this.retryButton.addEventListener('click', () => {
            location.reload(); // 刷新当前页面
        });

        // 绑定播放按钮事件
        const playIcon = this.ready.querySelector('.play-icon');
        playIcon.addEventListener('click', () => this.startPlayback());
        
        // 调整容器高度为视频实际高度的函数
        const adjustVideoHeight = () => {
            const videoWidth = this.video.videoWidth;
            const videoHeight = this.video.videoHeight;
            
            if (videoWidth && videoHeight) {
                const aspectRatio = videoHeight / videoWidth;
                const containerWidth = this.container.offsetWidth;
                const calculatedHeight = Math.min(containerWidth * aspectRatio, 640);
                
                // 获取上级容器的max-height
                const parentContainer = this.container.parentElement;
                if (parentContainer) {
                    const parentMaxHeight = window.getComputedStyle(parentContainer).maxHeight;
                    
                    // 如果上级容器设置了max-height且不是none
                    if (parentMaxHeight && parentMaxHeight !== 'none') {
                        const maxHeightValue = parseFloat(parentMaxHeight);
                        
                        // 如果计算的高度超过上级容器的max-height,则限制为max-height
                        if (calculatedHeight > maxHeightValue && maxHeightValue > 0) {
                            console.log(`⚠️ 视频高度${calculatedHeight}px超过上级容器max-height ${maxHeightValue}px, 限制为max-height`);
                            calculatedHeight = maxHeightValue;
                        }
                    }
                }
                
                console.log(`📐 视频尺寸: ${videoWidth}x${videoHeight}, 调整容器高度为: ${calculatedHeight}px`);
                
                this.container.style.height = `${calculatedHeight}px`;
                this.container.style.maxHeight = 'none';
            }
        };
        
        // 监听多个事件以确保iOS也能正确调整高度
        // this.video.addEventListener('loadedmetadata', adjustVideoHeight);
        // this.video.addEventListener('loadeddata', adjustVideoHeight);
        // this.video.addEventListener('canplay', adjustVideoHeight);
        this.video.addEventListener('playing', adjustVideoHeight);
        
        // 页面卸载时清理资源
        window.addEventListener('beforeunload', () => this.destroy());
    }

    setupPoster() {
        if (this.posterImageUrl) {
            console.log('🎨 设置海报背景图片:', this.posterImageUrl);
            this.poster.style.backgroundImage = `url('${this.posterImageUrl}')`;
            
            // 加载海报图片并调整容器高度
            const img = new Image();
            img.onload = () => {
                const aspectRatio = img.height / img.width;
                const containerWidth = this.container.offsetWidth;
                const calculatedHeight = Math.min(containerWidth * aspectRatio, 640);
                
                // 获取上级容器的max-height
                const parentContainer = this.container.parentElement;
                if (parentContainer) {
                    const parentMaxHeight = window.getComputedStyle(parentContainer).maxHeight;
                    
                    // 如果上级容器设置了max-height且不是none
                    if (parentMaxHeight && parentMaxHeight !== 'none') {
                        const maxHeightValue = parseFloat(parentMaxHeight);
                        
                        // 如果计算的高度超过上级容器的max-height,则限制为max-height
                        if (calculatedHeight > maxHeightValue && maxHeightValue > 0) {
                            console.log(`⚠️ 海报高度${calculatedHeight}px超过上级容器max-height ${maxHeightValue}px, 限制为max-height`);
                            calculatedHeight = maxHeightValue;
                        }
                    }
                }
                
                console.log(`🖼️ 海报尺寸: ${img.width}x${img.height}, 调整容器高度为: ${calculatedHeight}px`);
                
                this.container.style.height = `${calculatedHeight}px`;
                this.container.style.maxHeight = `${calculatedHeight}px`;
            };
            img.src = this.posterImageUrl;
        }
    }

    showPoster() {
        console.log('🖼️ 显示海报背景');
        this.poster.style.display = 'block';
        this.poster.classList.remove('hidden');
        this.video.classList.remove('show');
    }

    hidePoster() {
        console.log('🖼️ 隐藏海报背景');
        this.poster.classList.add('hidden');
        this.video.classList.add('show');
        setTimeout(() => {
            this.poster.style.display = 'none';
        }, 500);
    }

    showLoadingError(message, subtitle = '') {
        console.error('❌ 加载失败:', message, subtitle ? `(${subtitle})` : '');
        this.loading.classList.add('error');
        this.loadingText.classList.add('error');
        this.loadingText.innerHTML = `${message}`;
        this.loadingSubtext.textContent = subtitle || '请稍后重试';
        this.retryButton.classList.add('show');
    }

    resetLoadingState() {
        console.log('🔄 重置加载状态');
        this.loading.classList.remove('error');
        this.loadingText.classList.remove('error');
        this.loadingText.textContent = '正在加载视频...';
        this.loadingSubtext.textContent = '智能检测最佳线路中';
        this.retryButton.classList.remove('show');
        this.isReady = false;
        this.isPlaying = false;
        this.showPoster();
    }

    async fetchM3u8WithTimeout(url, timeout = this.apiTimeout) {
        const maxRetries = 3;
        let lastError;
        
        for (let attempt = 1; attempt <= maxRetries; attempt++) {
            console.log(`🌐 发起API请求: ${url} (超时: ${timeout}ms) - 第${attempt}次尝试`);
            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), timeout);
            
            try {
                const startTime = performance.now();
                const response = await fetch(url, {
                    signal: controller.signal,
                    method: 'GET',
                    mode: 'cors'
                });
                
                clearTimeout(timeoutId);
                const duration = Math.round(performance.now() - startTime);
                
                if (!response.ok) {
                    const errorMsg = `HTTP ${response.status}: ${response.statusText}`;
                    console.error(`❌ API请求失败 (${duration}ms):`, errorMsg);
                    throw new Error(errorMsg);
                }
                
                const data = await response.json();
                console.log(`✅ API请求成功 (${duration}ms):`, data);
                return data;
            } catch (error) {
                clearTimeout(timeoutId);
                lastError = error;
                
                if (error.name === 'AbortError') {
                    console.error(`⏰ API请求超时: ${url} ${timeout}ms - 第${attempt}次尝试`);
                    lastError = new Error('请求超时');
                } else {
                    console.error(`❌ API请求错误: ${url} - 第${attempt}次尝试`, error);
                }
                
                // 如果不是最后一次尝试，继续重试
                if (attempt < maxRetries) {
                    console.log(`🔄 准备重试... (${attempt}/${maxRetries})`);
                    continue;
                }
            }
        }
        
        // 所有重试都失败后，抛出最后一个错误
        throw lastError;
    }


    async downloadTestFile(testFileUrl, timeoutOne = this.speedTestTimeoutOne, timeoutAll = this.speedTestTimeoutAll, requiredSuccessCount=this.requiredSuccessCount) {
        console.log(`🏎️ 开始测速: ${testFileUrl} (单次超时: ${timeoutOne}ms, 总超时: ${timeoutAll}ms)`);
        const controller = new AbortController();
        const startTime = performance.now();
        let successCount = 0;

        const all_timeoutId = setTimeout(() => controller.abort(), timeoutAll);
        while (successCount < requiredSuccessCount) {
            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), timeoutOne);
            try {
                const response = await fetch(testFileUrl + '?' + this.generateRandomString(10), {
                    signal: controller.signal,
                    method: 'GET'
                });
                clearTimeout(timeoutId);
                if (!response.ok) {
                    const errorMsg = `测速文件访问失败: ${response.status}`;
                    console.error(`❌ 测速失败:`, errorMsg);
                    continue;
                }
                successCount++;
            } finally {
                clearTimeout(timeoutId);
            }
        }
        clearTimeout(all_timeoutId);

        const responseTime = performance.now() - startTime;
        console.log(`⚡ 测速完成: ${testFileUrl} ${Math.round(responseTime)}ms`);
        return { success: true, responseTime };
    }

    async testSource(apiConfig, index) {
        try {
            const data = await this.fetchM3u8WithTimeout(apiConfig.url);
            const testResult = await this.downloadTestFile(data.testFile);
            
            const result = {
                success: true,
                m3u8Url: data.m3u8Url,
                responseTime: testResult.responseTime,
                apiIndex: index,
                apiName: apiConfig.name
            };
            
            return result;
        } catch (error) {
            const result = {
                success: false,
                error: error.message,
                apiIndex: index,
                apiName: apiConfig.name
            };
            
            console.error(`❌ 线路 ${index + 1} 测试失败:`, result);
            return result;
        }
    }

    async loadVideo(config) {
        console.log('🚀 开始加载视频');
        console.log('⚙️ 配置参数:', config);
        
        // 设置配置参数
        this.posterImageUrl = config.posterImageUrl;
        this.apiUrls = config.apiUrls;
        this.apiTimeout = config.apiTimeout || 3000;
        this.speedTestTimeoutOne = config.speedTestTimeoutOne || 3000;
        this.speedTestTimeoutAll = config.speedTestTimeoutAll || 8000;
        this.requiredSuccessCount = config.requiredSuccessCount || 2;
        
        console.log('📺 配置的线路:', this.apiUrls);
        console.log('🖼️ 海报图片:', this.posterImageUrl);
        console.log('⏱️ API超时:', this.apiTimeout + 'ms');
        console.log('🏎️ 测速超时:', this.speedTestTimeoutAll + 'ms');
        console.log('🏎️ 每个文件需要生成下载次数:', this.requiredSuccessCount + '次');
        
        this.setupPoster();
        this.showPoster();
        
        this.startTime = performance.now();
        this.resetLoadingState();
        this.loading.style.display = 'flex';
        this.ready.style.display = 'none';
        
        try {
            console.log(`🔍 开始并行测试 ${this.apiUrls.length} 个线路`);
            
            const promises = this.apiUrls.map((apiConfig, index) => 
                this.testSource(apiConfig, index)
            );
            
            let completedCount = 0;
            const results = [];
            
            for (const promise of promises) {
                promise.then(() => {
                    completedCount++;
                });
            }
            
            const allResults = await Promise.allSettled(promises);
            console.log('📋 所有线路测试完成:', allResults);
            
            allResults.forEach((result, index) => {
                if (result.status === 'fulfilled' && result.value.success) {
                    results.push(result.value);
                }
            });
            
            console.log(`📊 成功的线路数量: ${results.length}/${this.apiUrls.length}`);
            console.log(`📈 成功率: ${((results.length / this.apiUrls.length) * 100).toFixed(1)}%`);
            
            if (results.length > 0) {
                results.sort((a, b) => a.responseTime - b.responseTime);
                const bestSource = results[0];
                
                console.log('🏆 选择最佳线路:', bestSource);
                console.log(`⚡ 最佳线路响应时间: ${Math.round(bestSource.responseTime)}ms`);
                
                this.loadingText.textContent = '正在准备播放器...';
                this.loadingSubtext.textContent = `使用最佳线路: ${bestSource.apiName}`;
                
                await this.prepareVideo(bestSource.m3u8Url);
                this.loading.style.display = 'none';
                this.ready.style.display = 'flex';
                
                const totalLoadTime = ((performance.now() - this.startTime) / 1000).toFixed(2);
                console.log(`🎉 视频准备完成! 总耗时: ${totalLoadTime}秒`);
                // this.container.querySelector('#timeused').textContent = "(用时"+totalLoadTime+"秒)";
                
                console.log('📊 详细统计信息:');
                console.log(`   - 总准备时间: ${totalLoadTime}秒`);
                console.log(`   - 成功线路: ${results.length}/${this.apiUrls.length}`);
                console.log(`   - 最佳线路: ${bestSource.apiName}`);
                console.log(`   - 最佳响应时间: ${Math.round(bestSource.responseTime)}ms`);
                
                console.log('🔍 各线路详细测试结果:');
                results.forEach((result, index) => {
                    console.log(`   ${index + 1}. ${result.apiName}: ${Math.round(result.responseTime)}ms`);
                });
                
            } else {
                console.error('💥 所有线路测试失败');
                this.showLoadingError('加载失败', '请重新加载或者观看其他视频');
            }
        } catch (error) {
            console.error('💥 加载视频时发生严重错误:', error);
            this.showLoadingError('系统错误', error.message || '未知错误');
        }
    }

    async prepareVideo(m3u8Url) {
        console.log('🎬 准备视频播放器:', m3u8Url);
        
        return new Promise((resolve, reject) => {
            if (Hls.isSupported()) {
                console.log('✅ HLS.js 支持检测通过');
                
                if (this.hls) {
                    console.log('🔄 销毁旧的HLS实例');
                    this.hls.destroy();
                }
                
                this.hls = new Hls({
                    enableWorker: true,
                    lowLatencyMode: true,
                    backBufferLength: 90,
                    autoStartLoad: true
                });
                
                console.log('📼 加载HLS源并绑定到视频元素');
                this.hls.loadSource(m3u8Url);
                this.hls.attachMedia(this.video);
                
                this.hls.on(Hls.Events.MANIFEST_PARSED, () => {
                    console.log('📄 HLS清单解析完成，视频已准备就绪');
                    this.isReady = true;
                    resolve();
                });
                
                this.hls.on(Hls.Events.ERROR, (event, data) => {
                    console.error('💥 HLS错误:', data);
                    if (data.fatal) {
                        console.error('🚨 致命HLS错误');
                        reject(new Error('HLS准备错误: ' + (data.details || '未知错误')));
                    }
                });
            } else if (this.video.canPlayType('application/vnd.apple.mpegurl')) {
                console.log('🍎 使用Safari原生HLS支持');
                this.video.src = m3u8Url;
                
                this.video.addEventListener('loadedmetadata', () => {
                    console.log('📊 视频元数据加载完成，已准备就绪');
                    this.isReady = true;
                    resolve();
                }, { once: true });
                
                this.video.addEventListener('error', () => {
                    const error = new Error('视频准备错误: 媒体文件无法加载');
                    console.error('❌ 视频元素错误:', error);
                    reject(error);
                }, { once: true });
            } else {
                const error = new Error('浏览器不支持HLS播放');
                console.error('❌ 浏览器兼容性错误:', error);
                reject(error);
            }
        });
    }

    startPlayback() {
        if (!this.isReady) {
            console.warn('⚠️ 视频尚未准备就绪');
            return;
        }
        
        if (this.isPlaying) {
            console.warn('⚠️ 视频已在播放中');
            return;
        }
        
        console.log('▶️ 开始播放视频');
        this.ready.style.display = 'none';
        this.hidePoster();
        
        this.video.controls = true;
        
        this.video.play()
            .then(() => {
                console.log('✅ 视频播放成功');
                this.isPlaying = true;
                
                // iOS Safari特殊处理: 播放后再次尝试调整高度
                setTimeout(() => {
                    const videoWidth = this.video.videoWidth;
                    const videoHeight = this.video.videoHeight;
                    
                    if (videoWidth && videoHeight) {
                        const aspectRatio = videoHeight / videoWidth;
                        const containerWidth = this.container.offsetWidth;
                        const calculatedHeight = Math.min(containerWidth * aspectRatio, 640);
                        
                        // 获取上级容器的max-height
                        const parentContainer = this.container.parentElement;
                        if (parentContainer) {
                            const parentMaxHeight = window.getComputedStyle(parentContainer).maxHeight;
                            
                            // 如果上级容器设置了max-height且不是none
                            if (parentMaxHeight && parentMaxHeight !== 'none') {
                                const maxHeightValue = parseFloat(parentMaxHeight);
                                
                                // 如果计算的高度超过上级容器的max-height,则限制为max-height
                                if (calculatedHeight > maxHeightValue && maxHeightValue > 0) {
                                    console.log(`⚠️ iOS调整: 视频高度${calculatedHeight}px超过上级容器max-height ${maxHeightValue}px, 限制为max-height`);
                                    calculatedHeight = maxHeightValue;
                                }
                            }
                        }
                        
                        console.log(`📱 iOS补充调整 - 视频尺寸: ${videoWidth}x${videoHeight}, 容器高度: ${calculatedHeight}px`);
                        
                        this.container.style.height = `${calculatedHeight}px`;
                        this.container.style.maxHeight = 'none';
                    }
                }, 100);
            })
            .catch(error => {
                console.error('❌ 视频播放失败:', error);
                this.ready.style.display = 'flex';
                this.showPoster();
                this.video.controls = false;
            });
    }

    generateRandomString(length) {
        const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        let result = '';
        for (let i = 0; length > i; i++) {
            const randomIndex = Math.floor(Math.random() * characters.length);
            result += characters[randomIndex];
        }
        return result;
    }

    destroy() {
        if (this.hls) {
            console.log('🧹 清理HLS资源');
            this.hls.destroy();
            this.hls = null;
        }
        this.isReady = false;
        this.isPlaying = false;
    }
}