<?php $idtv = $_GET["idtv"];
//lấy dữ liệu lương từ DB2
require("../../Data/Connect.php");
$sqllay="select * from KeToan.Luong inner join QuanLy.Login on KeToan.Luong.madn=QuanLy.Login.madn where maluong='$idtv'";
$stmtx = db2_prepare($conn, $sqllay);	
			$result = db2_execute($stmtx);
 ?>
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Sửa Lương</td>
                </tr>
                 <tr height="50">
                	<td class="form" width="150px"><label>Mã :</label></td><!-- Textbox Mã-->
                    <td class="form"><font color=#00C><?php echo "$idtv";?></font></td>
                </tr>  
                <?php  while ($rowx = db2_fetch_array($stmtx)) {?>
                  <tr height="50">
                	<td class="form"><label>Tên User:</label></td><!-- Textbox User-->
                      <td class="form">
                <?php
                //kết nối với CSDL DB2
                	require("../../Data/Connect.php");
                	if($conn){    
                		$SQL= "SELECT * FROM QuanLy.Login";	
                		$stmt = db2_prepare($conn, $SQL);
                		
                		if ($stmt) {		
                			$result = db2_execute($stmt);       
                ?>
                 	<select name="user">
                            <option 
                            value="<?php print "$rowx[3]";?>"> <?php  print "$rowx[3]"; ?> 
                                            </option> 
                                    <?php  
                    while ($row = db2_fetch_array($stmt)) {
                  ?>
                   <option 
                          value="<?php print "$row[0]";?>"> <?php  print "$row[0]";} ?> 
                    </option> 
                      <?php }
                          ?>
                  </select>
                    </td>
              </tr>  

              <tr height="50">
              	<td class="form">Ngày Lĩnh</td>
                <td class="form"><input type="text" name="ngay" value="<?php echo"$rowx[2]";}}?>" /></td>
              </tr>
                            
              <tr height="50">
               	<td class="form"><input type="submit" name="sua" value="Sửa " /> <input type="reset" name="reset_name" value="Làm mới" /></td>
              </tr>
  <tr height="50">     
  <td class="form" colspan="2">         
<?php
require("../../XuLy/XuLySua/sualuong.php");//Triệu gọi xử lý
	?></td></tr>
            </table>
            </form>
