<?php
/**
 * Created by PhpStorm.
 * User: duc
 * Date: 12/06/2019
 * Time: 9:56 CH
 */
/*
 * khai báo hằng số dùng để kết nối csdl*/
define("DB_SERVER","localhost");
define("DB_SERVER_USERNAME","root");
define("DB_SERVER_PASSWORD","");
define("DB_SERVER_NAME","demoapplogin");
/*
 * */
$connection = mysqli_connect(DB_SERVER,DB_SERVER_USERNAME,DB_SERVER_PASSWORD,DB_SERVER_NAME);
/*
 * kiểm tra xem kết nối đến csdl thành công không
 * nếu thành công thì ngắt chương trình bằng câu lệnh die()*/
if($connection == false){
    die("ERROR Không thể kết nối đến CSDL " . mysqli_connect_error());
}