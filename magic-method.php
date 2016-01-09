<?php 

class MyInformation {
    public $name="";
    public $address="";
    public $phone="";
    
    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }
}

$obj1=new MyInformation("pijush", "Mohammadpur, Dhaka", "01914631661");
$obj2=new MyInformation("Monir", "Mohammadpur, Dhaka", "01916441661");

echo "Name = &nbsp;" . $obj1->name . "<br>Address = &nbsp;" . $obj1->address . "<br>Phone number = &nbsp;" .$obj1->phone;
echo "<br><br><br>";
echo "Name = &nbsp;" . $obj2->name . "<br>Address = &nbsp;" . $obj2->address . "<br>Phone number = &nbsp;" .$obj2->phone;


?>