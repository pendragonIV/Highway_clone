<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/css/slidecart.css">
    <link rel="stylesheet" href="/Thời trang nam casual/front-end/css/base.css">
</head>
<body>
    <button onclick="slideIn()">click here</button>
    <div  id = "slide__cart__container--id" class = "slide__cart__container">
        <div  onclick="slideIn()" class = "slide__cart__container--close"></div>
        <div id = "slide__cart--id" class = "slide__cart">
            <div class ="slide__cart--block">
                <p class = "slide__cart--title">GIỎ HÀNG</p>
                <div class = "slide__cart__list">
                    <div class = "slide__cart__list__item">
                        <img class = "slide__cart__list__item--img" src = "../product_img/_MG_6317.jpg" />
                        <div class = "slide__cart__list__item--all">
                            <p class="slide__cart__list__item--title" >SƠ MI HAWAIIAN - KOJI - REGULAR FIT - DAISY</p>
                            <div class = "slide__cart__list__item--detail">
                                <div class = "slide__cart__list__item--amount">
                                    <input class = "slide__cart__list__item--btn" onclick="var result = document.getElementById('list__item--input-id'); var qty = result.value; if( !isNaN(qty) &amp; qty > 1 ) result.value--;return false;" type='button' value='-' />
                                    <input id = "list__item--input-id" class ="list__item--input" value = "1">
                                    <input class = "slide__cart__list__item--btn" onclick="var result = document.getElementById('list__item--input-id'); var qty = result.value; if( !isNaN(qty)) result.value++;return false;" type='button' value='+' />
                                </div>
                                <p class = "old--price">580,000 ₫</p>
                                <p class = "new--price">520,000 ₫</p>
                            </div>
                        </div>
                        <button class = "delete--btn">
                            <i class="fa-solid fa-x"></i>
                        </button>
                    </div>
                </div>
                <div class= "slide__cart__list__total">
                    <p>Tổng tiền:</p>
                    <p>520,000 ₫</p>
                </div>
                <div class = "slide__cart__list__option">
                    <button class = "slide__cart__list__option--btn">
                        MUA THÊM
                    </button>
                    <button class = "slide__cart__list__option--btn">
                        THANH TOÁN
                    </button>
                </div>
                <div class="main__cart--block">
                    <a class="main__cart--link">
                        Xem giỏ hàng 
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src = "/Thời trang nam casual/front-end/js/slidecart.js"></script>
</body>
</html>