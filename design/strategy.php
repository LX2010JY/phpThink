<?php
/**
 * Created by PhpStorm.
 * Author      : Lxiao
 * CreateTime  : 2017/5/22 15:09
 * Description : 策略模式
 */
abstract class baseAgent {
    abstract function PrintPage();
}
class ieAgent extends baseAgent {
    function PrintPage() {
        // TODO: Implement PrintPage() method.
        return 'IE';
    }
}
class otherAgent extends baseAgent {
    function PrintPage() {
        // TODO: Implement PrintPage() method.
        return 'not IE';
    }
}
class Brower {
    public function call($object) {
        return $object->PrintPage();
    }
}
$bro = new Brower();
echo $bro->call(new ieAgent());
