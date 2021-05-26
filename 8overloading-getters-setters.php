<?php


class Employee
{
    private $salary = 25000;

    public function getDetails()
    {
        echo $this->salary;
    }

    public function setDetails($newSalary)
    {
        $this->salary = $newSalary;
        echo "<br>";
        echo $this->salary;
    }
}

class SubEmployee extends Employee
{
}

//overloading
/*
In the Paraent class we have already defined private
salary property..so we should not cannot access pravate 
property.but in this case we try to mutate private salary
property.when in this case we created another propert same
name as private property.but not actually change private property.



*/
$bandara = new SubEmployee;
$bandara->salary = 50000;
echo $bandara->salary;
echo "<br>";

$dileepa = new Employee;

//get and set provate properties
//getters
$dileepa->getDetails();


//setters
$dileepa->setDetails(40000);
