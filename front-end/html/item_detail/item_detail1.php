<?php
 $id_product = $_GET['id_product'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SƠ MI CUBAN - GREG - REGULAR FIT - THIN STRIPES</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css" />
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/css/base.css">
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/html/item_detail/css_detail.css">
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/css/item_detail.css">
    
</head>

<body>
    <div class="body_headerindex--top">
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
                <a href="../san_pham/product.php">
                    SẢN PHẨM
                </a>
            </li>
            <li class="body__bannertop--index__li">
                <a href="">
                    CÂU CHUYỆN
                </a>
            </li>
        </ul>
        <a href="/Thời trang nam casual/front-end/html/trang_chu/index.php"><a href="/Thời trang nam casual/front-end/html/trang_chu/index.php"><img class="body__imglogo" src="/Thời trang nam casual/front-end/img/imgtrangchu/imglogo.png" alt=""></a></a>
        <div class="body__bannertop--indexright">
            <span>TIN TỨC</span>
            
            <form action="" method="post">
                <div class="body__signin--main">
                    <div class="body__signin--left">
                        <h2>Đăng nhập</h2> <br>
                        <input type="email" name="email" placeholder="Điền địa chỉ Email của bạn"> <br>
                        <input type="password" name="password" placeholder="Mật khẩu"><br>
                        <a href="">Quên mật khẩu?</a><br>
                        <button type="submit">Đăng nhập</button>
                    </div>
                    <div class="body__signin--right">
                        <h2>Khách hàng mới</h2> <i style="cursor: pointer;" onclick="signIn()"
                            class="fa-solid fa-xmark"></i><br>
                        <div class="login__frame--copy">
                            <p>-Đặt hàng thuận tiện và nhanh chóng.</p>
                            <p>-Tra cứu lịch sử mua hàng và điểm tích lũy.</p>
                            <p>-Nhận các thông tin về sản phẩm và <br>
                                khuyến mãi đặc biệt.
                            </p>
                            <p></p>
                            <a onclick="signUp()"><span style="cursor: pointer;">Đăng ký</span></a>
                        </div>
                    </div>
                </div>
            </form>
            <form action="" method="post">
                <div class="body__signup--main">

                    <div class="body__signup--left">
                        <h2>Đăng ký</h2> <br>
                        <p>Vui lòng điền đầy đủ các thông tin bên dưới để tạo tài khoản mới</p> <br>
                        <p>Những trường thông tin có dấu"*" là bắt buộc!</p><br>
                        <input type="text" name="name" placeholder="*Học và tên">
                        <input type="email" name="email" placeholder="*Điền địa chỉ Email của bạn"> <br>
                        <input type="password" name="password" placeholder="*Mật khẩu"><br>
                    </div>
                    <div class="body__signup--right">
                        <h2>Khách hàng mới</h2> <i style="cursor: pointer;" onclick="signUp()"
                            class="fa-solid fa-xmark"></i><br>
                        <input type="number" name="phone_number" placeholder="*Số điện thoại"><br>
                        <input type="date" name="dateOfBirth"><br>
                        <input type="text" name="address" placeholder="Địa chỉ">
                        <button type="submit">Đăng kí</button>
                    </div>
                </div>


            </form>
            <a style="text-decoration: none; color: white;" href="../cart/cart.php"><span>GIỎ HÀNG</span></a>
            <div class="body__bannertop--indexright__languageicon">
                <span>
                    <select name="language" id="language">
                        <option value="0">VN</option>
                        <option value="1">EN</option>
                    </select></span>
            </div>
        </div>
    </div>
    <div class="content__container">
        <div class="container__pagelocation--all">
            <a class="container__pagelocation--home container__pagelocation" href=""> Trang Chủ</a>
            /
            <a class="container__pagelocation--wear container__pagelocation" href=""> Trang Phục</a>
            /
            <a class="container__pagelocation--type container__pagelocation" href=""> Áo</a>
            /
            <a class="container__pagelocation--shirt container__pagelocation" href="">Áo Sơ Mi</a>
            /
            <a class="container__pagelocation--cuban_shirt container__pagelocation" href="">Áo Sơ Mi Ngắn Tay</a>
        </div>
       <?php 
       require_once 'open-connect.php';
$sql = "SELECT product.*, product_type.typeName ,product_detail.*,picture.* 
                FROM product INNER JOIN product_type
                ON product.id_productType = product_type.id_productType
                INNER JOIN product_detail 
                ON product_detail.id_product = product.id_product
                INNER JOIN picture
                ON product_detail.id_anh = picture.id_anh
                WHERE product.id_product = $id_product;
                ";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each){
            ?>
        <div class="content__container__item--detail">
            <div id="imgs__gallery--id" class="content__container__item__imgs--scroll">
                <ul class="imgs__gallery">
                    <li class="imgs__gallery--block">
                        <a class="fancybox" class="imgs__gallery--link" data-fancybox="gallery" href="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>">
                            <img class="content__container__item__img--link" src="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>" />
                        </a>
                    </li>
                    <li class="imgs__gallery--block">
                        <a class="fancybox" class="imgs__gallery--link" data-fancybox="gallery" href="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>">
                            <img class="content__container__item__img--link" src="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>" />
                        </a>
                    </li>
                    <li class="imgs__gallery--block">
                        <a class="fancybox" class="imgs__gallery--link" data-fancybox="gallery" href="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>">
                            <img class="content__container__item__img--link" src="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>" />
                        </a>
                    </li>
                    <li class="imgs__gallery--block">
                        <a class="fancybox" class="imgs__gallery--link" data-fancybox="gallery" href="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>">
                            <img class="content__container__item__img--link" src="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>" />
                        </a>
                    </li>
                    <li class="imgs__gallery--block">
                        <a class="fancybox" class="imgs__gallery--link" data-fancybox="gallery" href="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>">
                            <img class="content__container__item__img--link" src="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>" />
                        </a>
                    <!-- </li>
                    // <li class="content__container__item__img">
                    //     <a class="imgs__gallery--link" data-fancybox="gallery" href="../product_img/HWHA19285.jpg">
                    //         <img class="content__container__item__img--link" src="../product_img/HWHA19285.jpg" />
                    //     </a>
                    // </li>
                    // <li class="content__container__item__img">
                    //     <a class="imgs__gallery--link" data-fancybox="gallery" href="../product_img/HWHA19285.jpg">
                    //         <img class="content__container__item__img--link" src="../product_img/HWHA19285.jpg" />
                    //     </a>
                    // </li> -->
                </ul>
            </div>
            
            
            <div class="content__container__item--menu">
                <!-- menu fixed -->

                <!-- menu nomal -->
                <div id="content__container__item__in4--id" class="content__container__item__in4">
                    <div class="content__container__item__in4__text">
                        <p style="display: none;"class="content__container__item__in4__text--id">
                        <?php echo $each['id_product']?>
                        </p>
                        <p class="content__container__item__in4__text--name">
                        <?php echo $each['product_name']?>
                        </p>
                        <p class="content__container__item__in4__text--price">
                        <?php echo $each['prices'] .'đ'?>
                        </p>
                    </div>
                    
                    <ul class="content__container__item__in4__list--type">
                        <li class="content__container__item__in4__list__img--block">
                            <img class="content__container__item__in4__list__img" src="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>" />
                        </li>
                        
                    </ul>
                    <div class="content__container__item__in4__size">
                        
                        <div class="size__tutorial">
                            <a class="size__tutorial--link" href="">HƯỚNG DẪN CHỌN KÍCH CỠ</a>
                            <div class="size__tutorial--modelin4">
                                <p>NGƯỜI MẪU: 183CM 65KG
                                </p>
                                <p>KÍCH CỠ ÁO: L
                                </p>
                            </div>
                        </div>
                    </div>
                    <form action="../cart/cart.php" method="POST">
                    <div class="content__container__item__in4__buy">
                        <input type="hidden" name="id_product" value="<?php echo $each['id_product']?>">
                        <input type="number" name="soluong" min="1" max="100">
                        <input type="hidden" name="tensp" value="<?php echo $each['product_name']?>">
                        <input type="hidden" name="gia" value="<?php echo $each['prices']?>">
                        <input type="hidden" name="hinh" value="/Thời trang nam casual/front-end/img/imgdetail/<?php echo $each['link_anh']?>">
                        <input type="submit" style="cursor: pointer;" name="addcart"  class="content__container__item__in4__buy--btn">
                    </div>
                    </form>
                    <?php
                    }
       
        require_once 'close-connect.php';
            ?>
                    <div class="content__container__item__in4__more">
                        <div class="content__container__item__in4__more--all">
                            <button onclick="ShowIn4_3()" class="content__container__item__in4__more--aboutitem">
                                <p>THÔNG TIN SẢN PHẨM</p>
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <div id="content__container__item__in4__more--text-id3"
                                class="content__container__item__in4__more--text">
                                <p>MÔ TẢ:</p>
                                <p>- Công nghệ in chuyển nhiệt giúp hình in ngấm sâu vào bề mặt vải, sắc nét và độ bèn
                                    mà cao.</p>
                                <p>- Chất liệu vải sợi tổng hợp giúp áo có khả năng chống nhăn tốt, nhanh khô.</p>
                                <p>- Màu sắc trung tính cùng hình in được thiết kế riêng từ Highway hoà hợp tạo nên điểm
                                    nhấn cho mẫu áo.</p>
                                <p>- Lưu ý: Giặt máy ở chế độ nhẹ để sản phẩm được bền lâu</p>
                                <p>- Sản xuất tại Việt Nam</p>
                                <p>SỐ ĐO:</p>
                                <p>- Size: S - M - L - XL ( Cm )</p>
                                <p>- Dài áo: 69 - 71 - 73 - 75</p>
                                <p>- Rộng thân áo: 52 - 54 - 56 - 58</p>
                                <p>- Dài tay áo: 21,5 - 23 - 24,5 - 26</p>
                            </div>
                        </div>
                        <div class="content__container__item__in4__more--all">
                            <button onclick="ShowIn4_4()" class="content__container__item__in4__more--aboutitem">
                                <p>HƯỚNG DẪN BẢO QUẢN</p>
                                <i class="fa-solid fa-plus"></i>
                            </button>
                            <div id="content__container__item__in4__more--text-id4"
                                class="content__container__item__in4__more--text">
                                <p>- Giặt máy chế độ nhẹ (Cho sản phẩm vào túi lưới giặt).</p>
                                <p>- Lộn trái sản phẩm khi giặt.</p>
                                <p>- Không dùng các chất tẩy mạnh.</p>
                                <p>- Giặt riêng các sản phẩm tối màu và sáng màu.</p>
                                <p>- Không giặt khô.</p>
                                <p>- Giặt nhiệt độ thường dưới 30 độ C.</p>
                                <p>- Phơi thường không sấy, tránh ánh nắng trực tiếp.</p>
                                <p>- Giũ phẳng sản phẩm khi phơi.</p>
                                <p>- Là (ủi) sản phẩm ở nhiệt độ thấp.</p>
                            </div>
                        </div>
                        <div class="social__web">
                            <p class="social__web--text">FOLLOW</p>
                            <div>
                                <a class="social__web--link" href="">
                                    <i class="fa-brands fa-facebook-f"></i>
                                </a>
                                <a class="social__web--link" href="">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content__container__item__another">
            <p class="content__container__item--title title">SẢN PHẨM LIÊN QUAN</p>
            <div class="content__container__item__another--items">
                <div class="item__block">
                    <a class="item__block__link" href="">
                        <img class="item__img" src="/Thời trang nam casual/front-end/img/imgdetail/ESSENTIA1.1.jpg" />
                        <div class="item__block__swatch--list">
                            <ul class="item__all__color">
                                <li>
                                    <img class="item__all__color--img" src="/Thời trang nam casual/front-end/img/imgdetail/ESSENTIA1.1.jpg" />
                                </li>
                            </ul>
                        </div>
                    </a>
                    <div class="item__block__detail">
                        <p class="item__block__detail--brand">
                            ESSENTIAL
                        </p>
                        <p class="item__block__detail--name">
                            <a class="item__block__detail--link" href="">SƠ MI HAWAIIAN - KOJI - REGULAR FIT - AROWS</a>
                        </p>
                        <p class="item__block__detail--price">
                            580.000đ
                        </p>
                    </div>
                </div>
                <div class="item__block">
                    <a class="item__block__link" href="">
                        <img class="item__img" src="/Thời trang nam casual/front-end/img/imgdetail/ESSENTIA1.1.jpg" />
                        <div class="item__block__swatch--list">
                            <ul class="item__all__color">
                                <li>
                                    <img class="item__all__color--img" src="/Thời trang nam casual/front-end/img/imgdetail/ESSENTIA1.1.jpg" />
                                </li>
                            </ul>
                        </div>
                    </a>
                    <div class="item__block__detail">
                        <p class="item__block__detail--brand">
                            ESSENTIAL
                        </p>
                        <p class="item__block__detail--name">
                            <a class="item__block__detail--link" href="">SƠ MI HAWAIIAN - KOJI - REGULAR FIT - AROWS</a>
                        </p>
                        <p class="item__block__detail--price">
                            580.000đ
                        </p>
                    </div>
                </div>
                <div class="item__block">
                    <a class="item__block__link" href="">
                        <img class="item__img" src="/Thời trang nam casual/front-end/img/imgdetail/ESSENTIA1.1.jpg" />
                        <div class="item__block__swatch--list">
                            <ul class="item__all__color">
                                <li>
                                    <img class="item__all__color--img" src="/Thời trang nam casual/front-end/img/imgdetail/ESSENTIA1.1.jpg" />
                                </li>
                            </ul>
                        </div>
                    </a>
                    <div class="item__block__detail">
                        <p class="item__block__detail--brand">
                            ESSENTIAL
                        </p>
                        <p class="item__block__detail--name">
                            <a class="item__block__detail--link" href="">SƠ MI HAWAIIAN - KOJI - REGULAR FIT - AROWS</a>
                        </p>
                        <p class="item__block__detail--price">
                            580.000đ
                        </p>
                    </div>
                </div>
                <div class="item__block">
                    <a class="item__block__link" href="">
                        <img class="item__img" src="/Thời trang nam casual/front-end/img/imgdetail/ESSENTIA1.1.jpg" />
                        <div class="item__block__swatch--list">
                            <ul class="item__all__color">
                                <li>
                                    <img class="item__all__color--img" src="/Thời trang nam casual/front-end/img/imgdetail/ESSENTIA1.1.jpg" />
                                </li>
                            </ul>
                        </div>
                    </a>
                    <div class="item__block__detail">
                        <p class="item__block__detail--brand">
                            ESSENTIAL
                        </p>
                        <p class="item__block__detail--name">
                            <a class="item__block__detail--link" href="">SƠ MI HAWAIIAN - KOJI - REGULAR FIT - AROWS</a>
                        </p>
                        <p class="item__block__detail--price">
                            580.000đ
                        </p>
                    </div>
                </div>
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
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="/Thời trang nam casual/front-end/js/gallery.js"></script>
    <script src="/Thời trang nam casual/front-end/js/main.js"></script>
    <script src="/Thời trang nam casual/front-end/js/Sticky_right.js"></script>
    <script src="/Thời trang nam casual/front-end/js/Show_in4.js"></script>
    
</body>

</html>