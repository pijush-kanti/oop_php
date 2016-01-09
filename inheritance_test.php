<?php 

class MyClass {
    public $first_name = "Pijush";
    public $last_name = "Kanti";
}
 
class MyChildClass extends MyClass {    
    public function getName(){
        return $this->first_name . " " . $this->last_name;
    }
}

$obj = new MyChildClass();
echo $obj->getName();