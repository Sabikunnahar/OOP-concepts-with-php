<?php

/*
    : Support multiple class inheritance.
    : If you create a function with the same name using class, it will execute its class function first then the inherited function's class.   
    : If there is two inherited classes have name function  you have to use 'insteadof'. Otherwise, then it will show error. 
    : If you want to use the same function name of the inherited class then you have to use the 'as' keyword.
*/

/*
Its the example of multiple inheritance.
class class1{

    function func1(){
        echo "Class1 func1";
    }
}

class class2 extends class1{
   function func1(){
       echo "Class2 func1";
   }
}

class class3 extends class2{
    function func1(){
        echo "Class3 func1";
    }
 }

class class4 extends class3{
    function func1(){
        echo "Class4 func1";
    }
 }


// $obj_class1 = new class1();
$obj_class2 = new class2();
*/

trait Trait1 {
    function func1() {
        echo "Trait1 func1\n";
    }
}

trait Trait2 {
    function func1() {
        echo "Trait2 func1\n";
    }
}

class Class3 {
    use Trait1, Trait2{
        Trait1::func1 insteadof Trait2;
        Trait2::func1 as func2;
    }
    function func1() {
        echo "Class 3\n";
    }
}

$obj = new Class3();
$obj->func1(); // Output: Trait1 func1
$obj->func2();
