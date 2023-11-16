<?php
declare(strict_types=1);

// Bu method interface yordamida obyekt yaratish uchun ishlatiladi

interface Animal {
    public function speak();
}

class Dog implements Animal {
    public function speak(): string
    {
        return "Wolf <br>" ;
    }
}

class Cat implements Animal {
    public function speak(): string
    {
        return "Meow <br>";
    }
}

interface AnimalCreator {
    public function createAnimal(): Animal;
}

class DogCreator implements AnimalCreator {
    public function createAnimal(): Animal
    {
        return new Dog();
    }
}

class CatCreator implements AnimalCreator {
    public function createAnimal(): Animal
    {
       return  new Cat();
    }
}

$dogCreator = new DogCreator();
$catCreator = new CatCreator();

echo  $dogCreator->createAnimal()->speak();
echo $catCreator->createAnimal()->speak();




