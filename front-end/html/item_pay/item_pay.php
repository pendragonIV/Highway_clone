<?php
session_start();
$id_product = $_GET['id_product'];
if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán</title>
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/css/item_pay.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class = "content__container">
        <div class = "content__container__col1">
            <div class = "content__container__col1__link" >
                <a href = "" > 
                    <img class = "content__container__col1__link--img" src= "/Thời trang nam casual/front-end/img/imgtrangchu/imglogo.png" />
                </a>
            </div>
            <div class = "content__container__titles">
                <p class = "content__container__titles--medium">
                    Thông tin giao hàng
                </p>
                <p class = "content__container__titles--small">
                    Bạn đã có tài khoản ?
                    <a href = "">
                        Đăng nhập 
                    </a>
                </p>
            </div>
            <div class = "content__container__col1__label">
           
                <div>
                    <input name="name_customer"class = "label--style" placeholder =" Họ và tên">
                </div>

                <div class = "content__container__col1__label--layout1">
                    <input class = "content__container__col1__label--email label--style" placeholder =" Email">
                    <input class = "content__container__col1__label--phone label--style" placeholder =" Số điện thoại">
                </div>
                <div>
                    <input class = "label--style" placeholder =" Địa chỉ">
                </div>
                <div>
                    <select required="">
                        <option value="">Chọn Tỉnh / Thành phố</option>
                        <option value="">abc</option>
                    </select>
                    <select required="">
                        <option value="">Chọn Quận / Huyện</option>
                        <option value="">abc</option>
                    </select>
                </div>
                <div>
                    <select required="">
                        <option value="">Chọn Phường / Xã</option>
                        <option value="">abc</option>
                    </select>
                </div>
                <div>
                    <input class = "content__container__col1__label--note label--style" placeholder =" Ghi chú">
                </div>
            </div>
            <div class = "content__container__pay--method">
                <p class = "content__container__titles--medium">
                    Phương thức thanh toán
                </p>
                <div class = "content__container__pay--option">
                    <input class = "content__container__pay--tick" >
                    <label class = "content__container__pay--detail">
                        Thanh toán tại nhà - Cash On Delivery (COD)
                    </label>
                </div>
            </div>
        </div>
     
        <div class = "content__container__col2">
        <?php   if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
       if(sizeof($_SESSION['giohang'])>0){
         $tong = 0;
         for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
             $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
             $tong+=$tt;
             ?>
           <div class = "content__container__col2__list--item">
               <table>
                   <tr>
                       <td>
                           <img class = "content__container__col2__list--img" src = "<?php echo $_SESSION['giohang'][$i][0] ?>" />
                       </td>
                       <td>
                       <?php echo $_SESSION['giohang'][$i][3] ?>
                       </td>
                       <td>
                       <?php echo $_SESSION['giohang'][$i][1] ?>
                       </td>
                       <td>
                       <?php echo $_SESSION['giohang'][$i][2]."đ" ?>
                       </td>
                   </tr>
               </table>
           </div> 
           <?php
         }
        }
      } else{
        echo"Giỏ hàng rỗng";
    }
      ?>

           <div class ="content__container__col2--code">
               <input class ="content__container__col2--input" placeholder ="  Mã giảm giá">
               <button class = "content__container__col2--button">Sử dụng</button>
           </div>
           <div class ="content__container__col2--bill">
                <ul>
                    <li>
                       Giảm giá
                    </li>
                    <li>

                    </li>
                </ul>
                <ul>
                    <li>
                        Tạm tính
                    </li>
                    <li>
                        <?php echo $tt."đ"; ?>
                    </li>
                </ul>
                <ul>
                    <li>
                        Phí vận chuyển
                    </li>
                    <li>
                        Shop sẽ liên hệ sau
                    </li>
                </ul>
           </div>
           <div class ="content__container__col2--total">
                <p class = "content__container__titles--medium">
                    Tổng cộng
                </p>
                <p class = "content__container__titles--medium">
                    <?php echo $tt."đ";?>
                </p>
           </div>
           <div class= "content__container__col2--note">
                <p class = "content__container__col2--note-text">
                    Chúng tôi sẽ XÁC NHẬN đơn hàng bằng EMAIL hoặc ĐIỆN THOẠI. Bạn vui lòng kiểm tra EMAIL hoặc NGHE MÁY ngay khi đặt hàng thành công và CHỜ NHẬN HÀNG nha.
                </p>
           </div>
           <div class = "content__container__col2__final--step">
                <a href="/Thời trang nam casual/front-end/html/cart/cart.php" style="text-decoration: none; " href="/Thời trang nam casual/front-end/html/cart/cart.php"class = "content__container__col2__final--return">
                    <i class="fa-solid fa-angle-left"></i>
                    <p class = "content__container__titles--medium">
                        Giỏ hàng
                    </p>
                </a>
                <form method="post"action="/Thời trang nam casual/back-end/php/quanlysp/dat_hang.php">
                <input type="hidden" name="id_product" value="<?php echo $id_product ?>">
                <button style="cursor: pointer; background-color: black; color:white; witdh: 50px;"  placeholder="Hoàn tất đơn hàng"></button>
           </div>
</form>

        </div>
    </div> 
</body>
</html>