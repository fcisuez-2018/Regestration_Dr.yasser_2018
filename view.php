
<?php

//fetch_single.php

require('connection.php');


if(isset($_GET["id"]))
{
     $id =$_REQUEST['id'];
    $_SESSION['id']=$id;
   require('connectpro.php') ;
 $sql1 = mysqli_query($s , "CALL `sp_stuinfo`('$id')") ;
 while($row= mysqli_fetch_array($sql1)) {
  $images = '';
  if($row["image"] != '')
  {
   echo '<hr><div class="pro"><img src="StudentPhoto/'.$row["image"].'" width="60px" height="60px" />';
  }
  else
  {
   echo '<img src="https://www.gravatar.com/avatar/38ed5967302ec60ff4417826c24feef6?s=80&d=mm&r=g" class="img-responsive img-thumbnail" />';
  }
echo '<br><div class="info"><p>Name: '.$row["StudentName"].'</p>';
echo '<p>Phone: '.$row["Phone"].'</p>';
echo '<p>Email: '.$row["Email"].'</p>';
 }
 require('connectpro.php') ;
  $sql2 =mysqli_query($s , "CALL `sp_cgpa_points`('$id')") ;
            // output data of each row
 while($row = mysqli_fetch_array($sql2))
  {
        if($row["credits"] >= 0 && $row["credits"] <= 36 ) {   echo "<p> Level : one </p>" ; }
        elseif($row["credits"] >= 37 && $row["credits"] <= 72 ) {   echo " <p>Level : Two</p> " ; }
        elseif($row["credits"] >= 73 && $row["credits"] <= 108 ) {   echo  "<p> Level : Three </p>"  ; }
        elseif($row["credits"] >= 109 && $row["credits"] <= 200 ) {   echo  "<p>Level : Senior</p> "  ; }
        echo '<p>GPA: '.$row["gpa"].'</p>';
      }
        echo "</div><hr>";}?>
<div id="timersection">
<br><h6>The Registration Period will expire on 30 APRIL 2020 , 00:00:00</h6><br>
<p id="timer">
<script>
// Set the date we're counting down to
var countDownDate = new Date("APRIL 30, 2020 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="timer"
  document.getElementById("timer").innerHTML = days +"d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timer").innerHTML = "Registration period has EXPIRED";
  $(':button').prop('disabled', true);
    /*var x = document.getElementById("col-1");
    x.style.display = "none";
  var y = document.getElementById("selafterexpired");
  y.style.display = "block";*/
  
  }
}, 1000);
</script></p><br></div><br><br>


        <?php
 require('filter.php');
 echo ' <div class="filter"><input  type="text" name="search_text" id="search_text" placeholder=" Search in Courses" />
  <select id="semester" onchange="myTest()"> 
                       <option value="1">First Semester</option>
                       <option value="2">Second Semester</option>
               </select>
               <select id="level" onchange="myTest()"> 
                      <option value="1">Level One</option>
                      <option value="2">Level Two</option>
                      <option value="3">Level Three</option>
                      <option value="4">Level Four</option>
               </select>
               <select id="department" onchange="myTest()"> 
                       <option value="1">General</option>
                       <option value="2">IT</option>
                       <option value="3">CS</option>
               </select>
               </div>
  <div id="col-1">
     
 <div id="test">

    </div> 
     </div><br>';?>
<center><h4><b>Requested Coureses</b></h4>
<div id='delcourse'>
<?php      
require('connectpro.php') ;
      $id=$_SESSION['id'];
  
      $sql = mysqli_query($s , "CALL `sp_select`('$id' ,'7')") ;

      
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
          echo "<td><button type='button' onClick='delcourse(this.value)' id='delid' class='delete'><i class='fa fa-trash'></i></button></td>" ;
          echo "<td><i class='fa fa-lock' style='font-size:24px'></i>";
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
          echo "<tr><td colspan='5'>".$row["courseCount"]."</td></tr>";
      }
       else
       {
       echo "<tr><td class='tip' colspan='5' style='background-color:red'>".$row["courseCount"]."<span class='tiptext'>Max number is 6</span></td></tr>";
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
  //echo"<h1>Thanks for your registration ,please wait for the Advisor Appproval after the expiration of the registration period</h1>";
    }
 
    
   ?>
