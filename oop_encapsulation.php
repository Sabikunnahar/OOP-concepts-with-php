<?php

class class1{
    /**
     * : If the variable and function is public and called from class2, it will be run and print the value
     * : If class1 variable and function is protected, class2 cannot use it directly because it is protected but can use it by calling it by inheritance. that mechanism is called encapsulation.
     * : If class1 variable and function is private, class2 cannot print the value because it is protected that mechanism is called encapsulation.
     * 
     */
    public $num=10;
    protected $num_pro=20;
    private $num_priv=30;

     function __construct() {
        echo "Welcome, construct1";
        echo "<br>";
    }

    function getData1(){
        echo "getData of class1", $this->num_pro;
    }
}

class class2 extends class1{

    function __construct() {
        $class1_num = $this->num_pro; // will run
       $class1_num_pro = $this->num_pro; // will run. we can't direct use the protected variables but can use it by inheritance.
    //    $class1_num_pri = $this->num_priv; // will not run because private cannot be access from any classes.

       echo "Welcome, construct2\n"; 
       echo "<br>";
   }

   function getData2(){
       $this->getData1(); //here if the function is public it will print, but if it is protected or private it will show error. Because the function is protected and its called encapsulation
   }
}

// $obj_class1 = new class1();
$obj_class2 = new class2();
echo $obj_class2->getData2();




?>