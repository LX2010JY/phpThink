<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/11 15:38
 * Description : serialize 本来就不懂，php7为unserialize提供了过滤的特性，防止非法的数据代码注入
 */
#serialize可将一个php类，对象数据转化为可存储的字符串，unserialize将字符串重新转回为php数据对象

class MyClass1 {
    public $obj1prop;
    public function getParam() {
        return $this->obj1prop;
    }
}
class MyClass2 {
    public $obj2prop;
}

$obj1 = new MyClass1();
$obj1->obj1prop = 1;
$obj2 = new MyClass2();
$obj2->obj2prop = 2;

$serializedObj1 = serialize($obj1);
$serializedObj2 = serialize($obj2);

echo $serializedObj1."\n";
echo $serializedObj2."\n";

/*allowed_classes true设置所有的都可以，false都不行,简直说得莫名其妙*/
$data = unserialize($serializedObj1,['allowed_classes'=>true]);
echo $data->getParam();
//只允许这两个转回...
$data = unserialize($serializedObj2,['allowed_classes'=>['MyClass1','MyClass2']]);
echo $data->obj2prop;