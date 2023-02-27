<!doctype html>
<html lang="en">
    <head>
        <title>Sản phẩm</title>
        <link rel ="stylesheet" href = "/Thời trang nam casual/front-end/css/product.css"/>
        <link rel ="stylesheet" href = "/Thời trang nam casual/front-end/html/san_pham/css_product.css"/>
        <link rel ="stylesheet" href = "/Thời trang nam casual/front-end/css/base.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

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
                <a href="">
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
            
            <a style="text-decoration: none; color: white;" href="../cart/cart.php"><span>GIỎ HÀNG</span></a>
        <div class="body__bannertop--indexright__languageicon">
            <span>
                <select name="language" id="language">
                    <option value="0">VN</option>
                    <option value="1">EN</option>

                </select></span>


        </div>


    </div>

    </header>
        <div class="container">
          <div class="container__pagelocation">
             <a class = "container__pagelocation--home" href= ""> Trang chủ</a>
             /  Sản phẩm mới
          </div>
          <div class = "container__body">
              <div class = "body__filter">
                <div class = "body__filter__list">
                 <p class = "body__filter--title">SHOP</p>
                         <div class = "filter__parent">
                            <a class = "body__filter__list--link" href="" >Trang Phục</a>
                            <button onclick = "ShowFilter1()" class ="fa-angle-down-button">
                                <i class="fa-solid fa-angle-down"></i>
                            </button>
                         </div>
                         <ul id = "filter__list--option1" class = "body__filter__list--option">
                            <li>
                               <div class = "filter__parent">
                                <a class = "body__filter__list--link" href="" >Áo</a>
                                <button onclick = "ShowFilter2()" class ="fa-angle-down-button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                               </div>
                               <ul id = "filter__list--option2" class = "body__filter__list--option">
                                   <li>
                                    <a class = "body__filter__list--link" href="">Áo Len</a>
                                   </li>
                                   <li>
                                    <a class = "body__filter__list--link" href="">Áo Len</a>
                                   </li>
                                   <li>
                                    <a class = "body__filter__list--link" href="">Áo Len</a>
                                   </li>
                                   <li>
                                    <a class = "body__filter__list--link" href="">Áo Len</a>
                                   </li>
                                   <li>
                                    <a class = "body__filter__list--link" href="">Áo Len</a>
                                   </li>
                                   <li>
                                    <a class = "body__filter__list--link" href="">Áo Len</a>
                                   </li>
                                   <li>
                                    <a class = "body__filter__list--link" href="">Áo Len</a>
                                   </li>
                               </ul>
                            </li>
                            <li>
                               <div class = "filter__parent">
                                <a class = "body__filter__list--link" href="" >Quần</a>
                                <button onclick = "ShowFilter3()" class ="fa-angle-down-button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                               </div>
                                <ul id = "filter__list--option3" class = "body__filter__list--option">
                                    <li>
                                     <a class = "body__filter__list--link" href="">Quần Jeans</a>
                                    </li>
                                    <li>
                                     <a class = "body__filter__list--link" href="">Quần Jeans</a>
                                    </li>
                                    <li>
                                     <a class = "body__filter__list--link" href="">Quần Jeans</a>
                                    </li>
                                </ul>
                            </li>
                         </ul>
                         <div class = "filter__parent">
                            <a class = "body__filter__list--link" href="" >Giày & Phụ Kiện</a>
                            <button onclick = "ShowFilter4()" class ="fa-angle-down-button">
                                <i class="fa-solid fa-angle-down"></i>
                            </button>
                         </div>
                         <ul id = "filter__list--option4" class = "body__filter__list--option">
                            <li>
                             <a class = "body__filter__list--link" href="">Balo</a>
                            </li>
                            <li>
                             <a class = "body__filter__list--link" href="">Balo</a>
                            </li>
                            <li>
                             <a class = "body__filter__list--link" href="">Balo</a>
                            </li>
                        </ul>
                        <div class = "filter__list--tickoption">
                            <div  class = "filter__parent">
                                <p class = "body__filter--title">DÒNG SẢN PHẨM</p>
                                <button onclick = "ShowFilter5()" class ="fa-angle-down-button">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                             </div>
                                   <ul id = "filter__list--option5" class = "body__filter__list--option filter__list--tick">
                                       <li class="filter__tick--option">
                                        <input class="filter__tick--place">
                                        <label class = "filter__tick--modifier">ESSENTIAL</label>
                                       </li>
                                       <li class="filter__tick--option">
                                        <input class="filter__tick--place">
                                        <label class = "filter__tick--modifier">ESSENTIAL</label>
                                       </li>
                                       <li class="filter__tick--option">
                                        <input class="filter__tick--place">
                                        <label class = "filter__tick--modifier">ESSENTIAL</label>
                                       </li>
                                   </ul>
                        </div>
                </div>
              </div>
              <div class = "body__items">
                <div class = "body__items__arrange">
                      <select class = "body__items__arrange--option">
                          <option>Tùy chọn</option>
                          <option>Mới nhất</option>
                          <option>Bán chay</option>
                          <option>Giá tăng dần</option>
                          <option>Giá giảm dần</option>
                          <option>Theo bảng chữ cái A-Z</option>
                          <option>Theo bảng chữ cái Z-A</option>
                      </select>  
                </div>
                <form action="" method="get">
 <?php 

 $search = $_GET['search'] ?? ''; ?>
 
    Search: <input style="border-radius:15px; " class="search"  type="text" name="search" value="<?php echo $search;?>">
    <button style="border: none;" class="search"><i class="fa-solid fa-magnifying-glass"></i></button>
