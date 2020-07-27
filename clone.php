<?php

/**
 *copy an obj properties to another
 *they are'nt equal
 *normal equl are equal instances
 *only  primitive types are copied objects are same
 */
class User
{
  public $name;

  function __clone(){
    echo "you cloned\n";
  }
}
$u=new User();
$u2=clone $u;
$isequal=($u===$u2)?true:false;
if($isequal)
 echo "equal";
 else
 echo "no";
 $u3=$u;
 $isequall=($u===$u3)?true:false;
 if($isequall)
  echo "nequal";
  else
  echo "nno";
 ?>
