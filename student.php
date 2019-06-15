
<?php 
// connecting to database 
require('connection.php') ;
require('filter.php');

 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>
<?php
   require('connectpro.php') ;
   $id=$_SESSION['psw'];
  if($_SESSION['psw']==true)
  {   
      $sql = mysqli_query($s , "CALL `SP_stuInfo`('$id')") ; 
       // output data of each row
       while($row = mysqli_fetch_array($sql)) {
      echo     $row["StudentName"] ;
	}
  }
  else
  {
	header('location:index.php');
  }												  
?> </title>
	  <link rel="icon" href="logo.png"> 
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Didact Gothic'  rel='stylesheet'>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400|Roboto:300,400,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
<style>

* 
{
	box-sizing: border-box;
}

body 
{
	font-family: Didact Gothic;
	font-size: 14px;
	color: #f2f2f2;
	margin: 0;
	background-color: #02141c;
}

.information
{ 
	padding-top: 200px;
	position: relative;
	z-index: 1;
	background-image: url(img/60208305_673579659742272_4532527739642576896_n.jpg);
	background-size: 100% 85%;
}

.information:before
{ 
	content:''; 
	z-index: -1; 
	position: absolute; 
	top: 0; 
	bottom: 0; 
	left: 0; 
	right: 0; 
}
	
.information:after
{ 
	content: ''; 
	position: absolute; 
	bottom: 0; left: 0; right: 0;
	height: 150px; 
	z-index: -1; 
	background-color: #02141c; 
}

.container 
{
  	position: relative;
  	margin-left: auto;
  	margin-right: auto;
  	padding-right: 15px;
  	padding-left: 15px;
}

.row 
{
  	display: -webkit-box;
  	display: -webkit-flex;
  	display: -ms-flexbox;
  	display: flex;
  	-webkit-flex-wrap: wrap;
	-ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

@media (min-width: 576px) 
{
  .row 
  {
    margin-right: 15px;
    margin-left: 15px;
  }
}

@media (min-width: 768px) 
{
  .row 
  {
    margin-right: 50px;
    margin-left: 50px;
  }
}

@media (min-width: 992px) 
{
  .row 
  {
    margin-right: 100px;
    margin-left: 100px;
  }
}

@media (min-width: 1200px) 
{
  .row 
  {
    margin-right: 250px;
    margin-left: 250px;
  }
}


.intro
{ 
	padding: 0 20px 20px;
	margin-top: 20px;
	width: 100%;
	text-align: center;
	background: #012432;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.3);
    border: 8px solid #01405a;
}

.profile-img
{  
	width: 250px; 
	height: 250px; 
	border-radius: 125px; 
	margin: 0 auto; 
	overflow: hidden; 
	position: relative; 
	top: -100px; 
	margin-bottom: -70px;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.3); 
    border: 8px solid #01405a;
}

img
{
	width: 100%;
}

h1
{
	font-size: 40px;
	margin-top: -10px;
	font-weight:bold;
}
.division
{  
  	display: -ms-flexbox;
  	display: flex;
  	-ms-flex-wrap: wrap;
  	flex-wrap: wrap;
}
.info1
{
  	-ms-flex: 50%; 
  	flex: 50%;
  	padding: 0 20px;
}

.info2
{
   	-ms-flex: 50%; 
  	flex: 50%;
  	padding: 0 20px;
}

.data
{
	background-color: #02141c;	
	border-radius: 100px;
}

.text
{
  	padding: 14px;
	font-size:17px;
}

table
{
  	border-collapse: collapse;
  	border-spacing: 0;
  	width: 100%;
  	box-shadow: 0 2px 4px 0 rgba(0,0,0,0.3);
  	border: 8px solid #01405a;
  
}

.header
{
  	text-align: left;
  	padding: 15px;
  	background-color: #099eda;
}

td 
{
  	text-align: left;
  	padding: 15px;
	
}
td[colspan="5"] {
    text-align: center;
}
tr:nth-child(even) 
{
    background-color: #012432;
}

tr:nth-child(odd)
{
    background-color: #01405a;
}

.slideshow-container
{
  	position: relative;
  	background: #02141c;
}

