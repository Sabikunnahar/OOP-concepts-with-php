<?php

class Oop_concept{
    public $x;

    /**
     * :construct function is always called in the beginning of the the class
     * :we also can assign a value to the property in construct function like '$this->x = 10;'
     */

     function __construct() {
        $this->x = 10;
        echo "Welcome, The program starts";
        echo "<br>";
    }


    function car1(){
        echo $this->x;
    }
    function car2(){
        echo "Function car 2 is calling";
    }

    /**
     * :destruct function is always called in the end of the the class
     * :
     */
    function __destruct(){
        echo "<br>";
        echo"The program Ends, Thank you";
    }

}
$object = new Oop_concept();
$object->car1();





?>