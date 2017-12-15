<?php 
$errors=0;
//lấy thông tin từ form gán vào biến
	if(isset($_POST["them"])){
	
	if($_POST["manxb"]){
		$manxb= $_POST["manxb"];
	}else{
		$errors=1;
	}
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
		$errors = 4;
	}

	if($errors == 0)
	{
		//kết nối csdl them nxb
		require("../../Data/Connect.php");//kết nối CSDL
			if($conn)
				{   $dem=0;
					//Thực hiện tuy vấn
				    $SQL2= "SELECT * FROM Sach.NXB";	
				    $SQL1= "INSERT INTO Sach.NXB values('$manxb','$tennxb','$sdt','dc')";
					 $stmt1 = db2_prepare($conn, $SQL2);	
					$stmt = db2_prepare($conn, $SQL1);
                   
					if ($stmt1){
					    $result1 = db2_execute($stmt1);
							if ($result1) { 
							    while ($row = db2_fetch_array($stmt1)) {
                                  if($row[0]=="$manxb"){//kiểm tra trùng mã
                                  	 $dem++; break;
                                    }
							     }
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã nhà xuất bản $manxb đã tồn tại </font> </i></td></tr>";
							else {
								  if ($stmt) {		
								  $result = db2_execute($stmt);//thêm vào CSDL
								  if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
						 			if ($result) {//thông báo thành công
                               			 echo"<td><b><font color=#00C> Đã thêm vào thành công </font></b></td></tr>";
                               		    }
									}
								}
                            }
                    }
                }
		}
		  //thông báo lỗi
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";  
	}
?>
