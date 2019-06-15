<?php
require('connection.php') ;
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
      $sql = mysqli_query($s , "CALL `SP_DoctorInfo`('$id')") ; 
       // output data of each row
       while($row = mysqli_fetch_array($sql)) {
      echo     $row["NameTxt"] ;
  }
  }
  else
  {
  header('location:index.php');
  }                         
?> </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Didact Gothic'  rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* 
{
	box-sizing: border-box;
}

body 
{
	font-family: Didact Gothic;
	font-size: 18px;
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
	background-size: 100% 80%;
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
	font-size: 30px;
	margin-top: -10px;
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
  padding: 15px;
  color: #099eda;
}

.page
{  
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
}

.header
{
    text-align: left;
    padding: 15px;
    background-color: black;
    color: white;
}
.filter{
  margin-bottom: 15px;
  text-align: center;
}
h4{
  color: #004d66;

}
tr {
  border: 0.1px solid #e6e6e6;
}
td{
  padding: 10px;
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
  height: 30px;
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
  height: 30px;
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
.rightside
{   
    -ms-flex: 100%; 
    flex: 100%;
    border: 3px solid #01405a;
  background-color: #012432;
    padding: 20px;
    color: #f2f2f2;
    margin-top: 30px;
    margin-left: 70px;
    margin-right: 70px;
    margin-bottom: 40px;

}


.message {
  border: 3px solid #01405a;
  background-color: black;
  padding: 16px;
  margin: 4px 0;
  width: 100%;
  cursor: pointer;
  height: 100px;
}
.message:hover{
  opacity: 0.7;
}

.message::after {
  content: "";
  clear: both;
  display: table;
}

.personal {
  float: right;
  margin-left: 20px;
  border-radius: 50%;
}

.messicon {
  float: left;
  margin-left: 10px;
  border-radius: 50%;
  margin-top: 18px;
}

.message p
{
  text-align: right;
  padding: 20px;
}


@media (max-width: 500px) {
  .message {
      text-align: center;
  }
  .message img {
      margin: auto;
      float: none;
      display: block;
  }
}
button{
  width: 100%;
  height: 60px;
  margin-top: 10px;
    border: 3px solid #01405a;
  background-color: #012432;
  color:white;

}
#mySelect{
  width: 100%;
}
.navbarr
{
    text-align: center;
    padding: 30px;
    background: #02141c;
    margin-top: 0px;
}
.link
{
  text-decoration: none;
  color: #f2f2f2;
}
#mySelect{
  float: center;
}
.menu-text 
{
    cursor: pointer;
    height: 100px;
    width: 100px;
    margin: 0 2px;
    padding: 18px;
    margin-top: 30px;
    margin-bottom: -20px;
    background-color: #01405a;
    display: inline-block;
    transition: background-color 0.6s ease;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.3);
}
.word
{
  position: relative;
  top: 20px;
}
.active, .dot:hover 
{
    background-color: #099eda;
}


.pro{
  -ms-flex: 50%; 
  flex: 50%;
  text-align: left;
}
.pro img{
  float: left;
  width: 80px;
  height: 80px;
  border-radius: 50%;
}
.info{
  -ms-flex: 50%; 
  flex: 50%;
  padding-left: 20px;
  padding-left: 100px;
}
.info p{
  text-align: left;
  color: black;
}
#timersection{
  margin-left:14%;
  width:80%;
  text-align: center;
  background:white;
  border-radius:15px;
  font-family: "Times New Roman";
  box-shadow: 10px 10px black;
  height:35%;
  
}
#timer{
  font-size:18px;
  text-align: center;
  font-weight:bold;
  font-family: "Lucida Console";
  color:#ff0000;
  
}
table{
  margin-right: 20px;
  float: center;
  width: 100%;
}
.search{
  width: 100%;
  background-color: #02141c;
  text-align: center;
}
#icon{
  width: 5%;
  height: 40px;
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
  padding:10px;
  text-decoration:none;
  text-shadow:0px -1px 0px #5b6178;
  text-align: center;
}
#search{
  width:20%;
  height: 40px;
  border-bottom-right-radius:25px;
  border-top-right-radius:25px;
}
.navbar
{
    text-align: center;
    padding: 30px;
    background: #02141c;
}
.logtitle{
  display:inline-block;
  margin-top:-15px;

}
h3{
  text-align: center;
padding-top: 20px;
font-family: "Times New Roman", Times, serif;
}
h6{
  font-size: 14px;
  font-family: "Times New Roman", Times, serif;

}
.social-networks{
  text-align: center;
  padding-top: 30px;
  padding-bottom: 38px;
}

.social-networks a{
    font-size: 32px;
    margin-right: 5px;
    margin-left: 5px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

.social-networks a:hover{
  text-decoration: none;

}

 .facebook:hover{
  color:#0077e2;
}

 .google:hover{
  color:#ef1a1a;
}

.twitter:hover{
  color: #00aced;
}

@media screen and (max-width: 767px){
  #myFooter {
    text-align: center;
  }
}

