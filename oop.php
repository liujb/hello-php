<?php

class Base
{
    public $name;

    //构造函数
    function Base($n)
    {
        $this->name = $n;
    }

    //function
    function sayHello()
    {
        echo 'Hi nice to meet you ' . $this->name;
    }
}

;

class Child extends Base
{
    function sayHello()
    {
        echo 'Hi，this is my son say hello to you ';
    }
}

$p = new Base('Allen');
$p->sayHello();

$c = new Child();
$c->sayHello();
?>