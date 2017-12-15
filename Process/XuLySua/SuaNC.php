<?php 
$errors=0;
//lấy dữ liệu từ form
	if(isset($_POST["sua"])){

		$iddd= $idtv;

	if($_POST["user"]){
		$user = $_POST["user"];
	}
	
	if($_POST["ngayvang"]){
		$ngayvang = $_POST["ngayvang"];
	
	}
	else{
		$errors = 3;
	}
	if($_POST["lydo"]){
		$lydo = $_POST["lydo"];
	}
	else{
		$errors = 4;//gán biến lỗi
	}

	if($errors == 0)//kiểm tra dòng nào ỗi không
	
	{
		require("../../Data/Connect.php");//kết nối CSDL 
			if($conn)
				{   $dem=0;
				    //tạo câu lệnh truy vấn	
				    $SQL1= "update  QuanLy.DiemDanh set madn='$user',ngayvang='$ngayvang',lydo='$lydo' where iddd='$iddd'";
				
					$stmt = db2_prepare($conn, $SQL1);
                   
					//thục hiện sửa
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
