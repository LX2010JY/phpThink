<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/11 15:23
 * Description : 闭包函数动态绑定到新的对象
 */

class A{
    private $x = 1;
    public function __construct($x) {
        $this->x = $x;
    }
}
/*php7以前*/
$getXCB = function () {
    return $this->x;
};

/*感觉和JavaScript好像，傻傻分不清楚*/
/*绑定附带执行*/
$getX = $getXCB->bindTo(new A(23),'A');
echo $getX();
print(PHP_EOL);

/*php7+*/
$getX = function () {
    return $this->x;
};
/*绑定附带执行*/
echo $getX->call(new A(15));
