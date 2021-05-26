<?php

//public = default access modifier(public,var)
//we can access these type of variables allover the prgram 

//Protected = access only parent class and its inherited sub classes

//private = access only in the parent class

class MainClass
{

    public $employeeName  = "Dileepa Lakmina";
    protected $salary = 20000;
    private $school = "St Annes";

    function mainClass()
    {
        echo $this->school;
    }
}

$employee = new MainClass;


echo "<br>";
echo "<h2>Access data</h2>";
echo "<br>";
echo $employee->employeeName;
echo "<br>";
//cant access
// echo $employee->salary;
echo "<br>";
//cant access
// echo $employee->school;


class Dilluck extends MainClass

{

    function methodOne()
    {
        echo $this->salary;
    }
}
$employeeTwo = new Dilluck;
echo "<h2>Access data in subclass</h2>";
echo "<br>";
echo $employeeTwo->employeeName;

echo "<br>";
echo $employeeTwo->methodOne();
echo "<br>";


echo "<h2>Access private data</h2>";

echo $employee->mainClass();
