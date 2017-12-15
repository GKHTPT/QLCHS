<?php
$errors=0;
//lấy dữ liệu từ form gán vào biến
	if(isset($_POST["them"])){
	
	if($_POST["mahd"]){
		$mahd= $_POST["mahd"];
	}else{
		$errors=1;
	}
	if($_POST["ngayhd"]){
		$ngayhd = $_POST["ngayhd"];
	}else{
		$errors=2;
	}
	
	if($_POST["user"]){
		$user = $_POST["user"];
	
	}
	
	if($errors == 0)//nếu không có dòng lỗi nào
	{
		//thực hiện thêm
		require("../../Data/Connect.php");//Kết nối CSDL DB2
			if($conn)
				{   $dem=0;
					//tọa câu truy vấn
				    $SQL2= "SELECT * FROM BanHang.HoaDon";	
				    $SQL1= "INSERT INTO BanHang.HoaDon values('$mahd','$ngayhd','$user')";
				    //kết nối câu truy vấn
					 $stmt1 = db2_prepare($conn, $SQL2);	
					$stmt = db2_prepare($conn, $SQL1);
                   
					if ($stmt1){
					    $result1 = db2_execute($stmt1);
							if ($result1) { 
							    while ($row = db2_fetch_array($stmt1)) {
                                  if($row[0]=="$mahd"){//bắt lỗi trùng khóa
                                  	 $dem++; break;
                                    }
							     }
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã nhà xuất bản $mahd đã tồn tại </font> </i></td></tr>";//thông báo lỗi
							else {
								  if ($stmt) {		
								  $result = db2_execute($stmt);
								  if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
						 			if ($result) {
                               		header("location:admin.php?page=themcthd&mahd=$mahd");//chuyển tiếp nhập chi tiết hóa đơn
                               		    }
									}
								}
                            }
                    }
                }
		}
		  
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi		  
	}
?>
