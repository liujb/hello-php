<?php
class Base
{
  public $name;
  
  // 构造函数
  public function Base($n) {
    $this->name = $n;
  }
  
  // function
  public function sayHello() {
    echo 'Hi nice to meet you ' . $this->name;
  }
}

class Child extends Base
{
  public function sayHello() {
    echo 'Hi，this is my son say hello to you ';
  }
}

$p = new Base('Allen');
$p->sayHello();

$c = new Child();
$c->sayHello();
