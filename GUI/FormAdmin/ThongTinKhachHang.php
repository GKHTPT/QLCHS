<!-- CSS table  -->
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>

   <?php
   require("../../Data/Connect.php");//kết nối CSDL
	  $abcd = "SELECT * FROM  BanHang.KhachHang";//SQL
	  $stmt = db2_prepare($conn, $abcd);//kết nối SQL
		
		if ($stmt) {		
			$result = db2_execute($stmt);//thực hiện SQL
       if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
   ?>
    <!-- Bảng Thông tin khách hàng -->
    <table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="10">Thông Tin Khách Hàng </td> 
              </tr>
               
				      <tr>
                	
                 <td align="justify" id="info" >User</td>
                 <td align="justify" id="info" >Pass</td>
                 <td align="justify" id="info">Tên Khách Hàng</td>
                 <td align="justify" id="info">Địa Chỉ</td>
                 <td align="justify" id="info">Email</td>
                 <td align="justify" id="info">Số Điện Thoại</td>
                 <td colspan="2" align="justify" id="info"> <img src="../images/them.png"/><a href="admin.php?page=themkh">Thêm</a></td>
              </tr>
                  <?php 
				while ($row = db2_fetch_array($stmt)) {
				?>
                 <tr><!-- Show dữ liệu khách hàng -->
                 <td align="justify" id="info" ><?php echo "$row[0]";?></td>
                 <td align="justify" id="info"><?php echo "$row[1]";?></td>
                  <td align="justify" id="info" ><?php echo "$row[2]";?></td>
                  <td align="justify" id="info" ><?php echo "$row[3]";?></td>
                  <td align="justify" id="info" ><?php echo "$row[4]";?></td>
                  <td align="justify" id="info" ><?php echo "$row[5]";?></td>
                 <td align="justify" id="info"><img src="../images/sua.png"/> <a href="admin.php?page=suakh&idtv=<?php echo"$row[0]";?>">Sửa</a></td>
                  <td align="justify" id="info"><img src="../images/xoa.png"/><a href="admin.php?page=xoakh&idtv=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php } 
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>

		
