
	   <form method="post" enctype="multipart/form-data">
            <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px">
                	<td colspan="6">thêm Vắng</td>
                </tr>
              
                <tr height="50">
                	<td class="form" width="150px"><label>STT:</label></td>
                    <td class="form"><input type="text" name="stt" /></td><!-- Textbox STT -->
                </tr>
                
                 <tr height="50">
                   <td class="form">User :</td><!-- Combobox user-->
                   <td class="form">
                <?php
                  	require("../../Data/Connect.php");
                  	if($conn){    
                  		$SQL= "SELECT * FROM QuanLy.Login";	
                  		$stmt = db2_prepare($conn, $SQL);
                  		
                  		if ($stmt) {		
                  			$result = db2_execute($stmt);
                  		
                  	        
                  ?>
                     <select name="user" >
                                      <?php  
                      while ($row = db2_fetch_array($stmt)) {
                    ?>
                     <option 
                          value="<?php print "$row[0]";?>"> <?php  print "$row[0]";} ?> 
                     </option> 
                          <?php }}?>
                    </select>
                   </td>
               </tr>   

               <tr height="50">
                <td class="form">Ngày Vắng:</td>
                <td class="form"><input type="text" name="ngayvang"/></td>
               </tr>
                <tr height="50">
                	<td class="form">Lý Do:</td>
                  <td class="form"><input type="text" name="lydo" /></td>
                </tr>
                                   
                <tr height="50">
                	<td class="form"><input type="submit" name="them" value="Thêm ID" /> 
                  <input type="reset" name="reset_name" value="Làm mới" /></td>
                </tr>
                <tr height="50">     
                  <td class="form" colspan="2">         
                <?php 
                require("../../XuLy/XuLyThem/themnc.php");//Triệu gọi them
                ?></td></tr>
      </table>
</form>
