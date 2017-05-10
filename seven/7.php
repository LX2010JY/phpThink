<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/10 18:00
 * Description :
 */
declare(strict_types=0);
function sum(int ...$ints) {
    return array_sum($ints);
}
echo sum(1,2,'3',4.1);