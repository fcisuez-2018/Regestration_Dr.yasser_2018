<?php
require ('connection.php');
require ('connectpro.php');
$id=$_SESSION['id'];
mysqli_query($s , "CALL `SP_DoctorApproval`('7','$id')") ;

?>