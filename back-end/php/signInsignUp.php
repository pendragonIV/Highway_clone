<?php
//  require_once "signUp.php";
//  signUp();
  
//  signIn();
session_start();
    if(isset($_SESSION['id_admin'])){
        header('location:/Thời trang nam casual/back-end/php/quanlytaikhoan/danhsachtaikhoan.php');
    }
?>
<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="/Thời trang nam casual/back-end/css/signInsignUp.css">
  <link rel="stylesheet" href="/Thời trang nam casual/back-end/css/base.css">
  <link rel="stylesheet" href="/Thời trang nam casual/back-end/fontawesome-free-6.1.1-web/css/all.css">
</head>

<body>
<form action="signIn.php" method="post">
                <div class="body__signin--main">
                    <div class="body__signin--left">
                        <h2 class="body__signintitle--top">Đăng nhập</h2> <br>
                        <input class="body__validate--input" type="email" name="Email" placeholder="Điền địa chỉ Email của bạn"> <br>
                        <input class="body__validate--input" type="text" id="User_name" name="User_name" placeholder="Tên tài khoản">
                        <input class="body__validate--input" type="password" id="Password" name="Password" placeholder="Mật khẩu"><br>
                        <div class="body__forgotpwd"><a href="">Quên mật khẩu?</a></div><br>
                        <button class="body__signin--button" onclick="return signInvalidate()" type="submit">ĐĂNG NHẬP</button>
                    </div>
                    <div class="body__signin--right">
                        <h2 class="body__signintitle--top">Khách hàng mới</h2> <i style="cursor: pointer;" onclick="signIn()"
                            class="fa-solid fa-xmark"></i><br>
                        <div class="login__frame--copy">
                            <p>Chỉ một vài bước đơn giản đăng ký bạn sẽ <br> nhận được những quyền lợi đặc biệt sau từ <br> Highway Menswear:</p>
                            <p>-Đặt hàng thuận tiện và nhanh chóng.</p>
                            <p>-Tra cứu lịch sử mua hàng và điểm tích lũy.</p>
                            <p>-Nhận các thông tin về sản phẩm và <br>
                                khuyến mãi đặc biệt.
                            </p>
                            
                            <a onclick="signUp()"><span class="body__signin--button" style="cursor: pointer;">ĐĂNG KÝ</span></a>
                        </div>
                    </div>
                </div>
            </form>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
 
  <script src="/Thời trang nam casual/back-end/js/validate.js"></script>
</body>

</html>