<?php $idtv = $_GET["idtv"];
//Lấy dữ liệu Khách hàng
require("../../Data/Connect.php");
					  $SQL2= "SELECT * FROM User where ID='$idtv'";	
					  $Query = mysql_query($SQL2);
		 			  $Num_row = mysql_num_rows($Query);
					   while ($row = mysql_fetch_array($Query)) {
						   $ID=$row[IDbook];
						   $UserName=$row[UserName];
?>

	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Thông Tin ID	</td>
                </tr>  
                <tr height="50">
                	<td class="form"><label>Tài Khoản:</label></td>
                  <td class="form"><?php echo "$row[UserName]";?></td><!-- Textbox Pass -->
                </tr>   
                  <tr height="50">
                	<td class="form"><label>Mật khẩu:</label></td>
                    <td class="form"><input type="password" name="Pass" value="<?php echo "$row[Pass]";?>" /></td><!-- Textbox Pass -->
                </tr>  
       <tr height="50">
                	<td class="form"><label>Họ</label></td>
                    <td class="form"><input type="text" name="LastName" value="<?php echo "$row[LastName]";?>"/></td><!-- Textbox Họ-->
                </tr>
                <tr height="50">
                	<td class="form"><label>Tên</label></td>
                    <td class="form"><input type="text" name="Name"value="<?php echo "$row[Name]";?>" /></td><!-- Textbox Ten-->
                </tr>
                 
                 
                  <tr height="50">
                	<td class="form"><label>Số Điện Thọai</label></td>
                    <td class="form"><input type="text" name="SDT" value="<?php echo "$row[PhoneNumber]";?>" /></td><!-- Textbox SDT-->
                </tr>
                <tr height="50">
                	<td class="form"><label>Địa Chỉ</label></td>
                    <td class="form"><input type="text" name="Address" value="<?php echo "$row[Address]";?>"/></td><!-- Textbox DiaChi-->
                </tr>
                
                  <tr height="50">
                	<td class="form"><label>Email</label></td>
                    <td class="form"><input type="text" name="Email" value="<?php echo "$row[Email]";?>" /></td><!-- Textbox Email-->
                </tr>   
                <?php if($row[Access]==1) {$a1=1; $a2="Admin";$b1=2;$b2="Member";} else {$a1=2; $a2="Member";$b1=1;$b2="Admin";} ?>
                <tr height="50"><!-- Combobox Chức vụ-->
                   <td class="form"><label>Chức Vụ</label></td>
                   <td class="form">
                  <select name="cv" >
                              <option value="<?php echo"$a1";?>">
                                 <?php echo"$a2"; ?>                             
                              </option> 
                              <option value="<?php echo"$b1";?>">
					   <?php echo"$b2";} ?> 
                              </option>              
                </select>
                </td> </tr>                      
                <tr height="50">
                	<td class="form"><input type="submit" name="sua" value="Sửa ID" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
                <tr height="50">     
                   <td class="form" colspan="2">   
                <?php 
                require("../../Process/XuLySua/suaid.php"); //triệu gọi xứ lý thêm
                ?>     
              </td>
              </tr>
            </table>
            </form>