<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/11 15:15
 * Description : 匿名类
 */
interface Logger {
    public function log(string $msg);
}

class Application {
    private $logger;
    public function getLogger() : Logger {
        return $this->logger;
    }
    public function setLogger(Logger $logger) {
        $this->logger = $logger;
    }
}

$app = new Application();
/*使用new class 创建一个匿名类，用后即焚的类*/
$app->setLogger(new class implements Logger {
    public function log(string $msg) {
        print($msg);
    }
});
$app->getLogger()->log('my first log');