	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">thêm Hóa Đơn</td>
                </tr>
                <tr height="50">
                	<td class="form" width="150px"><label>Mã Hóa Đơn:</label></td>
                    <td class="form"><input type="text" name="mahd" /></td><!-- Textbox MaHD-->
                </tr>
                <tr height="50">
                	<td class="form">Ngày Hóa Đơn:</td>
                    <td class="form"><input type="text" name="ngayhd"/></td><!-- Textbox ngàyhD-->
                </tr>
                 <tr height="50">
                   <td class="form">User Khách Hàng :</td><!--Combobox Khách hàng-->
                   <td class="form">
                <?php
                  // Kết nối table khách hàng
                	require("../../Data/Connect.php");//kết nối CSDL
                	if($conn){    
                		$SQL= "SELECT * FROM BanHang.Khachhang";	
                		$stmt = db2_prepare($conn, $SQL);
                		
                		if ($stmt) {		
                			$result = db2_execute($stmt);       
                ?>
                	<select name="user" >
                    <?php  
                      while ($row = db2_fetch_array($stmt)) {
                    ?>
                        <option 
                                value="<?php print "$row[0]";?>"> <?php  print "$row[0]";//show dữ liệu combobox
                                } ?> 
                        </option> 
                   <?php }}?>
                 </select>
                </td> </tr>   
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="Thêm HD" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
                <tr height="50">     
                <td class="form" colspan="2">         
              <?php
              require("../../XuLy/XuLyThem/themhd.php"); //triệu gọi xử lý thêm
              	?></td></tr>
            </table>
            </form>
