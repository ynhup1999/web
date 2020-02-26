<?php
include('conn.php');

$username = "";
$password = "";
$email = "";
$age = "";
$phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(isset($_POST["username"])) { $username = $_POST['username']; }
    if(isset($_POST["password"])) { $password = $_POST['password']; }
    if(isset($_POST["email"])) { $email = $_POST['email']; }
    if(isset($_POST["age"])) { $age = $_POST['age']; }
	if(isset($_POST["phone"])) { $phone = $_POST['phone']; }

    $sql = "INSERT INTO thongtin_dangnhap(username, password, email, age, phone)
    VALUES ('$username', '$password', '$email', '$age', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "<script language='javascript'>";
		echo "alert('Đăng ký tài khoản thành công')";
		echo "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register | HappyNight Hotel</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styleregister.css">
	<script type="text/javascript" src="js/scriptlogin.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>

<header>
<nav id="thanhnav" class="navbar navbar-expand" >
	<a id="NameHotel" class="navbar-brand"> <img id="logo" src="img/iconHH.png"><b>HappyNight Hotel</b></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a href="HappyNight.html"><button id="1" class="btn btn-dark btn-lg mr-2">Home</button></a>
			</li>
			
			<li class="nav-item">
				<button class="btn btn-dark btn-lg mr-2">Room</button>
			</li>
			
			<li class="nav-item">
				<button class="btn btn-dark btn-lg mr-2">Services</button>
			</li>
			
			<li class="nav-item">
				<a href="Login.html"><button class="btn btn-dark btn-lg mr-2 ml-4">Login</button>
			</li>
		</ul>
	</div>
</nav>
</header>

<body>
<div id="hinhnen">
	<section class="register">
		<div class="tieuderegister">Register</div>
		<form action="" method="post" >
			<input type="text" name="username" value="" required title="Username required" placeholder="Username" data-icon="U">
			<div class="dangkivaquenpass">
				<div class="col"><a style="color:red">*Bắt buộc</a></div>
			</div>
			
			<input type="password" name="password" value="" required title="Password required" placeholder="Password" data-icon="x">
			<div class="dangkivaquenpass">
				<div class="col"><a style="color:red">*Bắt buộc</a></div>
			</div>
			
			<input type="text" name="email" value="" required title="Email required" placeholder="Email" data-icon="U">
			<div class="dangkivaquenpass">
				<div class="col"><a style="color:red">*Bắt buộc</a></div>
			</div> 
			
			<input type="text" name="age" value="" required title="Age required" placeholder="Age" data-icon="U" style="margin-bottom:18px">
			<input type="text" name="phone" value="" required title="Phone required" placeholder="Phone" data-icon="U" style="margin-bottom:30px">
			<button type="submit" class="enviar">Đăng kí</button>
		</form>
	</section>
</div>
</body>

<footer>
	<div class="container">
			<div class="row">
				<div class="col-sx-3 col-md-6 col-xs-12">
					<h4>HappyNight Hotel</h4>
						<p><a id="ft" href="#">Tuyển dụng</a>
							<br><a id="ft" href="#">Khách hàng tiêu biểu</a>
							<br><a id="ft" href="#">Chính sách bảo mật</a>
						</p>
						<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook mr-2"></a>
						<a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
				</div>
				
				<div class="col-sx-3 col-md-6 col-xs-12">
					<h4>Trợ Giúp</h4>	
						<p><a id="ft" href="#">Về chúng tôi</a>
							<br><a id="ft" href="#">Góp ý</a>
							<br><a id="ft" href="#">Đánh giá khách hàng</a>
						</p>
				</div>
				
				<div class="col-sx-3 col-md-6 col-xs-12">
					<h4>Dịch vụ</h4>
					<p><a id="ft" href="#">Phòng</a>
						<br><a id="ft" href="#">Hotel view</a></p>
				</div>
				
				<div id="LH" class="col-sx-3 col-md-6 col-xs-12">
					<h4>Liên hệ</h4>
						<p>KHÁCH SẠN HAPPYNIGHT HOTEL 
							<br> Địa chỉ: Số 87, đường Nguyễn Thị Minh Khai, phường 14, Quận 1, TP.HCM
							<br> MST: 123456789 <br>SĐT: (028)39411722
							<br> Website: <a href="#">happynight.com.vn</a>
							<br>Email: happynightHT@gmail.com</p>
				</div>
			</div>
	</div>
</footer>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
</html>