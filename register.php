<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
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
            <a href="login.html" target="_blank">
                <button class="login-icon"><img src="images/icon/person-circle-outline.png" alt="" onclick=""></button>
            </a>
        </li>
        <li>
            <a href="cart.php" target="_blank">
                <button class="cart-icon"><img src="images/icon/cart.png" alt=""></button>
            </a>
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
            <h1 style="text-align: center">ĐĂNG KÝ</h1>
            <form method="post">
                <div class="container">
                    <label>Địa chỉ email của bạn: </label>
                    <input type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="Enter your email"
                           name="username" required>
                    <label>Mật khẩu: </label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <button name="post" type="submit"
                            style="width: 100%; height: 50px; border-radius: 30px;background-color: #f8012e; color: white; font-family: sans-serif; font-size: 20px; font-weight: 700">
                        Ok
                    </button>
                </div>
            </form>
        </td>
    </tr>
</table>
<?php
/*
// Establish database connection
$conn = new mysqli("localhost", "root", "", "databasephp");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST["username"];
$password = $_POST["password"];

// Perform basic validation
if (empty($username) || empty($password)) {
    die("Please fill in all the required fields.");
}

// Hash the password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the database
$sql = "INSERT INTO users (username, password) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $password_hash);
if ($stmt->execute()) {
    echo "Registration successful!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
*/
// Check if the form is submitted
if (isset($_POST['post'])) {
    // Get the form data
    $username = $_POST['username'];
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
    $password = $_POST['password'];

    // Connect to MySQL
    $conn = mysqli_connect('localhost', 'root', '', 'databasephp');

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the user data into the database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
</body>
</html>
