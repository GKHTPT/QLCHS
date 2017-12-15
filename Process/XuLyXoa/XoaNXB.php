<?php
$idtv = $_GET["idtv"];//lấy thông tin mã xóa
	require("../../Data/Connect.php");
$sql = "DELETE FROM Sach.NXB WHERE manxb= '$idtv'";//thực hiện xóa
$stmt = db2_prepare($conn, $sql);		
		if ($stmt) {		
			$result = db2_execute($stmt);
header("location:admin.php?page=ttnxb");//load lại trang
		}
?>
