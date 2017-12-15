<?php 
$errors=0;
//lấy dữ liệu từ form vào biến thực hiện truy vấn
	if(isset($_POST["them"])){
	
	if($_POST["makh"]){
		$makh= $_POST["makh"];
	}else{
		$errors=1;
	}
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
		$errors = 6;
	}

	if($errors == 0)//nếu không có dòng nào bị lỗi
	{
		require("../../Data/Connect.php");//Thực hiện KẾt nối
			if($conn)
				{   $dem=0;
					//tạo câu lệnh truy vấn
				    $SQL2= "SELECT * FROM BanHang.Khachhang";	
				    $SQL1= "INSERT INTO BanHang.Khachhang values('$makh','$pass','$tennxb','$dc','$email','$sdt')";
					 //Kết Nối câu lệnh truy vấn
					 $stmt1 = db2_prepare($conn, $SQL2);	
					$stmt = db2_prepare($conn, $SQL1);
                   
					if ($stmt1){
					    $result1 = db2_execute($stmt1);
							if ($result1) { 
							    while ($row = db2_fetch_array($stmt1)) {
                                  if($row[0]=="$makh"){//bắt lỗi trùng khóa
                                  	 $dem++; break;
                                    }
							     }
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã khách hàng $makh đã tồn tại </font> </i></td></tr>";//thông báo lỗi
							else {
								  if ($stmt) {		
								  $result = db2_execute($stmt);//thêm vào CSDL
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
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi	  
	}
?>
