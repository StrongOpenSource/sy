<?php
$error_msg = '';

if(empty($_GET['id'])){
    $error_msg = '内容ID缺失';
}else{
    $raw_torrent_id = $_GET['id'];
    if(preg_match("#[^\d]#", $raw_torrent_id)){
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
    if($_SERVER["REQUEST_URI"] != get_uri('torrent', $raw_torrent_id)){
        js_jump();
    }
}

$this_content_type_id = 2;

list($torrent_source_id, $site_id) = splite_id($raw_torrent_id, 2);

$res = $sqlite_torrent_db->querySingle("SELECT * FROM movie WHERE hashint={$torrent_source_id}", true);
if(empty($res)){
    js_jump("内容ID不存在。 即将返回首页(source_id:{$torrent_source_id}, site_id:{$site_id}, type_id:{$this_content_type_id})", '/', 3, '404');
}

// id2
// sub_clasd
// type
// title
// md5
// md5int
// hash
// hashint
// fan
// fanint
// hao
// haoint
// torrent_file_id
// duration
// resolution
// size
// capture_dir
// capture_file
// time
// id_list_pc
// id_list_mobile
// tag
// cover

$this_title = $res['title'];
$this_class_id = $class_id = $res['type'];
$this_site_id = 1;
$raw_class_id = merge_id($this_class_id, $this_site_id, $this_content_type_id);
$capture_dir = $res['capture_dir'];

$torrent_date = date('Y-m-d', $res['time']);
$torrent_duration = $res['duration'] + 1;
$torrent_resolution = $res['resolution'];
$torrent_size = floor($res['size'] / 1024 /1024) . " MB";
$torrent_magnet = 'magnet:?xt=urn:btih:'. $res['hash'];

$torrent_file_id = $res['torrent_file_id'];
$torrent_file_url = "{$torrent_pic_domain}/torrent/{$channel_name}/".$torrent_file_id.".torrent";

if(!empty($res['capture_file'])){
    $torrent_capture = '';
    $pictures = explode('#', $res['capture_file']);
    foreach ($pictures as $picture) {        
        $picture_uri = "{$torrent_pic_domain}/capture/$capture_dir/thumb/$picture";
        
        if($is_mobile){
            $img_width = '450';
        }else{
            $img_width = '220';
        }

        $torrent_capture .= "<div class=\"img_item\"><img src=\"$picture_uri\" style=\"width: 100%;margin:2px;\"></div>";
    }   
}else{
    $torrent_capture = '<p>暂无</p>';
}

$torrent_capture_t2 = "{$torrent_pic_domain}/capture/$capture_dir//t2.jpg";
$torrent_capture_t4 = "{$torrent_pic_domain}/capture/$capture_dir//t4.jpg";
$torrent_capture_v2 = <<<EOF
<picture>
    <source srcset="$torrent_capture_t2" media="(max-width: 640px)">
    <img src="$torrent_capture_t4">
</picture>
EOF;


$this_class_name = $torrent_class_map_array[$this_site_id]['class'][$class_id];

$page_title = $this_title;

$tpl_html = load_tpl('tpl_torrent.php');

$json_array = array();
$js_tpl_code_array = array();

include $base_dir . "/module_parse_tpl_js.php";


if($cms_config_encode_word == 'on3'){
    $json_array['l'] = $all_list_array;
    $json_array['ts'] = $torrent_size;
    $json_array['td'] = $torrent_duration;
    $json_array['tr'] = $torrent_resolution;
    $json_array['tc'] = $torrent_capture;
    $json_array['tc2'] = $torrent_capture_v2;
    $json_array['tt'] = $torrent_file_url;
    $json_array['tm'] = $torrent_magnet;
    $json_array['cn'] = $this_class_name;
    $json_array['ci'] = $raw_class_id;
    $json_array['cl'] = get_uri('list', $raw_class_id);;


    $js_tpl_uri = make_js_tpl('t', $js_tpl_code_array, $tpl_html);

    $html = make_js_tpl_loader($js_tpl_uri, $json_array);
    echo $html;
}else{
    echo $tpl_html;
}
if(!empty($cache_file_path)){
    cache_end($cache_file_path);
}