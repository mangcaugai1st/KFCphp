<?php
function checkLogin($user, $pass) {
    // Kết nối đến CSDL MySQL
    $conn = mysqli_connect("localhost", "root", "", "databasephp");

    // Kiểm tra kết nối
    if (!$conn) {
        die("Không thể kết nối đến CSDL. Lỗi: " . mysqli_connect_error());
    }

    // Xử lý dữ liệu khi người dùng submit form
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Kiểm tra dữ liệu nhập vào
        // Ở đây ta nên sử dụng phương thức bảo mật hơn như prepared statement để đối phó với tấn công SQL injection
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

        if ($count == 1) {
            // Đăng nhập thành công
            echo "<script type='text/javascript'>alert('Đăng nhập thành công - Xin chào $username')</script>";
            setcookie('username', $username, time()+10,"/");
            setcookie('password', $password, time()+10,"/");
            header('Location: menus.php');
        } else {
            // Đăng nhập thất bại
            echo "<script type='text/javascript'>alert('Tài khoản hoặc mật khẩu không đúng!')</script>";
        }
    }
    // Đóng kết nối CSDL
    mysqli_close($conn);
}
?>
