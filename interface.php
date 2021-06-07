<?php

interface Loggable {
    function hello();
 function logString();
}
class Person implements Loggable {
 private $name= "Dima", $address="Bucuresti", $idNumber="1212", $age=20;
 function logString() {
 return "class ".__CLASS__.": name = $this->name, ID = $this->idNumber\n";
 }
 function hello(){
    echo __CLASS__." Hello <br>";
 }
}
class Product implements Loggable {
 private $name , $price, $expiryDate;
 function logString() {
 return "class Product: name = $this->name, price = $this->price\n";
 }

 function hello(){
    echo __CLASS__." Hello  <br>";
 }
}
function MyLog($obj) {
 if ($obj instanceof Loggable) {
 print $obj->logString();
 $obj->hello();
 } else {
 print "Error: Object doesn’t support Loggable interface\n";
 }
}
$person = new Person();

// ...
$product = new Product();
MyLog($person);
MyLog($product);
?>