<?php
    $ten_loai_san_pham = $_POST['typeName'];
    include_once "../open-connect.php";
    $sql = "INSERT INTO product_type(typeName) VALUES ('$ten_loai_san_pham')";
    mysqli_query($connect, $sql);
    include_once "../close-connect.php";
    header("location:danhsach.php");
?>