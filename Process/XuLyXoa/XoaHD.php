<?php
$idtv = $_GET["idtv"];//lấy thông tin mã xóa
//truy vấn CSDL
	require("../../Data/Connect.php");
$sql = "DELETE FROM BanHang.hdmh WHERE mahd= '$idtv'";//xóa tt ở bảng hóa đơn
$stmt = db2_prepare($conn, $sql);	
$result = db2_execute($stmt);
$sql1 = "DELETE FROM BanHang.HoaDon WHERE mahd= '$idtv'";//xóa thông tin ở bản chi tiết
$stmt1 = db2_prepare($conn, $sql1);	
$result1 = db2_execute($stmt1);
header("location:admin.php?page=tthoadon");//load lại trang		
?>
