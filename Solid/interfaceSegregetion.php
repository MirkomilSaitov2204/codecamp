<?php

// Har bir class o'ziga kerakli funksiyalarini o'z ichiga oladi

//Bad
//interface Worker {
//    public function work();
//    public function eat();
//}
//
//class Robot implements Worker
//{
//    public function work()
//    {
//
//    }
//
//    public function eat()
//    {
//
//    }
//}


// Good
interface Workable {
    public function work();
}

interface Eatable {
    public function eat();
}

class Human implements Workable, Eatable {

    public function work()
    {
        // TODO: Implement work() method.
    }

    public function eat()
    {
        // TODO: Implement eat() method.
    }
}

