<?php
// function signIn(){
//  if(!empty($_POST)){
//   $email == $_POST['Email'];
//   $user_name == $_POST['User_name'];
//   $password == $_POST['Password'];
//   require_once "open-connect.php";
  // $query ="SELECT * FROM admin WHERE email = '".$email."' and user_name = '".$user_name."' and password = '".$password."' ";
//   $result = mysql_query($connect, $query);
//   var_dump($result);
//   mysqli_query($connect,$query);
//   require_once "close-connect.php";
//   if(mysqli_num_rows($result)>0){
//     header("location:helloworld.php");
//   }
// }
//
    session_start();
    $email = $_POST['Email'];
    $user_name = $_POST['User_name'];
    $password = $_POST['Password'];
    require_once "open-connect.php";
    $sql = "SELECT *, COUNT(id_admin) AS so_admin FROM admin WHERE email = '$email' AND user_name = '$user_name'  AND password = '$password'" ;
    $result = mysqli_query($connect, $sql);
    require_once "close-connect.php";
    $flat = 1;
    foreach ($result as $each){
      
        if($each['so_admin'] == 0){
           $flat = 1; 
        }
        else {  
          $_SESSION['id_admin'] = $each['id_admin'];
            $flat = 2; 
      }
    }
    if($flat == 1){
      header('location:signInsignUp.php');
    }
    if($flat == 2){
      header('location:/Thời trang nam casual/back-end/php/quanlytaikhoan/danhsachtaikhoan.php');
    }
    
?>
