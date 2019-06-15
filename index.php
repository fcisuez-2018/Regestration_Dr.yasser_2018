<?php
   session_start();
   $s=mysqli_connect('localhost','root','') or die (mysql_error());
   mysqli_select_db($s,'fci_db') or die (mysql_error());
     mysqli_query($s , "SET NAMES 'utf8'"); 
mysqli_query($s , 'SET CHARACTER SET utf8');
   if(isset($_REQUEST['login'])){
      $password =$_REQUEST['psw']; 
      
      $sql = "SELECT * FROM student WHERE StudentEductionalNumber = '$password'";
      $sql2 = "SELECT * FROM doctor WHERE OrderCode = '$password'";
      $result=mysqli_query($s,$sql);
      $result2=mysqli_query($s,$sql2);
    
       if(mysqli_num_rows($result)==1){
        $_SESSION['psw']=$password;
    header("location:student.php");
    }

       elseif(mysqli_num_rows($result2)==1){
        $_SESSION['psw']=$password;
    header("location:doctor.php");
    }
       else{
    //$message = "You Have Entered Incorrect ID";
      echo "<script type='text/javascript'>alert('Please! Enter the correct ID ');</script>";
    //header("location:errorpage.php");
        //echo "You Have Entered Incorrect Password";
        //exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
#myFooter {
	background-color: #263238;
	color:white;
}

#myFooter .footer-copyright{
	background-color: #383737;
	padding-top:3px;
	padding-bottom:3px;
	text-align: center;
}

#myFooter .footer-copyright p{
	margin:10px;
	color: #ccc;
}

#myFooter ul{
	list-style-type: none;
    padding-left: 0;
    line-height: 1.7;

}

#myFooter h5{
	font-size: 18px;
    color: white;
    font-weight: bold;
    margin-top: 30px;
}

#myFooter a{
	color:#d2d1d1;
	text-decoration: none;
}

#myFooter a:hover, #myFooter a:focus{
	text-decoration: none;
	color:white;
}

#myFooter .myCols{
	text-align: center;
}

#myFooter .social-networks{
	text-align: center;
	padding-top: 30px;
	padding-bottom: 38px;
}

#myFooter .social-networks a{
    font-size: 32px;
    margin-right: 5px;
    margin-left: 5px;
    color: #f9f9f9;
    padding: 10px;
    transition: 0.2s;
}

#myFooter .social-networks a:hover{
	text-decoration: none;

}

#myFooter .facebook:hover{
	color:#0077e2;
}

#myFooter .google:hover{
	color:#ef1a1a;
}

#myFooter .twitter:hover{
	color: #00aced;
}

@media screen and (max-width: 767px){
	#myFooter {
		text-align: center;
	}
}

.res{
	color : #616161;
font-family: 'Noto Sans JP', sans-serif;
font-size : 18px ;
}
.imgl{
	width:'2px' ;
	height:'2px';
}



</style>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	  <title> Course Registeration </title>
	  <link rel="icon" href="logo.png"> 

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
	<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<style type="text/css">
	.faculty{
		font-size: 14px;
	}
	.suez{
		font-size: 14px;
	}
	h1{
		font-size: 38px;
	}
