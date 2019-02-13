<?php
function cleanInput($var){
  $var = trim($var);
  $var = stripslashes($var);
  $var = htmlspecialchars($var);
  return $var;
}
?>
