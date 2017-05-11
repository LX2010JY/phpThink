<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/11 15:07
 * Description : 常量数组
 */
/*php5.6可以用const定义数组，7可以用define*/

#常量没有$符号
define('sites',[
    'Google',
    'facebook',
    'Apple'
]);
var_dump(sites);