<?php
unset($_GET);
unset($_POST);
unset($_COOKIE);

define('INC', true);
include dirname(__FILE__)."/common.php";

if(!empty($cms_config_site_title)){
    $page_title = $cms_config_site_title;
}else{
    $page_title = $cms_config_site_name;
}

$tpl_html = load_tpl("tpl_index.php");

$json_array = array();
$js_tpl_code_array = array();
$all_list_array = array();

include $base_dir . "/module_parse_tpl_js.php";

if($cms_config_encode_word == 'on3'){
    $json_array['l'] = $all_list_array;
    $js_tpl_uri = make_js_tpl('i', $js_tpl_code_array, $tpl_html);
    $html = make_js_tpl_loader($js_tpl_uri, $json_array);
    echo $html;
}else{
    echo $tpl_html;
}

if(!empty($cache_file_path)){
    cache_end($cache_file_path);
}