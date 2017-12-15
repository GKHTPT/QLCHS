
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">thêm Nhà Xuất Bản</td>
                </tr>
              
                <tr height="50">
                	<td class="form" width="150px"><label>Mã NXB:</label></td>
                    <td class="form"><input type="text" name="manxb" /></td><!-- Textbox manxb -->
                </tr>
                
                <tr height="50">
                	<td class="form">Tên NXB:</td>
                    <td class="form"><input type="text" name="tennxb"/></td><!-- Textbox tennxb -->
                </tr>
                <tr height="50">
                	<td class="form">SDT:</td>
                    <td class="form"><input type="text" name="sdt" /></td><!-- Textbox sdt -->
                </tr>
                            
                             <tr height="50">
                	<td class="form">Địa Chỉ:</td>
                    <td class="form"><input type="text" name="dc" /></td><!-- Textbox Email -->
                </tr>       
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="Thêm NXB" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
                <tr height="50">     
                    <td class="form" colspan="2">         
                <?php
                 require("../../XuLy/XuLyThem/themnxb.php");//triệu gọi thêm nxb
                	?></td></tr>
    </table>
</form>

