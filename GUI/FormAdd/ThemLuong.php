	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">thêm Lương</td>
                </tr>
                <tr height="50">
                	<td class="form" width="150px"><label>Mã :</label></td>
                    <td class="form"><input type="text" name="ma" /></td>
                </tr>
                 <tr height="50">
                   <td class="form">User :</td>
                   <td class="form">
                <?php
                  //
                	require("../../Data/Connect.php");//kết nối CSDL
                	if($conn){    
                		$SQL= "SELECT * FROM QuanLy.Login";	//SQL
                		$stmt = db2_prepare($conn, $SQL);//kết nối SQL
                		
                		if ($stmt) {		
                			$result = db2_execute($stmt);      
                ?>
                	<select name="user" >
                    <?php  
                    while ($row = db2_fetch_array($stmt)) {
                  ?>
                   <option 
                                                value="<?php print "$row[0]";?>"> <?php  print "$row[0]";} ?> 
                                            </option> 
                                            <?php }}?>
                  </select>
                </td> </tr>   
                <tr height="50">
                	<td class="form">Ngày Lĩnh:</td>
                    <td class="form"><input type="text" name="ngay" /></td><!-- Textbox Ngày -->
                </tr>       
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="ThêmLương" /></td> <td><input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
  <tr height="50">     
  <td class="form" colspan="2">         
<?php
require("../../XuLy/XuLyThem/themluong.php");//triệu gọi thêm
	?></td></tr>
            </table>
            </form>
