<?php 
$errors=0;
	if(isset($_POST["sua"])){
	
//lấy dữ liệu từ form gán cho biến	
		
        
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
	if($errors == 0)//kiêm tra có lỗi không
	{//Thực hiện CSDL
		require("../../Data/Connect.php");

							$SQL1= "UPDATE `user` set Pass='$Pass',Name='$Name',LastName='$LastName',Email='$Email',PhoneNumBer='$PhoneNumber',Address='$Address',Access='$cv' where ID='$idtv'";	
							$Query1 = mysql_query($SQL1);
		 			       
                           echo"<td><b><font color=#00C> Đã sửa vào thành công </font></b></td></tr>";//thông báo thành công
						
                               		    }
									      
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi
	}
	
	?>