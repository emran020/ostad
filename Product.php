<?php

class Product
{
    public int $id;
    public string $name;
    public float $price;

    public function __construct($id,$name,$price)
    {

        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getFormattedPrice()
    {
        return number_format($this->price, 2);
    }
    public function showDetails()
    {
        echo 'Product Details: \n';
        echo "- ID: {$this->id} \n";
        echo "- Name: {$this->name} \n";
        echo "- Price: $".$this->getFormattedPrice()."";
    }
}
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
?>


<?php
/*
Task-1: Create a PHP class called 'Rectangle' with the following properties:
    - length (float)
    - width (float)

And the following methods:

    - getArea() - which calculates and returns the area of the rectangle
    - getPerimeter() - which calculates and returns the perimeter of the rectangle

Use the template below to solve the problem:
    class Rectangle{
        // properties
        // methods
    }
*/

class Rectangle {
    public float $length;
    public float $width;

    public function __construct(float $length, float $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea(): float {
      return $this->length * $this->width;
    }

    public function getPerimeter(): float {
      return 2 * ($this->length + $this->width);
    }
}

$rectangle = new Rectangle(10, 5);

$area = $rectangle->getArea();
echo "The area of the rectangle is $area square units.\n";

$perimeter = $rectangle->getPerimeter();
echo "The perimeter of the rectangle is $perimeter units.\n";


/*
    Task 2: Create a class called 'Person' with the following properties: 'name', 'age', and 'gender'. Add a method called 'getInfo'
            that returns a string in the following format: 'My name is [name], I am [age] years old, and I am [gender].' Use the template
            provided below to solve the problem.

            class Person{
            public $name;
            public $age;
            public $gender;

            //Constructor
            public function __construct($name, $age, $gender)
            {
                // your code here
            }

            // getInfo method
            public function getInfo()
            {
                // your code here
            }
        }
*/

class Person {
    public $name;
    public $age;
    public $gender;

    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getInfo() {
        return "My name is $this->name, I am $this->age years old, and I am $this->gender.";
    }
}

$person = new Person("Md. Moniruzzaman", 36, "Male");
echo $person->getInfo();
?>