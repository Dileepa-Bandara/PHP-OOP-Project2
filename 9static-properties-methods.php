<?php


//access class properties and methods without making instance
class Student
{
    public static $name;
    public static $age = 23;


    public static function myName()
    {
        //instead of this keyword we can use self::name
        return  "My name is " . self::$name;
    }
}

class SubStudent extends Student
{
}


Student::$name = "Dileepa Lakmina Bandara";
echo Student::myName();



//if we mutate/overriding parent class property in 
//subclass inherited from it,parent class property also change
echo "<br>";
echo Student::$age; //before override age = 23



//this will change parent property also
SubStudent::$age = 30;
echo "<br>";
//
echo Student::$age;
