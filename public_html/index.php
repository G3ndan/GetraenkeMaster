<?php
require_once "../PHP/setValidUser.php";
?>
<!DOCTYPE html>
 <html lang="de">
 <?php include "../PHP/head.php" ?>
 <title>Getränkemanager</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width= device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <link rel="stylesheet" type="text/css" href="CSS/style.css?v1" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<script type="text/javascript" src="JS/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="JS/jquery.validate.js"></script>
 <script type="text/javascript" src="JS/functions.js"></script>
 </head> 
 <body>

<?php include "../PHP/menu.php" ?>
 <h1><?php var_dump($_SESSION); ?></h1>
 <form  onsubmit="Evaluate(); return false;" method="post">
   <table id="tb1">
     <thead>
       <tr>
         <th>Sorte</th>
         <th>Menge Kästen/Pakete</th>
         <th><button id="add" type="button">Add</button></th>
       </tr>
     </thead>
     <tbody>
       <tr class="row">
         <td>
           <select name="flavour" class="flavour">
           <?php include "../PHP/options.php";?>
         </select>
         </td>
         <td>
           <select name="number" class="number">
             <option>1</option>
             <option>2</option>
             <option>3</option>
             <option>4</option>
           </select>
         </td>
         <td></td>
       </tr>
     </tbody>
   </table>
   <button type="submit" id="submit" name="button">Sumbit</button>
 </form>
 </body> 

 </html>
