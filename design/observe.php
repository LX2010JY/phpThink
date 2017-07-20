<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/23 10:06
 * Description : 观察者模式
 * 观察者模式 是一种行为模式 是定义对象之间一对多的依赖关系，
 * 一个对象状态发生改变的时候，所有依赖它的对象得到通知并自动刷新
 */
class Paper {/*主体*/
    private $_observers = array();
    public function register($sub) { /*注册一个观察者*/
        $this->_observers[] = $sub;
    }
    public function trigger() { /*从外部统一访问*/
        if(!empty($this->_observers)) {
            foreach ($this->_observers as $observer) {
                $observer->update();
            }
        }
    }
}
interface Observerable {
    public function update();
}

class Subscriber implements Observerable {
    public function update() {
        echo "Callback\n";
    }
}
class Subscriber1 implements Observerable {
    public function update() {
        echo "Callback 1\n";
    }
}
class Subscriber2 implements Observerable {
    public function update() {
        echo "Callback 2\n";
    }
}

$paper = new Paper();
$paper->register(new Subscriber());
$paper->register(new Subscriber1());
$paper->register(new Subscriber2());
$paper->trigger();