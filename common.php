<?php
if(!defined("INC")){
    exit("Access Denied");
}

header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Content-type: text/html; charset=utf-8");

############################################################ 自定义函数
require_once dirname(__FILE__) . '/function.php';

############################################################ 时间
ini_set('date.timezone','Asia/Shanghai');
$start_time = micro_time();

############################################################ 私有运行模式
if(file_exists(dirname(__FILE__)."/@config_private.txt")){
    $private_mode = true;
    error_reporting(E_ALL);
    //if(!defined('ADMIN_INC')) file_put_contents('tmp/test_speed_log.txt', '');
}else{
    $private_mode = false;
    error_reporting(0);
}
//if($private_mode) test_speed_log('a');

############################################################ API相关
$api_domain = 'apiv3.sycms.cc';
$channel_name = 'seo';
$channel_key = 'XFsqqJyUCfvMe6c3wFfZ9VxFyk8G2FQz';

############################################################ 路径相关1
$base_dir = dirname(__FILE__) . "/";
$script_name = @$_SERVER['SCRIPT_NAME'];        # /index.php

############################################################ 出于性能考虑，在缓存代码之前单独加载一下必须的配置

##### 数据目录
$cms_config_data_location_file_path = "{$base_dir}/config/cms_config_data_location.php";
$self_data_dir = "{$base_dir}/data/";
$self_tmp_dir = "{$base_dir}/tmp/";
$system_data_dir = "/tmp/seyoucms/{$channel_name}/data/";
$system_tmp_dir = "/tmp/seyoucms/{$channel_name}/tmp/";
if(file_exists($cms_config_data_location_file_path) && file_get_contents_x($cms_config_data_location_file_path) == 'site'){
    $common_data_dir = $self_data_dir;
    $common_tmp_dir = $self_tmp_dir;
}else{
    $common_data_dir = $system_data_dir;
    $common_tmp_dir = $system_tmp_dir;
}

##### 数据时间
$data_timestamp_file = "{$common_data_dir}/timestamp.txt";
if(file_exists($data_timestamp_file) && filesize($data_timestamp_file) == 10){
    $data_timestamp = file_get_contents($data_timestamp_file);
}else{
    $data_timestamp = 0;
}

##### 是否开启缓存
$cache_config_file_path = "{$base_dir}/config/cms_config_page_cache.php";
$cache_config_file_content = file_get_contents_x($cache_config_file_path);

############################################################ 处理缓存 列表页和内容页
if(
    $cache_config_file_content != 'off'
    //&& !$private_mode
){
    // 缓存路径样式
    // /html/index.html.gz
    // /html/list/92/92452469-1.html.gz
    // /html/video/19/194816282.html.gz
    // /html/torrent/64/64932673096914269.html.gz

    if(in_array($script_name, array('/list.php','/video.php','/torrent.php'))){
        if($script_name == '/list.php'){
            $cache_valid_time = 3600;
            $cache_sub_dir = $raw_class_id;
            $cache_file_path = $base_dir . "/html/list/{$raw_class_id}/{$this_page_no}.html.gz";
        }

        if($script_name == '/video.php'){
            $cache_valid_time = 3600*24;
            $cache_sub_dir = substr($raw_video_id, 0, 2);
            $cache_file_path = $base_dir . "/html/video/{$cache_sub_dir}/{$raw_video_id}.html.gz";
        }

        if($script_name == '/torrent.php'){
            $cache_valid_time = 3600*24;
            $cache_sub_dir = substr($raw_torrent_id, 0, 2);
            $cache_file_path = $base_dir . "/html/torrent/{$cache_sub_dir}/{$raw_torrent_id}.html.gz";
        }
        exec_cache_start($cache_file_path, $cache_valid_time);
    }
}

############################################################ 路径相关2
$script_path = @$_SERVER['SCRIPT_FILENAME'];    # /home/www/www.xxx.com/index.php
$script_filename = basename($script_path);      # index.php

