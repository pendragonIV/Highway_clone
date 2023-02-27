<?php
    $id_admin = $_GET['id_admin'];
    require_once "../open-connect.php";
    //Lấy dữ liệu từ DB ra
    $sql = "DELETE FROM admin WHERE id_admin = $id_admin";
    mysqli_query($connect, $sql);
    require_once "../close-connect.php";
    header("location:danhsachtaikhoan.php");
?>