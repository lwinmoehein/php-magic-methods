<?php

class User{
  public $name="lmh",$age=1;
  function __toString(){
    return "this is a to str ".$this->name.",".$this->age;
  }
}
$u=new User();
echo $u;
 ?>
