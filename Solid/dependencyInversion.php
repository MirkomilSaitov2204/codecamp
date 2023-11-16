<?php

// Yuqori darajadagi modullar yoki klasslar pastki darajadagi modul yoki klasslarga bogliq bo'lishi kere , va hammasi Abstraksiyaga bog'liq bo'lishi kere

//Bad
//class LightBulb {
//    public function turnOn()
//    {
//
//    }
//
//    public function turnOff()
//    {
//
//    }
//}
//
//class Switches {
//
//    public function __construct(private readonly LightBulb $bulb)
//    {
//    }
//
//    public function operate()
//    {
//
//    }
//}

//Good
interface Switchable {
    public function turnOn();

    public function turnOff();
}


class LigthBulb implements Switchable{

    public function turnOn()
    {
    }

    public function turnOff()
    {
    }
}

class Switches  {
    public function __construct(private readonly Switchable $switchable)
    {
    }

    public function operate()
    {
         $this->switchable->turnOff();
         $this->switchable->turnOn();
    }
}
