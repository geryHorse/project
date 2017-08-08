<?php

class animal {
    public $name;

    function __construct($param) {
        $name = $param;
        echo $name;
        echo '--<br>';
        echo $param;
    }

    function __get($name) {
        return $this->$name;
    }

    function __set($name, $value) {
        echo $name;
        $this->$name = $value;
    }

}

$dog = new animal('dog');
// $dog->$name = "aaa";
// echo $dog->$name;
// echo $dog -> $name;

// $dog -> $name;


echo '<br>---------------------';


class classname 
{
    public $attribute;
    function __get($name)
    {
        return $this->$name;
    }

    function __set($name, $value)
    {
        $this->$name = $value;
    }
}

$a = new classname();





?>