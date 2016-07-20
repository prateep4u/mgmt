<strong><font face="Geneva, Arial, Helvetica, sans-serif"><font face="Arial, Helvetica, sans-serif"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-size: 30px; color: #FFFFFF}
.style4 {font-size: 24px; color: #FF0000; }
.style6 {font-size: 24px}
-->
</style>
</head>

<body>
<p>
<p>&nbsp;
  <a href="admin.php"><img src="images/logout.png" height="60" width="200" alt="LogOut"/></a></p>
  <?php
include_once("data_con.php");
 foreach($_REQUEST['terms'] as $x => $x_value) { 
 
   // echo "Key=" . $x . ", Value=" . $x_value;
    //echo "<br>";

  
  //$rs=mysql_query($id) or die(mysql_error());
 //$d=mysql_num_rows($id);
//if($d>0)
//{
 //if($r=mysql_fetch_assoc($id))
  //{
//$id=1001;
//$name=$_REQUEST["s_name"];
$my_sql="select * from stud S where S.C1='$x_value' || S.C2='$x_value' || S.C3='$x_value' || S.C4='$x_value'" ;
$result=mysql_query($my_sql) or die(mysql_error());
$i= mysql_num_rows($result);
if($i>0)
{
  //if($row=mysql_fetch_assoc($result))
  //<?php echo "Course wise".$name 
   while($row=mysql_fetch_assoc($result))
  {
	 ?>
</p>

<div>	 
  <table width="700" border="0" align="center">
  <tr>
    <td colspan="7" bgcolor="#000066"><div align="center" class="style1">Course-Student details </div></td>
  </tr>
  	<tr>
   	  <td width="334" bgcolor="#00FFFF"><div align="left"><span class="style4">Id:</span></div></td>
		<td width="356" bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["s_id"]; ?></span></td>
	</tr>
    <tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">Name:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["s_name"]; ?></span></td>
	</tr>
	<tr>
    	<td bgcolor="#00FFFF"><div align="left"><span class="style4">C1:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["C1"]; ?></span></td>
    </tr>
	<tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">C2:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["C2"]; ?></span></td>
    </tr>
	<tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">C3</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["C3"]; ?></span></td>
    </tr>
	<tr>	
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">C4</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["C4"]; ?></span></td>
	</tr>
	
  </table>
</div>
  <?php
  }

 }
}
//else
//{
 //echo "no result found";
//}
?>

</body>
</html></font></font></strong>