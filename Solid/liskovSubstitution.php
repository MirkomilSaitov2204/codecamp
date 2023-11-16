<?php
// asosiy classning barcha metodlari subclass da ishlatilishi kere


// Bad
//class Bird {
//    public function fly()
//    {
//
//    }
//}
//
//class Peniuing extends Bird {
//    public function fly()
//    {
//
//    }
//}


// Good
interface Flyable{
    public function fly();
}

class Sparrow implements Flyable{

    public function fly()
    {
        // TODO: Implement fly() method.
    }
}


