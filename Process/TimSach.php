<?php 
if(isset($_POST["tim"])){
	
	$Ten = $_POST["ten"];
	require("../../Data/Connect.php");
   $SQL="Select * from Sach inner join Loai on Sach.IDLoai=Loai.IDLoai where Name like '%$Ten%'";
   $Query = mysql_query($SQL);
   
   ?>
	<table width="650px" id="main-content" border="0px" cellpadding="0px" cellspacing="0px">
        <?php  while($row=mysql_fetch_array($Query)){//duyệt các cột truy vấn được in ra màn hình?>
				<tr>
                	<td id="info">
<img width="90px" height="80px" src="../sach/<?php echo "$row[Picture]";?>"/> 
                    </td>
                <td align="justify" id="info" ><h5><font color="#0000CC"><?php echo "$row[Name]";?> </font></h5><?php echo "$row[NameLoai]";?></td>
                <td align="justify" id="info" ><?php echo "Giá :$row[Price]";?></td> 
                <td align="justify" id="info" ><?php echo "Tác Giả:$row[author]";?></td> 
                
                </tr>
                <?php } }?>
            </table>
