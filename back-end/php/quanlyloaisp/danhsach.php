<a href="them.php">Thêm</a>
<table border="1" cellspacing="0" cellpadding="0" width="100%">
    <tr>
        <td>Mã loại sản phẩm</td>
        <td>Tên loại sản phẩm</td>
        <td></td>
        <td></td>
    </tr>
    <?php 
        require_once "../open-connect.php";
        $sql = "SELECT * FROM product_type";
        $result = mysqli_query($connect, $sql);
        foreach($result as $each){
    ?>
    <tr>
        <td>
            <?php echo $each['id_productType']?>
        </td>
        <td>
            <?php echo $each['typeName']?>
        </td>
        <td>
            <a href="sua.php?id_productType=<?php echo $each['id_productType'];?>">Sửa</a>
        </td>
        <td>
            <a href="xoa.php?id_productType=<?php echo $each['id_productType'];?>">Xóa</a>
        </td>
    </tr>
    <?php
        }
        require_once "../close-connect.php";
    ?>
</table>
