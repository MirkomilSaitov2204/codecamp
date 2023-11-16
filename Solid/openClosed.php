<?php

// class modules functions should open for extension but closed for modification
// class modullar kengaytirish uchun ochiq bo'lishi kere lekin tahrirlash uchun yoopiq

//Bad
//class Rectangle{
//    public $width;
//    public $height;
//}
//
//class AreaCalculator {
//    public function calculateRectangleArea(Rectangle $rectangle): float|int
//    {
//        return $rectangle->height * $rectangle->width;
//    }
//}


//Good example
interface Shape {
    public function area(): int|float;
}

class Rectangle implements Shape{

    public $height;
    public $width;

    public function area(): int|float
    {
        return $this->height * $this->width;

        // TODO: Implement area() method.
    }
}