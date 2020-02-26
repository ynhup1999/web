<?php
$username = "root";
$password = "";      
$server   = "localhost"; 
$dbname   = "thongtin_dangnhap";      

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Không kết nối :" . $conn->connect_error);
    exit();
}
?>