<?php


//make a subclass/child class using parent class

class MainClass
{
    var $productName;
    var $price;

    function details()
    {
        return "Product Name is" . " " . $this->productName . " " . "and" . " " . "price is" . " " . $this->price;
    }
}

class Computer extends MainClass
{

    //overriding
    var $ram = "4gb";
}


$computer = new Computer;
$computer->productName = "Dell";
$computer->price = "$200";


echo $computer->productName;
echo "<br>";
echo $computer->price;
echo "<br>";
echo $computer->ram;
echo "<br>";
echo $computer->details();

//useful functions in inheritance

//Parent class
echo "<br>";
echo "<h2>useful functions in inheritance</h2>";
echo "<h4>Parent class of a subclass</h4>";
echo get_parent_class("Computer");

echo "<h4>is  this subclass extends from mainclass?</h4>";
echo is_subclass_of("MainClass", "Computer");


//get parent classes of a subclass
//class_parents(subclass);