$config_dir = "{$base_dir}/config/";
$cache_dir = "{$base_dir}/cache/";
$domain_dir = "{$base_dir}/domain/";
$html_dir =  "{$base_dir}/html/";

############################################################ 域名和HTTP请求相关
$http_host = @$_SERVER["HTTP_HOST"];
$current_domain = $server_name = get_current_domain();
$current_top_domain = get_top_domain($current_domain);
$user_agent = @$_SERVER['HTTP_USER_AGENT'];

############################################################ 加载配置
require_once $base_dir . '/module_load_config.php';

//var_dump($cms_config_ban_keywords);

##### 设置一些必要的缺省变量
$default_config_var_array = array(
    array(
        // 网站名称
        'var_name' => 'cms_config_site_name',
        'var_val' => 'SeyouCMS',
    ),
    array(
        // 模板目录
        'var_name' => 'cms_config_tpl_dir',
        'var_val' => 'tpl001',
    ),
    array(
        // 数据存放位置
        'var_name' => 'cms_config_data_location',
        'var_val' => 'system',
    ),
    array(
        // 去除切片广告片段
        'var_name' => 'cms_config_remove_m3u8_ad',
        'var_val' => 'on',
    ),
    array(
        // 转码网页文字
        'var_name' => 'cms_config_encode_word',
        'var_val' => 'on',
    ),
    array(
        // id偏移
        'var_name' => 'cms_config_id_offset',
        'var_val' => 'on',
    ),
    array(
        // 简繁转换
        'var_name' => 'cms_config_trans_on',
        'var_val' => 'off',
    ),
    array(
        // 伪静态
        'var_name' => 'cms_config_rewrite_on',
        'var_val' => 'off',
    ),
    array(
        // 列表页伪静态目录名称
        'var_name' => 'cms_config_rewrite_dirname_list',
        'var_val' => 'list',
    ),
    array(
        // 视频页伪静态目录名称
        'var_name' => 'cms_config_rewrite_dirname_video',
        'var_val' => 'video',
    ),
    array(
        // 种子页伪静态目录名称
        'var_name' => 'cms_config_rewrite_dirname_torrent',
        'var_val' => 'torrent',
    ),
    array(
        // sitemap
        'var_name' => 'cms_config_sitemap_on',
        'var_val' => 'off',
    ),

    array(
        // 搜索结果数量限制
        'var_name' => 'cms_config_search_result_limit',
        'var_val' => '1000',
    ),
    array(
        // 是否启用缓存
        'var_name' => 'cms_config_page_cache',
        'var_val' => 'on',
    ),
    array(
        // 负载保护
        'var_name' => 'cms_config_load_protect',
        'var_val' => '10',
    ),
    array(
        // 限制搜索频率的负载阀值
        'var_name' => 'cms_config_limit_search_load',
        'var_val' => '4',
    ),
    array(
        // 达到阀值后限制的搜索时间间隔，单位秒
        'var_name' => 'cms_config_limit_search_rate',
        'var_val' => '10',
    ),
    array(
        // 是否启用域名池跳转
        'var_name' => 'cms_config_domain_pool_jump',
        'var_val' => 'off',
    ),
    array(
        // 启用的域名池域名数量
        'var_name' => 'cms_config_domain_pool_active_count',
        'var_val' => '3',
    ),
    array(
        // 做跳转用的JS文件名
        'var_name' => 'cms_config_domain_pool_jump_js_file',
        'var_val' => 'js.php',
    ),
    array(
        // 是否打乱torrent内容的顺序
        'var_name' => 'api_config_shuffle_torrent_list',
        'var_val' => 'off',
    ),
    array(
        // 是否打乱torrent内容的顺序
        'var_name' => 'cms_config_task_triggering_method',
        'var_val' => 'user',
    ),
);

foreach ($default_config_var_array as $default_config_var_item) {
    $tmp_this_var_name = $default_config_var_item['var_name'];
    $tmp_this_var_val = $default_config_var_item['var_val'];
    if(!isset($$tmp_this_var_name)){
        $$tmp_this_var_name = $tmp_this_var_val;
    }
}

