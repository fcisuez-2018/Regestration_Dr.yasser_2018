<?php 
  require('connection.php') ;

$sql = mysqli_query($s , "SELECT course.course as courses , course.code as codes , course.Credits  as credit , CourseType.CourseType as type , semester.ID as sid , course.prerequisits as pre
		
FROM (((coursetype inner join course on coursetype.id= course.CourseTypeID )  inner JOIN course_semester on course.ID = course_semester.CourseID) inner join semester on semester.ID = course_semester.SemesterID)
where semester.SemesterFullName ='الفصل الدراسى الأول' and Course.id != '281' and course.LeveLID = '4'

group by courses
order by sid");

     if (mysqli_num_rows($sql ) > 0) {
		 echo "gehad";
  while($row = mysqli_fetch_array($sql)){
	  echo $row['courses'] ;
	  

	

}
	 }
?>


