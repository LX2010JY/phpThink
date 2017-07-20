<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/22 11:56
 * Description : 简单工厂模式
 */
abstract class IUser { //抽象产品角色
    abstract function getName();
}

class User extends IUser { //具体产品角色
    public function getName() {
        // TODO: Implement getName() method.
        return 'jack';
    }
}

class UserFactory{ //工厂类角色
    public static function create() {
        return new User();
    }
}
//简单工厂模式比直接new一个对象的好处在于，如果类名或者参数被修改，只需要改一个地方就可以了
$uo = UserFactory::create();
echo $uo->getName();