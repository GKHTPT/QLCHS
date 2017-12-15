<?php $idtv = $_GET["idtv"];
//Kết nối với dữ liệu điểm danh
require("../../Data/Connect.php");
$sqllay="select * from QuanLy.DiemDanh where iddd='$idtv'";
$stmtx = db2_prepare($conn, $sqllay);	
			$result = db2_execute($stmtx);

 ?>
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Thông Tin Ngày Vắng	</td>
                </tr>
                 <tr height="50">
                	<td class="form" width="150px"><label>STT:</label></td>
                    <td class="form"><font color=#00C><?php echo "$idtv";?></font></td><!-- Textbox Mã-->
                </tr>  
                <?php  while ($rowx = db2_fetch_array($stmtx)) {?>
                  <tr height="50">
                	<td class="form"><label>Tài Khoản:</label></td>
                    <td class="form"><input type="text" name="user" value="<?php echo"$rowx[1]";?>" /></td><!-- Textbox User-->
                </tr>  

                <tr height="50">
                	<td class="form"><label>Ngày Vắng</label></td>
                    <td class="form"><input type="text" name="ngayvang" value="<?php echo"$rowx[2]";?>" /></td><!-- Textbox Ngày Vắng-->
                </tr>
                <tr height="50">
                	<td class="form"><label>Lý Do:</label></td>
                    <td class="form"><input type="text" name="lydo" value="<?php echo"$rowx[3]";}?>" /></td><!-- Textbox Lý do-->
                </tr>               
                <tr height="50">
                	<td class="form"><input type="submit" name="sua" value="Sửa ID" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
              <tr height="50">     
              <td class="form" colspan="2">         
             <?php
                require("../../XuLy/XuLySua/suanc.php");// Triệu gọi xử lý
            ?></td>
              </tr>
    </table>
</form>
