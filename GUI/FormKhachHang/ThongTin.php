<?php 
$user=$_SESSION["user"];//user đã đăng nhập
$pass=$_SESSION["pass"];
 require("../../Data/Connect.php");//kết nối CSDL
	   $SQL="Select * from User where UserName='$user'";
		   $Query = mysql_query($SQL);
		   $Num_row = mysql_num_rows($Query);
?>

<table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
    <tr id="main-navbar" height="36px"class="menu-item" >
        <td colspan="7">thông tin tài khoản</td>
    </tr>
    <?php 
			while ($row = mysql_fetch_array($Query)) {
		?>
    <!-- Show dữ liệu Thông tin người dùng gồm tên cột và dữ liệu-->
     <tr><td align="justify" id="info"><em>Tài khoản:</em> </td><td id="info"><?php echo "$row[UserName]";?></td></tr>
     <tr><td align="justify" id="info"><em>Mật khẩu:</em></td><td id="info"><?php echo "$row[Pass]";?></td></tr>
     <tr><td align="justify" id="info"><em>Chức vụ:</em></td><td id="info"><?php if($row[Access]==1) echo "Admin"; else echo"Member";?> </td></tr>
     <tr><td align="justify" id="info"><em>Họ tên:</em></td><td id="info"><?php echo "$row[Name] $row[LastName]";?> </td></tr>
     <tr><td align="justify" id="info"><em>Số điện thoại:</em></td><td id="info"><?php echo "$row[PhoneNumber]";?> </td></tr>
     <tr><td align="justify" id="info"><em>Email:</em></td><td id="info"><?php echo "$row[Email]";?> </td>
     </tr>
     <tr><td align="justify" id="info"><em>Địa Chỉ:</em></td><td id="info"><?php echo "$row[Address]";?> </td>
     </tr>
     <?php } 
		   
      ?>
</table>