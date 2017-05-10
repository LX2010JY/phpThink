<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/8 10:24
 * Description : 获取图片大小
 */
//获取本地图片文件
list($width,$height,$type,$attr) = getimagesize("../public/images/180.jpg");
var_dump(getimagesize("../public/images/180.jpg"));
echo "<img src='../public/images/180.jpg' $attr />";

//获取在线图片
$result = getimagesize("https://yiqixie.com/d/loadimage?id=2164610733671321983");
var_dump($result);
list($width,$height,$type,$attr) = getimagesize("https://yiqixie.com/d/loadimage?id=2164610733671321983");
echo "<img src='https://yiqixie.com/d/loadimage?id=2164610733671321983' $attr />";
