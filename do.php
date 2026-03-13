<?php
define('INC', true);
include dirname(__FILE__)."/common.php";
if(!defined('COMMON_FINISH')){
    exit();
}

if(empty($_GET['action'])){
    exit('no action');
}else{
    $action = $_GET['action'];
}

if($action == 'delete_tmp_files'){
    if(!empty($data_timestamp)){
        exit("已经存在有效数据，不能执行清除操作!");
    }

    delete_dir("/tmp/seyoucms/");
    delete_dir("{$base_dir}/tmp/");
    //echo "已经清除临时数据目录，<a href='/'>返点返回首页</a>";
    js_302('/');
}