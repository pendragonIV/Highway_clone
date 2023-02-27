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
                                <h1 class="h4 text-gray-900 mb-4">Sửa trạng thái đơn hàng</h1>
                            </div>
                            <form action="sua_xu_ly_lich_su.php" method="POST" class="user">
                            <?php
                                $status = $_GET['status'];
                                $id_bill = $_GET['id_bill'];
                            require_once "../open-connect.php";
                            ?>
                            <div class="form-group">
                                    <input type="hidden" name="id_bill"class="form-control form-control-user" id="exampleInputEmail"
                                    value="<?php echo  $id_bill ?>"  placeholder="Email Address">
                                </div>
                                
                                <div class="form-group">
                                <p> Loại sản phẩm:</p> <select name="status">
            <option value>- Chọn -</option>
            <?php
            
          for($i=0; $i<=3; $i++){
                ?>
                <option value="<?php echo $i ?>"
                    <?php
                        if($status == $i){
                    ?>
                            selected
                    <?php
                        }
                    ?>
                >
                    <?php
                        if($i == 0){
                            echo "Chưa duyệt";
                        }
                        elseif ($i == 1){
                            echo "Đã duyệt, đang vận chuyển";
                        }
                        elseif ($i == 2){
                            echo "Đã xong";
                        }
                        elseif ($i == 3){
                            echo "Hủy";
                        }
                    ?>
                </option>
                <?php
            }
            require_once "../close-connect.php";
           
            ?>
                                    
                                    </select>
                                
                                <button class="btn btn-primary btn-user btn-block">
                                   Sửa trạng thái đơn hàng
                                </button>
                                <hr>
                                
                            </form>
                            <hr>
                            
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