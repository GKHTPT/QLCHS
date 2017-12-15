<?php 
$masach="";
$errors=0;
//lấy thông tin gán vào biến
	if(isset($_POST["them"])){
	
	if($_POST["maID"]){
		$maID= $_POST["maID"];
	}else{
		$errors=1;
	}
	if($_POST["tensach"]){
		$tensach = $_POST["tensach"];
	$SQL3= "SELECT * FROM Sach.Sach where tensach='$tensach'";	
	$stmt3 = db2_prepare($conn, $SQL3);	
	$result3 = db2_execute($stmt3);	
	if(!$result3) $error="Tên sách không tồn tại";
	while($row3=db2_fetch_array($stmt3)){
		$masach=$row3[0];
	}
	
	}else{
		$errors=3;
	}
	
	if($_POST["soluong"]){
		$soluong = $_POST["soluong"];
	
	}
	else{
		$errors = 4;
	}
	
	if($_POST["giamgia"]){
		$giamgia = $_POST["giamgia"];
	}
	else{
		$errors = 5;//dòng lỗi
	}

	if($errors == 0)//ko có dòng nào lỗi
	{//thực hiện thêm
		require("../../Data/Connect.php");//kết nối CSDL
			if($conn)
				{   $dem=0;
					//tạo câu truy vấn
				    $SQL2= "SELECT * FROM Banhang.Hdmh";	
				    $SQL1= "INSERT INTO Banhang.Hdmh values('$maID','$mahd','$masach','$soluong','$giamgia')";
				    //kết nối câu truy vấn
					 $stmt1 = db2_prepare($conn, $SQL2);	
					$stmt = db2_prepare($conn, $SQL1);
                    
					if ($stmt1){
					    $result1 = db2_execute($stmt1);
							if ($result1) { 
							    while ($row = db2_fetch_array($stmt1)) {
                                  if($row[0]=="$maID"){//kiểm tra trùng lặp khóa
                                  	 $dem++; break;
                                    }
							     }
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã ID $maID đã tồn tại </font> </i></td></tr>";
							else {
								  if ($stmt) {		
								  $result = db2_execute($stmt);
								  if (!$result) {
				echo "<td><b><font color=#00C>Có thể Tên Sách trên không tồn tại trong kho </font></b></td></tr>";
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
		  //thông báo lỗi
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";
		  
	}
?>
