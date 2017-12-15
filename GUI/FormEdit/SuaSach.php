<?php $idtv = $_GET["idtv"];
//kế nối dữ liệu Sách
require("../../Data/Connect.php");
$SQL2= "SELECT * FROM sach inner join loai on sach.IDLoai=loai.IDLoai where IDbook='$idtv'";	
					  $Query = mysql_query($SQL2);
		 			  $Num_row = mysql_num_rows($Query);
					   while ($row = mysql_fetch_array($Query)) {
						   $ID=$row[IDbook];
 ?>
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Thông Tin Sách</td>
                </tr>
                 <tr height="50">
                	<td class="form" width="150px"><label>Mã Sách:</label></td>
                    <td class="form"><font color=#00C><?php echo "$idtv";?></font></td><!-- Textbox Mã  -->
                </tr>  
               
                  <tr height="50">
                	<td class="form"><label>Tên Sách:</label></td>
                    <td class="form"><input type="text" name="Name" value="<?php echo"$row[Name]";?>" /></td><!-- Textbox Sách-->
                </tr>  
                <tr height="50">
                	<td class="form"><label>Ảnh Sách :<?php echo"$row[Picture]";?> </label></td><!-- Textbox Ảnh Sách -->
                    <td class="form"><input type="file" name="image_upload" accept="image/*" onchange="loadFile(event)"><input  type="hidden" name="hinh"  value="<?php echo"$row[Picture]";?>"/>
                    <img id="output" width="90px" height="80px" />
                    <script>
                      var loadFile = function(event) {
                        var output = document.getElementById('output');
                        output.src = URL.createObjectURL(event.target.files[0]);
                      };
                    </script>
                    </td>
                </tr>
                 <tr height="50"><!-- Combobox Email -->
                   <td class="form"><label>Tên Thể Loại</label></td>
                   <td class="form">
                    
             
                                    	<select name="tentl">
                                        <option 
                        value="<?php echo "$row[IDLoai]";?>"> <?php echo "$row[NameLoai]"; ?> 
                                                </option> 
                                                   <?php
                    	require("../../Data/Connect.php");   
                    		$SQL2= "SELECT * FROM loai";	
                    		 $Query1 = mysql_query($SQL2);
                    	   while ($rowx = mysql_fetch_array($Query1)) {     
                    ?>
                                <option 
                                value="<?php echo "$rowx[IDLoai]";?>"> <?php echo "$rowx[NameLoai]"; ?> 
                                                </option> 
                                       <?php }?>
                        
                      </select>
                </td> 
              </tr>    
            
                <tr height="50">
                	<td class="form"><label>Giá:</label></td>
                  <td class="form"><input type="Number" name="Price" value="<?php echo"$row[Price]";?>" /></td>
                </tr>     
                  
                <tr height="50">
                	<td class="form"><label>Tác Giả:</label></td>
                  <td class="form"><input type="text" name="author" value="<?php echo"$row[author]";}?>" /></td>
                </tr>               
                <tr height="50">
                	<td class="form"><input type="submit" name="sua" value="Sửa ID" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
                <tr height="50">     
                  <td class="form" colspan="2">         
                  <?php
                  require("../../Process/XuLySua/suasach.php");
                  	?></td></tr>
  </table>
</form>