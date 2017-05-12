<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/11 16:04
 * Description : php7生成随机数
 */
/*设置随机数的字节数*/
$bytes = random_bytes(5); #用于生成随机字符串
/*二进制转16进制，所以十位字符*/
print(bin2hex($bytes)."\n");

/*随机生成数字，参数设置范围 min，max*/

print(random_int(0,100000));