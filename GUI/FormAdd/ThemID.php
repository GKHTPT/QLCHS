
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">thêm ID	</td>
                </tr>  
                <tr height="50">
                	<td class="form" width="150px"><label>Tên tài khoản:</label></td>
                    <td class="form"><input type="text" name="UserName" /></td><!-- Textbox User-->
                </tr> 
                  <tr height="50">
                	<td class="form"><label>Mật khẩu:</label></td>
                    <td class="form"><input type="password" name="Pass" /></td><!-- Textbox Pass -->
                </tr>  
       <tr height="50">
                	<td class="form"><label>Họ</label></td>
                    <td class="form"><input type="text" name="LastName" /></td><!-- Textbox Họ-->
                </tr>
                <tr height="50">
                	<td class="form"><label>Tên</label></td>
                    <td class="form"><input type="text" name="Name" /></td><!-- Textbox Ten-->
                </tr>
                 
                 
                  <tr height="50">
                	<td class="form"><label>Số Điện Thọai</label></td>
                    <td class="form"><input type="text" name="SDT" /></td><!-- Textbox SDT-->
                </tr>
                <tr height="50">
                	<td class="form"><label>Địa Chỉ</label></td>
                    <td class="form"><input type="text" name="Address" /></td><!-- Textbox DiaChi-->
                </tr>
                
                  <tr height="50">
                	<td class="form"><label>Email</label></td>
                    <td class="form"><input type="text" name="Email" /></td><!-- Textbox Email-->
                </tr>   
                <tr height="50"><!-- Combobox Chức vụ-->
                   <td class="form"><label>Chức Vụ</label></td>
                   <td class="form">
                  <select name="cv" >
                              <option value="1"> Admin                                
                              </option> 
                              <option value="2"> MemBer                             
                              </option>              
                </select>
                </td> </tr>                      
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="Thêm ID" /> <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
                <tr height="50">     
                   <td class="form" colspan="2">   
                <?php 
                require("../../Process/XuLyThem/themid.php"); //triệu gọi xứ lý thêm
                ?>     
              </td>
              </tr>
            </table>
            </form>
