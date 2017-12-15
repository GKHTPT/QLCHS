<?php $idtv = $_GET["idtv"];
//Lấy dữ liệu Khách hàng
require("../../Data/Connect.php");
$sqllay="select * from BanHang.KhachHang where userkh='$idtv'";
$stmtx = db2_prepare($conn, $sqllay);	
			$result = db2_execute($stmtx);
?>
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Thông Tin Nhà Xuất Bản</td>
                </tr>
                 <tr height="50">
                	<td class="form" width="150px"><label>Mã Khách Hàng:</label></td><!-- Textbox makh -->
                    <td class="form"><font color=#00C><?php echo "$idtv";?></font></td>
                </tr>  
                <?php  while ($rowx = db2_fetch_array($stmtx)) {?>
                <tr height="50">
                	<td class="form"><label>Pass:</label></td>
                    <td class="form"><input type="text" name="pass" value="<?php echo"$rowx[1]";?>" /></td><!-- Textbox Pass -->
                </tr>  
                  <tr height="50">
                	<td class="form"><label>Tên Khách Hàng:</label></td>
                    <td class="form"><input type="text" name="tenkh" value="<?php echo"$rowx[2]";?>" /></td><!-- Textbox Tên Khách hàng -->
                </tr>  
       <tr height="50">
                	<td class="form"><label>Địa Chỉ</label></td>
                    <td class="form"><input type="text" name="dc" value="<?php echo"$rowx[3]";?>" /></td><!-- Textbox Đia Chỉ -->
                </tr>
                <tr height="50">
                	<td class="form"><label>Email:</label></td>
                    <td class="form"><input type="text" name="email" value="<?php echo"$rowx[4]";?>" /></td><!-- Textbox Email -->
                </tr>           
                <tr height="50">
                	<td class="form"><label>Số Điện Thoại:</label></td>
                    <td class="form"><input type="text" name="sdt" value="<?php echo"$rowx[5]";}?>" /></td><!-- Textbox SDT -->
                </tr>     
                <tr height="50">
                	<td class="form"><input type="submit" name="sua" value="Sửa KH" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
  <tr height="50">     
  <td class="form" colspan="2">         
<?php

	?></td></tr>
            </table>
            </form>
