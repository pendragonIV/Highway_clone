<?php
    $ma_loai_san_pham = $_GET['id_productType'];
    include_once "../open-connect.php";
    $sql = "DELETE FROM product_type WHERE id_productType = '$ma_loai_san_pham' ";
    mysqli_query($connect, $sql);
    include_once "../close-connect.php";
    header("location:danhsach.php");
?>