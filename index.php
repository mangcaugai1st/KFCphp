<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="css/css.css">
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
    <div style="margin-left: 75%; margin-right: 0% ;font-family: sans-serif; font-size: 20px">
        <?php
        if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
            if($_COOKIE['username'] == 'khoadmps27060@ftp.edu.vn' && $_COOKIE['password'] == "123") {
                echo "<p>Chào <span style='color: #f8012e'>$_COOKIE[username]</span></p>";
            }
            //else echo "Đăng nhập";
        }
        else echo "<p style='margin-left: 25%; margin-right: 10%'>Đăng nhập</p>";
        ?>
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
    <div>
        <img src="images/slideshow/BTTKP123.webp" alt="" width="100%">
    </div>
    <h1 style="margin-left: 80px">DANH MỤC MÓN ĂN</h1>
    <div class="gridFood">
        <div class="foodList">
            <img src="images/MON%20MOI.jpg" alt="">
            <p>Món Mới</p>
        </div>
        <div class="foodList">
            <img src="images/COMBO%201%20NGUOI.jpg" alt="">
            <p>Combo 1 Người</p>
        </div>
        <div class="foodList">
            <img src="images/COMBO%20NHOM.jpg" alt="">
            <p>Combo Nhóm</p>
        </div>
        <div class="foodList">
            <img src="images/GA.jpg" alt="">
            <p>Gà Rán - Gà Quay</p>
        </div>
        <div class="foodList">
            <img src="images/COM.jpg" alt="">
            <p>Burger - Cơm - Mì Ý</p>
        </div>
        <div class="foodList">
            <img src="images/MON%20AN%20NHE.jpg" alt="">
            <p>Thức Ăn Nhẹ</p>
        </div>
    </div>
    <div style="display: flex; margin-left: 80px; margin-top: 50px">
        <img src="images/icon/kfc_logo_icon_181306.png" alt="" width="100" height="100">
        <h1>CÓ THỂ BẠN SẼ THÍCH MÓN NÀY</h1>
    </div>
    <div class="foodCartContainer">
        <div class="foodCart">
            <img src="images/D6.jpg" alt="">
            <div style="display: flex">
                <p style="margin-left: 5%">Combo nhóm 1</p>
                <p style="margin-left: 30%">175.000đ</p>
            </div>
            <button type="button">Thêm</button>
        </div>
        <div class="foodCart">
            <img src="images/D7-new.jpg" alt="">
            <div style="display: flex">
                <p style="margin-left: 5%">Combo nhóm 2</p>
                <p style="margin-left: 30%">195.000đ</p>
            </div>
            <button type="button">Thêm</button>
        </div>
        <div class="foodCart">
            <img src="images/D8-new.jpg" alt="">
            <div style="display: flex">
                <p style="margin-left: 5%">Combo nhóm 3</p>
                <p style="margin-left: 30%">232.000đ</p>
            </div>
            <button type="button">Thêm</button>
        </div>
    </div>
    <img src="images/Component%2012.png" alt="" width="100%" style="margin-top: 50px">
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
            <img src="images/icon/logo_footer.png" alt="" style="width: 349px; height: 113px; margin-top: 10%" id="bo_cong_thuong">
        </div>
    </div>
</body>

</html>