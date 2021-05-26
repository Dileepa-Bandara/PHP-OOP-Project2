<?php

class Student
{
    public static $name = "Dileepa Lakmina Bandara";
    public static $age = 23;

    public static function details()
    {
        echo "My name is " . self::$name;
        echo "<br>";
        echo "My age is " . static::$age;
    }
}


class Dilushi extends Student
{
    public static $name = "Dilushi Lakshika Bandara";
    public static $age = 26;
}


echo Student::$name;
echo "<br>";
echo Dilushi::$name;
echo "<br>";
echo Student::details();
echo "<br>";
echo Dilushi::details(); //there is some problem.to correct issue we should put
//static keyword istead of self in class method  
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<h4>After adding static keyword instead of self keyword to the age</h4>";
echo Student::details();
echo "<br>";
echo Dilushi::details();
