<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/17 10:29
 * Description : php的一些数字函数
 */
function number_is_numberic($num) {
    #判断字符串是否包含数字 只要包含数字返回true
    return is_numeric($num);
}

function number_approximate($num) {
    echo round($num); #四舍五入
    echo ceil($num); #向上取整
    echo floor($num); #向下取整
}

#取随机数
function number_random($min,$max) {
    echo mt_rand($min,$max);
}


