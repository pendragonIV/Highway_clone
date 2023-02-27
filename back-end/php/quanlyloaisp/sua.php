<form action="sua_xu_ly.php" method="post">
    <?php
        $ma_loai_san_pham = $_GET['id_productType'];
        include_once "../open-connect.php";
        $sql = "SELECT * FROM product_type WHERE id_productType = '$ma_loai_san_pham'";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each){
    ?>
    <input type="text" name="id_productType" value="<?php echo $each['id_productType'];?>">
    Tên loại sản phẩm: <input type="text" name="typeName" value="<?php echo $each['typeName'];?>"><br>
    <?php
        }
        include_once "../close-connect.php";
    ?>
    <button>Sửa</button>
</form>