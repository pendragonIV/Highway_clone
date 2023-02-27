<?php
    $id_admin = $_POST['id_admin'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_name = $_POST['user_name'];
    $name_admin = $_POST['name_admin'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $phone_number = $_POST['phone_number'];
    require_once "../open-connect.php";
    //sql
    $sql = "UPDATE admin SET email = '$email', password = '$password',  user_name = '$user_name',
    name_admin = '$name_admin', dateOfBirth = '$dateOfBirth', 
    phone_number = '$phone_number' WHERE id_admin = '$id_admin'";
    mysqli_query($connect, $sql);
    require_once "../close-connect.php";
    header("location:danhsachtaikhoan.php");
?>