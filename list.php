<?php
$error_msg = '';

if(empty($_GET['id'])){
    $error_msg = "栏目ID缺失";
}else{
    $raw_class_id = $_GET['id'];
    if(preg_match("#[^\d]#", $raw_class_id)){
        $error_msg = "栏目ID不合法";
    }
}

if(!empty($_GET['page'])){
    $this_page_no = $_GET['page'];
}else{
    $this_page_no = 1;
}

if(preg_match("#[^\d]#", $this_page_no)){
    $error_msg = "页码不合法";
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
    if($_SERVER["REQUEST_URI"] != get_uri('list', $raw_class_id, $this_page_no)){
        js_jump();
    }
}

list($this_class_id, $this_site_id, $this_content_type_id) = splite_id($raw_class_id, 3);
//echo "this_class_id:$this_class_id, this_site_id:$this_site_id, this_content_type_id:$this_content_type_id";

if($this_content_type_id == 1){
    $content_type = 'video';
    $page_size = $video_page_size;
    $tpl_list_filename = 'tpl_video_list.php';
    $class_data_pre = 'video';
    $js_tpl_type = 'lv';
}elseif($this_content_type_id == 2){
    $content_type = 'torrent';
    $page_size = $bt_page_size;
    $tpl_list_filename = 'tpl_torrent_list.php';
    $class_data_pre = 'torrent';
    $js_tpl_type = 'lt';
}else{
    js_jump("栏目ID错误。 即将返回首页(class_id:{$this_class_id}, site_id:{$this_site_id}, type_id:{$this_content_type_id})", '/', 3, '404');
}

if(empty($this_site_id)){
    $from_search = true;

    $search_cache_pre = "{$cache_dir}/search_result/{$raw_class_id}";
    if(
        !file_exists("{$search_cache_pre}.data") 
        || !file_exists("{$search_cache_pre}.keyword") 
        || !file_exists("{$search_cache_pre}.total")
    ){
        js_jump("参数错误。 即将返回首页", '/', 3, '404');
    }

    // 栏目内容总数量
    $this_class_total = file_get_contents("{$search_cache_pre}.total");

    // 栏目分页总页数
    $this_page_total = ceil($this_class_total/$page_size);

    // 栏目标题
    $page_title = $this_class_name = file_get_contents("{$search_cache_pre}.keyword");

}else{
    $from_search = false;

    if($this_site_id > 900){
        $class_data_count_file_path = $common_data_dir . "/{$class_data_pre}_class_data_count_v_{$this_class_id}.txt@{$data_timestamp}";
    }else{
        $class_data_count_file_path = $common_data_dir . "/{$class_data_pre}_class_data_count_{$this_site_id}_{$this_class_id}.txt@{$data_timestamp}";
    }

    if(!file_exists($class_data_count_file_path)){
        js_jump("栏目ID错误。 即将返回首页", '/', 3, '404');
    }

    // 栏目内容总数量
    $this_class_total = file_get_contents($class_data_count_file_path);
    
    // 栏目分页总页数
    $this_page_total = ceil($this_class_total/$page_size);

    // 栏目标题
    if($content_type == 'video'){
        $page_title = $this_class_name = $video_class_map_array[$this_site_id]['class'][$this_class_id];
    }elseif($content_type == 'torrent'){
        $page_title = $this_class_name = $torrent_class_map_array[$this_site_id]['class'][$this_class_id];
    }
}

$tpl_html = load_tpl($tpl_list_filename);

$json_array = array();
$js_tpl_code_array = array();
$all_list_array = array();

include $base_dir . "/module_parse_tpl_js.php";

if($cms_config_encode_word == 'on3'){
    $json_array['l'] = $all_list_array;
    $json_array['cn'] = $this_class_name;
    $json_array['cl'] = get_uri('list', merge_id($this_class_id, $this_site_id, $this_content_type_id));
    $js_tpl_uri = make_js_tpl($js_tpl_type, $js_tpl_code_array, $tpl_html);
    $html = make_js_tpl_loader($js_tpl_uri, $json_array);
    echo $html;
}else{
    echo $tpl_html;
}

if(!empty($cache_file_path)){
    cache_end($cache_file_path);
}