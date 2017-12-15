
<!-- CSS table -->
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>

<?php
require("../../Data/Connect.php");//gọi kết nối CSDL
$abcd = "SELECT * FROM  QuanLy.DiemDanh inner join QuanLy.Login on QuanLy.Login.MaDN=QuanLy.DiemDanh.MaDN";//cậu lệnh SQL
$stmt = db2_prepare($conn, $abcd);//kết nối câu lệnh SQL

    if ($stmt) {		
    $result = db2_execute($stmt);//thực hiện SQL
     if (!$result) {
    	echo "exec errormsg: " .db2_stmt_errormsg($stmt);
    }	
?>
<table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
      	<tr id="main-navbar" height="36px"class="menu-item" >
          <td colspan="10">Quản lý ngày công </td> <!-- Tên table -->
        </tr>
	      
        <tr><!-- Thông tin tên cột -->
            <td align="justify" id="info" >STT</td>
            <td align="justify" id="info" >TenNV</td>
            <td align="justify" id="info">NgayVang</td>
            <td align="justify" id="info">LyDo</td>
            <td colspan="2" align="justify" id="info"> <img src="../images/them.png"/><a href="admin.php?page=themnc">Thêm</a></td>
        </tr>
            <?php 
while ($row = db2_fetch_array($stmt)) {
?>
        <tr><!-- show Dữ liệu Bảng ngày công -->
         <td align="justify" id="info" ><?php echo "$row[0]";?></td>
         <td align="justify" id="info"><?php echo "$row[6] $row[7] [$row[4]]";?></td>
         <td align="justify" id="info" ><?php echo "$row[2]";?></td>
         <td align="justify" id="info" ><?php echo "$row[3]";?></td>
         <td align="justify" id="info"><img src="../images/sua.png"/> <a href="admin.php?page=suanc&idtv=<?php echo"$row[0]";?>">Sửa</a></td>
         <td align="justify" id="info"><img src="../images/xoa.png"/><a href="admin.php?page=xoanc&idtv=<?php echo"$row[0]";?>">Xóa</a></td>
        </tr>
<?php } 
} else { echo"<script>alert(\"chua co du lieu\")</script>";}?>
</table>

		
