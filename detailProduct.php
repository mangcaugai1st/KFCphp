<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết sản phẩm</title>
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
<?php
$products = array(
    array('id' =>'sp1', 'foodName' => '1 Miếng Gà Rán', 'image' => 'images/menus/1-Fried-Chicken.jpg', 'price' => '36000'),
    array('id' =>'sp2', 'foodName' => '2 Miếng Gà Rán', 'image' => 'images/menus/2-Fried-Chicken.jpg', 'price' => '71000'),
    array('id' =>'sp3', 'foodName' => '3 Miếng Gà Rán', 'image' => 'images/menus/3-Fried-Chicken.jpg', 'price' => '105000'),
    array('id' =>'sp4', 'foodName' => '6 Miếng Gà Rán', 'image' => 'images/menus/6-Fried-Chicken-new.jpg', 'price' => '205000'),
    array('id' =>'sp5', 'foodName' => 'Burger Tôm', 'image' => 'images/menus/Burger-Shrimp.jpg', 'price' => '45000'),
    array('id' =>'sp6', 'foodName' => 'Cơm Gà Rán', 'image' => 'images/menus/Rice-F.Chicken.jpg', 'price' => '232000'),
    array('id' =>'sp7', 'foodName' => '4 Phô Mai Viên', 'image' => 'images/menus/4-Chewy-Cheese.jpg', 'price' => '35000'),
    array('id' =>'sp8', 'foodName' => 'Combo nhóm 1', 'image' => 'images/D6.jpg', 'price' => '175000'),
    array('id' =>'sp9', 'foodName' => 'Combo nhóm 2', 'image' => 'images/D7-new.jpg', 'price' => '195000'),
    array('id' =>'sp10', 'foodName' => 'Combo nhóm 3', 'image' => 'images/D8-new.jpg', 'price' => '232000'),
    array('id' =>'sp11', 'foodName' => 'Combo nhóm 4', 'image' => 'images/6-Fried-Chicken-new.jpg', 'price' => '205000'),
);
// echo $_GET['id'];
$id=$_GET['id'];
$index=-1;
foreach($products as $key=>$product){
    if($product['id']==$id){
        $index=$key;
    }
}
echo '
            <h1 style="text-align: center">Chi tiết sản phẩm</h1>
            <form action="" method="post" style="display: grid; grid-template-columns: repeat(2, 1fr); margin-left: 15%;">
                <div>
                    <img src="'.$products[$index]['image'].'" width="400px" height="auto" >
                </div>
                <div>
                    <p style="font-family: sans-serif; font-size: 24px; font-weight: 700">Tên món ăn: <span style="font-size: 28px;  color: #f8012e">'.$products[$index]['foodName'].'</span></p>
                    <p style="font-family: sans-serif; font-size: 24px;">Giá: <span style="font-weight: 700">'.$products[$index]['price'].' đ</span></p>
                    <input type="hidden" name="index" value="'.$index.'">
                    <input type="submit" name="dathang" value="Đặt hàng" style="width: 100px; padding: 10px; border-radius: 30px; border: none; font-family: sans-serif">
                </div>
            </form>
        ';
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
        <img src="images/icon/logo_footer.png" alt="" style="width: 349px; height: 113px; margin-top: 10%" id="bo_cong_thuong">
    </div>
</div>
</body>
</html>