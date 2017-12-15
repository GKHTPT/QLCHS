<?php
$errors=0;
//lấy dữ liệu từ form
	if(isset($_POST["them"])){
	
	if($_POST["UserName"]){
		$UserName= $_POST["UserName"];
	}else{
		$errors=1;
	}
	if($_POST["Pass"]){
		$Pass = $_POST["Pass"];
	}
	else{
		$errors = 2;
	}
	if($_POST["LastName"]){
		$LastName = $_POST["LastName"];
	}
	else{
		$errors = 3;
	}
	if($_POST["Name"]){
		$Name = $_POST["Name"];
	}
	else{
		$errors = 4;
	}
	if($_POST["SDT"]){
		$PhoneNumber = $_POST["SDT"];
	}
	else{
		$errors = 5;
	}
	if($_POST["Address"]){
		$Address = $_POST["Address"];
	}
	else{
		$errors = 6;
	}
	if($_POST["Email"]){
		
        $Email = $_POST["Email"];
	}
	else{
		$errors = 7;
	}
	if($_POST["cv"]){
	 $cv=$_POST["cv"];
	}
	if($errors == 0)//nếu không có dòng nào lỗi
	{
		//Thực hiện CSDL
		require("../../Data/Connect.php");
				    $dem=0;
  				    $ID=0;
					$SQL2= "SELECT * FROM User";	
				    
					//Kết nối SQL
                      $Query = mysql_query($SQL2);
		 			  $Num_row = mysql_num_rows($Query);
							    while ($row = mysql_fetch_array($Query)) {
                                  if($row[UserName]==$UserName){//bắt lỗi trùng khóa
                                  	 $dem++; break;
                                    }
									$ID=$row[ID];
							     }
								 $ID++;
						    if($dem==1)  
						    	echo"<td><i><font color=#F00> Mã $user đã tồn tại </font> </i></td></tr>";//thông báo lỗi
							else {
							$SQL1= "INSERT INTO `user`  values($ID,'$UserName','$Pass','$Name','$LastName','$Address','$PhoneNumber','$Email','$cv')";	
							$Query1 = mysql_query($SQL1);
		 			       
                           echo"<td><b><font color=#00C> Đã thêm vào thành công </font></b></td></tr>";//thông báo thành công
						
                               		    }
									}      
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi
	}
	
	?>
