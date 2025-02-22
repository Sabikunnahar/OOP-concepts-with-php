<?php
    /*
        : Same operation/function may be behave differently in different classes
     */
class class1{
    public $x;

    function func1(){
        echo $this->x;
    }
}

class class2{
    public $x;

    function func1(){
        echo $this->x;
    }
}

$obj_class1 = new class1();
$obj_class2 = new class2();