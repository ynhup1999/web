<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>HappyNight Hotel | Khách sạn cao cấp</title>
	<link rel="shortcut icon" type="image/png" href="img/iconHH.png"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styledatphong.css">
	<script type="text/javascript" src="js/datphong.js"></script>
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
				<a href="HappyNight.html"><button class="btn btn-dark btn-lg mr-2 ml-4">Logout</button></a>
			</li>
		</ul>
	</div>
</nav>
</header>

<body>
<div id="sodophong" class="container">
	<div class="row">	
		<div class="col-2">
			<table style="text-align:left">
				<tr id="dslau"><th>Lầu 10</th></tr>
				<tr id="dslau"><th>Lầu 9</th></tr>
				<tr id="dslau"><th>Lầu 8</th></tr>
				<tr id="dslau"><th>Lầu 7</th></tr>
				<tr id="dslau"><th>Lầu 6</th></tr>
				<tr id="dslau"><th>Lầu 5</th></tr>
				<tr id="dslau"><th>Lầu 4</th></tr>
				<tr id="dslau"><th>Lầu 3</th></tr>
				<tr id="dslau"><th>Lầu 2</th></tr>
				<tr id="dslau"><th>Lầu 1</th></tr>
			</table>
		</div>
	
		<div class="col-7">	
			<table border="1">
				<tr>
					<td id="pdon" value="J1">J1</td>
					<td id="pdon" value="J2">J2</td>
					<td id="pdon" value="J3">J3</td>
					<td id="pdoi" value="J4">J4</td>
					<td id="pdoi" value="J5">J5</td>
					<td id="pdoi" value="J6">J6</td>
					<td id="pdoi" value="J7">J7</td>
					<td id="pgiadinh" value="J8">J8</td>
					<td id="pgiadinh" value="J9">J9</td>
					<td id="pgiadinh" value="J10">J10</td>
				</tr>
				
				<tr>
					<td id="pdon">I1</td>
					<td id="pdon">I2</td>
					<td id="pdon">I3</td>
					<td id="pdoi">I4</td>
					<td id="pdoi">I5</td>
					<td id="pdoi">I6</td>
					<td id="pdoi">I7</td>
					<td id="pgiadinh">I8</td>
					<td id="pgiadinh">I9</td>
					<td id="pgiadinh">I10</td>
				</tr>
				
				<tr>
					<td id="pdon">H1</td>
					<td id="pdon">H2</td>
					<td id="pdon">H3</td>
					<td id="pdoi">H4</td>
					<td id="pdoi">H5</td>
					<td id="pdoi">H6</td>
					<td id="pdoi">H7</td>
					<td id="pgiadinh">H8</td>
					<td id="pgiadinh">H9</td>
					<td id="pgiadinh">H10</td>
				</tr>
				
				<tr>
					<td id="pdon">G1</td>
					<td id="pdon">G2</td>
					<td id="pdon">G3</td>
					<td id="pdoi">G4</td>
					<td id="pdoi">G5</td>
					<td id="pdoi">G6</td>
					<td id="pdoi">G7</td>
					<td id="pgiadinh">G8</td>
					<td id="pgiadinh">G9</td>
					<td id="pgiadinh">G10</td>
				</tr>
				
				<tr>
					<td id="pdon">F1</td>
					<td id="pdon">F2</td>
					<td id="pdon">F3</td>
					<td id="pdoi">F4</td>
					<td id="pdoi">F5</td>
					<td id="pdoi">F6</td>
					<td id="pdoi">F7</td>
					<td id="pgiadinh">F8</td>
					<td id="pgiadinh">F9</td>
					<td id="pgiadinh">F10</td>
				</tr>
				
				<tr>
					<td id="pdon">E1</td>
					<td id="pdon">E2</td>
					<td id="pdon">E3</td>
					<td id="pdoi">E4</td>
					<td id="pdoi">E5</td>
					<td id="pdoi">E6</td>
					<td id="pdoi">E7</td>
					<td id="pgiadinh">E8</td>
					<td id="pgiadinh">E9</td>
					<td id="pgiadinh">E10</td>
				</tr>
				
				<tr>
					<td id="pdon">D1</td>
					<td id="pdon">D2</td>
					<td id="pdon">D3</td>
					<td id="pdoi">D4</td>
					<td id="pdoi">D5</td>
					<td id="pdoi">D6</td>
					<td id="pdoi">D7</td>
					<td id="pgiadinh">D8</td>
					<td id="pgiadinh">D9</td>
					<td id="pgiadinh">D10</td>
				</tr>
				
				<tr>
					<td id="pdon">C1</td>
					<td id="pdon">C2</td>
					<td id="pdon">C3</td>
					<td id="pdoi">C4</td>
					<td id="pdoi">C5</td>
					<td id="pdoi">C6</td>
					<td id="pdoi">C7</td>
					<td id="pgiadinh">C8</td>
					<td id="pgiadinh">C9</td>
					<td id="pgiadinh">C10</td>
				</tr>
				
				<tr>
					<td id="pdon">B1</td>
					<td id="pdon">B2</td>
					<td id="pdon">B3</td>
					<td id="pdoi">B4</td>
					<td id="pdoi">B5</td>
					<td id="pdoi">B6</td>
					<td id="pdoi">B7</td>
					<td id="pgiadinh">B8</td>
					<td id="pgiadinh">B9</td>
					<td id="pgiadinh">B10</td>
				</tr>	
				
				<tr>
					<td id="pdon">A1</td>
					<td id="pdon">A2</td>
					<td id="pdon">A3</td>
					<td id="pdoi">A4</td>
					<td id="pdoi">A5</td>
					<td id="pdoi">A6</td>
					<td id="pdoi">A7</td>
					<td id="pgiadinh">A8</td>
					<td id="pgiadinh">A9</td>
					<td id="pgiadinh">A10</td>
				</tr>
			</table>
		</div>

		<div class="col-3">
			<h3><b>Sơ đồ phòng</b></h3>
			
			<ul>
				<li><img src="img/iconpdon.jpg" style="height:50px; width:50px"> Phòng đơn</li></br>
				<li><img src="img/iconpdoi.jpg" style="height:50px; width:50px"> Phòng đôi</li></br>
				<li><img src="img/iconpgiadinh.jpg" style="height:50px; width:50px"> Phòng gia đình</li></br>
				<li><img src="img/iconphongdadat.jpg" style="height:50px; width:50px"> Phòng đã có khách đặt</li></br>
		</div>
	</div>
