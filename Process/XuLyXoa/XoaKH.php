<?php
$idtv = $_GET["idtv"];//lấy thông tin mã xóa
	require("../../Data/Connect.php");
$sql = "DELETE FROM BanHang.KhachHang WHERE userkh= '$idtv'";//thực hiện xóa
$stmt = db2_prepare($conn, $sql);
		
		if ($stmt) {		
			$result = db2_execute($stmt);
header("location:admin.php?page=ttkhachhang");//load lại trang
		}
?>
