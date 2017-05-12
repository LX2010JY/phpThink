<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/12 11:33
 * Description : 读取文件
 */
#直接读取一个文件的全部内容
echo readfile("../seven/php_serialize.php");
echo "<br>";
#通过fopen打开文件 ,fopen打开的文件不存在时 可以创建文件
/*r 只读，w 只写 a 只写并保留原内容，*/
$myfile = fopen("../seven/php_serialize.php",'r') or die("unable to open file!");
echo "<br>";
/*feof 判断文件是否已经读取完毕 end-of-file*/
while(!feof($myfile)) {
    /*fgets 获取一行字 fgetc获取一个字节 中文乱码*/
    echo fgets($myfile)."<br>";
}
/*读取文件 第二个参数是读取的内容的大小 filesize获取文件大小*/
echo fread($myfile,filesize("../seven/php_serialize.php"));

fclose($myfile);
