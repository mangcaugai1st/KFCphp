<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/css.css">
    <style>
        form {
            border: 3px solid #f1f1f1;
        }
        input[type=text], input[type=password] {
            width: 100%;
            margin: 8px 0;
            padding: 12px 20px;
            display: inline-block;
            border: 2px solid white;
            box-sizing: border-box;
        }
        button:hover {
            opacity: 0.7;
        }

        .container {
            padding: 25px;
            background-color: #fff;
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
            <a href="login.html" target="_blank"><button class="login-icon"><img src="images/icon/person-circle-outline.png" alt="" onclick=""></button></a>
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
<table>
    <tr>
        <td>
            <img src="images/signin.png" alt="">
        </td>
        <td>
            <h1 style="text-align: center">ĐĂNG NHẬP</h1>
            <form method="post">
                <div class="container">
                    <label>Địa chỉ email của bạn: </label>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Enter your email" name="username" required>
                    <label>Mật khẩu: </label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <button name ="post" type="submit" style="width: 100%; height: 50px; border-radius: 30px;background-color: #f8012e; color: white; font-family: sans-serif; font-size: 20px; font-weight: 700">Đăng nhập</button>
                    <button name ="" type="button" style="width: 100%; height: 50px; border-radius: 30px;background-color: #3b4dc9; color: white; font-family: sans-serif; font-size: 20px; font-weight: 700">
                        <a style="text-decoration: none; color: white" href="register.php">Đăng ký</a>
                    </button>
                    <h2>Hoặc tiếp tục với: </h2>
                    <button type="submit" style="width: 100%; height: 50px; border-radius: 30px;background-color: #3b5998; color: white; font-family: sans-serif; font-size: 20px; font-weight: 700">Đăng nhập bằng Facebook</button>
                    <button type="submit" style="width: 100%; height: 50px; border-radius: 30px; margin-top: 10px;background-color: #000; color: white; font-family: sans-serif; font-size: 20px; font-weight: 700">Đăng nhập bằng Apple</button>
                    <button type="submit" style="width: 100%; height: 50px; border-radius: 30px; margin-top: 10px;background-color: green; color: white; font-family: sans-serif; font-size: 20px; font-weight: 700">Đăng nhập bằng Google</button>
                </div>
            </form>
        </td>
    </tr>
</table>
<?php
/*
    if (isset($_POST['post']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($_POST['password'] == $password && $_POST['username'] == $username)
        {
            echo "<script type='text/javascript'>alert('Đăng nhập thành công');</script>";
            setcookie('username', $username, time()+10,"/");
            setcookie('password', $password, time()+10,"/");
            header('Location: menus.php');
        }
    else
    {
        echo "<script type='text/javascript'>alert('Đăng nhập thất bại');</script>";
    }
}
*/
include 'connection.php';
if (isset($_POST['post'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    checkLogin($username, $password);
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