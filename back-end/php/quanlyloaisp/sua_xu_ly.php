<?php
    $ma_loai_san_pham = $_POST['id_productType'];
    $ten_loai_san_pham = $_POST['typeName'];
    include_once "../open-connect.php";
    $sql = "UPDATE product_type SET typeName = '$ten_loai_san_pham' where id_productType = '$ma_loai_san_pham'";
    mysqli_query($connect, $sql);
    include_once "../close-connect.php";
    header("location:danhsach.php");
?>