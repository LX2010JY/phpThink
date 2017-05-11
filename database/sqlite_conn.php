<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/10 16:48
 * Description : pdo sqlite 连接
 */
try{
    $dbh = new PDO('sqlite:../data/user.db');
//    $dbh = new SQLite3('mysqlitedb.db');
    echo 'connect database ok<br>';

    /*建立数据表*/
    $dbh->exec('drop table user');
    $dbh->exec("CREATE TABLE user(id INTEGER ,name VARCHAR(255),age INTEGER)");
    echo "create Table user ok<br>";
    /*插入一条数据*/
    $dbh->exec("INSERT INTO user values(1,'luoxiao',15)");
    $dbh->exec("INSERT INTO user values(2,'fengjiayu',15)");
    echo 'insert data ok<br>';

    $sth = $dbh->prepare("select * from user");
    $result = $sth->execute();
    $res = $sth->fetchAll();
    var_dump($res);
//    $dbh = null;
} catch (PDOException $e) {
    echo 'connect failed:'.$e->getMessage();
    $dsn = null;
}