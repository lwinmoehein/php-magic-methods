<?php
/**
*get called when non existing variable is set to a value
**/

/**
 *
 */
class User
{
  public $username;
  function __get($name){
    if($name=='name'){
      echo $this->username;
    }
  }
  function __set($name,$val){
    if($name=='name'){
      $this->username=$val;
    }
  }
}
$u=new User();
$u->name='test';
echo $u->username;
echo $u->name;
 ?>
