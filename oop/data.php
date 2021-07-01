<?php

require_once "classes.php";

$publications = array();

try {
    $dbh = new PDO("mysql:host=localhost;dbname=publications", "root", "root");
}catch (Exception $e){
    echo "Error: $e";
    die();
}

$sql = ("SELECT * FROM publication");
try{
    foreach ($dbh->query($sql) as $row){
        $publications[] = new $row['type']($row);
    }
}catch (EmptyArrayHandleException $e){
    print "Error: $e";
}catch (Exception $e2){
    print "Error: $e2";
}

?>