<?php
require('connection.php') ;
require('connectpro.php') ;
$ID = $_POST["id"];
      
      $id= $_SESSION['id'];
      if($_SESSION['id']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_Delete`('$ID','7','$id')") ;
	  if(mysqli_num_rows($sql)<=0){
		  echo"<script> var x = document.getElementById('tb')
                         x.style.display = 'none' </script>";
	  }
      echo "<table id='tb'><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Prerequisits</td>";
	  echo "<td class='header'>Deletition</td>";
	  echo "<td class='header'>Approval</td>";

        while($row = mysqli_fetch_array($sql)) {
			$Prerequisits=$row["Prerequisits"];
			$codes=$row["codes"];
			$cid=$row["ID"];
	  require('connectpro.php') ;
      $sql4 = mysqli_query($s , "CALL `SP_Prerequisit`('$Prerequisits','$id')") ;
	  require('connectpro.php') ;
	  $sql5 = mysqli_query($s , "CALL `SP_CheckCourseGrade`('$codes','$id')") ;
	  require('connectpro.php') ;
      $sql6 = mysqli_query($s , "CALL `SP_Department`('$id')") ;
	  require('connectpro.php') ;
	  $sql7 = mysqli_query($s , "CALL `SP_Course_Department`('$cid')") ;
	  require('connectpro.php') ;
	  $sql8 = mysqli_query($s , "CALL `SP_Valid_Semester`('7',$cid)") ;
	  $row1 = mysqli_fetch_array($sql6);
	  $row2 = mysqli_fetch_array($sql7);
	  if (mysqli_num_rows($sql4)==0 || mysqli_num_rows($sql5)!==0 || ($row1[0]!==$row2[0] && $row1[0]!=='الحاسبات_عام' && $row2[0]!=='الحاسبات_عام') || mysqli_num_rows($sql8)==0)
	  {
	  echo "<tr class='tip' style='background-color:red'>";
	  }
	  else{
		echo "<tr>";  
	  }
			
		  echo "<td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
          echo "<td><button type='button' onClick='delcourse(this.value)' id='delid' value=".$row['RegID']." class='delete'><i class='fa fa-trash'></i></button></td>" ;
          echo "<td><i class='fa fa-lock' style='font-size:24px'></i>" ;
   
   		  	  if (mysqli_num_rows($sql4)==0 || mysqli_num_rows($sql5)!==0 || ($row1[0]!==$row2[0] && $row1[0]!=='الحاسبات_عام' && $row2[0]!=='الحاسبات_عام') || mysqli_num_rows($sql8)==0)
	  {
		  if(mysqli_num_rows($sql5)!==0){
		  echo "<span class='tiptext'>This course is already registered</span></td></tr>";
		  }
		  elseif ((mysqli_num_rows($sql4)==0 )&& ($row1[0]!==$row2[0] && $row1[0]!=='الحاسبات_عام' && $row2[0]!=='الحاسبات_عام') && mysqli_num_rows($sql8)==0){
		  echo "<span class='tiptext'>Prerequisits is important , Wrong Department and Wrong Semester</span></td></tr>";	  
	      }
		  elseif ((mysqli_num_rows($sql4)==0 )&& ($row1[0]!==$row2[0] && $row1[0]!=='الحاسبات_عام' && $row2[0]!=='الحاسبات_عام')){
		  echo "<span class='tiptext'>Prerequisits is important and Wrong Department</span></td></tr>";	  
	      }
          elseif ((mysqli_num_rows($sql4)==0 )&& mysqli_num_rows($sql8)==0){
		  echo "<span class='tiptext'>Prerequisits is important and Wrong Semester</span></td></tr>";	  
	      }
		  elseif (($row1[0]!==$row2[0] && $row1[0]!=='الحاسبات_عام' && $row2[0]!=='الحاسبات_عام') && mysqli_num_rows($sql8)==0){
		  echo "<span class='tiptext'>Wrong Department and Wrong Semester</span></td></tr>";	  
	      }
		  elseif(mysqli_num_rows($sql4)==0){
		  echo "<span class='tiptext'>Prerequisits is important</span></td></tr>";
		  }
		  elseif(($row1[0]!==$row2[0] && $row1[0]!=='الحاسبات_عام' && $row2[0]!=='الحاسبات_عام')){
		  echo "<span class='tiptext'>Wrong Department</span></td></tr>";
	      }
		  elseif(mysqli_num_rows($sql8)==0){
		  echo "<span class='tiptext'>Wrong Semester</span></td></tr>";
		  }
	  }
	  else{
		echo "</td></tr>";  
			  }
   
   }
		 require('connectpro.php') ;
		 $sql3 = mysqli_query($s , "CALL `sp_cgpa_points`('$id')") ; 
		 while($row = mysqli_fetch_array($sql3)) {
			 $gpa = $row["gpa"] ;
			  if(($gpa>=2)){
			  require('connectpro.php') ;
              $sql2 = mysqli_query($s , "CALL `SP_CourseCountINSemester`('$id','7')") ;
		 
		 while($row = mysqli_fetch_array($sql2)) {
         $re = $row["courseCount"] ;
          if($re<7) {
          echo "<tr><td colspan='5' style'text-align:center;'>".$row["courseCount"]."</td></tr>";
		  }
			 else
			 {
			 echo "<tr><td class='tip' colspan='5' style='background-color:red; text-align:center;'>".$row["courseCount"]."<span class='tiptext'>Max number is 6</span></td></tr>";
			 }
 
			 }}
			 
			 else{
							require('connectpro.php') ;
         $sql2 = mysqli_query($s , "CALL `SP_CourseCountINSemester`('$id','7')") ;
		 while($row = mysqli_fetch_array($sql2)) {
         $re = $row["courseCount"] ;
          if($re<5) {
          echo "<tr><td colspan='5'>".$row["courseCount"]."</td></tr>";}
			 else
			 {
			 echo "<tr><td class='tip' colspan='5' style='background-color:red'>".$row["courseCount"]."<span class='tiptext'>Max number is 4</span></td></tr>";
			 }
 
			 } 
			 }
			  echo "</table>";
		 }
		 
	  }
   
     
?>