<?php

class Animal {

function __construct(){
  $this->created=time();
}

}
class Dog extends Animal{
  function __construct(){
    $this->created='fuck';
  }
}
$d=new Dog();
echo $d->created;

 ?>
