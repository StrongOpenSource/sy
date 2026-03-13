// Modern Video Website - Enhanced JavaScript

// Device Detection
(function() {
    const ua = navigator.userAgent.toLowerCase();
    const isMobile = /phone|pad|pod|iphone|ipod|ios|ipad|android|mobile|blackberry|iemobile|mqqbrowser|juc|fennec|wosbrowser|browserng|webos|symbian/i.test(ua);
    const isIOS = /ios|ipad|iphone/i.test(ua);
    const isAndroid = /android/i.test(ua);
    
    // Add device classes to body
    document.documentElement.classList.add(isMobile ? 'is-mobile' : 'is-desktop');
    if (isIOS) document.documentElement.classList.add('is-ios');
    if (isAndroid) document.documentElement.classList.add('is-android');
    
    // Store device info globally
    window.deviceInfo = {
        isMobile,
        isDesktop: !isMobile,
        isIOS,
        isAndroid
    };
})();

// Enhanced Copy Function with modern Clipboard API
function copyText(text) {
    if (!text) {
        console.error('No text provided to copy');
        return;
    }

    if (navigator.clipboard && window.isSecureContext) {
        // Modern Clipboard API
        navigator.clipboard.writeText(text)
            .then(() => {
                showNotification('复制成功！', 'success');
            })
            .catch(err => {
                console.error('Clipboard API failed:', err);
                fallbackCopy(text);
            });
    } else {
        // Fallback for older browsers
        fallbackCopy(text);
    }
}

// Fallback copy method
function fallbackCopy(text) {
    const textarea = document.createElement('textarea');
    textarea.value = text;
    textarea.style.position = 'fixed';
    textarea.style.opacity = '0';
    document.body.appendChild(textarea);
    textarea.select();
    
    try {
        document.execCommand('copy');
        showNotification('复制成功！', 'success');
    } catch (err) {
        console.error('Fallback copy failed:', err);
        showNotification('复制失败，请手动复制', 'error');
    } finally {
        document.body.removeChild(textarea);
    }
}

// Enhanced notification system
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existing = document.querySelector('.custom-notification');
    if (existing) existing.remove();
    
    const notification = document.createElement('div');
    notification.className = `custom-notification notification-${type}`;
    notification.textContent = message;
    
    // Styles
    Object.assign(notification.style, {
        position: 'fixed',
        top: '20px',
        right: '20px',
        padding: '16px 24px',
        background: type === 'success' ? '#10b981' : type === 'error' ? '#ef4444' : '#3b82f6',
        color: 'white',
        borderRadius: '12px',
        boxShadow: '0 10px 40px rgba(0, 0, 0, 0.3)',
        zIndex: '10000',
        fontWeight: '600',
        fontSize: '14px',
        animation: 'slideInRight 0.3s ease',
        maxWidth: '300px',
        wordWrap: 'break-word'
    });
    
    document.body.appendChild(notification);
    
    // Auto remove after 3 seconds
    setTimeout(() => {
        notification.style.animation = 'slideOutRight 0.3s ease';
        setTimeout(() => notification.remove(), 300);
    }, 3000);
}

// Add notification animations
if (!document.getElementById('notification-styles')) {
    const style = document.createElement('style');
    style.id = 'notification-styles';
    style.textContent = `
        @keyframes slideInRight {
            from {
                transform: translateX(400px);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes slideOutRight {
            from {
                transform: translateX(0);
                opacity: 1;
            }
            to {
                transform: translateX(400px);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
}

// Copy HTML Link function
function copyHtmlLink() {
    copyText(window.location.href);
}

// Copy text with element ID (legacy support)
function copyText2(str) {
    copyText(str);
}

// Enhanced Search Validation
function qrsearch() {
    const form = document.getElementById('search');
    if (!form) return true;
    
    const input = form.querySelector('input[name="content"]');
    if (!input) return true;
    
    const value = input.value.trim();
    
    if (!value) {
        showNotification('请输入搜索关键字', 'error');
        input.focus();
        return false;
    }
    
    if (value.length < 2) {
        showNotification('搜索关键字至少需要2个字符', 'error');
        input.focus();
        return false;
    }
    
    return true;
}

// Smooth Scroll Enhancement
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href === '#' || href === 'javascript:void(0);' || href === 'javascript:;') return;
            
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add loading animation to images
    const images = document.querySelectorAll('img[data-original]');
    images.forEach(img => {
        img.addEventListener('load', function() {
            this.style.animation = 'fadeIn 0.5s ease';
        });
    });
    
    // Initialize lazy load if jQuery is available
    if (typeof jQuery !== 'undefined' && jQuery.fn.lazyload) {
        jQuery("img.loadi, img.lazy").lazyload({
            effect: "fadeIn",
            threshold: 200
        });
    }
    
    // Add intersection observer for animations
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });
        
        document.querySelectorAll('.thumbnail2-group li').forEach(item => {
            observer.observe(item);
        });
    }
});

// Copy magnet/torrent functions
function copy_m() {
    if (typeof j !== 'undefined' && j.tm) {
        copyText(j.tm);
    } else {
        const magnetText = document.getElementById('torrent_magnet_text');
        if (magnetText) {
            copyText(magnetText.innerText);
        } else {
            showNotification('无法找到磁力链接', 'error');
        }
    }
}

function open_t() {
    if (typeof j !== 'undefined' && j.tt) {
        window.open(j.tt, '_blank');
    } else {
        showNotification('种子链接不可用', 'error');
    }
}

function open_m() {
    if (typeof j !== 'undefined' && j.tm) {
        window.open(j.tm, '_blank');
    } else {
        showNotification('磁力链接不可用', 'error');
    }
}

// Enhanced error handling
window.addEventListener('error', function(e) {
    console.error('Global error:', e.error);
});

// Base64 decode helper function
function d(str) {
    try {
        return decodeURIComponent(atob(str));
    } catch (e) {
        console.error('Base64 decode error:', e);
        return str;
    }
}

// Prevent default context menu on images (optional)
document.addEventListener('contextmenu', function(e) {
    if (e.target.tagName === 'IMG' && e.target.classList.contains('loadi')) {
        // Allow context menu but could be prevented if needed
        // e.preventDefault();
    }
});

// Add fade in animation style
if (!document.getElementById('fade-in-style')) {
    const style = document.createElement('style');
    style.id = 'fade-in-style';
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    `;
    document.head.appendChild(style);
}

// Export functions for global use
window.copyText = copyText;
window.copyHtmlLink = copyHtmlLink;
window.copyText2 = copyText2;
window.qrsearch = qrsearch;
window.showNotification = showNotification;
window.copy_m = copy_m;
window.open_t = open_t;
window.open_m = open_m;
window.d = d;

console.log('Modern video website scripts loaded successfully');
