<?php
$idtv = $_GET["idtv"];//lấy thông tin mã xóa
	require("../../Data/Connect.php");
$sql = "DELETE FROM QuanLy.DiemDanh WHERE iddd= '$idtv'";//thực hiện xóa
$stmt = db2_prepare($conn, $sql);		
		if ($stmt) {		
			$result = db2_execute($stmt);
header("location:admin.php?page=qlnc");//load lại trang
		}
?>
