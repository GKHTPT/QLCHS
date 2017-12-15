<style>
table tr td mark{
 text-align:center;
}
</style>  
<!--  kết nối tạo câu lệnh truy vấn-->
  <?php
   //KẾt nối với Thông tin sách để quảng cáo
   require("../../Data/Connect.php");
   $SQL="Select * from Sach inner join Loai on Sach.IDLoai=Loai.IDLoai";
   $Query = mysql_query($SQL);
   $Num_row = mysql_num_rows($Query);
   ?> 
   <!--  Show bảng quảng cáo-->   
    <table width="800px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="6">Sản Phẩm Nổi Bật</td>
                </tr>    
        <?php  while($row=mysql_fetch_array($Query)){//duyệt các cột truy vấn được in ra màn hình?>
				<tr>
                	<td id="info">
<img width="90px" height="80px" src="../sach/<?php echo "$row[Picture]";?>"/> 
                    </td>
                <td align="justify" id="info" ><h5><font color="#0000CC"><?php echo "$row[Name]";?> </font></h5><?php echo "$row[Name1]";?></td>
                <td align="justify" id="info" ><?php echo "Giá :$row[Price]";?></td> 
                <td align="justify" id="info" ><?php echo "Tác Giả:$row[author]";?></td> 
                <td align="justify" id="info" ><img src="../images/phonghop.png"/> <a href="">Mua</a></td> 
                </tr>
                <?php }?>
            </table>
