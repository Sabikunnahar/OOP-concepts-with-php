<?php
/*
    : Interface is same as abstract class.
    : Interface class can contain only abstract methods, it cannot contains normal function.
    : Suppose I have to inherit 2 classes. I cannot inherit directly from 2 classes. So, that's why we use interface.
    : Support multiple inheritance
    : In interface we cannot define variables.
    : We can define variables in abstract class.
    : No constructor in interface.
    : All abstract function have to be public in interface.
*/


interface Interface1 {
    public function test1();
}

interface Interface2{
    public function test2();
}

class Interface3 implements Interface1, Interface2{ 
    public function test1() {
        echo "Test1";
    }

    public function test2() {
        echo "Test2";
    }
}

$obj_interface3 =new Interface3();
$obj_interface3->test1();
$obj_interface3->test2();



?>