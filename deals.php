<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Khuyến mãi</title>
    <link rel="stylesheet" href="css/css.css">
    <style>
        .sanpham {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            justify-items: center;

        }
        .sanpham img {
            width: 350px;
            height: 330px;
        }
        .abc {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            justify-items: center;
        }
        @media (max-width: 900px) {
            .abc {
                grid-template-columns: repeat(1, 1fr);
                justify-items: center;
            }
        }
    </style>
</head>
<body>
<div class="header">
    <ul class="navList">
        <li>
            <a href="index.php"><img src="images/icon/kfc-logo.svg" alt="" width="120" height="120"
                                     class="kfc-logo"></a>
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
            <a href="login.php" target="_blank">
                <button class="login-icon"><img src="images/icon/person-circle-outline.png" alt="" onclick=""></button>
            </a>
        </li>
        <li>
            <a href="cart.php" target="_blank">
                <button class="cart-icon"><img src="images/icon/cart.png" alt=""><span><?php if (isset($_SESSION['cart'])) echo count($_SESSION['cart']);?></span></button>
            </a>
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
<!--
<div class="containerFood">
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
    <div class="foodCart">
        <img src="images/6-Fried-Chicken-new.jpg" alt="">
        <div style="display: flex">
            <p style="margin-left: 5%">6 miếng gà rán</p>
            <p style="margin-left: 30%">205.000đ</p>
        </div>
        <button type="button">Thêm</button>
    </div>
</div>
-->
<?php
session_start();
if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
//session_destroy();
$products = array(
    array('id' =>'sp8', 'foodName' => 'Combo nhóm 1', 'image' => 'images/D6.jpg', 'price' => '175000', 'quantity' => 1),
    array('id' =>'sp9', 'foodName' => 'Combo nhóm 2', 'image' => 'images/D7-new.jpg', 'price' => '195000', 'quantity' => 1),
    array('id' =>'sp10', 'foodName' => 'Combo nhóm 3', 'image' => 'images/D8-new.jpg', 'price' => '232000', 'quantity' => 1),
    array('id' =>'sp11', 'foodName' => 'Combo nhóm 4', 'image' => 'images/6-Fried-Chicken-new.jpg', 'price' => '205000', 'quantity' => 1),
);
//if (isset($_SESSION['cart'])) echo count($_SESSION['cart']);
?>
<div class = "abc">
    <?php
    foreach ($products as $index => $product) {
        echo '<div class="sanpham">
                    <form action="" method="post" style = "width: 350px;height: 490px; /*    border: 1px solid black; */background-color: #202124;">
                        <a href="detailProduct.php?id='.$product['id'].'" target="_blank"><img src="'.$product['image'].'" alt="" ></a>
                        <div style="display: flex; justify-content: space-around ; font-family: sans-serif; color: #FFFFFF; font-size: 20px;">
                            <p>' . $product['foodName'] . '</p>                            
                            <p>' . number_format($product['price'], 0, '', ','). ' đ' .'</p>
                        </div>
                        <input type="hidden" name="id" value="'.$product['id'].'">
                        <input type="hidden" name="index" value="' . $index . '">
                        <input type="submit" name="dathang" value="Đặt hàng" style="width: 300px; height: 55px; border-radius: 30px; border: none; background-color: #E4002B; margin-left: 6.5%;font-size: 17px; font-family: sans-serif; font-weight: 700; color: #FFFFFF;">
                     </form>
                    </div>';
    }
    ?>
</div>

<?php
//Thêm
// sản
// phẩm
// vào
// giỏ
// hàng
if (isset($_POST['dathang']) && ($_POST['dathang'])) {
    $check = true;
    $id = $_POST['id'];
    $index = $_POST['index'];
    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
        foreach ($_SESSION['cart'] as $key=>$item) {
            if ($item['id'] == $id) {
                $_SESSION['cart'][$key]['quantity'] += 1;
                $check = false;
            }
        }
    }
    if($check == true) {
        array_push($_SESSION['cart'], $products[$index]);
    }
    //header("Refresh:0");
}
?>
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
        <img src="images/icon/logo_footer.png" alt="" style="width: 349px; height: 113px; margin-top: 10%">
    </div>
</div>
</body>
</html>