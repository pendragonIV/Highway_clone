<?php
    $email = $_POST['email'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $name_admin = $_POST['name_admin'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $phone_number = $_POST['phone_number'];
    require_once "../open-connect.php";
    //sql
    $sql = "INSERT INTO admin(email,user_name,password,name_admin,dateOfBirth,phone_number) VALUES ('$email', '$user_name', '$password', '$name_admin', '$dateOfBirth' ,'$phone_number')";
    mysqli_query($connect, $sql);
    require_once "../close-connect.php";
    header("location:danhsachtaikhoan.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="/Thời trang nam casual/back-end/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Thời trang nam casual/back-end/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">
                        <img style="width : 115%; height: 100vh;" src="/Thời trang nam casual/front-end/img/imgdetail/cse1.1.jpg" alt="">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Thêm sản phẩm</h1>
                            </div>
                            <form action="them_xu_ly.php" method="post" class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="product_name" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Enter product name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" name="prices" class="form-control form-control-user" id="exampleLastName"
                                        placeholder="Enter your prices">
                                    </div>
                                </div>
                                <div class="form-group">
                                <select name="id_productType">
         <p>Loại sản phẩm:</p><option>- Chọn -</option>
    <?php 
        include_once "../open-connect.php";
        $sql = "SELECT * FROM product_type";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each){
    ?>
        <option value="<?php echo $each['id_productType']?>">
            <?php 
                echo $each['typeName'];
            ?>
        </option> 
    <?php 
        }
        include_once "../close-connect.php";
    ?>
    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="number" name="quantity" class="form-control form-control-user"
                                          id="exampleInputPassword" placeholder="quantity">
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="file" name="link_anh" 
                                         id="exampleInputDateOfBirth" placeholder="link_anh">
                                    </div>
                                    
                                </div>
                               
                                
                                <button class="btn btn-primary btn-user btn-block">
                                   Thêm sản phẩm
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>