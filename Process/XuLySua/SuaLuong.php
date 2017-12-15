<?php
$errors=0;
//lấy dữ liệu từ form
	if(isset($_POST["sua"])){
		$ma= $idtv;
		if($_POST["user"]){
		$user = $_POST["user"];
	}else{
		$errors=2;
	}
	if($_POST["ngay"]){
		$ngay = $_POST["ngay"];
	}
	else{
		$errors = 3;//gán lỗi
	}	if($errors == 0)//kiểm tra dòng lỗi
	{
		require("../../Data/Connect.php");//kết nối CSDL
			if($conn)
				{   $dem=0;
		//tạo truy vấn		    	
		$SQL1= "update  KeToan.Luong set madn='$user',ngayluong='$ngay' where maluong='$ma'";
				
					$stmt = db2_prepare($conn, $SQL1);
                   //thực hiện sửa	
								  if ($stmt) {		
								  $result = db2_execute($stmt);
								  if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
						 			if ($result) {
                               			 echo"<td><b><font color=#00C> Đã sửa thành công </font></b></td></tr>";//thông báo Success
                               		    }
									}
								}
                            }
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi  
	}
?>
