<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/17 11:12
 * Description : php数组相关函数
 */

#生成随机数组
function array_range_random() {
    #range生成固定范围内的所有数字组成的数组
    return range(mt_rand(0,100),mt_rand(100,1000));
}

#php一种遍历数组方式
function array_bianli($arr) {
    reset($arr);
    #list 接受传过来的数组字段
    #each 自动遍历数组返回key和value
    while(list($key,$value) = each($arr)) {
        print_r($key.'=>'.$value);
    }
}

/*array_splice 重要*/
function array_array_splice($old_arr,$start,$length,$rep) {
    #可以修改数组内容，将start开始 length长度数组替换为rep  使用$old_arr
    #可以获取指定区间的数组，用于分页，rep不填即可   使用$rrr
    $rrr = array_replace($old_arr,$start,$length,$rep);
}

$arr=['key'=>'value'];
#检查数组是否包含某个关键字 返回bool
array_key_exists('key',$arr);
#反转数组
array_reverse($arr);
#数组查找位置
array_search('value',$arr);