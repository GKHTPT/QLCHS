
<!-- CSS table -->
<style>
table tr td a{
	text-decoration:none;
	color:#06F;
}
</style>

    <table width="800px" id="main-content" border="1px" cellpadding="0px" cellspacing="0px">
            	<tr id="main-navbar" height="36px"class="menu-item" >
                	<td colspan="10">Quản lý tài khoản </td> 
                </tr>
               
				      <tr>	
                <td align="justify" id="info" ><h5>User</h5></td>
                <td align="justify" id="info" ><h5>Pass</h5></td>
                <td align="justify" id="info"><h5> Quyền hạn</h5></td>
                <td align="justify" id="info"><h5>Họ tên</h5></td>
               
                <td align="justify" id="info"><h5>Email</h5></td>          
                <td align="justify" id="info"><h5>SDT</h5></td>
                <td align="justify" id="info"><h5>Địa Chỉ</h5></td>
                <td colspan="2" align="justify" id="info"> <img src="../images/them.png"/><a href="admin.php?page=themid">Thêm</a></td>
              </tr>
<?php 
require_once('../../Process/qlymember.php');

$count = 0;
$cant_remove=0;
$cant_remove1=0;

  foreach ($final_res as $value) {
   
  	$count++;

				?>

                 <tr><!-- Show dữ liệu Bảng Tài khoản-->
                 <td align="justify" id="info" ><h5><?php echo $value['UserName'];?></h5></td>
                 <td align="justify" id="info"><h5><?php echo $value['Pass'];?></h5></td>
                  <td align="justify" id="info" width="60px"><h5><?php if($value['Access']==1) echo "Admin"; else echo"Member"; ?> </h5></td>
                  <td align="justify" id="info"><h5><?php echo $value['Name']; echo $value['LastName'];?></h5> </td>
                 
                  <td align="justify" id="info"><h5><?php echo $value['Email'];?></h5> </td>
                  <td align="justify" id="info"><h5><?php echo $value['PhoneNumber'];?></h5> </td>
                  <td align="justify" id="info"><h5><?php echo $value['Address'];?></h5> </td>
                 <td align="justify" id="info"><img src="../images/sua.png"/> <a href="admin.php?page=suaid&idtv=<?php echo $value['ID'];?>">Sửa</a></td>
                  <td align="justify" id="info"><img src="../images/xoa.png"/><a href="admin.php?page=xoaid&idtv=<?php echo $value['ID'];?>">Xóa</a></td>
                </tr>
           <?php } 
		  ?> 
            </table>
		