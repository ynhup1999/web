<?php
include('conn.php');

$hoten = "";
$ngaysinh = "";
$socmnd = "";
$sodienthoai = "";
$sophong = "";
$email = "";
$ngaynhan = "";
$ngaytra = "";
$tongchiphi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(isset($_POST["hoten"])) { $hoten = $_POST['hoten']; }
    if(isset($_POST["ngaysinh"])) { $ngaysinh = $_POST['ngaysinh']; }
    if(isset($_POST["socmnd"])) { $socmnd = $_POST['socmnd']; }
    if(isset($_POST["sodienthoai"])) { $sodienthoai = $_POST['sodienthoai']; }
	if(isset($_POST["sophong"])) { $sophong = $_POST['sophong']; }
	if(isset($_POST["email"])) { $email = $_POST['email']; }
	if(isset($_POST["ngaynhan"])) { $ngaynhan = $_POST['ngaynhan']; }
	if(isset($_POST["ngaytra"])) { $ngaytra = $_POST['ngaytra']; }
	if(isset($_POST["tongchiphi"])) { $tongchiphi = $_POST['tongchiphi']; }

    $sql = "INSERT INTO thongtin_datphong(hoten, ngaysinh, socmnd, sodienthoai, sophong, email, ngaynhan, ngaytra, tongchiphi)
    VALUES ('$hoten', '$ngaysinh', '$socmnd', '$sodienthoai', '$sophong', '$email', '$ngaynhan', '$ngaytra', '$tongchiphi')";

    if ($conn->query($sql) === TRUE) {
        echo "<script language='javascript'>";
		echo "alert('Đặt phòng thành công !')";
		echo "</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HappyNight Hotel | Khách sạn cao cấp</title>
	<link rel="shortcut icon" type="image/png" href="img/iconHH.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/stylelichsudatphong.css">
	<script type="text/javascript" src="js/lichsudatphong.js"></script>
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
				<a href="Login.php"><button class="btn btn-dark btn-lg mr-2 ml-4">Logout</button></a>
			</li>
		</ul>
	</div>
</nav>
</header>

<body>
<div class="container">
	<div id="tieudedatphong">
		<h1>Lịch Sử Đặt Phòng</h1>
	</div>

	<div id="danhsachdatphong">
		<table border="2">
			<tr style="height:40px;	font-size:20px; text-align:center">
				<th style="width:240px">Người đặt</th>
				<th style="width:260px">Email</th>
				<th style="width:130px">SĐT</th>
				<th style="width:120px">Số phòng</th>
				<th style="width:140px">Tổng chi phí</th>
				<th style="width:170px">Ngày nhận</th>
				<th style="width:170px">Ngày trả</th>
			</tr>
			

			<?php					
				$sqlx = "SELECT hoten, email, sodienthoai, sophong, tongchiphi, ngaynhan, ngaytra FROM thongtin_datphong";
				$result = $conn->query($sqlx);
				
				if ($result->num_rows >0)
				{
					while ($row = $result -> fetch_assoc())
					{
						echo"
							<tr style='text-align:center'>
								<td style='height:50px'>{$row['hoten']}</td>
								<td style='height:50px'>{$row['email']}</td>
								<td style='height:50px'>{$row['sodienthoai']}</td>
								<td style='height:50px'>{$row['sophong']}</td>
								<td style='height:50px'>{$row['tongchiphi']}</td>
								<td style='height:50px'>{$row['ngaynhan']}</td>
								<td style='height:50px'>{$row['ngaytra']}</td>
							</tr>
						";
					}
				}
				else
				{
					echo "";
				}
				$conn->close();
			?>
			
		</table>
	</div>
	
</div>

</body>

<footer>
	<div class="container">
			<div class="row">
				<div class="col-3">
					<h4>HappyNight Hotel</h4>
						<p><a id="ft" href="#">Tuyển dụng</a>
							<br><a id="ft" href="#">Khách hàng tiêu biểu</a>
							<br><a id="ft" href="#">Chính sách bảo mật</a>
						</p>
						<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook mr-2"></a>
						<a href="https://twitter.com/" target="_blank" class="fa fa-twitter"></a>
				</div>
				
				<div class="col-3">
					<h4>Trợ Giúp</h4>	
						<p><a id="ft" href="#">Về chúng tôi</a>
							<br><a id="ft" href="#">Góp ý</a>
							<br><a id="ft" href="#">Đánh giá khách hàng</a>
						</p>
				</div>
				
				<div class="col-3">
					<h4>Dịch vụ</h4>
					<p><a id="ft" href="#">Phòng</a>
						<br><a id="ft" href="#">Hotel view</a></p>
				</div>
				
				<div id="LH" class="col-3">
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