<?php

 $s= mysqli_connect('localhost','root','') or die (mysql_error());
   mysqli_select_db($s,'movedb') or die (mysql_error());
     mysqli_query($s , "SET NAMES 'utf8'"); 
mysqli_query($s , 'SET CHARACTER SET utf8'); 
$id=$_SESSION['psw'];
   if($_SESSION['psw']==true)
   {   
	  $sql = mysqli_query($s , "CALL `SP_title`('$id')") ;
    while($row = mysqli_fetch_array($sql)) {
        echo $row["StudentName"] ;
    }
   }
   
   
   else{
	   header('location:login.php');
   }

?>