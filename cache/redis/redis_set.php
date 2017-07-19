<?php
	$redis = new \Redis();
	$redis->connect('127.0.0.1',6379);

	$redis->delete('set1');
	$redis->sAdd('set1','A');
	$redis->sAdd('set1','B');
	$redis->sAdd('set1','C');
	$redis->sAdd('set1','C');

	$val = $redis->sCard("set1");

	var_dump($val);

	//数组输出所有元素
	$arr = $redis->sMembers("set1");
	var_dump($arr);