</style>
<body>
	<!-- Header -->
	<header id="home">
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('img/home-background.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.php">
							<img class="logo-alt" src="logo.png" alt="logo" style="margin-left:-50px">
						</a>
						<div class="logtitle">
						     <br>
					         <p class="faculty">Faculty of Computers and Information</p>
						     <center><p class="suez">Suez University</p></center>	
                        </div>						
					</div>
					<!-- /Logo -->

					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>

				<!--  Main navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Home</a></li>
					<li><a href="#restriction">Curriculum</a></li>
					<li><a href="#registration-period">Registration Period</a></li>
					<li><a href="#guide">Guide</a></li>
					<li><a href="student.php" class="sign-in">Profile</a></li>
				</ul>
				<!-- /Main navigation -->

			</div>
		</nav>
		<!-- /Nav -->

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text" style=' font-size : 47px; padding-top:20px;'><i>Course Registration</i></h1>
							<p class="white-text" style=' font-size : 20px;'>We are here to support students by making the registration process more easier.
							</p>
							<div id="box" style='margin-top:10px'>
                            <form class="formlogin" method="post" style="max-width:500px;margin:auto;padding-top:80px">
                            <h4 class='formtext' style = "font-family : 'Shrikhand', cursive;">ENTER YOUR ID</h4>
                               <div class="input-container">
                            <i class="fa fa-key icon"></i>
                            <input class="input-field" type="password" placeholder="ID" name="psw"  id = "pass">
                               </div>
                            <button type="submit" class="btn" name='login' value='login'>LOGIN</button>
                             </form>
							</div>
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
		<!-- /home wrapper -->

	</header>
	<!-- /Header -->

<!-- restriction -->
	<div id="restriction" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">
              
				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title style='font-family: Acme, sans-serif; font-size : 100px;'" >What should you know before registration</h2>
				</div>
				<!-- /Section header -->

					<p class='res'>Get ready by connecting to your account (use the ID number on your student card).</p>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p class='res'>At the beginning of each semester, the student will register the courses of his choice through the application for registration.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p class='res'>The College Council shall determine the minimum number of students required to be enrolled in a course and the conditions under which this course may be opened.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9' ></i>
						<p class='res'>A regular student may register in courses up to 18 credit hours as maximum and 12 credit hours as minimum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p class='res'>Students who are under observation are not allowed to register for more than 12 credit hours.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p class='res'>After completing the registration process, the student may delete or add one or more courses during a period determined by the College for deletion and addition.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p class='res'>The student is allowed to study different courses and register at higher levels based on choosing the required courses as prerequisites for the higher courses.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p class='res'>The student may not be enrolled in a higher course unless he succeeds in its pre-requests. It may be approved by the council of the concerned department to waive this pre-request if the student has already registered in the course pre-request and has not passed it or has been registered in the course and its pre-request at the same time.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p class='res'>The student may, after registering the courses he has chosen, withdraw from one or more courses within a specified period, so that the number of hours registered for the student shall not be less than the minimum number of enrollments per semester.</p>
					</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
<!-- /restriction -->

<!-- registration-period -->
	<div id="registration-period" class="section md-padding">

		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/Top-Tips-for-Sticking-to-Goals-calendar-watch-laptop.jpg');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">

						<!-- testimonial -->

							<center><h2 class="white-text">Make sure to register during the official registration period</h2></center>
							<br><br><br><br>
							<table>
							       <tr><td class="header1"><b style='font-size:22px ; '> Semester</b></td>
							           <td class="header1"><b style='font-size:22px ; '>Course registration opens</b></td>
								       <td class="header1"><b style='font-size:22px ; '>Course registration closes</b></td>
							       </tr>
							       <tr><td><b>1</b></td>
							           <td >Tuesday, 12 June 2018 (08:00)</td>
								       <td>Tuesday, 26 June 2018 (13:00)</td>
							       </tr>	
			                       <tr><td><b>2</b></td>
							           <td>Tuesday, 4 Dec 2018 (08:00)</td>
								       <td>Tuesday, 18 Dec 2018 (13:00)</td>
							       </tr>							
							</table>
						
						<!-- /testimonial -->

					
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
<!-- /registration-period -->	
	
<!-- Guide section-->
	<!-- Why Choose Us -->
	<div id="guide" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-6">
					<div class="section-header">
						<h2 class="title">step-by-step guide to course registration</h2>
					</div>
					<p>Get ready by connecting to your student account (use the ID number on your student card).</p>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p>Quis varius quam quisque id diam vel quam elementum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p>Mauris augue neque gravida in fermentum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p>Orci phasellus egestas tellus rutrum.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check" style='color:#90CAF9'></i>
						<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
					</div>
				</div>
				<!-- /why choose us content -->
				
				<!-- About slider -->
				<div class="col-md-6">
					<div id="about-slider" class="owl-carousel owl-theme">
						<img class="img-responsive" src="./img/about1.jpg" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
						<img class="img-responsive" src="./img/about1.jpg" alt="">
						<img class="img-responsive" src="./img/about2.jpg" alt="">
					</div>
				</div>
				<!-- /About slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Why Choose Us -->
<!-- /Guide section-->





 <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 myCols">
                   
                    <ul>
                        <li><a href="#"><img src='logo.png' width=100px hight=100px style="padding-top:47px"> </a></li>
                       <h5 style="color:white">Faculty Of Computers and information , suez University</h5>
                    </ul>  
                        
                 
                </div>
                <div class="col-sm-3 myCols">
                     <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Curriculum</a></li>
                        <li><a href="#">Registration Period</a></li>
                         <li><a href="#">Guide</a></li>
                          <li><a href="#">Profile</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Faculty Objective</a></li>
                        <li><a href="#">Vission and Mission </a></li>
                       
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Contact Us</h5>
                    <ul>
                        <li class="fa fa-phone"> 0109 324 9191</li>
                        
                    </ul>
                </div>
                
                </div>
            </div>
        </div>
        <div class="social-networks">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook-official"></i></a>
            <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2019 faculty of computers and information , suez university </p>
        </div>
    </footer>
	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>

</html>
