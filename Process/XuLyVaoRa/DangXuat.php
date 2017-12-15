<?php
session_start();
if($_SESSION["user"] && $_SESSION["pass"]){
	session_destroy();//xóa dữ liệu đăng nhập
	header("location:../../login.php");//quay về trang login
}
else{
	header("location:../../login.php");//quay về trang login
}
?>
