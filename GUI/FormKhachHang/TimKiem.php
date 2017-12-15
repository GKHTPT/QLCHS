<form method="post" enctype="multipart/form-data" runat="server">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">Tìm Kiếm Sách</td>
                </tr>
                
                   <tr height="50">
                     <td colspan="2">Tên Sách :</td>
                     <td colspan="2"><input type="text" name="ten" />
                   	<td class="form"><input type="submit" name="tim" value="Tìm Kiếm" /></td>
                </tr>
  <tr height="50">     
  <td class="form" colspan="4">         
<?php
require("../../Process/TimSach.php");//triệu gọi them sách
	?></td></tr>
            </table>
            </form>
