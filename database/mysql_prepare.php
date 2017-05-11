<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/11 10:25
 * Description : pdo预处理语句
 */
/*mysql 数据库和 sqlite数据库可切换操作*/
include_once "mysql_conn.php";
//include_once "sqlite_conn.php";
/*使用预处理语句进行重复插入*/
/*避免sql注入*/
/*查询只需要预处理 一次 ，就可以用不同的参数多次执行*/
/*应用程序只处理预处理语句，查询、插入的参数都直接传到数据库，不由php处理，所以避免了sql注入*/
$stmt = $dbh->prepare("INSERT INTO user(name,age) VALUES (:name,:value)");
$stmt->bindParam('name',$name);
$stmt->bindParam('value',$age);

$name = "wula\l\a\lal''''sadas'sdf";
$age = 15;
$stmt->execute();

$name = "!#@$@#@#\a@'''\''''";
$age = 15;
$stmt->execute();
echo 'prepare insert succeed';



$stmt = $dbh->prepare('insert into user (name,age,avatar,type) values (?,?,?,?)');
$fp = fopen('../public/images/180.jpg','rb');
$name = 'luoxiao';
$type = 'image/jpeg';
$age = 15;
$stmt->bindParam(1,$name);
$stmt->bindParam(2,$age);
$stmt->bindParam(3,$fp);
$stmt->bindParam(4,$type);
$stmt->execute();
echo 'insert pic succeed';

/*预处理查询*/
$stmt = $dbh->prepare("SELECT * FROM user where name = ? and age = ?");
/*这里查询数据用array的原因是 因为预处理语句中需要填写的数据可能不止一个，一个？代表一个查询数据*/
$show = [];
if ($stmt->execute(array($name,15))) {
    while($row = $stmt->fetch()) {
        if($row['avatar']) {
            $show = $row;
        }
    }
}