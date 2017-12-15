<!-- CSS table  -->
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>

      <?php
      //KẾt nối bảng NXB
      require("../../Data/Connect.php");
      $abcd = "SELECT * FROM  Sach.NXB";
      $stmt = db2_prepare($conn, $abcd);

      if ($stmt) {		
      	$result = db2_execute($stmt);
         if (!$result) {
      		echo "exec errormsg: " .db2_stmt_errormsg($stmt);
      	}	
      ?>
      <!-- Bảng nhà xuất bản   -->
    <table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="10">Thông Tin Nhà Xuất Bản </td> 
              </tr>
               
				      <tr>	
                 <td align="justify" id="info" >Mã Nhà Xuất Bản</td>
                 <td align="justify" id="info" >Tên Nhà Xuất Bản</td>
                 <td align="justify" id="info">Số Điện Thoại</td>
                 <td align="justify" id="info">Địa Chỉ</td>                   
                 <td colspan="2" align="justify" id="info"> <img src="../images/them.png"/><a href="admin.php?page=themnxb">Thêm</a></td>
              </tr>
      <?php 
				while ($row = db2_fetch_array($stmt)) {
			?>
              <tr><!-- Show dữ liệu Bảng nhà xuất bản   -->
                 <td align="justify" id="info" ><?php echo "$row[0]";?></td>
                 <td align="justify" id="info"><?php echo "$row[1]";?></td>
                 <td align="justify" id="info" ><?php echo "$row[2]";?></td>
                 <td align="justify" id="info" ><?php echo "$row[3]";?></td>
                 <td align="justify" id="info"><img src="../images/sua.png"/> <a href="admin.php?page=suanxb&idtv=<?php echo"$row[0]";?>">Sửa</a></td>
                 <td align="justify" id="info"><img src="../images/xoa.png"/><a href="admin.php?page=xoanxb&idtv=<?php echo"$row[0]";?>">Xóa</a></td>
              </tr>
           <?php } 
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
    </table>

		
