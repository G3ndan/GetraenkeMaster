<?php
//require "../PHP/checkValidUser.php";

if(isset($_POST['p']) && !empty($_POST['p'])){
  $script = $_POST['p'];
  include "../PHP/list.php";
  if(in_array($script, $list)){
    include "../PHP/$script".".php";
  }
  else{
    header("Location: http://localhost/index.php");
    die();
  }
}
else{
  header("Location: http://localhost/index.php");
  die();
}

?>
