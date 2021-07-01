<?php
class Person {
    function __construct($lastname,$firstname)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }
    function __toString()
    {
        return $this->lastname ." ". $this->firstname;
    }
    private $lastname;
    private $firstname;
}
$obj = new Person("Andi","Gutmans");
print $obj;
?>