<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/22 14:55
 * Description : 单例模式
 * 单例模式 确保某个类只有一个实例，而且自动实例化并向整个系统提供这个实例
 * 3个特点
 * 1.只能有一个实例
 * 2.必须自行创建这个实例
 * 3.必须给其他对象提供这个实例
 */
class User {
    private static $_instance = null;
    #私有化构造函数，防止外界实例化对象
    private function __construct() {
    }
    /*私有化克隆函数*/
    private function __clone() {
    }
    public static function getInstance() {
        if(is_null(self::$_instance) || isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;

    }

    public function getName() {
        echo 'Hello World';
    }
}

/*静态方法，没有实例化，自行创建了一个对象，然后调用自己的方法*/
User::getInstance()->getName();