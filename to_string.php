<?php 

class MyClass
{
  public $prop1 = "I'm a class property!";
 
  public function __construct()
  {
      echo 'The class "', __CLASS__, '" was initiated!<br />';
  }
 
  public function __destruct()
  {
      echo 'The class "', __CLASS__, '" was destroyed.<br />';
  }
 
  
 public function __toString()
  {
      $number = "string";
      //foreach ()
      return $number;
  }
 
//  public function setProperty()
//  {
//      $this->prop1 = $newval;
//  }
// 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
 
}
 
$obj = new MyClass;
echo $obj;


?>