<?php

/**
 *called when no method exists takes two args name and arg array
 */
class User
{
  function __call($method,$args){
    echo "fuck no method exists ".$method." ";
    foreach ($args as $key => $value) {
      echo $value;
    }
  }

}

$u=new User();
$u->fuck('test','fuck');



 ?>
