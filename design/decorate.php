<?php
//装饰器模式
/*
    以下是看第一遍的理解，可能有错，但是这是我看了工厂模式，适配器模式以来唯一一个觉得简单的模式了
    装饰器：在原有已经功能完善的类基础上做一些美化装饰功能，而且使用的地方很少，不至于直接修改原本的类
    1. 需要一个组件抽象类，提供装饰器和 工作类（全部接口）的公共接口
    2. 工作类 继承接口，实现它应该实现的功能。
    3. 装饰器接口也是一个抽象类，它继承组件接口的接口，并可以添加一些新的接口
    4. 装饰器类 继承装饰器接口（相当于它继承了两次），并在初始化的时候传入工作类对象，在每一个和工作类一样的方法上可以直接调用工作类对象执行结果，然后在此基础上添加新的功能/也就是装饰...
*/
abstract class Icomponent {
    protected $site;   //private属性 不能继承 ， protected可以继承，public 外部可以直接访问
    abstract public function getSite();
    abstract public function getPrice();
}

//装饰器接口
abstract class Decorator extends Icomponent {
    //不用加任何东西，其主要作用是为了维护Componennt的接口，当然也可以扩展一些接口，这里不需要
}

//工作类
class baseSite extends Icomponent {
    public function __construct() {
        $this->site = "my base website";
    }
    public function getSite() {
        return $this->site;
    }
    public function getPrice() {
        return 1200;
    }
}
//装饰器类
class maintenance extends Decorator {
    public function __construct(Icomponent $siteNow) {
        $this->site = $siteNow;
    }
    public function getSite() {
        $decorator = "<br>&nbsp;&nbsp; Maintence";  //修饰功能
        return $this->site->getSite() . $decorator;
    }
    public function getPrice() {
        return 950 + $this->site->getPrice();
    }
}

$base = new baseSite();
$deco = new maintenance($base);
echo $deco->getSite();
echo "<br>".$deco->getPrice();