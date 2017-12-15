<?php 
$errors=0;
//lây dữ liệu từ form
	if(isset($_POST["them"])){
	
	if($_POST["ma"]){
		$ma= $_POST["ma"];
	}else{
		$errors=1;
	}
	if($_POST["user"]){
		$user = $_POST["user"];
	}else{
		$errors=2;
	}
	
	if($_POST["ngay"]){
		$ngay = $_POST["ngay"];
	
	}
	else{
		$errors = 3;
	}
	
	if($errors == 0)//nếu không có dòng nào được chọn
	{
		//thực hiện thêm
		require("../../Data/Connect.php");//kết nối CSDL
			if($conn)
				{   $dem=0;
					//Tạo câu lệnh truy vấn
				    $SQL2= "SELECT * FROM KeToan.Luong";	
				    $SQL1= "INSERT INTO KeToan.Luong values('$ma','$user','$ngay')";
				    //kết nối SQL
					 $stmt1 = db2_prepare($conn, $SQL2);	
					$stmt = db2_prepare($conn, $SQL1);
                   
					if ($stmt1){
					    $result1 = db2_execute($stmt1);
							if ($result1) { 
							    while ($row = db2_fetch_array($stmt1)) {
                                  if($row[0]=="$ma"){//bắt ỗi trùng khóa
                                  	 $dem++; break;
                                    }
							     }
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã lương $ma đã tồn tại </font> </i></td></tr>";//thông báo lỗi
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
