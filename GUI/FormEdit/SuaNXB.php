<?php $idtv = $_GET["idtv"];
// Kết nối dữ liệu NXB
require("../../Data/Connect.php");
$sqllay="select * from Sach.NXB where manxb='$idtv'";
$stmtx = db2_prepare($conn, $sqllay);	
			$result = db2_execute($stmtx);            
 ?>
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Thông Tin Nhà Xuất Bản</td>
                </tr>
                 <tr height="50">
                	<td class="form" width="150px"><label>Mã NXB:</label></td>
                    <td class="form"><font color=#00C><?php echo "$idtv";?></font></td><!-- Textbox Mã -->
                </tr>  
                <?php  while ($rowx = db2_fetch_array($stmtx)) {?>
                  <tr height="50">
                	<td class="form"><label>Tên Nhà Xuất Bản:</label></td>
                    <td class="form"><input type="text" name="tennxb" value="<?php echo"$rowx[1]";?>" /></td><!-- Textbox NXB-->
                </tr>  
       <tr height="50">
                	<td class="form"><label>Số Điện Thoại</label></td>
                    <td class="form"><input type="text" name="sdt" value="<?php echo"$rowx[2]";?>" /></td><!-- Textbox SDT-->
                </tr>
                <tr height="50">
                	<td class="form"><label>Địa Chỉ:</label></td>
                    <td class="form"><input type="text" name="dc" value="<?php echo"$rowx[3]";}?>" /></td><!-- Textbox Dia Chi-->
                </tr>               
                <tr height="50">
                	<td class="form"><input type="submit" name="sua" value="Sửa ID" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
  <tr height="50">     
  <td class="form" colspan="2">         
<?php
require("../../XuLy/XuLySua/suanxb.php");// Triệu gọi xử lý
	?></td></tr>
            </table>
            </form>
