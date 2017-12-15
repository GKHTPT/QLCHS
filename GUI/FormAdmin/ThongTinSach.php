<!-- CSS table -->
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>


   <?php
   //Kết nối với bảng thông tin sách
   require("../../Data/Connect.php");
	  $SQL = "SELECT * FROM  Sach inner join loai on Sach.IDLoai=loai.IDLoai";
	  $Query = mysql_query($SQL);
		   $Num_row = mysql_num_rows($Query);
   ?>
   <!-- Bảng Sách -->
    <table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="10">Quản lý kho sách </td> 
              </tr>
               
				      <tr>         	
                 <td align="justify" id="info" ><h5>Mã Sách</h5></td>
                 <td align="justify" id="info" ><h5>Tên Sách</h5></td>
                 <td align="justify" id="info"><h5>Ảnh Sách</h5></td>
                 <td align="justify" id="info"><h5>Tên Thể Loại</h5></td>
                 <td align="justify" id="info"><h5>Giá</h5></td>
                 <td align="justify" id="info"><h5>Tác Giả</h5></td>
                 <td colspan="2" align="justify" id="info"> <img src="../images/them.png"/><a href="admin.php?page=themsach">Thêm</a></td>
              </tr>
       <?php 
				while ($row = mysql_fetch_array($Query)) {
			 ?>
              <tr><!-- Show thông tin Sách-->
                 <td align="justify" id="info" ><h5><?php echo "$row[IDbook]";?></h5></td>
                 <td align="justify" id="info"><h5><?php echo "$row[Name]";?></h5></td>
                 <td align="justify" id="info" ><img width="90px" height="80px" src="../sach/<?php echo "$row[Picture]";?>"/> </td>
                 <td align="justify" id="info" ><h5><?php echo "$row[NameLoai]";?></h5></td>
                 <td align="justify" id="info" ><h5><?php echo "$row[Price]";?></h5></td>
                 <td align="justify" id="info" ><h5><?php echo "$row[author]";?></h5></td>
                 
                 <td align="justify" id="info"><img src="../images/sua.png"/> <a href="admin.php?page=suasach&idtv=<?php echo"$row[IDbook]";?>">Sửa</a></td>
                 <td align="justify" id="info"><img src="../images/xoa.png"/><a href="admin.php?page=xoasach&idtv=<?php echo"$row[IDbook]";?>">Xóa</a></td>
              </tr>
           <?php  
		  }?>
            </table>

		
