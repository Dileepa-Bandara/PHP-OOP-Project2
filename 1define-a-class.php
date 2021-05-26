<?php


//use CamalCase
//use singular nouns
//use seperate files for classes


//defined a class
class Employee
{
}

//useful class functions(returned all classes as a array)
echo "<h2>All classes</h2>";
echo "<pre>";
echo print_r(get_declared_classes());

echo "</pre>";

//class exist or not(true=1,flase=0)
echo "<h2>class exists?</h2>";
echo class_exists("Employee");
