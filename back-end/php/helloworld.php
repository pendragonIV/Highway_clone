 <?php
     session_start();
     if(!isset($_SESSION['id_admin'])){
         header('location:signInsignUp.php');
     }
     echo ('abc');
?>
  Hello world! abc
 <a href="logout.php">logout</a> 