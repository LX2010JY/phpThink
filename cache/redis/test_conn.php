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
echo $redis->get('username');

/**
 * redis 五种数据类型
 * 1.【string】 key value(可为整数 字符串)   set string1 3     get string1    incr string1 可以自增
 * 2.【list】 key queue  一个key对一个队列，可以一对多，lpush list1 2   lpush list1 3   从左队列入队；rpop list1 从右边出队；llen list1 计算队列长度
 * 3.【set】 key set (一对多，但是多的不可重复，而且无序) sadd set1 1 ,sadd set1 2,sadd set1 2 ;添加内容；scard set1 获取集合长度 sismember set1 2 查看书否存在2 ，srem set1 2 删除2
 * 4.【hash】key => {key=>value} key指向一个哈希表（字典） hset hash1 key1 value1 添加内容 hget hash1 key1 获取值 hlen hash1 获取长度 hmget hash1 key1 key2 一次获取多个值
 * 5.【sort set】
 */