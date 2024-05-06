<?php
class Animal {
    public function sound() {
        return "Sound";
    }
}

class Cat extends Animal {
    public function sound() {
        return "Meow";
    }
}

class Dog extends Animal {
    public function sound() {
        return "Woof";
    }
}

$cat = new Cat();
echo $cat->sound();  // Output: Meow

$dog = new Dog();
echo $dog->sound();  // Output: Woof

?>
