<!--Khởi động biến   -->
<?php
ob_start();
session_start();
?>

<!--Thông Tin Cấu tạo Của Trang  -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="">
<title>Trang Quản Trị</title>
<link rel="stylesheet" type="text/css" href="../css/Login.css">
</head>
<body>

<?php
if($_SESSION["user"] && $_SESSION["pass"]){//nếu đã thực hiện quá trình đăng nhập
?>
<!--Cấu tạo Của Trang page quản trị  -->
<table id="thanhkeo" width="900px" border="0px" cellpadding="0px" cellspacing="0px">
	<tr>
    	<td colspan="2" id="header">
        	<table border="0px" cellpadding="0px" cellspacing="0px">
            	<tr>
                	<td width="247" rowspan="2"><img src="../img/cuochop.jpeg" width="248" height="204" /></td>
                    <td width="800"><img src="../img/head.jpg" width="785" height="171" /></td>
                </tr>
                <tr>
                    <td height="30px" id="navbar">
                    	<table height="30px" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr>
                            	<td><a href="#">--__--__--__--__--__--__--__--__--__Chào mừng đã đến với Cửa hàng sách Phương Nam --__--__--__--__--__--__--__--__--__--__--__--__--__--</a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr height="31px">
                	<td colspan="2" id="line-header"></td>
                </tr>
            </table>
        </td>
    </tr>
  
    <tr id="body">
    	<td align="left" valign="top" width="250px">
        	<!-- Menu Chức năng-->
            <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
                <tr class="bg-leftbar" height="36px">
                	<td>Danh mục quyền hạn</td><!-- Tiêu đề Menu Chức năng-->
                </tr>
                <tr class="menu-item" height="30px"><!-- Link Page trang chủ-->
                    <td height="29"><img width="30px" src="../images/trangchu.png"/><a href="KhachHang1.php?page=thongtinTC"> trang chủ</a></td>
                </tr>
                  <tr class="menu-item" height="30px"><!-- Link Page trang chủ-->
                    <td height="29"><img  width="30px" src="../images/qlnd.png"/><a href="KhachHang1.php?page=matkhau"> Đổi mật khẩu</a></td>
                </tr>
                <tr class="menu-item" height="30px"><!-- Link Page thông tin-->
                    <td> <img  width="30px" src="../images/dollar.png"/><a href="KhachHang1.php?page=timkiem">Tìm Kiếm Thống Kê</a></td>
                </tr>
                 <tr class="menu-item" height="30px"><!-- Link Page thông tin-->
                    <td> <img  width="30px" src="../images/user.png"/><a href="KhachHang1.php?page=ttnguoidung">Thông tin người dùng</a></td>
                </tr>
                <tr height="30px">
                    <td></td>
                </tr>

            </table>
             <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr class="bg-leftbar" height="36px">
                	<td>Thông Tin Đăng Nhập</td>
                </tr>
                <tr height="30px">
                	<td id="user-info">Xin chào <b><?php echo $_SESSION["user"]?></b>! Member Hệ Thống.</td>
                </tr>
                <tr height="30px"><!-- Link xử lý đăng xuất-->
                	<td id="logout" align="right"><a href="../../Process/XuLyVaoRa/DangXuat.php">đăng xuất</a></td>
                </tr>
            </table>
           
           
        </td>
            
  
        <td align="right" valign="top" width="650px">
          <?php
            error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		    switch($_GET["page"]){
			case "thongtinTC": include_once("KhachHang.php");//kết nối thông tin ngừi dùng
			break;
			case "ttnguoidung": include_once("Thongtin.php");//kết nối thông tin ngừi dùng
			break;
			case "timkiem": include_once("TimKiem.php");//kết nối thông tin ngừi dùng
			break;
			case "matkhau": include_once("DoiPass.php");//kết nối thông tin ngừi dùng
			break;
			default: include_once("KhachHang.php");//gọi thông tin page trang chủ
			}
		?>
        
        </td>
    </tr>
   

</table>              
<?php
}
else{
	header("location:login.php");//kết nối với trang đăng nhập
}
?>
<div id='ads-left'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; left:0; top:0;'>
<a href='' target='_blank'><img border='0' height='665' src="../img/quangcao6.gif" width='140'/></a>
</div></div>

</body>
</html>
