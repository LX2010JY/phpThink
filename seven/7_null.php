<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/11 14:58
 * Description : 合并运算符
 */

$name = 'luoxiao';

#三元运算符，以前的用法，如果name存在 则expert_name 等于name，否则 expert_name 为NULL
$expert_name = $name ? $name : 'NULL';
print($expert_name."\n");
#现在简写
$expert_name_7 = $name7 ?? "NULL";
print($expert_name_7."\n");
