<?php 

class Person{
    public $first_name = "";
    public $last_name = "";
    public $age = "";
    
    public function __construct ($first_name, $last_name, $age){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
}     

$person1 = new Person("Solaman", "Raji", 25); 
$person2 = new Person("Abc", "Def", 25);


if ($person1->age > $person2->age){
    echo $person1->first_name . "&nbsp" . $person1->last_name . "&nbsp; is elder than &nbsp; " . $person2->first_name . "&nbsp;" . $person2->last_name . "&nbsp Age: &nbsp" . $person2->age;
}elseif($person1->age < $person2->age){
    echo $person1->first_name . "&nbsp" . $person1->last_name . "&nbsp; is smaller than &nbsp;" . $person2->first_name . "&nbsp;" . $person2->last_name . "&nbsp Age: &nbsp" . $person2->age;
}else {
   echo $person1->first_name . "&nbsp" . $person1->last_name . "&nbsp; and &nbsp;" . $person2->first_name . "&nbsp;" . $person2->last_name ."&nbsp; are same as";
}

?>