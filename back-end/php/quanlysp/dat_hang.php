<?php
    session_start();
    $id_product = $_POST['id_product'];
    if(!isset($_SESSION['giohang']))$_SESSION['giohang']=[];
if(isset($_POST['pay']) && ($_POST['pay'])){
    $hinh = $_POST['hinh'];
    $tensp = $_POST['tensp'];
    $gia = $_POST['gia'];
    $soluong = $_POST['soluong'];
          // Kiểm tra sản phẩm có trang giỏ hàng không để chống hiển thị lặp lại sản phẩm
          // kiểm tra sản phẩm có trùng hay không
          $test=0;
          for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
              if($_SESSION['giohang'][$i][1] == $tensp){
                  $test=1;
                  $soluongmoi=$soluong+$_SESSION['giohang'][$i][3];
                  $_SESSION['giohang'][$i][3]=$soluongmoi;
                  break;
              }
          }

          // thêm mới sản phẩm vào giỏ hàng
          if($test==0){
          $sp=[$hinh,$tensp,$gia,$soluong];
          $_SESSION['giohang'][]=$sp;
          }
}
    $id_customer = $_SESSION['id_customer'];
    $id_product = $_POST['id_product'];
    $ngay_dat_hang = date('Y-m-d');
    $tinh_trang = 0;
    include_once "../open-connect.php";
    $sql = "SELECT * FROM product_detail 
                WHERE id_product = $id_product
    ";
    $result = mysqli_query($connect, $sql);
    foreach ($result as $each_id_productDetail){
        $id_productDetail = $each_id_productDetail['id_productDetail'];
    }
    $sql = "INSERT INTO bill(id_customer,date,status) VALUES ('$id_customer', '$ngay_dat_hang', '$tinh_trang')";
    mysqli_query($connect, $sql);
    $sql_id_bill = "SELECT MAX(id_bill) as id_bill_max FROM bill WHERE id_customer = '$id_customer'";
    $result_id_bill = mysqli_query($connect, $sql_id_bill);
    foreach ($result_id_bill as $each_id_bill){
        $id_bill = $each_id_bill['id_bill_max'];
    }
    $gio_hang = $_SESSION['giohang'];
    if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang'])>0){
          $tong = 0;
          for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
              $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
              $tong+=$tt;
              $prices = $_SESSION['giohang'][$i][2];
              $quantity = $_SESSION['giohang'][$i][3];
          }
        }
    }
        $sql_insert_billdetail = "INSERT INTO billdetail(id_bill,id_productDetail,total_money,prices,quantity,date) VALUES ('$id_bill', '$id_productDetail','$tt', '$prices', '$quantity','$ngay_dat_hang')";
        mysqli_query($connect, $sql_insert_billdetail);
    unset($_SESSION['giohang']);
    include_once "../close-connect.php";
    header('location:lich_su_hoa_don.php');
?>