<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

if($_POST["submitname"]){//nếu nút login được click
   if($_POST["user"] && $_POST["pass"]){
      $user =$_POST["user"]; // kiểm tra text field
      $pass =$_POST["pass"];
require("../../Data/Connect.php");//chuỗi kết nối
 if ($conn)
            {
$SQL = "SELECT * FROM BanHang.KhachHang where UserKH='$user' and pass='$pass'" ;//câu lệnh truy vấn
	  $stmt = db2_prepare($conn, $SQL); //kết nối truy vấn với DB
      if ($stmt) {
      $result = db2_execute($stmt);
      if (!$result) {
         echo "exec errormsg: " .db2_stmt_errormsg($stmt);
                    }
					if($result)
					{
						$dem=0;
			while($row=db2_fetch_array($stmt)){
				$dem++;
			}
			if($dem==1){
		   $_SESSION["user"] = $user;//ghi lại thông tin đăng nhập vào hệ thống
		   $_SESSION["pass"] = $pass;
           header("Location:KhachHang1.php");// chuyển trang
     			  }
	          } 
	 	 }
	}
			echo"<script> alert('Tài khoản không hợp lệ !')</script> " ;       
}
}
?>
