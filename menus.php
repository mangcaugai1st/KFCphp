<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Thực đơn</title>
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
    <?php
    session_start();
    ?>
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
        <a href="login.php" target="_blank"><button class="login-icon"><img src="images/icon/person-circle-outline.png" alt=""></button></a>
      </li>
      <li>
        <a href="cart.php" target="_blank"><button class="cart-icon"><img src="images/icon/cart.png" alt=""></button></a>
         <!-- <a href="addcart.php" target="_blank"><img src="images/icon/cart.png" alt=""></a> -->
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
  <div style="display: flex; margin-left: 80px; margin-top: 50px">
    <img src="images/icon/kfc_logo_icon_181306.png" alt="" width="100" height="100">
    <h1>CÓ THỂ BẠN SẼ THÍCH MÓN NÀY</h1>
  </div>
    <!--<a href="cart.php" target="_blank"><img src="images/icon/cart.png" alt=""></a> -->

    <?php
    //session_start();
    if (!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
    //session_destroy();
    $products = array(
        array('foodName' => '1 Miếng Gà Rán', 'image' => 'images/menus/1-Fried-Chicken.jpg', 'price' => '36000'),
        array('foodName' => '2 Miếng Gà Rán', 'image' => 'images/menus/2-Fried-Chicken.jpg', 'price' => '71000'),
        array('foodName' => '3 Miếng Gà Rán', 'image' => 'images/menus/3-Fried-Chicken.jpg', 'price' => '105000'),
        array('foodName' => '6 Miếng Gà Rán', 'image' => 'images/menus/6-Fried-Chicken-new.jpg', 'price' => '205000'),
        array('foodName' => 'Burger Tôm', 'image' => 'images/menus/Burger-Shrimp.jpg', 'price' => '45000'),
        array('foodName' => 'Cơm Gà Rán', 'image' => 'images/menus/Rice-F.Chicken.jpg', 'price' => '232000'),
        array('foodName' => '4 Phô Mai Viên', 'image' => 'images/menus/4-Chewy-Cheese.jpg', 'price' => '35000'),
    );
    if (isset($_SESSION['cart'])) echo count($_SESSION['cart']);
    ?>
    <div class = "abc">
        <?php
    foreach ($products as $index => $product) {
        echo '<div class="sanpham">
                    <form action="" method="post" style = "width: 350px;height: 490px; /*    border: 1px solid black; */background-color: #202124;">
                        <img src="' . $product['image'] . '" alt="">
                        <div style="display: flex; font-family: sans-serif; color: #FFFFFF; font-size: 20px;">
                            <p style="margin-left: 5%">' . $product['foodName'] . '</p>
                            <p style="margin-left: 30%">'. $product['price'] . '</p>
                        </div>
                        <input type="hidden" name="index" value="' . $index . '">
                        <input type="submit" name="dathang" value="Đặt hàng" style="width: 300px; height: 55px; border-radius: 30px; border: none; background-color: #E4002B; margin-left: 6.5%;font-size: 17px; font-family: sans-serif; font-weight: 700; color: #FFFFFF;">
                     </form>
                    </div>';
    }
    ?>
    </div>
    <?php
    //Thêm sản phẩm vào giỏ hàng
    if (isset($_POST['dathang']) && ($_POST['dathang'])) {
        $index = $_POST['index'];
        array_push($_SESSION['cart'], $products[$index]);
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