############################################################ 处理域名跳转
if(!defined("ADMIN_INC") && file_exists("$base_dir/module_domain_jump.php")){
    require_once "$base_dir/module_domain_jump.php";
}

############################################################ 处理缓存 首页
if(
    $cache_config_file_content != 'off'
){
    if($script_name == '/index.php'){
        $cache_valid_time = 60;
        $cache_file_path = $base_dir . "/html/index.html";
        exec_cache_start($cache_file_path, $cache_valid_time);
    }
}

############################################################ 第一次运行，检查目录权限和需要的PHP模块
if(empty($data_timestamp) && $script_name != '/do.php'){
    $create_dir_error_msg = '';
    foreach (array($common_data_dir, "$common_tmp_dir/download") as $tmp_dir_item) {
        if(is_file($tmp_dir_item)){
            @unlink($tmp_dir_item);
        }
        if(!file_exists($tmp_dir_item)){
            @mkdir($tmp_dir_item, 0755, true);
            if(!file_exists($tmp_dir_item) && !is_dir($tmp_dir_item)){
                $create_dir_error_msg .= "目录{$tmp_dir_item}创建失败<br>";
            }
        }
    }

    if(!empty($create_dir_error_msg)){
        show_msg(2, '', $create_dir_error_msg.'请检查文件权限。');
        //exit($create_dir_error_msg);
    }

    // 正常情况下这里是程序刚部署，检查一下目录权限
    $dirs_need_write_permission_array = array('config','cache','data','domain','html','tmp');
    $check_permission_output_html = '';
    $check_permission_found_error = false;
    $check_permission_error_msg = '';
    $check_env_error_msg = '';
    foreach ($dirs_need_write_permission_array as $dir_check_item) {
        @mkdir("{$base_dir}/{$dir_check_item}");
        if(is_writable("{$base_dir}/{$dir_check_item}")){
            $check_permission_output_html .= "/{$dir_check_item}/ ... <font color='green'><b>√</b></font><br>";
        }else{
            $check_permission_output_html .= "/{$dir_check_item}/ ... <font color='red'><b>×</b></font><br>";
            $check_permission_found_error = true;
        }
    }

    if($check_permission_found_error){
        $check_permission_error_msg = <<<EOF
以下目录需要写入权限，否则程序无法正常运行:<br>
{$check_permission_output_html}<br><br>
EOF;
    }

    $extension_required_array = array('SQLite3', 'BCMath');
    $extension_not_installed_array = array();
    foreach ($extension_required_array as $extension_required_item) {
        if (!extension_loaded($extension_required_item)) {
            $extension_not_installed_array[] = $extension_required_item;
        }        
    }
    if(!empty($extension_not_installed_array)){
        $extension_not_installed_str = implode(', ', $extension_not_installed_array);
        $check_env_error_msg .= <<<EOF
以下PHP模块未安装:<br>
{$extension_not_installed_str}<br>
EOF;
    }

    if($check_permission_found_error || !empty($check_env_error_msg)){
        show_msg(2, '', $check_permission_error_msg.$check_env_error_msg);
        exit();
    }
}

############################################################ 数据库位置
$video_db_path = $common_data_dir . "/video.db@{$data_timestamp}";
$torrent_db_path = $common_data_dir . "/torrent.db@{$data_timestamp}";
// 再次确认下，有可能data目录文件被删除
if(!file_exists($video_db_path) || !file_exists($torrent_db_path)){
    $data_timestamp = 0;
}

