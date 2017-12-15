<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if($_POST["login"]){//nếu nút login được click
   if($_POST["user"] && $_POST["pass"]){ // kiểm tra text field
   
		  $user =$_POST["user"];//lấy dữ liệu text field
		  $pass =$_POST["pass"];
		   require("Data/Connect.php");
		   $SQL="Select * from User inner join Access on User.Access=Access.Access where UserName='$user' and Pass='$pass'";
		   $Query = mysql_query($SQL);
		   $Num_row = mysql_num_rows($Query);
		   $_SESSION["user"] = $user;//ghi lại thông tin đăng nhập vào hệ thống
		   $_SESSION["pass"] = $pass;
		   if($Num_row >0 ) {
           while($row=mysql_fetch_array($Query)){//duyệt cột truy vấn được
			   if ($row[Access]==1)   header("location:GUI/FormAdmin/admin.php");// chuyển trang
			   else
			   if ($row[Access]==2)  header("location:GUI/FormKhachHang/KhachHang1.php");
	       }
		   }
		echo"<script> alert('Tài khoản không hợp lệ !')</script> " ;//bắt lỗi truy cập
					}
			}
    	           
           
?>
