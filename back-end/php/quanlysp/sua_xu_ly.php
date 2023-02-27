<?php
    $ma_san_pham = $_POST['id_product'];
    $ma_loai_san_pham = $_POST['id_productType'];
    $ma_chi_tiet_san_pham= $_POST['id_productDetail'];
    $ma_anh =$_POST['id_anh'];
    $ten_san_pham = $_POST['product_name'];
    $gia = $_POST['prices'];
    $so_luong = $_POST['quantity'];
    $ma_loai_san_pham = $_POST['id_productType'];
    if($_FILES['link_anh']['name'] != null){
        if($_FILES['link_anh']['error'] >0){
            echo "file bị lỗi";
            die;
        }else{
            $tmp_name = $_FILES['link_anh']['tmp_name'];
            $anh_sp = $_FILES['link_anh']['name'];
            $target_file = '/Thời trang nam casual/front-end/img/imgdetail/'.$anh_sp;
            move_uploaded_file($tmp_name,$target_file);
            $anh_sp = $anh_sp;
        }
        include_once "../open-connect.php";
        $sql = "UPDATE product SET product_name = '$ten_san_pham'WHERE product.id_product = $ma_san_pham" ;
        mysqli_query($connect, $sql);
        $sql = "UPDATE product_detail SET prices = '$gia', quantity = '$so_luong' WHERE product_detail.id_productDetail = $ma_chi_tiet_san_pham";
        mysqli_query($connect, $sql);
        $sql = "UPDATE product_type SET id_productType = '$ma_loai_san_pham' WHERE product_type.id_productType = $ma_loai_san_pham";
        mysqli_query($connect, $sql);
        $sql = "UPDATE picture SET link_anh = '$anh_sp' WHERE picture.id_anh = $ma_anh ";
        mysqli_query($connect, $sql);
        include_once "../close-connect.php";
        header("location:danhsach.php");
    }
    else {
        $anh_sp = $_POST['link_anh'];
    
    include_once "../open-connect.php";
    $sql = "UPDATE product SET product_name = '$ten_san_pham'WHERE product.id_product = $ma_san_pham" ;
    mysqli_query($connect, $sql);
    $sql = "UPDATE product_detail SET prices = '$gia', quantity = '$so_luong' WHERE product_detail.id_productDetail = $ma_chi_tiet_san_pham";
    mysqli_query($connect, $sql);
    $sql = "UPDATE product_type SET id_productType = '$ma_loai_san_pham' WHERE product_type.id_productType = $ma_loai_san_pham";
    mysqli_query($connect, $sql);
    include_once "../close-connect.php";
    header("location:danhsach.php");
    }
?>