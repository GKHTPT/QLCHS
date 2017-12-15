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
<title>Trang Login</title>
<link rel="stylesheet" type="text/css" href="GUI/css/login.css">
</head>
<body>

<!--Tạo nền page tuyết bay  -->       
<script type="text/javascript" src="http://www.trungtamtinhoc.edu.vn/api/snowstorm.js"></script>

<!--Tạo bảng để dễ dàng thiết kế giao diện  -->
<table id="thanhkeo" width="900px" border="0px" cellpadding="0px" cellspacing="0px">
	<tr>
    	<td colspan="2" id="header">
        	
            <table border="0px" cellpadding="0px" cellspacing="0px">
                <tr> <!-- Tạo ảnh cho header -->
                	<td width="247" rowspan="2"><img src="GUI/img/cuochop.jpeg" width="248" height="204" /></td>
                  <td width="652"><img src="GUI/img/head.jpg" width="652" height="171" /></td>
                </tr>
                <tr>
                    <td height="30px" id="navbar">
                    	<table height="30px" border="0px" cellpadding="0px" cellspacing="0px">
                        	<tr>
                            <!-- Các thông tin bổ trợ -->
                            	<td><a href="TrangChu.php">trang chủ</a></td>
                              	<td><a href="#">giới thiệu</a></td>
                                <td><a href="#">Sách</a></td>
                                <td><a href="#">Thông tin liên hệ</a></td>
                                <td><a href="#">Sơ đồ nhà sách</a></td>
                                <td><a href="#">Trợ giúp</a></td>
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
        	<!-- Cấu hình Menu trái  -->
          <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
              <tr class="bg-leftbar" height="36px">
                	<td colspan="2">Đăng Nhập Hệ Thống </td>
              </tr>
<?php error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

          if((!$_SESSION["user"]) && (!$_SESSION["pass"])){ //kiểm tra cache user và pass?>

          <!-- Tạo form đăng nhập -->
          <form method="POST">
            <tr>
                <td width="97" id="info" >UserName:</td>
                <td width="240"><input type="text" name="user" />        <br /> </td>
            </tr>
            <tr> 
                <td id="info"> Password:</td>
                <td><input type="password" name="pass" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="Login" /> </td>
                <td><input type="reset"  name="reset_name" value="Return" /></td>
            </tr>
            <tr> 
                <td id="info" colspan="2">
                <img src="GUi/img/anh.png" width="250px"/></td>
            </tr>
          </form>

          <!-- Triệu gọi lệnh kiểm tra đăng nhập-->
          <?php 
          }else{header("location:Process/XuLyVaoRa/dangxuat.php"); }
          require("Process/XuLyVaoRa/KiemTra.php");
          ?>

<!-- Các thông tin bổ trợ -->
            </table>
            <table width="250px" class="left-menu" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr class="bg-leftbar" height="36px">
                	<td>Hệ Thống</td>
              </tr>
              <tr height="30px">
                <td id="user-info">Xin chào đến với hệ thống.</td>
              </tr>
              <tr height="30px">
                	<td id="logout" align="right"><a href="login.php?page=taonich">Tạo tài khoản</a></td>
              </tr>
            </table>

        <td align="right" valign="top" width="650px">
            <?php
            //Gọi trang liên kết
			error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
            switch($_GET["page"]){
            default: include_once("GUI/FormHome/QuangCaoKH.php");
            }
            ?>
        </td>    
                          
<!-- Các thông tin link quảng cáo -->       
<div id='ads-left'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; left:0; top:0;'>
<a href='' target='_blank'><img border='0' height='665' src="GUI/img/quangcao3.gif" width='180'/></a>
</div></div>
<div id='ads-right'>
<div style='margin:0 0 5px 0; padding:0;width:200px;position:fixed; right:0; top:0;'>
<a href='' target='_blank'><img border='0' height='660' src="GUI/img/quangcao6.gif" width='180'/></a>
</div></div>
</body>
</html>
