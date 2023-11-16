<?php
 // bir xil vazifadigi methodlani yegib olish kere
abstract class Dog{
    protected abstract function speak();
}

abstract class Cat{
    protected abstract function speak();
}

interface AnimalFactory{
    public function createDog(): Dog;

    public function createCat(): Cat;
}


class DomesticAnimalFactory implements AnimalFactory{
    public function createCat(): Cat
    {
        return new DomesticCat();
    }

    public function createDog(): Dog
    {
        return new DomesticDog();
    }
}

class WildAnimalFactory implements AnimalFactory{
    public function createCat(): Cat
    {
        return new WildCat();
    }

    public function createDog(): Dog
    {
        return new WildDog();
    }
}

class DomesticDog extends Dog
{
    public function speak(): string
    {
        return "Domestic dog <br>";
    }
}

class DomesticCat extends Cat
{
    public function speak(): string
    {
        return "Domestic cat <br>";
    }
}

class WildDog extends Dog{
    public function speak(): string
    {
        return "Wild dog <br>";
    }
}

class WildCat extends Cat{
    public function speak(): string
    {
        return "Wild cat <br>";
    }
}

function interactWithAnimals(AnimalFactory $animalFactory): void{
    echo $animalFactory->createCat()->speak() . PHP_EOL;
    echo $animalFactory->createDog()->speak() . PHP_EOL;
}

$domesticFactory = new DomesticAnimalFactory();
$wildFactory = new WildAnimalFactory();

interactWithAnimals($domesticFactory);
interactWithAnimals($wildFactory);