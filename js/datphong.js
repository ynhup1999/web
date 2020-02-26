var hoten, ngaysinh, socmnd, sodienthoai, sophong, ngaynhan, ngaytra

function onBtnShow(event)
{	
	hoten = document.getElementById('thongtinkhach_hoten').value;
	ngaysinh = document.getElementById('thongtinkhach_ngaysinh').value;
	socmnd = document.getElementById('thongtinkhach_cmnd').value;
	sodienthoai = document.getElementById('thongtinkhach_sdt').value;
	sophong = document.getElementById('thongtinkhach_sophong').value;
	ngaynhan = document.getElementById('thongtinkhach_ngaynhan').value;
	ngaytra = document.getElementById('thongtinkhach_ngaytra').value;
	var tongchiphi=0;
	phong = sophong.slice(1,2);
	if (sophong=="A10" || sophong=="B10" || sophong=="C10" || sophong=="D10" || sophong=="E10" || sophong=="F10" || sophong=="G10" || sophong=="H10" || sophong=="I10" || sophong=="J10")
	{
		tongchiphi = 1200000;
	}
	else if(phong=="1" || phong=="2" || phong=="3")
	{
		tongchiphi = 500000;
	}
	else if(phong=="4" || phong=="5" || phong=="6" || phong=="7")
	{
		tongchiphi = 800000;
	}
	else if(phong=="8" || phong=="9")
	{
		tongchiphi = 1200000;
	}
	
	
	
	document.getElementById("thongtinkhach_tongchiphi").value = tongchiphi;
	
	
	var r = confirm("Họ tên: "+hoten+"\n"
		 +"Ngày sinh: "+ngaysinh+"\n"
		 +"Số CMND: "+socmnd+"\n"
		 +"Số Điện Thoại: "+sodienthoai+"\n"
		 +"Số Phòng Muốn Đặt: "+sophong+"\n"
		 +"Ngày Nhận Phòng: "+ngaynhan+"\n"
		 +"Ngày Trả Phòng: "+ngaytra+"\n"
		 +"Tổng chi phí: " +tongchiphi+" VNĐ");	
		 
	if (r == false)
	{
		event.preventDefault();
		return false;
	}
	
}