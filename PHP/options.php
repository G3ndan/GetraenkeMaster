<?php
require "db.php";

$result = $mysqli->query("SELECT * FROM Sorte");
$sorten = $result->fetchAll(PDO::FETCH_NUM);

foreach($sorten as $row){
  echo "<option>$row[0]</option>";
}

$result->closeCursor();
$result = null;
$mysqli = null;
?>
