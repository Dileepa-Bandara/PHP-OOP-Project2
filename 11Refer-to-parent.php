<?php


class Student
{
    //we must use static keyword if we access properties using self::$property
    public static $studentName = "Dileepa Lakmina Bandara";

    public  static function studentFunction()
    {
        return "My name is " . self::$studentName;
    }
}


class SubStudent extends Student
{
    public static function studentFunction()
    {
        return  Student::studentFunction() . "and My School is St Annes College";
    }
}

echo Student::studentFunction();
echo "<br>";
echo SubStudent::studentFunction();