</div></center>
<center><button class='btt' id='confirm'>Confirm</button><hr>
  <h4><b>Registered Courses</b></h4><br>
<select id="mySelect" width='100%'onchange="myFunction()"> 
  <?php 
      $id=$_SESSION['id'];
      require('connectpro.php') ;  
      $sql = mysqli_query($s , "CALL `SP_StuSemester`('$id')") ;
        while($row = mysqli_fetch_array($sql)) {
          if($row['ID']==1){
        echo "<option value='1'>Fall2016</option>" ;
        }
          elseif($row['ID']==2){
        echo "<option value='2'>Spring2017</option>" ;
        }
          elseif($row['ID']==3){
        echo "<option value='3'>Summer2017</option>" ;
        }
          elseif($row['ID']==4){
        echo "<option value='4'>Fall2017</option>" ;
        }
          elseif($row['ID']==5){
        echo "<option value='5'>Spring2018</option>" ;
        }
          elseif($row['ID']==6){
        echo "<option value='6'>Summer2018</option>" ;
        }
          elseif($row['ID']==7){
        echo "<option value='7'>Fall2018</option>" ;
        }
    } 
    ?>
</select></center><br>
<div id="demo">
  <?php 
  
      $id=$_SESSION['id'];
      require('connectpro.php') ;       
      $sql = mysqli_query($s , "CALL `SP_FirstPassedSemester`('$id')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   
 
?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--Script for search-->
<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"search.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#test').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>
<script >
  $(document).ready(function(){

    $("#confirm").on( 'click', function(){

        $.ajax({
            type : "POST",
            url : "approval.php",
            success : function(text){
                alert('Confirmation Done');
            }
        });

        return false;
    }); 

});
</script>
<?php require('filter.php');?>
<script>

   

    var clicks = 0;
    function onClick() {
        clicks += 1;
        document.getElementById("clicks").innerHTML = clicks;
    };
  
function onClick( id=document.getElementById("getid"))
{
var url = window.location.href;
$.ajax({
        type:"POST",
        data:{id:id},
    url:"insertdoc.php",
        success:function(result){
        $("#delcourse").html(result);
        }
        });
}

function delcourse( id=document.getElementById("delid"))
{
var url = window.location.href;
$.ajax({
        type:"POST",
        data:{id:id},
    url:"deletedoc.php",
        success:function(result){
        $("#delcourse").html(result);
        }
        });
}</script>
<script>
  function myFunction(){
    var x=document.getElementById("mySelect").value;
    if(x==1){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['id'];
      if($_SESSION['id']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'1')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==2){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['id'];
      if($_SESSION['id']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'2')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
       if(x==3){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['id'];
      if($_SESSION['id']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'3')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==4){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['id'];
      if($_SESSION['id']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'4')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==5){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['id'];
      if($_SESSION['id']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'5')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==6){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['id'];
      if($_SESSION['id']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'6')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
        if(x==7){
       document.getElementById("demo").innerHTML="  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['id'];
      if($_SESSION['id']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_semester`('$id' ,'7')") ;
      
      echo "<table><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Credit</td>";
      echo "<td class='header'>Percentage</td>";
      echo "<td class='header'>Grade</td></tr>";
        while($row = mysqli_fetch_array($sql)) {
        echo "<tr><td>".$row['courses']."</td>"  ; 
        echo "<td>".$row['codes']."</td>"  ;
        echo "<td>".$row['credit']."</td>"  ;
        echo "<td>".$row['percentage']."</td>"  ;
        echo "<td>".$row['grade']."</td></tr>"  ;
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }
?>";
    }
  }
</script>
