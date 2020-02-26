<?php
				session_start();
				require_once("conn.php");
				
				if (isset($_POST["btn_submit"]))
				{
					$username = $_POST["username"];
					$password = $_POST["password"];
					
					if ($username=="" || $password=="")
					{
						echo "<script language='javascript'>";
						echo "alert('Bạn chưa nhập đầy đủ thông tin')";
						echo "</script>";
					}
					else
					{
						$sql = "select * from thongtin_dangnhap where username='$username' and password='$password'";
						$query = mysqli_query($conn,$sql);
						$num_rows = mysqli_num_rows($query);
						if ($num_rows == 0)
						{
							echo "<script language='javascript'>";
							echo "alert('Tên đăng nhập hoặc mật khẩu chưa đúng')";
							echo "</script>";
						}
						else
						{
							header('Location: Datphong.php');
						}
					}
				}
			?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login | HappyNight Hotel</title>
	<link rel="shortcut icon" type="image/png" href="img/iconHH.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylelogin.css">
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
				<button class="btn btn-dark btn-lg mr-2 ml-4">Login</button>
			</li>
		</ul>
	</div>
</nav>
</header>

<body >
<div id="phanlogin">
	<div id="1">
		<section class="login">
		<div class="tieudelogin">Login</div>
		<form action="" method="POST" >
			<input type="text" name="username" placeholder="Username" data-icon="U">
			<input type="password" name="password" placeholder="Password" data-icon="x">
			<div class="dangkivaquenpass">
				<div class="col"><a href="Register.php" >Đăng kí</a></div>
				<div class="col"><a href="#" >Quên mật khẩu?</a></div>
			</div>			
			
			<button type="submit" class="enviar" name="btn_submit">Đăng Nhập</button>
		</form>
		</section>	
	</div>
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