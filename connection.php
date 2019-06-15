<?php 
session_start();
  $s= mysqli_connect('localhost','root','') or die (mysql_error());
   mysqli_select_db($s,'fci_db') or die (mysql_error());
     mysqli_query($s , "SET NAMES 'utf8'"); 
mysqli_query($s , 'SET CHARACTER SET utf8'); 
?> 