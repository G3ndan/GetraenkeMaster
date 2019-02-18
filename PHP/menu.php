<?php
echo "<header>
  <div class='menu-bar'>
    <a class='bt-menu'><i class='fas fa-bars'></i></a>
  <nav>
    <ul>
      <li><a href='index.php'><i class='fas fa-home'></i>Home</a></li>
      <li><a href='chart.php'><i class='far fa-chart-bar'></i>Stats</a></li>
      ";
      if($_SESSION['id'] == 1){
        echo "<li><a href='addUser.php'><i class='fas fa-user'>Add User</i></a></li>";
      }
      echo "<li><a href='changePassword.php'><i class='fas fa-lock'></i>Change Password</a></li>
      <li><a href='deauth.php'><i class='fas fa-power-off'></i>Log Out</a></li>
    </ul>
  </nav>
</div>
<h1>CGI-Getränkemanager</h1>
</header>";
 ?>
