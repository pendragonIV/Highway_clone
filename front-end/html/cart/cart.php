<?php
      session_start();
      //làm rỗng giỏ
      $id_product = $_POST['id_product'] ?? "";
      if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
      //xóa toàn bộ giỏ hàng
      if(isset($_GET['delcart']) && $_GET['delcart']==1) unset($_SESSION['giohang']); 
      // xóa sản phẩm chi tiết
      if(isset($_GET['delid']) && $_GET['delid']>=0){
          array_splice($_SESSION['giohang'],$_GET['delid'],1);
      }
      //lấy dữ liệu bên trong form
      if(isset($_POST['addcart']) && ($_POST['addcart'])){
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
      // function showgiohang(){
      //     if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
      //       if(sizeof($_SESSION['giohang'])>0){
      //         $tong = 0;
      //         for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
      //             $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
      //             $tong+=$tt;
      //             echo '<tr>
      //             <td>'.($i+1).'</td>
      //             <td><img  src="'.$_SESSION['giohang'][$i][0].'"></td>
      //             <td>'.$_SESSION['giohang'][$i][1].'</td>
      //             <td>'.$_SESSION['giohang'][$i][2].'</td>
      //             <td>'.$_SESSION['giohang'][$i][3].'</td>
      //             <td>
      //                   <div>'.$tt.'</div>
                  
      //             </td>
      //             <td>
      //                   <a href="cart.php?delid='.$i.'">Xóa</a>
      //             </td>
      //             </tr>
      //             ';
      //         }
      //         echo '
      //           <tr>
      //               <th colspan="5">Total cost</th>
      //               <th>
      //                   <div>'.$tong.'</div>
      //               </th>                
      //           </tr>           
      //         ';
      //     }
      //     else{
      //         echo"Giỏ hàng rỗng";
      //     }
      //   }
      // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel = "stylesheet" href = "/Thời trang nam casual/front-end/css/shopping_cart.css">
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/html/cart/css_cart.css">
    <link rel="stylesheet" href ="/Thời trang nam casual/front-end/css/base.css">
    <style>
        input[type=number]::-webkit-inner-spin-button {
  display: none;
}
    </style>
</head>
<body>
<header class="body_headerindex--top">
        <ul class="body__bannertop--indexleft">
            <li class="body__bannertop--index__li">
                <a style="color: #b00;" href="">
                    SALE
                </a>
            </li>
            <li class="body__bannertop--index__li">
                <a href="">
                    HÀNG MỚI

                </a>
            </li>
            <li class="body__bannertop--index__li">
                <a href="/Thời trang nam casual/front-end/html/san_pham/product.php">
                    SẢN PHẨM

                </a>
            </li>
            <li class="body__bannertop--index__li">
                <a href="../cauchuyen/cauchuyen.php">
                    CÂU CHUYỆN

                </a>
            </li>
        </ul>
        <a href="/Thời trang nam casual/front-end/html/trang_chu/index.php"><img class="body__imglogo" src="/Thời trang nam casual/front-end/img/imgtrangchu/imglogo.png" alt=""></a>

        <div class="body__bannertop--indexright">
            <a style="text-decoration: none; color: white;"href="../tintuc/tintuc.php"><span>TIN TỨC</span></a>
           
           <span>GIỎ HÀNG</span>
        <div class="body__bannertop--indexright__languageicon">
            <span>
                <select name="language" id="language">
                    <option value="0">VN</option>
                    <option value="1">EN</option>

                </select></span>


        </div>


    </div>

    </header>
    <div class = "content__container--in4">
        <div class = "content__container__cart">
            <div class="content__container__cart--title">GIỎ HÀNG</div>
            <div class = "content__container__cart--block">
                <!-- if cart empty -->
                <div class = "container__list__empty">
                    <p class = "text--nomal">
                        Không có sản phẩm nào trong giỏ hàng của bạn!
                    </p>
                    <div class = "container__list__empty__back"> 
                        <i class="fa-solid fa-arrow-rotate-left"></i>
                        <a onclick="window.history.go(-1); return false;" class  ="container__list__empty__back--link" href = "../item_detail/item_detail.php">Tiếp tục mua hàng</a>
                    </div>
                </div>
                
            <!-- if cart had an item -->
<?php 
if(isset($_SESSION['giohang']) && (is_array($_SESSION['giohang']))){
       if(sizeof($_SESSION['giohang'])>0){
         $tong = 0;
         for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
             $tt = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
             $tong+=$tt;
             ?>
                <div class = "container__list">
                    <div class = "container__list__item">
                        <div class = "container__list__item__img--block">
                          
                            <img src = "<?php echo $_SESSION['giohang'][$i][0] ?>" />
                        </div>
                        <div class = "container__list__item__detail">
                            <div class = "container__list__item__detail--name">
                                <p class = "container__list__item__detail--itemname text--nomal">
                                 <?php echo $_SESSION['giohang'][$i][1] ?>
                                </p>
                                <a class = "container__list__item__detail--code text--nomal" href = "">MSP: A3722-M</a>
                            </div>
                            <form action="sua_cart.php" method="POST">
                            <div class = "container__list__item__detail--amount">
                                <div class = "container__list__item__detail--amount-all">
                                    <input type="submit"name="tru"class = "container__list__item__detail--btn" onclick="document.getElementById('list__item--input-id<?php echo $i?>;').stepUp(-1);" value='-' />
                                    <input name="quantity"  type="number"value = "<?php echo $_SESSION['giohang'][$i][3] ?>" id = "list__item--input-id<?php echo $i?>;" class ="list__item--input">
                                    <input type="hidden" name="id" value ="<?php echo $i ?>">
                                    <input type="submit"name="cong"class = "container__list__item__detail--btn" onclick="document.getElementById('list__item--input-id<?php echo $i?>;').stepUp(1);"  value='+' />
                                </div>
                                
                            </div>
                            </form>
                           
                            <div class= "container__list__item__detail--price"><?php echo $_SESSION['giohang'][$i][2].'đ' ?></div>
                            <div class= "container__list__item__detail--total">
                                <p class = "container__list__item__detail--title">Thành tiền:</p>
                                <p name="prices"class = "container__list__item__detail--total-price"><?php echo $tt ?></p>
                                <a href="cart.php?delid=<?php echo $i ?>">Xóa</a>

                                
                            </div>
                        </div>
                    </div>
                </div>
                <?php
         }
        }
      } else{
        echo"Giỏ hàng rỗng";
    }
      ?> 
                <div class="container__note">
                    <div class = "container__note__input">
                        <p class = "text--bold">Ghi chú đơn hàng</p>
                        <input class = "container__note__input--place">
                    </div>
                    <div class = "container__note__customer">
                        <p>
                            Hỗ trợ khách hàng đổi sản phẩm trong vòng 15 ngày kể từ ngày nhận hàng online. Xem thêm về
                            <a href=""> Chính sách đổi trả hàng.</a>
                        </p>
                        <p>
                            Hỗ trợ khách hàng bảo hành sản phẩm trong vòng 30 ngày kể từ ngày nhận hàng online. Xem thêm về 
                            <a href="">Chính sách bảo hành.</a>
                        </p>
                        <p>
                            Tạo tài khoản và đăng nhập để theo dõi lịch sử mua hàng, tham gia ưu đãi dành riêng cho khách hàng thân thiết.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class = "content__container__check"> 
            <div class = "content__container__check__back"> 
                <a class  ="content__container__check__back--link" onclick="history.back() href = "">Tiếp tục mua hàng</a>
                <i class="fa-solid fa-arrow-right-long"></i>
            </div>
            <div class = "content__container__check__table">
                <p class = "content__container__check__table--title">Thông tin đơn hàng</p>
                <div class = "content__container__check__table--price">
                    <p class = "text--nomal">Tạm tính:</p>
                    <p class  = "text--bold"><?php 
                    $total=0;
                    for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
                      $sum = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                      $total+=$sum;
                    }
                    echo $total;?></p>
                </div>
                <div class = "content__container__check__table--price">
                    <p class  = "text--bold">Tổng tiền:</p>
                    <p class  = "text--bold">
                    <?php 
                    $total=0;
                    for($i=0; $i < sizeof($_SESSION['giohang']); $i++){
                      $sum = $_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                      $total+=$sum;
                    }
                    echo $total;?>
                    </p>
                </div>
                <p class = "text--nomal">Bạn có thể nhập mã giảm giá ở trang thanh toán</p>
                <form method="GET"action="../item_pay/item_pay.php">
                    <input type="hidden" name="id_product" value="<?php echo $id_product?>">
                    <input type="submit" name="pay" class = "content__container__check__table--paybtn" placeholder="Đặt hàng">
                </form>
            </div>
        </div>
    </div>
    <div class="main-footer">
        <div class="container-fluid">
            <div class="top-footer">
                <a href="#">
                    <img src="/Thời trang nam casual/front-end/img/imgtrangchu/imglogo.png" alt="logo">
                </a>
            </div>
            <div class="footer-content">
                <div class="wrapper-home-newsletter">
                    <div class="content-newsletter">
                        <h4>đăng ký để nhận ưu đãi</h4>
                        <div class="form-newsletter">
                            <form accept-charset="UTF-8" class="contact-form">
                                <div class="form-group">
                                    <input id="contactFormEmail" class="inputNew form-control newsletter-input"
                                        required="" type="email" placeholder="Điền địa chỉ Email của bạn"
                                        name="contact[email]" size="18" autocomplete="off">
                                    <button type="submit" name="submitNewsletter" id="contactFormSubmit"
                                        class="tp_button">
                                        <span>Gửi</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <p class="tp_text_color">BẢN QUYỀN THUỘC VỀ HIGHWAY MENSWEAR©</p>
                    </div>
                    <div class="footer-col">
                        <h4 class="footer-title">VỀ CHÚNG TÔI</h4>
                        <div class="about">
                            <ul>
                                <li>
                                    <a href="">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="">Tuyển dụng</a>
                                </li>
                                <li>
                                    <a href="#">Liên hệ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4 class="footer-title">DỊCH VỤ KHÁCH HÀNG</h4>
                        <div class="about">
                            <ul>
                                <li>
                                    <a href="">Highway's VIP club</a>
                                </li>
                                <li>
                                    <a href="">Hướng dẫn mua hàng</a>
                                </li>
                                <li>
                                    <a href="#">Chính sách bảo hành</a>
                                </li>
                                <li>
                                    <a href="#">Chính sách đổi trả</a>
                                </li>
                                <li>
                                    <a href="#">Chính sách bảo mật</a>
                                </li>
                                <li>
                                    <a href="#">Hotline khiếu nại</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4 class="footer-title">HỆ THỐNG CỬA HÀNG</h4>
                        <div class="about">
                            <ul>
                                <li>
                                    <a href="">1. 100 Đông Các, Quận Đống Đa, Hà Nội</a>
                                </li>
                                <li>
                                    <a href="">2. 109 Lò Đúc, Quận Hai Bà Trưng, Hà Nội</a>
                                </li>
                                <li>
                                    <a href="#">3. 367 Lê Văn Sỹ, Phường 12, Quận 3, Hồ Chí Minh</a>
                                </li>
                                <li>
                                    <a href="#">4. 66 Lê Thị Riêng, Bến Thành, Quận 1, Hồ Chí Minh</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer-col">
                        <h4 class="footer-title">FANPAGE</h4>
                        <div class="about">
                            <ul>
                                <li>
                                    <a href="">Facebook</a>
                                </li>
                                <li>
                                    <a href="">Instagram</a>
                                </li>
                                <li>
                                    <a href="#">Tiktok</a>
                                </li>
                                <li>
                                    <a href="#">Youtube</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>