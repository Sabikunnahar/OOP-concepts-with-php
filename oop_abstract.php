<?php
    /**
     * : Abstract class contains ateast one abstract function
     * : Abstract function must be call/declare but can'ty be deployed. That means this function will be only called but cannot have body in abstract class.
     * : Abstract classes object cannot be create.
     * : When the Abstract class is inherited, the abstract function have to be called and have to be use.
     */


abstract class bank{
    abstract function id_verify();
}

class ebl extends bank{
    function id_verify(){
        echo "EBL";
    }
}

class dbbl extends bank{
    function id_verify(){
        echo "DBBL";
    }
}

class std extends bank{
    function id_verify(){
        echo "STD";
    }
}



?>