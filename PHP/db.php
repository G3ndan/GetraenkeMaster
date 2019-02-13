<?php
$username="root";
$password="";
$database="Getranke_Manager";

try{
  $mysqli = new PDO("mysql:host=localhost; dbname=$database", $username, $password);
}
catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>
