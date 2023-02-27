<?php
session_start();
if(isset($_POST['cong']) || isset($_POST['tru'])){
    $quantity = $_POST['quantity'];
$id = $_POST['id'];
$_SESSION['giohang'][$id][3] = $quantity;
if($quantity == 0){
    array_splice($_SESSION['giohang'],$id,1);
}

}
header('location:cart.php');


?>