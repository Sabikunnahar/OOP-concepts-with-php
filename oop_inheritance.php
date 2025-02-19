<?php

class class1{

     function __construct() {
        echo "Welcome, construct1";
        echo "<br>";
    }

    function func1(){
        echo "Class1 func1";
    }
}

class class2 extends class1{

    function __construct() {
        parent::__construct(); // by this approache we can call the parent class also
       echo "Welcome, construct2";
       echo "<br>";
   }

   function func1(){
       echo "Class2 func";
   }
}

// $obj_class1 = new class1();
$obj_class2 = new class2();



?>