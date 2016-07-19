<?php
mysql_connect("localhost","root","") or 
       die("Server connection problem");
mysql_select_db("management")or 
       die(mysql_error()."Database selection problem"); 	   
?>