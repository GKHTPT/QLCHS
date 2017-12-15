<!-- CSS Table-->
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>
   <?php
   require("../../Data/Connect.php");//kết nối CSDL
	  $abcd = "SELECT * FROM BanHang.HoaDon inner join BanHang.KhachHang on BanHang.HoaDon.UserKH=BanHang.KhachHang.UserKH";//SQL
	  $stmt = db2_prepare($conn, $abcd);//Kết nối SQL
		
		if ($stmt) {		
			$result = db2_execute($stmt);//thực hiện SQL
       if (!$result) {
				echo "exec errormsg: " .db2_stmt_errormsg($stmt);
			}	
   ?>
    <table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px"><!-- Bảng Thông tin hóa đơn -->
            	<tr id="main-navbar" height="36px"class="menu-item" >
                  <td colspan="10">Quản lý tài khoản </td> 
                </tr>               
				<tr>                	
                  <td align="justify" id="info" >Mã Hóa Đơn</td>
                  <td align="justify" id="info" >Ngày Hóa Đơn</td>
                  <td align="justify" id="info"> Tên Khách Hàng</td>
                  <td align="justify" id="info">Sách Số Lượng</td>   
                  <td align="justify" id="info">Tổng Tiền</td>          
                  <td colspan="2" align="justify" id="info"> <img src="../images/them.png"/><a href="admin.php?page=themhd">Thêm</a></td>
                </tr>
                <?php 
				while ($row = db2_fetch_array($stmt)) {
				?>
                <tr><!-- Show dữ liệu hóa đơn -->
                 <td align="justify" id="info" ><?php echo "$row[0]";?></td>
                 <td align="justify" id="info"><?php echo "$row[1]";?></td>
                 <td align="justify" id="info" width="60px"><?php echo "$row[5]";?></td>
                        <?php 
                  //tạo biến tính tiền
				  $sach="";
				  $giamgia=0;
				  $tien=0;
				  $abcd1 = "SELECT * from BanHang.HDMH inner join Sach.Sach on BanHang.HDMH.MaSach=Sach.Sach.MaSach where mahd='$row[0]'";// SQL
				  $stmt1 = db2_prepare($conn, $abcd1);//Kết nối
		
						if ($stmt1) {		
							$result1 = db2_execute($stmt1);//thực hiện SQL
				      		 if (!$result1) {
									echo "exec errormsg: " .db2_stmt_errormsg($stmt);
							}	
							while ($row1 = db2_fetch_array($stmt1)) {
							$sach=$sach." ".$row1[6]." - ".$row1[3]." "."cuốn"." "."," ;//Ghi lại tên sách
							if($row1[4]!=0) $tien=$tien+(($row1[10]*$row1[3])-(($row1[10]*$row1[3])*$row1[4]/100));//ghi lại tiền
							else $tien=$tien+$row1[10]*$row1[3];
							
							}
						}
				  ?>
                  <td align="justify" id="info"><h5><?php echo "$sach"; ?></h5> </td>
                  <td align="justify" id="info"><h5><?php echo "$tien";?></h5> </td>
                  <td align="justify" id="info"><img src="../images/sua.png"/> <a href="admin.php?page=suahd&idtv=<?php echo"$row[0]";?>">Sửa</a></td>
                  <td align="justify" id="info"><img src="../images/xoa.png"/><a href="admin.php?page=xoahd&idtv=<?php echo"$row[0]";?>">Xóa</a></td>
                </tr>
           <?php } 
		   } else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
            </table>
		