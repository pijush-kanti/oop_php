<?php 

class Person{
    public $first_name = "";
    public $last_name = "";
    private $age = "";
    
    public function __construct ($first_name, $last_name, $age){
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
    public function PersonInfo(){
        return $this->age;
    }
}     
$person1 = new Person("Solaman", "Raji", 25); 
$person2 = new Person("Abc", "Def", 27);


/*function personCompare($person1, $person2){ 
    if ($person1->PersonInfo($person2) > $person2->PersonInfo($person2)) {
        return $person1->first_name . "&nbsp" . $person1->last_name . "&nbsp; is elder than &nbsp; " . $person2->first_name . "&nbsp;" . $person2->last_name . "&nbsp Age: &nbsp" . $person2->age;
    } elseif ($person1->age < $person2->age) {
        return $person1->first_name . "&nbsp" . $person1->last_name . "&nbsp; is smaller than &nbsp;" . $person2->first_name . "&nbsp;" . $person2->last_name . "&nbsp Age: &nbsp" . $person2->age;
    } else {
        return $person1->first_name . "&nbsp" . $person1->last_name . "&nbsp; and &nbsp;" . $person2->first_name . "&nbsp;" . $person2->last_name . "&nbsp; are same as";
    }
}
echo personCompare($person1, $person2);*/

echo $person1->PersonInfo(). "<br>";
echo $person2->PersonInfo();

/*class PersonInfo extends Person {
    public function ()
}*/

?>