<?php
$errors=0;
// lấy dữ liệu từ form gán cho biến
	if(isset($_POST["sua"])){
		$manxb= $idtv;
	if($_POST["tennxb"]){
		$tennxb = $_POST["tennxb"];
	}else{
		$errors=2;
	}
	if($_POST["sdt"]){
		$sdt = $_POST["sdt"];
	}
	else{
		$errors = 3;
	}
	if($_POST["dc"]){
		$dc = $_POST["dc"];
	}
	else{
		$errors = 4;//gán lỗi
	}
	if($errors == 0)//kiểm tra có lỗi không
	{
		//thực hiện
		require("../../Data/Connect.php");//kết nối CSDL
			if($conn)
				{   $dem=0;
			//tạo truy vấn	    	
		$SQL1= "update  Sach.nxb set tennxb='$tennxb',sdt='$sdt',diachi='$dc' where manxb='$manxb'";
				
					$stmt = db2_prepare($conn, $SQL1);
                   
					//thực hiện sửa
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
