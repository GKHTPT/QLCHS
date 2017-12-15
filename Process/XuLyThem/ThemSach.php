<?php
$errors=0;
//Lấy và kiêm tra thông tin từ form
	if(isset($_POST["them"])){
	
	if($_POST["IDbook"]){
		$IDbook= $_POST["IDbook"];
	}else{
		$errors=1;
	}
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
		$NameLoai = $_POST["tentl"];
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

	if($errors == 0)
	{
		require("../../Data/Connect.php");
				    
  				    $ID=0;
					$SQL2= "SELECT * FROM Sach";	
				    $new_image_path = "../Sach/".$image_name;
		            $image_upload = move_uploaded_file($image_path, $new_image_path);
					//Kết nối SQL
                      $Query = mysql_query($SQL2);
		 			  $Num_row = mysql_num_rows($Query);
							    while ($row = mysql_fetch_array($Query)) {
                                 
									$ID=$row[IDbook];
							     }
								 $ID++;
						   
							$SQL1= "INSERT INTO `sach`  values($ID,'$Name',$Price,'$NameLoai','$author','$image_name')";	
							$Query1 = mysql_query($SQL1);
		 			       
                           echo"<td><b><font color=#00C> Đã thêm vào thành công </font></b></td></tr>";//thông báo thành công
						
                               		    }
									      
		  else
		  echo "<td> <i><font color=#F00>Dòng thứ -$errors- không được bỏ trống</font></i></td></tr>";//thông báo lỗi
	}
?>