.footer-copyright{
  margin-bottom : 0;
}
.foot{
  width: 100%;
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
            <li><a href="#list">Students</a></li>
            <li><a  id="RegCourses" href="#delcourse" >Courses List</a></li>
            <li><a href="logout.php">log out</a></li>
          </ul>
      </div>
      </div>
    </nav><br><br><br>
<div class="row">
<div class="intro">

	<div class="profile-img">
  <?php
    require('connectpro.php') ;
    $id=$_SESSION['psw'];
    if($_SESSION['psw']==true)
   {   
    $sql = mysqli_query($s , "CALL `SP_DoctorInfo`('$id')") ; 
     // output data of each row
       while($row = mysqli_fetch_array($sql)) {
    $path = $row['image'] ;
    echo "<img class='dot' src=$path></div>" ;
    echo "<h1>".$row['NameTxt']."</h1>";
    }
   }
   else
   {
   header('location:index.php');
   }                         
?>
<br>
<div class="data"><p class="text"> Faculty Of Computers and Information </p></div>
	<div class="division">
	<div class="info1">
	<div class="data"><p class="text"> Phone : 01120013398 </p></div>
	</div>
	<div class="info2">
	
	<div class="data"><p class="text"> From : Suez </p></div>
	</div>

</div>
</div>
</div>
</section>
<h3 id='list'> Students list and their Requestes for Registration </h3>
<div class="navbarr" id='list'>
  <a class="link" href="#1" data-tab="1"><span class="menu-text" onclick="currentSlide(1)"><p class="word">level 1</p></span></a>
  <a class="link" href="#2" data-tab="2"><span class="menu-text" onclick="currentSlide(2)"><p class="word">Level 2</p></span></a>
  <a class="link" href="#3" data-tab="3"><span class="menu-text" onclick="currentSlide(3)"><p class="word">Level 3</p></span></a> 
  <a class="link" href="#3" data-tab="3"><span class="menu-text" onclick="currentSlide(4)"><p class="word">Level 4</p></span></a>
</div>

<div class="search">
  <form  method="post">
  <button id='icon'><i class="fa fa-search"></i></button><input type="text" name="search_text" id="search" placeholder=" Search in students" />
</form>
</div>
<div class="page" >



<div class="rightside" > 
<div class="mySlides" data-content="1" >
     <?php
               require('connectpro.php') ;

                     $id=$_SESSION['psw'];
                     if($_SESSION['psw']==true)
                       {
                          $sql = mysqli_query($s , "CALL `AdvisorStudentLevel`('$id','1')") ; 

                          while($row = mysqli_fetch_array($sql)) {
                            $image=$row['image'];
                          ?>
                          <button class='message view'  id="<?php echo $row['id']; ?>" name="view"><img src='MessagesIcon.png'  class='messicon' alt='Avatar' style='width:30px; height:30px'><img src="StudentPhoto/<?php echo $image; ?>" class='personal' alt='Avatar' style='width:60px; height:60px'><p data-target="firstName"><?php echo $row['StudentName'];?></p></button>
                          <?php
                            }
                       }
                     

                   ?>

</div>
<div class="mySlides" data-content="2" >
     <?php
               require('connectpro.php') ;

                     $id=$_SESSION['psw'];
                     if($_SESSION['psw']==true)
                       {
                          $sql = mysqli_query($s , "CALL `AdvisorStudentLevel`('$id','2')") ; 

                          while($row = mysqli_fetch_array($sql)) {
                            $image=$row['image'];
                          ?>
                          <button class='message view'  id="<?php echo $row['id']; ?>" name="view"><img src='MessagesIcon.png'  class='messicon' alt='Avatar' style='width:30px; height:30px'><img src="StudentPhoto/<?php echo $image; ?>" class='personal' alt='Avatar' style='width:60px; height:60px'><p data-target="firstName"><?php echo $row['StudentName'];?></p></button>
                          <?php
                            }
                       }
                     

                   ?>

</div>
<div class="mySlides" data-content="3" >
     <?php
               require('connectpro.php') ;

                     $id=$_SESSION['psw'];
                     if($_SESSION['psw']==true)
                       {
                          $sql = mysqli_query($s , "CALL `AdvisorStudentLevel`('$id','3')") ; 

                          while($row = mysqli_fetch_array($sql)) {
                            $image=$row['image'];
                          ?>
                          <button class='message view'  id="<?php echo $row['id']; ?>" name="view"><img src='MessagesIcon.png'  class='messicon' alt='Avatar' style='width:30px; height:30px'><img src="StudentPhoto/<?php echo $image; ?>" class='personal' alt='Avatar' style='width:60px; height:60px'><p data-target="firstName"><?php echo $row['StudentName'];?></p></button>
                          <?php
                            }
                       }
                     

                   ?>

</div>
<div class="mySlides" data-content="4" >
     <?php
               require('connectpro.php') ;

                     $id=$_SESSION['psw'];
                     if($_SESSION['psw']==true)
                       {
                          $sql = mysqli_query($s , "CALL `AdvisorStudentLevel`('$id','4')") ; 

                          while($row = mysqli_fetch_array($sql)) {
                            $image=$row['image'];
                          ?>
                          <button class='message view'  id="<?php echo $row['id']; ?>" name="view"><img src='MessagesIcon.png'  class='messicon' alt='Avatar' style='width:30px; height:30px'><img src="StudentPhoto/<?php echo $image; ?>" class='personal' alt='Avatar' style='width:60px; height:60px'><p data-target="firstName"><?php echo $row['StudentName'];?></p></button>
                          <?php
                            }
                       }
                     

                   ?>

</div>
</div>





<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("menu-text");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 $(document).on('click', '.view', function(){
  var id = $(this).attr('id');
  var options = {
   ajaxPrefix: '',
   ajaxData: {id:id},
   ajaxComplete:function(){
    this.buttons([{
     type: Dialogify.BUTTON_PRIMARY
    }]);
   }
  };
  var x = document.getElementById("myDialog");
  new Dialogify('view.php', options)
   .title('Student Information ').showModal();
 });
 
 
 
 
});
</script>
<footer class='foot'>
      <hr>
<h4><center><div class="social-networks">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a>
            <a href="#" class="google"><i class="fa fa-google-plus"></i></a><br><br>
              <div class="footer-copyright">
            <p>© 2019 faculty of computers and information , suez university </p>
        </div>
        </div>
        
          </center></h4>
</footer>
</body>
</html>