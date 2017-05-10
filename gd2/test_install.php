<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/8 9:39
 * Description : 测试是否安装了gd2扩展
 */
if(extension_loaded('gd')) {
    echo 'GD库可用'.'<br>';
    foreach (gd_info() as $cate => $value) {
        echo "$cate:$value<br>";
    }
} else {
    echo '你没有安装gd扩展';
}