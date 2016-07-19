<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
  <?php
include_once("data_con.php");
$id=$_REQUEST["c_id"];
$name=$_REQUEST["s_name"];
$my_sql="select * from stud S where S.C1='$id' || S.C2='$id' || S.C3='$id' || S.C4='$id'" ;
$result=mysql_query($my_sql) or die(mysql_error());
//$i= mysql_num_rows($result);
//if($i>0)
//{
  //if($row=mysql_fetch_assoc($result))
    while($row=mysql_fetch_assoc($result))
  {
	 ?>
</p>
<p>&nbsp;
  <a href="admin.php"><img src="" height="60" width="200" alt="Back"/></a></p>
<div>	 
  <table width="700" border="0" align="center">
  <tr>
    <td colspan="7" bgcolor="#000066"><div align="center" class="style1"><?php echo "Course wise".$name ?>'s details </div></td>
  </tr>
  	<tr>
   	  <td width="334" bgcolor="#00FFFF"><div align="left"><span class="style4">Id:</span></div></td>
		<td width="356" bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["s_id"]; ?></span></td>
	</tr>
    <tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">Name:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["s_Name"]; ?></span></td>
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

// }
//else
//{
 //echo "no result found";
//}
?>

</body>
</html>