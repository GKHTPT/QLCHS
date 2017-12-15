
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">thêm Khách Hàng</td>
                </tr>
                <tr height="50">
                	<td class="form" width="150px"><label>Mã Khách Hàng:</label></td>
                    <td class="form"><input type="text" name="makh" /></td><!-- Textbox makh -->
                </tr>
                <tr height="50">
                	<td class="form">Pass:</td>
                    <td class="form"><input type="text" name="pass"/></td><!-- Textbox Pass -->
                </tr>
                <tr height="50">
                	<td class="form">Tên Khách Hàng:</td>
                    <td class="form"><input type="text" name="tenkh" /></td><!-- Textbox TenKH-->
                </tr>      
                             <tr height="50">
                	<td class="form">Địa Chỉ:</td>
                    <td class="form"><input type="text" name="dc" /></td><!-- Textbox diachi-->
                </tr>     
                            <tr height="50">
                	<td class="form">Email:</td>
                    <td class="form"><input type="text" name="email" /></td><!-- Textbox Email -->
                </tr>      
                            <tr height="50">
                	<td class="form">Số Điện Thoại</td>
                    <td class="form"><input type="text" name="sdt" /></td><!-- Textbox SDT -->
                </tr>    
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="Thêm KH" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
  <tr height="50">     
  <td class="form" colspan="2">         
<?php
require("../../XuLy/XuLyThem/themkh.php"); // triệu gọi them khach hang
	?></td></tr>
            </table>
            </form>
