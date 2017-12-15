<?php
$errors=0;
//lấy dữ liệu từ form gán vao biến SQL
	if(isset($_POST["sua"])){
		
		$makh= $idtv;	
	if($_POST["pass"]){
		$pass = $_POST["pass"];
	}else{
		$errors=2;
	}
	
	if($_POST["tenkh"]){
		$tenkh = $_POST["tenkh"];	
	}
	else{
		$errors = 3;
	}
	if($_POST["dc"]){
		$dc = $_POST["dc"];
	}
	else{
		$errors = 4;
	}
	if($_POST["email"]){
		$email = $_POST["email"];
	}
	else{
		$errors = 5;
	}
	if($_POST["sdt"]){
		$sdt = $_POST["sdt"];
	}
	else{
		$errors = 6;//gán biến lỗi vào dòng
	}
	if($errors == 0)//kiểm tra có dòng nào lỗi không
	
	{
		require("../../Data/Connect.php");
			if($conn)
				{   $dem=0;
			//tạo truy vấn	    	
		$SQL1= "update  BanHang.KhachHang set pass='$pass',tenkh='$tenkh',diachi='$dc',email='$email',sdt='$sdt' where userkh='$makh'";
			//	 thực hiện sửa
					$stmt = db2_prepare($conn, $SQL1);
						 if ($stmt) {		
								  $result = db2_execute($stmt);
								  if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
						 			if ($result) {
                               			 echo"<td><b><font color=#00C> Đã sửa thành công </font></b></td></tr>";//thông báo thành công
                               		    }
									}
								}
                            }
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi  
	}
 ?>
