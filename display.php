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
$unm=$_REQUEST["txt_username"];
$psd=$_REQUEST["txt_password"];
$my_sql="select * from fac F where F.T_id in(select L.T_id from login L where L.T_id='$unm' and L.T_pass='$psd')"  ;
//"select name from user_dtls where emp_id='$unm' and pass='$psd'";
 $result=mysql_query($my_sql) or die(mysql_error());
$i= mysql_num_rows($result);
if($i>0)
{
  if($row=mysql_fetch_assoc($result))
  {
     $name=$row["T_Name"];
	 echo "Welcome ".$name; 
	 ?>
</p>
<p>&nbsp;
  <a href="admin.php"><img src="images/logout.png" height="60" width="200"/></a></p>
<div>	 
  <table width="700" border="0" align="center">
  <tr>
    <td colspan="7" bgcolor="#000066"><div align="center" class="style1"><?php echo $name ?>'s details </div></td>
  </tr>
  	<tr>
   	  <td width="334" bgcolor="#00FFFF"><div align="left"><span class="style4">Id:</span></div></td>
		<td width="356" bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["T_id"]; ?></span></td>
	</tr>
    <tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">Name:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["T_Name"]; ?></span></td>
	</tr>
	<tr>
    	<td bgcolor="#00FFFF"><div align="left"><span class="style4">Dept:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["Dept"]; ?></span></td>
    </tr>
	<tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">Address:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["Address"]; ?></span></td>
    </tr>
	<tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">Mobilee:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["Mobile"]; ?></span></td>
    </tr>
	<tr>	
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">Phone No.(Office):</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["Office_no"]; ?></span></td>
	</tr>
	<tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">Email:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["Email"]; ?></span></td>
	</tr>
	<tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">C1:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<a href="#course"><?php echo $row["C1"]; ?></a></span></td>
	</tr>
	<tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">C2:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["C2"]; ?></span></td>
	</tr>
	<tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">C3:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["C3"]; ?></span></td>
	</tr>
	<tr>
		<td bgcolor="#00FFFF"><div align="left"><span class="style4">C4:</span></div></td>
		<td bgcolor="#CCFF99"><span class="style6">&nbsp;<?php echo $row["C4"]; ?></span></td>
	</tr>
	
  </table>
</div>
  <?php
  }

}
else
{
 echo "no user found";
}
?>
<form action="student.php" id="stud_cou">
<table width="1600" border="4" align="center">
  <tr>
    <td colspan="30" bgcolor="#000066"><div align="left" class="style1" id="course">Course details</div></td>
  </tr>
  <tr>
    <td bgcolor="#00FFFF"><div align="center"><span class="style4">Id:</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style4">Name:</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style4">Week:</span></div></td>
    <td bgcolor="#00FFFF"><div align="center"><span class="style4">Hours:</span></div></td>
  </tr>
  <?php
  include_once("data_con.php");
  //$psd=$_REQUEST["txt_password"];
  $sql="select * from cou";
  //$sql="select * from user_dtls U where U.emp_id in(select L.emp_id from login L where L.emp_id='admin' and L.pass='$psd')";
  $rs=mysql_query($sql) or die(mysql_error());
 // $i=mysql_num_rows($rs);
//if($i>0)
//{
 // if($row=mysql_fetch_assoc($rs))
  //{
  while($row=mysql_fetch_assoc($rs)){
  ?>
  <tr>
    <td>&nbsp;<input type="submit" name="terms[]" value="<?php echo $row["C_Id"]; ?>" /> </td>
    <td>&nbsp;<?php echo $row["C_name"]; ?></td>
    <td>&nbsp;<?php echo $row["week"]; ?></td>
    <td>&nbsp;<?php echo $row["hours"]; ?></td>
  </tr>
  <?php } 
  //}
  //else{
  //echo "No data found"; } 
  ?>
</table>
</form>
</body>
</html>