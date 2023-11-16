<?php
// bitta objectdan yangi objcet clone qilish imkoni bo'lishi kere

interface Prototype{
    public function clone(): Prototype;
}

class ConcretePrototype implements Prototype {
    public function __construct(private $property)
    {
    }

    public function clone(): Prototype
    {
        return new ConcretePrototype($this->property);
    }

    public function getProperty(): mixed
    {
        return $this->property;
    }

    public function setProperty($property): void
    {
        $this->property = $property;
    }
}

$property = new ConcretePrototype("Initial Property");
$newObj = $property->clone();

$newObj->setProperty("Modified Property");

echo "Protype property: " . $property->getProperty() . PHP_EOL;
echo "NEW Object property: " . $newObj->getProperty() . PHP_EOL;