############################################################ 计划内的，周期性的，加载后台运行的程序
if(
        $cms_config_task_triggering_method == 'user'
    &&
        stripos($user_agent, 'spider') === false
    && 
        $script_name == '/index.php'
){
    // 更新网站数据。 数据时间超过40钟分后，每隔20分钟尝试更新一次。
    $update_last_time_file = "{$common_tmp_dir}/update_last_time.file";
    if(
        (
            time() - $data_timestamp > 60*40
                && 
            time() - @filemtime($update_last_time_file) > 60*20
        )
            || $data_timestamp == 0
    ){
        load_cron_php('/update.php');
    }

    // 执行cron.php。 主要是清理缓存。 一小时执行一次。 并且要在update.php执行5分钟以后。
    $cron_last_time_file = "{$self_tmp_dir}/cron_last_run_start_time.txt";
    if(
            time() - @filemtime($update_last_time_file) > 60*5
        &&
            (
                !file_exists($cron_last_time_file) || time() - filemtime($cron_last_time_file) > 60*60
            )
    ){
        load_cron_php('/cron.php');
    }
}elseif(!defined("ADMIN_INC") && $data_timestamp == 0 && !in_array($script_name, array('/cron.php','/update.php', '/do.php'))){
    load_cron_php('/update.php');
}

