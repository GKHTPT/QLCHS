<?php
$errors=0;
	if(isset($_POST["sua"])){
// lấy dữ liệu từ form gán cho biến	
		
	if($_POST["Name"]){
		$Name = $_POST["Name"];
	}
	else{
		$errors = 2;
	}
	if($_FILES["image_upload"]["name"]){
		$image_name = $_FILES["image_upload"]["name"];
		$image_path = $_FILES["image_upload"]["tmp_name"];
	}
	else{
		$errors = 3;
	}
	if($_POST["tentl"]){
		$tentl = $_POST["tentl"];
	}
	else{
		$errors = 4;
	}
	
	if($_POST["Price"]){
		$Price = $_POST["Price"];
		if(!is_numeric($Price)) $errors=5; else $errors=0; 
	}
	else{
		$errors = 5;
	}
	
	if($_POST["author"]){
		$author = $_POST["author"];
	}
	else{
		$errors = 8;
	}


	if($errors == 0)//kiểm tra có lỗi không
	
	{
		require("../../Data/Connect.php");//kết nối CSDL		
				    $new_image_path = "../Sach/".$image_name;
		            $image_upload = move_uploaded_file($image_path, $new_image_path);
				
							$SQL1= "UPDATE sach set Name='$Name',Price='$Price',author='$author',IDLoai='$tentl',Picture='$image_name' where IDbook='$ID'";	
							$Query1 = mysql_query($SQL1);
		 			       
                           echo"<td><b><font color=#00C> Đã sửa vào thành công $Name $Price $author $tentl $image_name</font></b></td></tr>";//thông báo thành công
						
                               		    }
									      
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi
	}
?>
