<?php


//call this construct method after every instance create
class Test
{

    public $test = "Test constructor";

    public function __construct()
    {
        echo $this->test . "<br>";
    }
}

$test = new Test;
$test = new Test;
$test = new Test;


// passing values to class properties when create each an every instance
echo "<h4>passing values</h4>";
class Student
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
}

$studentOne = new Student("Dileepa");
echo $studentOne->name . " <br>";
$studentTwo = new Student("Dilushi");
echo $studentTwo->name . " <br>";
