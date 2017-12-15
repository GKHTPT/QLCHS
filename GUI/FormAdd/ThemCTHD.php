<?php $mahd = $_GET["mahd"];//lấy thông tin mã thêm
require("../../Data/Connect.php");//kết nối CSDL
 ?>
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">thêm Chi Tiết Hóa Đơn</td> 
                </tr>
              
                <tr height="50">
                	<td class="form" width="150px"><label>Mã ID:</label></td>
                    <td class="form"><input type="text" name="maID" /></td><!-- Textbox ID-->
                </tr>
                
                <tr height="50">
                	<td class="form">Mã Hóa Đơn:</td>
                    <td class="form"><font color=#00C><?php echo "$mahd";?></td><!-- Textbox HD-->
                </tr>
                <tr height="50">
                	<td class="form">Tên Sách:</td>
                    <td class="form"><input type="text" name="tensach" /></td><!-- Textbox ten sách-->
                </tr>
                            
                             <tr height="50">
                	<td class="form">Số Lượng:</td>
                    <td class="form"><input type="number" name="soluong" /></td><!-- Textbox số lượng-->
                </tr>   
                           <tr height="50">
                	<td class="form">Giảm Giá:</td>
                    <td class="form"><input type="number" name="giamgia" /></td><!-- Textbox Khuyến mãi-->
                </tr>       
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="Thêm" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                     <td class="form"><a href="admin.php?page=tthoadon">Kết Thúc</a></td>
                </tr>
  <tr height="50">     
  <td class="form" colspan="2">         
<?php
require("../../XuLy/XuLyThem/themcthd.php"); //triệu gọi xử lý
	?></td></tr>
            </table>
            </form> 
