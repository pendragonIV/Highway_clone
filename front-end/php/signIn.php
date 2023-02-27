<?php
// function signIn(){
//  if(!empty($_POST)){
//   $email == $_POST['Email'];
//   $user_name == $_POST['User_name'];
//   $password == $_POST['Password'];
//   require_once "open-connect.php";
  // $query ="SELECT * FROM customer WHERE email = '".$email."' and user_name = '".$user_name."' and password = '".$password."' ";
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
    $sql = "SELECT *, COUNT(id_customer) AS so_customer FROM customer WHERE email = '$email' AND user_name = '$user_name'  AND password = '$password'" ;
    $result = mysqli_query($connect, $sql);
    require_once "close-connect.php";
    $flat = 1;
    foreach ($result as $each){
      
        if($each['so_customer'] == 0){
           $flat = 1; 
        }
        else {  
          $_SESSION['id_customer'] = $each['id_customer'];
            $flat = 2; 
      }
    }
    if($flat == 1){
      header('location:/Thời trang nam casual/front-end/html/trang_chu/index.php');
    }
    if($flat == 2){
      header('location:/Thời trang nam casual/front-end/html/trang_chu/demo.php');
    }
    
?>
