<?php

class Animal {

function __destruct(){
  $this->deleted=time();
  echo $this->deleted;
}

}

$d=new Animal();
unset($d);

 ?>
