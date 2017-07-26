<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/24
 * Time: 22:17
 */
//产品抽象接口
interface Product {
    public function getproperties();
}


//两个产品类
class AppleProduct implements Product {
    private $Message;
    public function getproperties() {
        $this->Message = "This is an Apple";
        return $this->Message;
    }
}
class OrangeProduct implements Product {
    private $Message;
    public function getproperties() {
        $this->Message = 'This is an orange';
        return $this->Message;
    }
}

//工厂类接口
abstract class Creater {
    protected abstract function factorymethod(Product $product);
    public function doFactory($product) {
        $mes = $this->factorymethod($product);
        return $mes;
    }
}
//工厂类
class countryFactory extends Creater {
    private $instance;
    protected  function factorymethod(Product $product) {
        $this->instance = $product;
        return $this->instance->getproperties();
    }
}


//客户点，消费者，使用者
class Client {
    private $factory;
    public function __construct() {
        $this->factory = new countryFactory();
        echo $this->factory->doFactory(new AppleProduct());
    }
}

$worker = new Client();