############################################################ 访客IP
if(php_sapi_name() != 'cli'){
    if(empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        $client_ip = $_SERVER['REMOTE_ADDR'];
    }else{
        if(stripos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') !== false){
            $tmp_ip_blocks = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
            $client_ip = array_pop($tmp_ip_blocks);
        }else{
            $client_ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
}

############################################################ 判断是PC还是移动
$ua = @$_SERVER['HTTP_USER_AGENT'];
$is_mobile = $is_pc = false;
if(stripos($ua, 'mobile') === FALSE
    &&stripos($ua, 'Android') === FALSE
    &&stripos($ua, 'iphone') === FALSE
    &&stripos($ua, 'ipad') === FALSE
    &&stripos($ua, 'ipod') === FALSE
    &&stripos($ua, 'coolpad') === FALSE
    &&stripos($ua, 'mmp') === FALSE
    &&stripos($ua, 'smartphone') === FALSE
    &&stripos($ua, 'midp') === FALSE
    &&stripos($ua, 'wap') === FALSE
    &&stripos($ua, 'symbian') === FALSE
    &&stripos($ua, 'blackberry') === FALSE
    &&stripos($ua, 'wince') === FALSE){
    $is_pc = true;
}else{
    $is_mobile = true;
}

############################################################ 处理一下程序运行需要的配置

##### 检查模板目录是否存在
if(!file_exists("$base_dir/template/$cms_config_tpl_dir")){
    if(!defined('ADMIN_INC')){
        exit("模板目录 /template/{$cms_config_tpl_dir} 不存在!");
    }else{
        return;
    }
}

##### 计算id位移量
if($cms_config_id_offset == 'off'){
    $url_id_offset = 0;
}elseif($cms_config_id_offset == 'on'){
    // 默认设置为自动位移，并且按网站根目录计算位移量
    $url_id_offset = base_convert(substr(md5($base_dir), 0, 8), 16, 10) % 100000000;
}elseif($cms_config_id_offset == 'fix'){
    $url_id_offset = $cms_config_fix_offset;
}

##### 图片域名
$video_pic_domain = get_item_by_weight(@$api_config_video_pic_domain);
$torrent_pic_domain = get_item_by_weight(@$api_config_torrent_pic_domain);

##### 栏目配置
$video_class_map_array = unserialize(@file_get_contents($common_data_dir."/video_class_map.txt@{$data_timestamp}"));
$torrent_class_map_array = unserialize(@file_get_contents($common_data_dir."/torrent_class_map.txt@{$data_timestamp}"));

##### 首页调用的栏目, video
$video_class_index_lines = file_to_array($common_data_dir."/video_class_index.txt@{$data_timestamp}");
$video_class_index_array = array();
$tmp_site_counter = 0;
foreach ($video_class_index_lines as $class_index_item) {
    $tmp_site_counter ++;
    list($tmp_site_id, $tmp_class_id) = explode(':', $class_index_item);
    $video_class_index_array[$tmp_site_counter] = array(
        'site_id'=>trim($tmp_site_id),
        'class_id'=>trim($tmp_class_id)
    );
}

##### 首页调用的栏目, torrent
$torrent_class_index_lines = file_to_array($common_data_dir."/torrent_class_index.txt@{$data_timestamp}");
$torrent_class_index_array = array();
$tmp_site_counter = 0;
foreach ($torrent_class_index_lines as $class_index_item) {
    $tmp_site_counter ++;
    list($tmp_site_id, $tmp_class_id) = explode(':', $class_index_item);
    $torrent_class_index_array[$tmp_site_counter] = array(
        'site_id'=>trim($tmp_site_id),
        'class_id'=>trim($tmp_class_id)
    );
}

##### 导航调用的栏目, video
$video_class_nav_lines = file_to_array($common_data_dir."/video_class_nav.txt@{$data_timestamp}");
$video_class_nav_array = array();
$tmp_site_counter = 0;
foreach ($video_class_nav_lines as $class_nav_item) {
    $tmp_site_counter ++;
    list($tmp_site_id, $tmp_class_ids) = explode(':', $class_nav_item);
    $tmp_class_ids_array = explode(',', $tmp_class_ids);
    $tmp_ids_array = array();
    foreach ($tmp_class_ids_array as $tmp_class_id_item) {
        $tmp_ids_array[] = trim($tmp_class_id_item);
    }
    $video_class_nav_array[$tmp_site_counter] = array(
        'site_id'=>$tmp_site_id,
        'class_ids'=>$tmp_ids_array
    );
}

##### 导航调用的栏目, video virtual
$video_class_nav_virtual_lines = file_to_array($common_data_dir."/video_class_nav_virtual.txt@{$data_timestamp}");
$video_class_nav_virtual_array = array();
$tmp_site_counter = 0;
foreach ($video_class_nav_virtual_lines as $class_nav_virtual_item) {
    $tmp_site_counter ++;
    list($tmp_site_id, $tmp_class_ids) = explode(':', $class_nav_virtual_item);
    $tmp_class_ids_array = explode(',', $tmp_class_ids);
    $tmp_ids_array = array();
    foreach ($tmp_class_ids_array as $tmp_class_id_item) {
        $tmp_ids_array[] = trim($tmp_class_id_item);
    }
    $video_class_nav_virtual_array[$tmp_site_counter] = array(
        'site_id'=>$tmp_site_id,
        'class_ids'=>$tmp_ids_array
    );
}

##### 导航调用的栏目, torrent
$torrent_class_nav_lines = file_to_array($common_data_dir."/torrent_class_nav.txt@{$data_timestamp}");
$torrent_class_nav_array = array();
$tmp_site_counter = 0;
foreach ($torrent_class_nav_lines as $class_nav_item) {
    $tmp_site_counter ++;
    list($tmp_site_id, $tmp_class_ids) = explode(':', $class_nav_item);
    $tmp_class_ids_array = explode(',', $tmp_class_ids);
    $tmp_ids_array = array();
    foreach ($tmp_class_ids_array as $tmp_class_id_item) {
        $tmp_ids_array[] = trim($tmp_class_id_item);
    }
    $torrent_class_nav_array[$tmp_site_counter] = array(
        'site_id'=>$tmp_site_id,
        'class_ids'=>$tmp_ids_array
    );
}

##### 列表大小
$video_page_size = @${"tpl_config_{$cms_config_tpl_dir}_video_page_size"};
$bt_page_size = @${"tpl_config_{$cms_config_tpl_dir}_bt_page_size"};

##### 广告数据
//$tpl_spec_ad_array = unserialize($tpl_spec_ad_array_serialize);
//$ad_data_array = unserialize($tpl_spec_ad_data_array_serialize);

############################################################ 连接sqlite
if(!in_array(basename($_SERVER["SCRIPT_NAME"]), array('update.php')) && !defined('ADMIN_INC')){
    $sqlite_video_db =  new SQLite3($video_db_path);
    $sqlite_video_db->busyTimeout(30000);

    $sqlite_torrent_db =  new SQLite3($torrent_db_path);
    $sqlite_torrent_db->busyTimeout(30000);
}

define('COMMON_FINISH', true);