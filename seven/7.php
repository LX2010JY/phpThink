<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/10 18:00
 * Description :
 */
declare(strict_types=1);

/*设定函数变量参数数据类型*/
function sum(int ...$ints) {
    return array_sum($ints);
}
echo sum(1,2,3,4)."\n";


/*设定函数返回值的数据类型*/
function returnIntValue(int $value):int {
    return $value;
}
print(returnIntValue(5));
echo "\n";

function returnFloatValue(int $value):float {
    return $value+1.23;
}
print(returnFloatValue(5));