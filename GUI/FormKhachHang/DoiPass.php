<?php
//kế nối dữ liệu Sách
require("../../Data/Connect.php");
$user=$_SESSION["user"];
$pass=$_SESSION["pass"];
$SQL2= "SELECT * FROM User where UserName='$user'";	
					  $Query = mysql_query($SQL2);
		 			  $Num_row = mysql_num_rows($Query);
				
 ?>
	   <form  method="post" enctype="multipart/form-data" >
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Thông Tin Sách</td>
                </tr>
                 <tr height="50">
                	<td class="form"><label>Pass Cũ:</label></td>
                    <td class="form"><input type="password" name="PassOld" /></td><!-- Textbox Sách-->
                </tr>   
                 <tr height="50">
                	<td class="form"><label>Pass Mới:</label></td>
                    <td class="form"><input type="password" name="pw1" /></td><!-- Textbox Sách-->
                </tr>   
                   <tr height="50">
                	<td class="form"><label>Xác Nhận Pass Mới:</label></td>
                    <td class="form"><input type="password" name="pw2" /></td><!-- Textbox Sách-->
               
                <tr height="50">
                 </tr>   
                	<td class="form"><input type="submit" name="Change" value="Đổi Pass" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
                <tr height="50">     
                  <td class="form" colspan="2">         
                  <?php
				  $errors = 0;
				  $dem=0;
                  if($_POST["Change"]){
				  $pw1=$_POST["pw1"];
				  $pw2=$_POST["pw2"];
				  $PassOld=$_POST["PassOld"];
				  if($pw1!=$pw2) $errors = 1;
				  $SQL="Select * from User where UserName='$user' and Pass='$pass'";
				   $Query = mysql_query($SQL);
				   while($row=mysql_fetch_array($Query)){
					   $dem++;
				   }
				   if($dem==0) $errors = 2;
				   if($errors==1)  echo "<i><font color=#F00>Xác nhận mật khẩu sai</font></i></td></tr>";
				   if($errors==2)  echo "<i><font color=#F00>Pass cũ không đúng</font></i></td></tr>";
				   if($errors==0)  {
				   $SQL1="Update user set Pass='$pw1'";
				   $Query1 = mysql_query($SQL1);
				    echo"<b><font color=#00C> Đã đổi pass thành công </font></b></td></tr>";
				   }
				  }
                  	?></td></tr>
  </table>
</form>