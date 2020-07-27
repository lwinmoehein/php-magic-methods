<?php
class User{
  /**
  *gets called when no var exists
  **/
  function __get($field_name){
    echo "there is no thing as ".$field_name;
  }
}
$u=new User();
$u->test;
 ?>
