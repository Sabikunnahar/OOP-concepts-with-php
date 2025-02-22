<?php
/*
    :Suppose you want some function to be execute before construct function., Then it can be done by static function.
    :Static variable didn't need to create an object to call the variable.
    :Static variable is shared among all the objects of the class.  
    :Static function is called before the constructor function.
    :Static function can be called without creating an object.
*/

Class class1{
    static public $num=10;
    static function test(){
        echo self::$num++;
        echo "<br>";
        echo "Static function is calling";

    }

}

echo class1::$num;
echo "<br>";
echo class1::test();

echo class1::test();
echo class1::test();
echo class1::test();
echo class1::test();
echo class1::test();








