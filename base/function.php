<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/15 10:12
 * Description : php的一些函数
 */

/*从字符串中查找信息*/
function string_strpos($str,$search) {
    /*strpos 查找子字符串，返回子字符串首字符位置，如果没有返回 false，如果子字符串在首位，返回0，0和false注意区别*/
    return strpos($str,$search);
}
/*从字符串中切割一定长度的子字符串*/
function string_substr($str,$start,$len) {
    /*需要切割的字符串  开始切割的位置   切割的长度*/
    /*未指定长度，则到末尾，开始位置如果为负数，则从末尾反向计算*/
    return substr($str,$start,$len);
}

function string_substr_replace($old,$rep,$start,$len) {
    /*需要被替换的字符串  替换的内容  替换开始的地方  替换的长度*/
    return substr_replace($old,$rep,$start,$len);
}