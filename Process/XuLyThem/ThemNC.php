<?php
$errors=0;
//lây dữ liệu từ form
	if(isset($_POST["them"])){
	
	if($_POST["stt"]){
		$stt= $_POST["stt"];
	}else{
		$errors=1;
	}
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
		$errors = 4;
	}

	if($errors == 0)//nếu không có dòng nào được chọn
	{
		//thực hiện thêm
		require("../../Data/Connect.php");//kết nối CSDL
			if($conn)
				{   $dem=0;
				    $SQL2= "SELECT * FROM QuanLy.DiemDanh";	
				    $SQL1= "INSERT INTO QuanLy.DiemDanh values('$stt','$user','$ngayvang','$lydo')";
					 $stmt1 = db2_prepare($conn, $SQL2);	
					$stmt = db2_prepare($conn, $SQL1);
                   
					if ($stmt1){
					    $result1 = db2_execute($stmt1);
							if ($result1) { 
							    while ($row = db2_fetch_array($stmt1)) {
                                  if($row[0]=="$stt"){//bắt ỗi trùng khóa
                                  	 $dem++; break;
                                    }
							     }
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã điểm danh $stt đã tồn tại </font> </i></td></tr>";//thông báo lỗi
							else {
								  if ($stmt) {		
								  $result = db2_execute($stmt);//thực hiện thêm vào CSDL
								  if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
						 			if ($result) {
                               			 echo"<td><b><font color=#00C> Đã thêm vào thành công </font></b></td></tr>";//thông báo thành công
                               		    }
									}
								}
                            }
                    }
                }
		}
		  
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";	  
	}
	?>
