<?php
/*khởi động session trong php*/
session_start();
/*
 * kiểm tra xem người dùng đã đăng nhập hay chưa
 * nếu chưa đăng nhập chúng ta chuyển hướng(redirect) về trang login.php*/
if(!isset($_SESSION["loggedin"]) || ($_SESSION["loggedin"] != true) ){
    // chuyển hướng redirect trong php sử dụng hàm header
    header("Location: login.php");
    exit;
}
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
/*
 * nếu đã đăng nhập thành công*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Đăng nhập thành công</h1>
                <p>Tên người dùng: <?php echo $_SESSION["username"] ?> </p>
                <p><a href="logout.php">Đăng xuất</a></p>
            </div>
        </div>
    </div>
</body>
</html>