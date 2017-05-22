<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/19 10:37
 * Description :
 */
/*计算传入参数平均数*/
#不用写传入参数 使用 func_get_arg 获取传入的参数值，这样可以用于变量数量不确定的时候
function mean() {
    $sum = 0;
    #获取传递到函数的参数个数
    $size = func_num_args();
    for($i = 0;$i<$size;$i++) {
        $sum += func_get_arg($i);
    }
    $average = $sum/$size;
    return $average;
}
echo mean(11,11,11.1);