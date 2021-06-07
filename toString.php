<?php
class Person {
 function __construct($name)
 {
 $this->name = $name;
 }
 function __toString()
 {
 return $this->name;
 }
 private $name;
}
$obj = new Person("Andi Gutmans");
print $obj;
?>