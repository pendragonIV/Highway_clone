<?php
    $ten_san_pham = $_POST['product_name'];
    $anh = $_POST['link_anh'];
    $gia = $_POST['prices'];
    $so_luong = $_POST['quantity'];
    $ma_loai_san_pham = $_POST['id_productType'];
    require_once "../open-connect.php";
    $sql = "INSERT INTO product(product_name,id_productType)
            VALUES ('$ten_san_pham','$ma_loai_san_pham')";
            mysqli_query($connect, $sql);
    $sql = "SELECT * FROM product where product_name = '$ten_san_pham'";
            $result = mysqli_query($connect, $sql);
            foreach($result as $id ){
                    $id_product = $id['id_product'];
            }
    $sql =  "INSERT INTO picture(link_anh)
            VALUES ('$anh')";
            mysqli_query($connect, $sql);
    $sql = "SELECT * FROM picture where link_anh = '$anh'";
            $result = mysqli_query($connect, $sql);
            foreach($result as $id ){
                    $id_anh = $id['id_anh'];
            }
    $sql =  "INSERT INTO product_detail(prices,quantity,id_anh,id_product)
            VALUES ('$gia','$so_luong','$id_anh','$id_product')";
    $result = mysqli_query($connect, $sql);

    require_once "../close-connect.php";
    header("location:danhsach.php");
?>