</form>
                <div class = "body__items__container">
                
                    <?php
                    require_once "open-connect.php";
                     $sql = "SELECT product.*, product_type.typeName ,product_detail.*,picture.* 
                     FROM product INNER JOIN product_type
                     ON product.id_productType = product_type.id_productType
                     INNER JOIN product_detail 
                     ON product_detail.id_product = product.id_product
                     INNER JOIN picture
                     ON product_detail.id_anh = picture.id_anh
                     WHERE product.product_name LIKE '%$search%'
                     ORDER BY product.id_product DESC";
                     $result = mysqli_query($connect,$sql);
                     // $data = array();
                     // while ($row = mysqli_query_array($result,1))
                     foreach ($result as $value => $each){
                    ?>
                    <div class ="item__block">
                        <a class="item__block__link" href="../item_detail/item_detail1.php?id_product=<?php echo $each['id_product']?>">
                            <img class="item__img" src = "/Thời trang nam casual/front-end/img/imgproduct/<?php echo $each['link_anh']?>" />
                            <div class = "item__block__swatch--list">
                                <ul class = "item__all__color">
                                    <li>
                                        <img class = "item__all__color--img" src = "/Thời trang nam casual/front-end/img/imgproduct/<?php echo $each['link_anh']?>" />
                                    </li>
                                    <li>
                                        <img class = "item__all__color--img" src = "/Thời trang nam casual/front-end/img/imgproduct/<?php echo $each['link_anh']?>" />
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <div class = "item__block__detail">
                            <p class = "item__block__detail--brand"> 
                            <?php echo $each['typeName']?>
                            </p>
                            <p class = "item__block__detail--name">
                              <a class ="item__block__detail--link" href = ""><?php echo $each['product_name']?></a>
                            </p>
                            <p class = "item__block__detail--price">
                                <?php echo $each['prices']?>
                            </p>
                        </div>
                    </div>
                    <?php
                     }
                        require_once "close-connect.php";
                    ?>
                    <!-- <div class ="item__block">
                        <a class="item__block__link" href="/Thời trang nam casual/front-end/html/item_detail/item_detail3.php">
                            <img class="item__img" href="/Thời trang nam casual/front-end/html/item_detail/item_detail3.php" src = "/Thời trang nam casual/front-end/img/imgproduct/cse1.1.jpg" />
                            <div class = "item__block__swatch--list">
                                <ul class = "item__all__color">
                                    <li>
                                        <img class = "/Thời trang nam casual/front-end/img/imgproduct/cse1.2.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <div class = "item__block__detail">
                            <p class = "item__block__detail--brand"> 
                                CASUAL EVENT
                            </p>
                            <p class = "item__block__detail--name">
                              <a class ="item__block__detail--link" href = "">ÁO BLAZER - RICHARD - REGULAR FIT - SPARKLE</a>
                            </p>
                            <p class = "item__block__detail--price">
                            1,499,000₫
                            </p>
                        </div>
                    </div>
                    <div class ="item__block">
                        <a class="item__block__link" href="/Thời trang nam casual/front-end/html/item_detail/item_detail2.php">
                            <img class="item__img" src = "/Thời trang nam casual/front-end/img/imgproduct/ESSENTIA2.1.jpg" />
                            <div class = "item__block__swatch--list">
                                <ul class = "item__all__color">
                                    <li>
                                        <img class = "item__all__color--img" src = "/Thời trang nam casual/front-end/img/imgproduct/ESSENTIA2.1.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <div class = "item__block__detail">
                            <p class = "item__block__detail--brand"> 
                                ESSENTIAL
                            </p>
                            <p class = "item__block__detail--name">
                              <a class ="item__block__detail--link" href = "">SƠ MI HAWAIIAN - KOJI - REGULAR FIT - AROWS</a>
                            </p>
                            <p class = "item__block__detail--price">
                            580.000đ
                            </p>
                        </div>
                    </div>
                    <div class ="item__block">
                        <a class="item__block__link" href="/Thời trang nam casual/front-end/html/item_detail/item_detail4.php">
                            <img class="item__img" src = "/Thời trang nam casual/front-end/img/imgproduct/bkj1.1.jpg" />
                            <div class = "item__block__swatch--list">
                                <ul class = "item__all__color">
                                    <li>
                                        <img class = "item__all__color--img" src = "/Thời trang nam casual/front-end/img/imgproduct/bkj1.2.jpg" />
                                    </li>
                                </ul>
                            </div>
                        </a>
                        <div class = "item__block__detail">
                            <p class = "item__block__detail--brand"> 
                                BIKER TOUCH
                            </p>
                            <p class = "item__block__detail--name">
                              <a class ="item__block__detail--link" href = "">BIKER JACKET - BRANDON - SLIMFIT - ĐEN</a>
                            </p>
                            <p class = "item__block__detail--price">
                                1,699,000₫
                            </p>
                        </div>
                    </div>   -->
                    
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
    <script src="/Thời trang nam casual/front-end/js/product.js"></script>
    </body>
    </html>