.mySlides 
{
  	display: none;
  	padding: 0 80px 40px 80px;
  	text-align: center;
  	margin-top: 50px;
}

.navbar
{
    text-align: center;
    padding: 30px;
    background: #02141c;
}

.link
{
	text-decoration: none;
	color: #f2f2f2;
}

.menu-text 
{
  	cursor: pointer;
  	height: 100px;
  	width: 300px;
  	margin: 0 2px;
  	margin-top: 50px;
  	margin-bottom: -20px;
  	background-color: #01405a;
  	display: inline-block;
  	transition: background-color 0.6s ease;
  	box-shadow: 0 2px 4px 0 rgba(0,0,0,0.3);
  	border-collapse: collapse;
  	border-spacing: 0;
  	border: 8px solid #01405a;
}

.active, .dot:hover 
{
  	background-color: #099eda;
}

.word
{
	position: relative;
	top: 20px;
}
.button
{
  text-align: center;
  padding-bottom: 20px;
  margin-top: -40px;
}

.btn 
{
  box-shadow: 0 2px 4px 0 rgba(0,0,0,0.3); 
  border: 8px solid #01405a;
  background-color: white;
  color: #01405a;
  padding: 14px 28px;
  font-size: 18px;
  cursor: pointer;
  background-color: #02141c;  
}

.info:hover 
{
  background: #2196F3;
  color: white;
}
#demo{
    text-align: center;
    margin-top: 20px;
	margin-left:1.5%;
	margin-right:1.5%;

}
#mySelect{
  width: 96.5%;
  text-align:center;
  height: 33px;
  background-color:#02141c;
  color: white;
  font-size:17px;
  margin-left:1.5%;
  margin-right:1.5%;
  border-radius:25px;
}

#col-1 {
  -ms-flex: 50%; 
  flex: 50%;
  background-color: #02141c;
  padding: 20px;
  color: #f2f2f2;

}

.page
{  
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
}


#level{
  text-align:center;
  width: 300px;
  height: 30px;
  background-color:#02141c;
  color: white;
  font-size:17px;
  border-radius:25px;
}
#test{
    text-align: center;
}
#tb{

	margin-top:3.6%;
	
}
#department{
  text-align:center;
  width: 300px;
  height: 30px;
  background-color:#02141c;
  color: white;
  font-size:17px;
  border-radius:25px;
}
#semester{
  text-align:center;
  width: 300px;
  height: 30px;
  background-color:#02141c;
  color: white;
  font-size:17px;
border-radius:25px;
}
#timer{
	font-size:35px;
	text-align: center;
	font-weight:bold;
	font-family: "Lucida Console";
	color:#ff0000;
	
}
#timersection{
	margin-left:14%;
	width:70%;
	text-align: center;
	background:#012432;
	border-radius:15px;
	font-family: "Times New Roman";
	box-shadow: 10px 10px black;
	height:35%;
	
}
#selafterexpired{
	display:none;
    margin:auto;
}
#selafterexpired td{
	width:30%;

}
#seltb{
	display:none;
	margin-top:70px;
}

