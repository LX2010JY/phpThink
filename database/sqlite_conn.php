<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/10 16:48
 * Description : pdo sqlite 连接
 */
try{
    $dbh = new PDO('sqlite:../data/user.db');
    echo 'connect database ok';
    //开启事务 若不开启 则自动提交
    $dbh->beginTransaction();
    /*建立数据表*/
    $dbh->exec("CREATE TABLE user(id INTEGER ,name VARCHAR(255),age INTEGER)");
    echo "create Table user ok";
    /*插入一条数据*/
    $dbh->exec("INSERT INTO user values(1,'luoxiao',15)");
    $dbh->exec("INSERT INTO user values(2,'fengjiayu',15)");
    echo 'insert data ok';
    /*事务提交*/
    $dbh->commit();
    $dbh->beginTransaction();
    $sth = $dbh->prepare("SEELCT * FROM user");
    $sth->execute();
    $res = $sth->fetchAll();

    var_dump($res);
    $dbh = null;
} catch (PDOException $e) {
    echo 'connect failed:'.$e->getMessage();
    $dsn = null;
}