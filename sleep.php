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
  function __sleep(){
    echo "serialized\n";
    return ['da','dada'];
  }
}
$u=new User();
$ser=serialize($u);
var_dump($ser);

 ?>