.btt {

	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #44c767), color-stop(1, #00ff8c));
	background:-moz-linear-gradient(top, #44c767 5%, #00ff8c 100%);
	background:-webkit-linear-gradient(top, #44c767 5%, #00ff8c 100%);
	background:-o-linear-gradient(top, #44c767 5%, #00ff8c 100%);
	background:-ms-linear-gradient(top, #44c767 5%, #00ff8c 100%);
	background:linear-gradient(to bottom, #44c767 5%, #00ff8c 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#44c767', endColorstr='#00ff8c',GradientType=0);
	background-color:#44c767;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px -1px 0px #2f6627;
}
.btt:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #00ff8c), color-stop(1, #44c767));
	background:-moz-linear-gradient(top, #00ff8c 5%, #44c767 100%);
	background:-webkit-linear-gradient(top, #00ff8c 5%, #44c767 100%);
	background:-o-linear-gradient(top, #00ff8c 5%, #44c767 100%);
	background:-ms-linear-gradient(top, #00ff8c 5%, #44c767 100%);
	background:linear-gradient(to bottom, #00ff8c 5%, #44c767 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ff8c', endColorstr='#44c767',GradientType=0);
	background-color:#00ff8c;
}
.btt:active {
	position:relative;
	top:1px;
}



.delete {
	-moz-box-shadow:inset 0px 1px 0px 0px #ff0000;
	-webkit-box-shadow:inset 0px 1px 0px 0px #ff0000;
	box-shadow:inset 0px 1px 0px 0px #ff0000;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f51e1e), color-stop(1, #d42222));
	background:-moz-linear-gradient(top, #f51e1e 5%, #d42222 100%);
	background:-webkit-linear-gradient(top, #f51e1e 5%, #d42222 100%);
	background:-o-linear-gradient(top, #f51e1e 5%, #d42222 100%);
	background:-ms-linear-gradient(top, #f51e1e 5%, #d42222 100%);
	background:linear-gradient(to bottom, #f51e1e 5%, #d42222 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f51e1e', endColorstr='#d42222',GradientType=0);
	background-color:#f51e1e;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #fc0000;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ff0505;
}
.delete:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d42222), color-stop(1, #f51e1e));
	background:-moz-linear-gradient(top, #d42222 5%, #f51e1e 100%);
	background:-webkit-linear-gradient(top, #d42222 5%, #f51e1e 100%);
	background:-o-linear-gradient(top, #d42222 5%, #f51e1e 100%);
	background:-ms-linear-gradient(top, #d42222 5%, #f51e1e 100%);
	background:linear-gradient(to bottom, #d42222 5%, #f51e1e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d42222', endColorstr='#f51e1e',GradientType=0);
	background-color:#d42222;
}
.delete:active {
	position:relative;
	top:1px;
}
#icon{
		margin-left:1.5%;
		background-color:#3399ff;
		border-bottom-left-radius:25px;
		border-top-left-radius:25px;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #33bdef), color-stop(1, #019ad2));
	background:-moz-linear-gradient(top, #33bdef 5%, #019ad2 100%);
	background:-webkit-linear-gradient(top, #33bdef 5%, #019ad2 100%);
	background:-o-linear-gradient(top, #33bdef 5%, #019ad2 100%);
	background:-ms-linear-gradient(top, #33bdef 5%, #019ad2 100%);
	background:linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#33bdef', endColorstr='#019ad2',GradientType=0);
	background-color:#33bdef;
	border:1px solid #057fd0;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px -1px 0px #5b6178;
}
#search_text{
	width:19%;
		border-bottom-right-radius:25px;
		border-top-right-radius:25px;
}
.group{
  margin-left:.5%;

}
.logtitle{
	display:inline-block;
	margin-top:-15px;

}
#RegisteredCourses{
	text-align:center;
	font-family:Times New Roman;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
btt:disabled,
button[disabled]{
  border: 1px solid #999999;
  background-color: #cccccc;
  color: #666666;
}
.tip {
  position: relative;

}

.tip .tiptext {
  width: 120px;
  bottom: 100%;
  left: 50%;
  margin-left: -60px; 
  visibility: hidden;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
}

.tip:hover .tiptext {
  visibility: visible;
}
</style>
</head>


<body>
<section class="information">
<div class="container">
		<nav class="navbar navbar-fixed-top navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo-alt" src="Picture1.png" alt="logo">
						</a>
						<div class="logtitle">
					         <p class="faculty">Faculty of Computers and Information</p>
						     <center><p class="suez">Suez University</p></center>	
                        </div>						
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="#courses">Courses</a></li>
						<li><a  id="RegCourses" href="#delcourse" >semester Courses</a></li>
						<li><a href="#demo">Registered Courses</a></li>
						<li><a href="logout.php">log out</a></li>
					</ul>
				</div>
			</div>
		</nav><br><br><br>
<div class="row">
<div class="intro">
<!------------------------------------------------------->
<!--select image-->
<div class="profile-img">
<?php
    require('connectpro.php') ;
    $id=$_SESSION['psw'];
    if($_SESSION['psw']==true)
   {   
		$sql = mysqli_query($s , "CALL `SP_stuInfo`('$id')") ; 
		 // output data of each row
       while($row = mysqli_fetch_array($sql)) {
		$path = $row['Image'] ;
		echo "<img class='dot' src=$path>" ;
	  }
   }
   else
   {
	 header('location:index.php');
   }												 
?>
</div>
<!------------------------------------------------------->
<!--select name-->
<h1> 
<?php
   require('connectpro.php') ;
   $id=$_SESSION['psw'];
  if($_SESSION['psw']==true)
  {   
      $sql = mysqli_query($s , "CALL `SP_stuInfo`('$id')") ; 
       // output data of each row
       while($row = mysqli_fetch_array($sql)) {
      echo     $row["StudentName"] ;
	}
  }
  else
  {
	header('location:index.php');
  }												  
?> 
</h1><br>
<h4>
<?php
   require('connectpro.php') ;
   $id=$_SESSION['psw'];
  if($_SESSION['psw']==true)
  {   
      $sql = mysqli_query($s , "CALL `sp_cgpa_points`('$id')") ; 
       // output data of each row
       while($row = mysqli_fetch_array($sql)) {
      echo     "GPA : ".$row["gpa"] ;
  }
  }
  else
  {
  header('location:index.php');
  }                         
?> 
</h4><br>

<!-------------------------------------------------------->
<div class="division">
<div class="info1">
<!--------------------------------------------------------->
<!--select department-->
<div class="data"><p class="text">	
<?php
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {  
   $sql = mysqli_query($conn , "CALL `SP_stuInfo`('$id')") ;
  // output data of each row
        while($row = mysqli_fetch_array($sql)) {
        echo $row['DeptartmentCode']."Department"  ;
 }
   }  
   else
   {
header('location:index.php');
   }
?>                         
</p></div>
<!--------------------------------------------------------->                            
<!--select level-->	                                                    
<div class="data"><p class="text"> 
<?php 
    require('connectpro.php') ;
    $id=$_SESSION['psw'];
    if($_SESSION['psw']==true)
    {   
	    $sql = mysqli_query($s , "CALL `sp_cgpa_points`('$id')") ;
        // output data of each row
        while($row = mysqli_fetch_array($sql)) {
		if($row["credits"] >= 0 && $row["credits"] <= 36 ) {   echo " Level : one " ; }
        elseif($row["credits"] >= 37 && $row["credits"] <= 72 ) {   echo " Level : Two " ; }
        elseif($row["credits"] >= 73 && $row["credits"] <= 108 ) {   echo  " Level : Three "  ; }
        elseif($row["credits"] >= 109 && $row["credits"] <= 200 ) {   echo  "Level : Senior "  ; }
      }
   }   
   else
   {
     header('location:index.php');
   }
?>  
</p></div>
<!---------------------------------------------------------->	                                                    
<!--select advisor-->                            
<div class="data"><p class="text"> 
<?php 
    require('connectpro.php') ;
    $id=$_SESSION['psw'];
    if($_SESSION['psw']==true)
    {   
	    $sql = mysqli_query($s , "CALL `SP_Advisor`('$id')") ;
        // output data of each row
        while($row = mysqli_fetch_array($sql)) {
         echo $row["NameTxt"];
      }
   }   
   else
   {
     header('location:index.php');
   }
?>  
</p></div></div>
<!----------------------------------------------------------->
<div class="info2">
<!----------------------------------------------------------->
<!--select credit-->
<div class="data"><p class="text"> 
<?php
   require('connectpro.php') ;
   $id=$_SESSION['psw'];
  if($_SESSION['psw']==true)
  {   
      $sql = mysqli_query($s , "CALL `sp_cgpa_points`('$id')") ; 
       // output data of each row
       while($row = mysqli_fetch_array($sql)) {
      echo     "Credits : ".$row["credits"] ;
  }
  }
  else
  {
  header('location:index.php');
  } 
?>  
</p></div>

<!----------------------------------------------------------->
<!-- select phone-->                           
<div class="data"><p class="text"> 
<?php
     require('connectpro.php') ;
     $id=$_SESSION['psw'];
     if($_SESSION['psw']==true)
    {   
	    $sql = mysqli_query($s , "CALL `SP_stuInfo`('$id')") ; 
         // output data of each row
        while($row = mysqli_fetch_array($sql)) {
        echo     $row["Phone"] ;
      }
   }
   else
   {
     header('location:index.php');
   }												  
?>
 </p></div>

<!---------------------------------------------------------->
<!--select email-->
<div class="data"><p class="text">
<?php
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
     if($_SESSION['psw']==true)
     {   
	     $sql = mysqli_query($s , "CALL `SP_stuInfo`('$id')") ; 
         
         while($row = mysqli_fetch_array($sql)) {
          echo     $row["Email"] ;
	   }
    }
     else
    {
	 header('location:index.php');
	}												 
?> 
</p></div>
</div>
</div>
</div>
</div>
</section><br><br>
<!------------------------------------------------------------------------------------------------------------------------------->
<!-- Display the countdown timer in an element -->
<div id="timersection">
<br><h2>The Registration Period will expire on 30 APRIL 2020 , 00:00:00</h2><br>
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
<div class="page" id="courses" >

		  <button id='icon'><i class='fa fa-search' ></button></i><input  type="text" name="search_text" id="search_text" placeholder=" Search in Courses" />
          <div id="combo" class="group">
		  			   <select id="semester" onchange="myTest()"> 
                       <option value='1'>First Semester</option>
                       <option value='2'>Second Semester</option>
               </select>
               <select id="level" onchange="myTest()"> 
                      <option value='1'>Level One</option>
                      <option value='2'>Level Two</option>
                      <option value='3'>Level Three</option>
                      <option value='4'>Level Four</option>
               </select>
               <select id="department" onchange="myTest()"> 
                       <option value='1'>General</option>
                       <option value='2'>IT</option>
                       <option value='3'>CS</option>
               </select>

           </div>
		   
<div id="col-1">
	   
 <div id="test">

         </div> 
     </div>

<script>

	 $("#RegCourses").click(function(){
  $("#tb").toggle();
});
	 

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
		url:"insert.php",
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
		url:"delete.php",
        success:function(result){
        $("#delcourse").html(result);
        }
        });
}



//asuming you want to refresh your table every 5 sec
/*function refresh_table()
{
    $.ajax({
        type:"POST",
        url:"filter.php",

        success:function(html){ // html returns the code outputted from the below php script
            $("#test").html(html); //replace your table html with the new one
        }
    })
}*/



</script>

<div id='delcourse'>
<?php      
require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($s , "CALL `sp_select`('$id' ,'7')") ;

      
      echo "<table style='display:none' id='tb'><tr><td class='header'>Course</td>";
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

	  }
   else
   {
   header('location:index.php');
   }
   ?>
</div>
</div>
<div id="afterexpired">
<?php      
/*require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
      $sql = mysqli_query($s , "CALL `SP_Registration`('null','$id' ,'7')") ;

      
      echo "<table id='selafterexpired'><tr><td class='header'>Course</td>";
      echo "<td class='header'>Code</td>";
      echo "<td class='header'>Prerequisits</td>";
	  echo "<td class='header'>Student Selection</td>";

        while($row = mysqli_fetch_array($sql)) {
		  echo "<tr><td>" .$row["courses"]."</td>" ;
          echo "<td>" .$row["codes"]."</td>" ;
          echo "<td>" .$row["Prerequisits"]."</td>" ;
		//echo"<tr <a id='clicks'></a>";  
    }
    echo "</table>";
   }  
   else
   {
   header('location:index.php');
   }*/
   ?>
</div><br><br>



<div>
<h1 id="RegisteredCourses">Registered Courses</h1><br>
  <div id="combo" class="combo1">
<select id="mySelect" onchange="myFunction()"> 
  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
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
   }  
   else
   {
   header('location:index.php');
   }
?>
  



</select>
</div>
<div id="demo">
  <?php 
      require('connectpro.php') ;
      $id=$_SESSION['psw'];
      if($_SESSION['psw']==true)
      {   
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
   }  
   else
   {
   header('location:index.php');
   }
?>
</div>
</div>
</div>



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



        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        


</body>
</html>