<?php
	$redis = new \Redis();
	$redis->connect('127.0.0.1',6379);

	$redis->delete('list1');
 	//左进右出 队列
	$redis->lpush('list1','A');
	$redis->lpush('list1','B');
	$redis->lpush('list1','C');

	echo $redis->rpop('list1'); // A

