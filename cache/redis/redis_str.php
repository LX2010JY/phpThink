<?php
	$redis  = new \Redis();
	$redis->connect('127.0.0.1',6379);

	//string操作 
	$redis->delete("str1");
	$redis->set("str1","val1");
	$val = $redis->get("str1");
	var_dump($val);

	$redis->set('str1',4);
	// 自增2
	$redis->incr("str1",2);
	$val = $redis->get("str1");
	var_dump($val);
