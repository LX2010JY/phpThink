<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/10 16:07
 * Description : 测试redis连接
 */
$redis = new Redis();
$redis->connect('127.0.0.1',6379);
$redis->set('username','lushuozhi');
echo $redis->get('test');
echo $redis->get('username');