<?php

// Adapter pattern bu 2 tarafdan notogri interface ga ega obyektlarni bir biri biilan obyektlarning interface larini o'zgartirmasdan ishlashga yordam beradi

interface Target {
    public function request(): string;
}

class Adaptee {
    public function specificRequest(): string
    {
        return  "Adaptee specific request <br>";
    }
}

class Adapter implements Target{

    public function __construct(private readonly Adaptee $adaptee)
    {
    }

    public function request(): string
    {
        return  "Adapter: " . $this->adaptee->specificRequest();
    }
}

// client code

function clientCode(Target $target){
    return $target->request();
}

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);

echo "Adaptee: " . $adaptee->specificRequest() . PHP_EOL;
echo "Adapter: " . clientCode($adapter) . PHP_EOL;