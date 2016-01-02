<?php 

class MyClass
{
  protected $prop1 = "I'm a class property!";
 
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
      echo "Using the toString method: ";
      return $this->getProperty();
  }
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  protected function getProperty()
  {
      return $this->prop1 . "<br />";
  }
  public function callProtected()
  {
      return $this->getProperty();
  }
}
 
class MyOtherClass extends MyClass
{
  public function newMethod()
  {
      echo "From a new method in " . __CLASS__ . ".<br />";
  }
  
  public function __construct()
  {
      parent::__construct();
      echo "A new constructor in " . __CLASS__ . ".<br />";
  }
 
  
 public function __destruct() {
     parent::__destruct();
     echo "A new detructor in" . __CLASS__ . ".<br />";
 }
 
  
}
 
// Create a new object
//$newobj = new MyClass;
$newobj = new MyOtherClass;
 //echo $newobj;
echo $newobj->callProtected();
echo $newobj->newMethod();
//unset($newobj);
?>