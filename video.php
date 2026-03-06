<?php
$error_msg = '';

if(empty($_GET['id'])){
    $error_msg = '内容ID缺失';
}else{
    $raw_video_id = $_GET['id'];
    if(preg_match("#[^\d]#", $raw_video_id)){
        $error_msg = '内容ID不合法';
    }    
}

unset($_GET);
unset($_POST);
unset($_COOKIE);

define('INC', true);
include dirname(__FILE__)."/common.php";

if(!empty($error_msg)){
    js_jump("{$error_msg}。 即将返回首页", '/', 3, '404');
}

if($cms_config_rewrite_on == 'on2'){
    if($_SERVER["REQUEST_URI"] != get_uri('video', $raw_video_id)){
        js_jump();
    }
}

$this_content_type_id = 1;

list($video_source_id, $site_id) = splite_id($raw_video_id, 2);

$res = $sqlite_video_db->querySingle("SELECT * FROM video WHERE source_id={$video_source_id} and site_id={$site_id}", true);
if(empty($res)){
    js_jump("内容ID不存在。 即将返回首页(source_id:{$video_source_id}, site_id:{$site_id}, type_id:{$this_content_type_id})", '/', 3, '404');
}

$this_title = $res['title'];
$this_m3u8 = $res['m3u8'];
$this_class_id = $class_id = $res['class_id'];
$this_site_id = $site_id;
$this_cdn_node = $this_movie_md5 = '';
if(!empty($res['movie_md5'])){
    $this_movie_md5 = $res['movie_md5'];
}
if(!empty($res['cdn_node'])){
$this_cdn_node = $res['cdn_node'];    
}
$this_cover = "{$video_pic_domain}/{$site_id}/".$res['source_id'].".jpg";

$this_class_name = $video_class_map_array[$site_id]['class'][$class_id];

$page_title = $this_title;

$tpl_html = load_tpl('tpl_video.php');

$json_array = array();
$js_tpl_code_array = array();

if(!empty($this_movie_md5) && !empty($this_cdn_node)){
    $node_top_domain = explode('|', $api_config_video_node_top_domain);
    $cdn_node_array = explode('|', $this_cdn_node);
    shuffle($cdn_node_array);
    $cdn_node_url_array = '';
    $index_counter = 0;
    foreach ($cdn_node_array as $cdn_node_item) {
        list($sub_domain, $disk_zone) = explode(':', $cdn_node_item);
        if(count($cdn_node_array) <= 2){
            foreach ($node_top_domain as $this_top_domain) {
                $cdn_node_url_array[] = array('url'=>"https://{$sub_domain}.{$this_top_domain}/api.php?zone=$disk_zone&md5={$this_movie_md5}", 'name'=>$sub_domain);
            }
        }else{
            $index_counter ++;
            $this_top_domain_index = $index_counter % count($node_top_domain);
            $this_top_domain = $node_top_domain[$this_top_domain_index];
            $cdn_node_url_array[] = array('url'=>"https://{$sub_domain}.{$this_top_domain}/api.php?zone=$disk_zone&md5={$this_movie_md5}", 'name'=>$sub_domain);
        }
    }
    $json_array['cdn'] = $cdn_node_url_array;
}

include $base_dir . "/module_parse_tpl_js.php";

if($cms_config_encode_word == 'on3'){
    $json_array['l'] = $all_list_array;
    $json_array['m3'] = $this_m3u8;
    $json_array['co'] = $this_cover;

    $js_tpl_uri = make_js_tpl('v', $js_tpl_code_array, $tpl_html);
    $html = make_js_tpl_loader($js_tpl_uri, $json_array);
    echo $html;
}else{
    echo $tpl_html;
}

if(!empty($cache_file_path)){
    cache_end($cache_file_path);
}