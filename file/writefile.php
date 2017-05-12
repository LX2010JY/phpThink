<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/12 11:58
 * Description : 写文件
 */

if(!file_exists('../public/file')) {
    mkdir('../public/file');
}
#打开或者创建一个文件
$cfile = fopen(__DIR__.'/../public/file/mytxt.txt','w') or die('open failed');

$i=0;
while($i<65) {
    $i++;
    $txt_byte = random_bytes($i);
    $txt = bin2hex($txt_byte) . "\n";
    #写入一条数据
    fwrite($cfile,$txt);
}

fclose($cfile);
echo readfile(__DIR__.'/../public/file/mytxt.txt');