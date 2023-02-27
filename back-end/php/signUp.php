<?php
 function signUp(){
     if(!empty($_POST)){
         $name_admin =$_POST['name_admin'];
         $user_name =$_POST['user_name'];
         $email =$_POST['email'];
         $password =$_POST['password'];
         $phone_number =$_POST['phone_number'];
         $dateOfBirth =$_POST['dateOfBirth'];
         $address =$_POST['address'];
         require_once "open-connect.php";
         $query ="INSERT INTO admin(name_admin, user_name, email, password, phone_number, dateOfBirth, address)
         value('".$name_admin."','".$user_name."','".$email."','".$password."','".$phone_number."','".$dateOfBirth."','".$address."')";
         mysqli_query($connect,$query);
         require_once "close-connect.php";
     }
 }