<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/11 9:42
 * Description : mysql pdo 连接
 */
const DB_TYPE = 'mysql';
const HOST    = 'localhost';
const DB_NAME = 'test';
const USER    = 'root';
const PASSPORT='root';
const DSN = DB_TYPE.':host='.HOST.';dbname='.DB_NAME;

try {
    $dbh = new PDO(DSN,USER,PASSPORT,array(
        PDO::ATTR_PERSISTENT=>true           #持久连接，此脚本执行完毕后，与数据库的连接不会关闭，被缓存，当另一个使用相同凭证连接的脚本请求连接时被重用
    ));
    echo 'connect succeed<br>';
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); #错误提示属性设置

    /*一段事务 开启*/
    $dbh->beginTransaction();
    $dbh->exec("delete from user;");
    $dbh->exec("insert into user(name,age) values ('luoxiao',15)");
    $dbh->exec("insert into user(name,age) values ('fengjiayu',15)");
    $dbh->commit();
    /*事务结束，提交*/
    echo 'insert data succeed <br>';
//    $dbh = null;
} catch (PDOException $e) {
    $dbh->rollBack();
    $dbh = null;
    die("Error:".$e->getMessage().'<br>');
}