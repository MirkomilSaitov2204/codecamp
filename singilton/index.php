<?php
// Singleton pattern bu bitta classdan bir nechta instance olsa  bir xil bo'lishi kere yani bitta clasda bitta object bo'lishi kere
class Singleton {
    private static $instance;
    public function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance)
            self::$instance = new self();

        return self::$instance;
    }

    public function someMethod(): string
    {
        return "Singleton some method";
    }
}

//$instance1 = Singleton::getInstance();
//$instance2 = Singleton::getInstance();
//
////echo $instance1->someMethod() . PHP_EOL;
//echo $instance1 === $instance2 ? "Same instance" : "Different instance";


class notSingleton {

    private $instance;
    public function __construct()
    {
    }

    public function getInstance()
    {
        return $this->instance = new notSingleton();
    }

    public function someMethod(): string
    {
        return "Singleton some method";
    }
}

$ins1 = (new notSingleton())->getInstance();
$ins2 = (new notSingleton())->getInstance();


echo $ins2 === $ins1? "Same instance" : "Different instance";