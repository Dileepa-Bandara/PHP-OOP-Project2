<?php
//overriding methods and properties of a parent class in subclass overriding

class MainClass
{
    var $productName;
    var $price;
    var $class = "Main";

    function details()
    {
        return "Product Name is" . " " . $this->productName . " " . " and " . " " . "price is" . "  " . $this->price;
    }
}

class Computer extends MainClass
{

    //overriding mainclass property
    var $class  = "subclass";



    var $ram = "4gb";
    //overriding mainclass method
    function details()
    {
        return "Product Name is" . " " . $this->productName . " " . "and" . " " . " price is" . " " . $this->price . " and ram is" . " " . $this->ram;
    }
}

$computer = new Computer;
$computer->productName = "Dell";
$computer->price = "$300";
$main = new MainClass;


echo $main->class;

echo "<br>";
echo $computer->class;;


echo "<br>";
echo $computer->details();
