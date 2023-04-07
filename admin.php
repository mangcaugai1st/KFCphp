<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
include 'database.php';
$kq = connectDB("SELECT id, foodName, image, price, quantity, hot, sale  FROM producttest");
if(isset($_GET['edit'])) $index=$_GET['edit'];
if(isset($_GET['del'])) {
    $delId=$_GET['del'];
    deleteDB($delId);
    header("Location: admin.php");
}
if(isset($_POST["editProduct"])&&($_POST["editProduct"])){
    //lấy dữ liệu về từ form
    $id=$_POST['id'];
    $image=$_POST['image'];
    $foodName=$_POST["foodName"];
    $quantity=1;
    $price=$_POST["price"];
    $hot=$_POST["hot"];
    $sale=$_POST["sale"];
    updateDB("UPDATE producttest SET foodName='$foodName', image='$image', price='$price',sale='$sale' WHERE id='$id'");
    header("Location: admin.php");
}
if(isset($_POST["addProduct"])&&($_POST["addProduct"])){
    $id=$_POST['id'];
    $image=$_POST['image'];
    // $image=$target_file;
    $foodName=$_POST["foodName"];
    $price=$_POST["price"];
    $quantity=1;
    $hot=$_POST["hot"];
    $sale=$_POST["sale"];
    insertDB("INSERT INTO producttest (id,foodName,price,image,quantity,hot,sale) VALUES ('$id','$foodName','$price','$image','$quantity','$hot','$sale')");
    header("Location: admin.php");
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="images/icon/kfc-logo.svg" alt="" width="100" height="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menus.php">Thực đơn</a>
            </li>
        </ul>
    </div>
</nav>
<div class="text-center">
    <h1>TRANG QUẢN LÝ</h1>
</div>
<form action="" method="post" class="m-4">
    <div class="row">
        <div class="col-6">
            <label class="form-label">Nhập ID sản phẩm</label>
            <input class="form-control" type="text" name="id" value="<?php if(isset($index)) echo $kq[$index]['id'] ?>">
            <label class="form-label">Tên sản phẩm</label>
            <input class="form-control" type="text" name="foodName" value="<?php if(isset($index)) echo $kq[$index]['foodName'] ?>">
            <label class="form-label">Số lượng mua</label>
            <input class="form-control" type="text" name="quantity" value="1" disabled>
            <label class="form-label">Đánh giá sản phẩm hot</label>
            <input class="form-control" type="text" name="hot" value="<?php if(isset($index)) echo $kq[$index]['hot'] ?>">
            <br>
            <input type="submit" class="btn btn-primary" name="addProduct" value="Thêm sản phẩm">
            <input type="submit" class="btn btn-warning" name="editProduct" value="Cập nhật sản phẩm">

        </div>
        <div class="col-6">
            <label class="form-label">Nhập URL hình ảnh</label>
            <input class="form-control" type="text" name="image" value="<?php if(isset($index)) echo $kq[$index]['image'] ?>">
            <input type="submit" class="btn btn-primary my-3" name="addImage" value="Thêm ảnh">
            <br>
            <label class="form-label">Giá sản phẩm</label>
            <input class="form-control" type="text" name="price" value="<?php if(isset($index)) echo $kq[$index]['price'] ?>">
            <label class="form-label">Số lượng đã bán</label>
            <input class="form-control" type="text" name="sale" value="<?php if(isset($index)) echo $kq[$index]['sale']?>">
        </div>
    </div>

</form>
<div class="card m-4">
    <div class="card-header">Quản lý sản phẩm</div>
    <div class="cart-body">
        <table class="table table-sm">
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Tên món ăn</th>
                <th>Hình ảnh</th>
                <th>Gía</th>
                <th>Số lượng</th>
                <th>Nổi bật</th>
                <th>Đã bán</th>
                <th>Thay đổi</th>
            </tr>
            <?php
            $stt = 1;
            foreach ($kq as $index=>$item) {
                echo "
                <tr>
                    <td>$stt</td>
                    <td>" . $item['id'] . "</td>  
                    <td>" . $item['foodName'] . "</td>  
                    <td><img src='" . $item['image'] . "' alt='' width='100px'></td>  
                    <td>" . number_format($item['price'], 0, '', ','). ' đ' ."</td>  
                    <td>" . $item['quantity'] . "</td>  
                    <td>" . $item['hot'] . "</td>  
                    <td>" . $item['sale'] . "</td>                    
                    <td><a href='admin.php?edit=".$index."'>Sửa</a> / <a href='admin.php?del=".$item["id"]."'>Xóa</a></td>  
                </tr>
            ";
                $stt+=1;
            }
            ?>
        </table>
    </div>
</div>
<div class="text-center" style="background-color: #202124;height: 50px">
    <h2 style="color: white">Copyright © 2023 KFC Vietnam</h2>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>