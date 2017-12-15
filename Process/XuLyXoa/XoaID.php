<?php
$idtv = $_GET["idtv"];//lấy thông tin mã xóa
	require("../../Data/Connect.php");
$SQL = "DELETE FROM User WHERE ID = '$idtv'";//thực hiện xóa
$Query = mysql_query($SQL);		
header("location:admin.php?page=qltk");//load lại trang
		
?>
