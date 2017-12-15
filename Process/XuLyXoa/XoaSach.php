<?php
$idtv = $_GET["idtv"];//lấy thông tin mã xóa
	require("../../Data/Connect.php");
$SQL = "DELETE FROM Sach WHERE IDbook= '$idtv'";//thực hiện xóa
$Query = mysql_query($SQL);
header("location:admin.php?page=ttsach");//load lại trang
		
?>
