<?php
	  $connect_db = mysql_connect("localhost","root", "");
      $select_db= mysql_select_db("v1.0_sach",$connect_db);
      $set_lang=mysql_query("SET NAME 'utf8'");
?>