</div>

<div id="formthongtin" class="container">
<form action="Lichsudatphong.php" name="thongtin" method="POST">
	<div class="row">
	<div class="col-6">
		<p id="tieude"><b>Họ Tên</b></p> <input id="thongtinkhach_hoten" type="text" placeholder="Name" name="hoten">
		<p id="tieude"><b>Ngày Sinh</b></p> <input id="thongtinkhach_ngaysinh"  type="date" name="ngaysinh">
		<p id="tieude"><b>Số CMND</b></p> <input id="thongtinkhach_cmnd"  type="text" placeholder="" name="socmnd">
		<p id="tieude"><b>Số Điện Thoại</b></p> <input id="thongtinkhach_sdt"  type="text" placeholder="" name="sodienthoai">
	</div>
	
	<div class="col-6">
		<p id="tieude"><b>Số Phòng Muốn Đặt</b></p> <input id="thongtinkhach_sophong"  type="text" placeholder="B1,A4,..." name="sophong" maxlength="3">
		<p id="tieude"><b>Email</b></p> <input id="thongtinkhach_email"  type="text" placeholder="email" name="email">
		<p id="tieude"><b>Ngày Nhận Phòng</b></p> <input id="thongtinkhach_ngaynhan"  type="date"  name="ngaynhan">
		<p id="tieude"><b>Ngày Trả Phòng</b></p> <input id="thongtinkhach_ngaytra"  type="date"  name="ngaytra">
		<input id="thongtinkhach_tongchiphi"  type="hidden" placeholder="" name="tongchiphi">
	</div>
	</div> 		
	<div id="choice">
		<p style="margin-bottom:0px; font-size:20px"><b>Các Dịch Vụ</b></p>	
		<input id="listchoice" type="checkbox" name="listchoice" value="Gym">Gym
		<input id="listchoice" type="checkbox" name="listchoice" value="Spa">Spa
		<input id="listchoice" type="checkbox" name="listchoice" value="Hồ Bơi">Bơi
		<input id="listchoice" type="checkbox" name="listchoice" value="Nhà Hàng">Nhà hàng Buffet
	</div>	
	<button type="submit" class="btn btn-success" onclick="onBtnShow(event)" style="margin-top:10px; font-size:25px; width:300px">Gửi thông tin</button>
</form>	
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