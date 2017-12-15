<form method="post" enctype="multipart/form-data" runat="server">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Thêm Sách Vào Kho	</td>
                </tr>
              
               
                
                  <tr height="50">
                	<td class="form"><label>Tên Sách:</label></td>
                    <td class="form"><input type="text" name="Name" /></td><!-- Textbox Ten Sách -->
                </tr>  

                <tr height="50">
                	<td class="form"><label>Ảnh Sách</label></td><!-- Sự kiện với ảnh-->
                  <td class="form"> <input type="file" name="image_upload" accept="image/*" onchange="loadFile(event)">
                          <img id="output" width="90px" height="80px" />
                          <script>
                            var loadFile = function(event) {
                              var output = document.getElementById('output');
                              output.src = URL.createObjectURL(event.target.files[0]);
                            };
                          </script>

                </tr>
                 <tr height="50">
                   <td class="form">Tên Thể Loại</td>
                   <td class="form">
                <?php
                  	require("../../Data/Connect.php");
                  	
                  		$SQL= "SELECT * FROM loai";	
                  		$Query = mysql_query($SQL);
		   $Num_row = mysql_num_rows($Query);   
                      ?>
                	<select name="tentl" >
                    <?php  
                        while ($row = mysql_fetch_array($Query)) {
                      ?>
                       <option 
                             value="<?php print "$row[IDLoai]";?>"> <?php  print "$row[NameLoai]";} ?> 
                        </option> 
                    
                      </select>
                </td> </tr>     
                
                 
                  <tr height="50">
                	<td class="form"><label>Giá</label></td>
                    <td class="form"><input type="number" name="Price" /></td><!-- Textbox Giá -->
                </tr>
                 
                <tr height="50">
                	<td class="form"><label>Tác Giả</label></td>
                    <td class="form"><input type="text" name="author" /></td><!-- Textbox Tác Giả -->
                </tr>
                
                  
                                 
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="Thêm Sách" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
  <tr height="50">     
  <td class="form" colspan="2">         
<?php
require("../../Process/XuLyThem/themsach.php");//triệu gọi them sách
	?></td></tr>
            </table>
            </form>
