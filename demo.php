
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="cart.php" target="_blank"><img src="images/icon/cart.png" alt=""></a>
<?php
session_start();
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
echo '<h1>Danh sách sản phẩm</h1>';
foreach ($products as $index => $product) {
    echo '<div class="sanpham">
                    <form action="" method="post">
                        <img src="' . $product['image'] . '" alt="">
                        <p>' . $product['foodName'] . '</p>
                        <p>Giá : <span>' . $product['price'] . '</span> </p>
                        <input type="hidden" name="index" value="' . $index . '">
                        <input type="submit" name="dathang" value="Đặt hàng">
                     </form>
                    </div>';
}
//Thêm sản phẩm vào giỏ hàng
if (isset($_POST['dathang']) && ($_POST['dathang'])) {
    $index = $_POST['index'];
    array_push($_SESSION['cart'], $products[$index]);
    //header("Refresh:0");
}
?>
</body>
</html>
