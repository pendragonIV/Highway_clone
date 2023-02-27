<?php
    $ma_san_pham = $_GET['id_product'];
    $ma_loai_san_pham = $_GET['id_productType'];
    $ma_chi_tiet_san_pham=$_GET['id_productDetail'];
    $ma_anh =$_GET['id_anh'];
    include_once "../open-connect.php";
    $sql = "DELETE FROM product_detail WHERE id_product = $ma_san_pham  ";
    mysqli_query($connect, $sql);
    $sql = "DELETE FROM product WHERE id_product = $ma_san_pham  ";
    mysqli_query($connect, $sql);
    include_once "../close-connect.php";
    header("location:danhsach.php");
    ?>