<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/15 10:12
 * Description : php的一些字符串函数
 */

/*1111111111111111111111从字符串中查找信息*/
function string_strpos($str,$search) {
    /*strpos 查找子字符串，返回子字符串首字符位置，如果没有返回 false，如果子字符串在首位，返回0，0和false注意区别*/
    return strpos($str,$search);
}
/*222222222222222222222上下内容相似*/
function string_strstr($str,$search,$type=false) {
    /*在字符串中搜索 被搜索的字符串  搜索的内容  bool值，默认为false，返回搜索内容及后面全部  true返回搜索内容前面的内容 如果没有查询到返回空*/
    return strstr($str,$search,$type);
}


/**
 * 计算字符串中元音字母的个数
 */
function use_strstr() {
    $str = "This weekend,I'm going shopping for a pet chicken.";
    $vowels = 0;
    for($i=0,$j=strlen($str);$i<$j;$i++) {
        if(string_strstr('aeiouAEIOU',$str[$i])) {
            echo $str[$i];
            $vowels++;
        }
    }
    echo "<br>".$vowels;
}
use_strstr();




/*33333333333333333333333333333333333从字符串中切割一定长度的子字符串*/
function string_substr($str,$start,$len) {
    /*需要切割的字符串  开始切割的位置   切割的长度*/
    /*未指定长度，则到末尾，开始位置如果为负数，则从末尾反向计算*/
    return substr($str,$start,$len);
}
/*444444444444444444444444444444444字符串替换*/
function string_substr_replace($old,$rep,$start,$len) {
    /*需要被替换的字符串  替换的内容  替换开始的地方  替换的长度*/
    return substr_replace($old,$rep,$start,$len);
}
/*5555555555555555555555555555555555上下相似*/
function string_str_replace($old,$new,$all_str) {
    /*将字符串中的某个字符串替换为新的*/
    return str_replace($old,$new,$all_str);
}
/*66666666666666666666666666666666666字符串按照字节反转，所以中文不行*/
function string_strrev($str) {
    return strrev($str);
}

echo PHP_EOL;
echo string_strrev('This is a palindrome.');
echo PHP_EOL;
echo string_strrev('奔跑自由方向');

/*7777777777777777777777777777777777777英文字母大小写转换*/
function word_change($str = "hello i'm a joke") {
    echo PHP_EOL;
    echo ucfirst($str); #将第一个单词首字母大写
    echo PHP_EOL;
    echo ucwords($str); #将所有单词首字母大写
    echo PHP_EOL;
    echo strtoupper($str); #将所有字母大写
    echo PHP_EOL;
    echo strtolower($str); #将所有字母小写
}
word_change();
