<?php


class StudentOne
{
    var $firstName  = "Dileepa";
    var $lastName = "Bandara";


    //defined class method
    function greet()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

//call class method
$dileepa = new StudentOne;
echo $dileepa->greet();


//useful class functions

//all class methods
echo "<h4>all class methods</h4>";
echo "<pre>";
echo print_r(get_class_methods("StudentOne"));

echo "</pre>";


//methods exists
echo "<h4>method exists</h4>";
echo method_exists("StudentOne", "greet");
