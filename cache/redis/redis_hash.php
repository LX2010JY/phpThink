<?php
	$redis = new \Redis();
	$redis->connect('127.0.0.1',6379);

	$redis->delete('hash1');
	$redis->hset("hash1","key1","val11");
	$redis->hset("hash1","key2","val22");
	$redis->hset("hash1","key3","val33");

	$val = $redis->hget("hash1","key1");
	var_dump($val);

	$all = $redis->hMGet("hash1",array("key1","key2","key3"));
	var_dump($all);
