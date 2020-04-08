<?php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['email'])) {
  echo "Welcome ", $_SESSION['name'], "!";
  echo "<br><a href='logout.php'>Sign Out</a>";
}
else {
  header('Location:login.html');
}
if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 
      
echo"views = ".$_SESSION['views']; 
?>