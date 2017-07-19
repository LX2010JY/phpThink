<?php
	$redis = new \Redis();
	$redis->connect('127.0.0.1',6379);

	$redis->delete('zset1');
	// 键   分数     值
	$redis->zAdd('zset1',100,"xiaoming");  
	$redis->zAdd('zset1',65,"xiaohong");
	$redis->zAdd('zset1',89,"xiaowang");
	//排序 低到高  键 最低分开始位置
	$val = $redis->zRange("zset1",0,-1);  //低到高
	var_dump($val);
	$val = $redis->zRevRange("zset1",0,-1);  //高到低
	var_dump($val);