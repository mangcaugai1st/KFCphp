<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng của tôi</title>
    <link rel="stylesheet" href="css/css.css">
    <style>
        table {
            margin-right: auto;
            margin-left: auto;
        }
        table tr th {
            width: 100px;
            font-family: sans-serif;
            font-size: 18px;
            text-align: center;
        }
        table tr td {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="header">
    <ul class="navList">
        <li>
            <a href="index.php"><img src="images/icon/kfc-logo.svg" alt="" width="120" height="120" class="kfc-logo"></a>
        </li>
        <li style="margin-left: 30px;margin-top: 2%">
            <a href="menus.php">THỰC ĐƠN</a>
        </li>
        <li style="margin-left: 30px;margin-top: 2%">
            <a href="deals.php">KHUYẾN MÃI</a>
        </li>
        <li style="margin-left: 30px;margin-top: 2%">
            <a href="HTNH.php">HỆ THỐNG NHÀ HÀNG</a>
        </li>
        <li class="language">
            <p>English</p>
        </li>
        <li>
            <a href="login.php" target="_blank"><button class="login-icon"><img src="images/icon/person-circle-outline.png" alt="" onclick=""></button></a>
        </li>
        <li>
            <a href="cart.php" target="_blank"><button class="cart-icon"><img src="images/icon/cart.png" alt=""></button></a>
        </li>
        <li>
            <button class="menu-icon"><img src="images/icon/menu.png" alt=""></button>
        </li>
    </ul>
</div>
<div class="orderBar">
    <p style="margin-right: 10px; margin-top: 20px">Đặt Ngay</p>
    <img src="images/icon/2830305.png" alt="" width="50" height="50" style="margin-right: 10px">
    <p style="margin-right: 10px">Giao Hàng</p>
    <img src="images/icon/1814727.png" alt="" width="50" height="50" style="margin-right: 10px">
    <p style="margin-right: 10px">hoặc Mang đi</p>
    <button class="orderBtn">
        Bắt đầu đặt hàng
    </button>
</div>
<h1 style="font-family: sans-serif; text-align: center">GIỎ HÀNG CỦA TÔI</h1>
<!--
<div style="display: flex">
    <div style="display: block; position: absolute; margin-left: 25%; margin-top: 10%">
        <h2 style="font-family: sans-serif">GIỎ HÀNG CỦA BẠN CÒN TRỐNG. <br> HÃY ĐẶT MÓN NGAY!</h2>
        <button style="width: 250px; height: 60px; background-color: #f8012e; border-radius: 30px; border: none; font-family: sans-serif; font-size: 20px; color: #FFFFFF">Bắt đầu đặt hàng</button>
    </div>
    <img src="images/empty-cart.png" alt="" width="30%" height="10%" style="margin-left: 60%">
</div>
-->
<?php
session_start();
?>
<table>
    <tr>
        <th>Tên món ăn</th>
        <th>Hình ảnh</th>
        <th>Số lượng</th>
        <th>Tiền</th>
        <!-- <th>Xóa</th> -->
    </tr>
    <?php foreach ($_SESSION['cart'] as $item) { ?>
        <tr>
            <td><?php echo $item['foodName'] ?></td>
            <td><img src='<?php echo $item['image'] ?>' alt="" style="width: 250px"></td>
            <td>1</td>
            <td><?php  echo $item['price']?></td>
            <td>
                <form action="" method="post">
                    <button type="submit" name ="remove">Xóa</button>
                </form>
            </td>
        </tr>
    <?php } ?>
    <tr>
        <td colspan="4">Tổng tiền</td>
        <td colspan="2">
            <?php
            $tongtien= 0;
            foreach ($_SESSION['cart'] as $item) {
                $tongtien += $item['price'];
            }
            echo "$tongtien đ";
            ?>
        </td>
    </tr>
</table>
<?php
    if(isset($_POST['remove'])) {
        unset($_SESSION['cart']);
        header("Location: cart.php");
    }
?>
<div style="display: grid; background-color: #202124; grid-template-columns: 70% 30%">
    <div class="footer_text">
        <h2>CÔNG TY LIÊN DOANH TNHH KFC VIỆT NAM</h2>
        <p>Số 292 Bà Triệu, P.Lê Đại Hành, Q.Hai Bà Trưng, TP. Hà Nội.<br>
            Điện thoại: (028) 38489828 <br>
            Email: lienhe@kfcvietnam.com.vn<br>
            Mã số thuế: 0100773885<br>
            Ngày cấp: 29/10/1998 - Nơi cấp: Cục Thuế Thành Phố Hà Nội</p>
    </div>
    <div>
        <img src="images/icon/logo_footer.png" alt="" style="width: 349px; height: 113px; margin-top: 10%">
    </div>
</div>
</body>
</html>