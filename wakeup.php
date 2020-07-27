<?php
/**
*get called when object serialized
**/
/**
 *
 */
class User
{

  public $da='da val';
  public $dada='dada va';
  function __wakeup(){
    echo "unserialized\n";
  }
  function __sleep(){
    echo "serialized";
    return ['da'];
  }
}
$u=new User();
$se=serialize($u);
var_dump($se);
$de=unserialize($se);
var_dump($de);

 ?>
