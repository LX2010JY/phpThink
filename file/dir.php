<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/12 14:54
 * Description :
 */
$hostdir = dirname(__FILE__);
$filenames = scandir($hostdir);
foreach ($filenames as $k => $v) {
    if(!is_dir($hostdir.'/'.$v)) {
        echo $v . '<br>';
    }
}