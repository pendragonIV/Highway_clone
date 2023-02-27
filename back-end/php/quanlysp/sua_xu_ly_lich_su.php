<?php
    $status = $_POST['status'];
    $id_bill = $_POST['id_bill'];
    include_once "../open-connect.php";
    $sql = "UPDATE bill SET status = $status WHERE bill.id_bill = $id_bill" ;
    mysqli_query($connect, $sql);
    header("location:lich_su_hoa_don.php");
?>