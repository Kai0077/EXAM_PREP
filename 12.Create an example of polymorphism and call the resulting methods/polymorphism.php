<?php
abstract class Animal {
    abstract public function speak();
}

class Cat extends Animal {
    public function speak() {
        return "Meow";
    }
}

class Dog extends Animal {
    public function speak() {
        return "Bark";
    }
}

$animals = [new Cat(), new Dog()];
foreach ($animals as $animal) {
    echo $animal->speak() . "<br>";
}
?>