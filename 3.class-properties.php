<?php



class Employee
{
    var $name;
    var $age;
    var $class_name = "Employee";
}

//setting values
$dileepa = new Employee;
$school = "St Anne's";
$dileepa->name = "Dileepa Lakmina Bandara";
$dileepa->age = 23;
$dileepa->school = $school;



echo "<h2>Instance Properties</h2>";
echo $dileepa->name;
echo "<br>";
echo $dileepa->age;
echo "<br>";
echo $dileepa->class_name;

//mutate/change class property value of dileepa instance
$dileepa->class_name = "Dileepa";
echo "<br>";
echo $dileepa->class_name;

//add properties for instance

echo "<br>";
echo $dileepa->school;



//useful functions for properties
echo "<br>";
echo "<h2>Useful functions</h2>";


//get properties of a class
echo "<h4>get properties of a class</h4>";
echo "<pre>";
echo print_r(get_class_vars("Employee"));
//get properties of a instance/objects
echo "</pre>";
echo "<h4>get properties of a instance/objects</h4>";
echo "<pre>";
echo print_r(get_object_vars($dileepa));

echo "</pre>";


//property exists or not(class/object,property-name)
echo "<h4>property exists or not</h4>";
echo "<pre>";
echo print_r(property_exists("Employee", $dileepa->name));

echo "</pre>";
