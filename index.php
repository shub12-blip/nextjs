<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title> All India Computer Saksharta Mission </title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
		<![endif]-->
		<!-- Favicone Icon -->
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
		<!-- CSS -->
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700%7CRoboto:400,500,700" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
	

		<link href="assets/css/ionicons.css" rel="stylesheet" type="text/css">
		<link href="assets/css/flaticon.css" rel="stylesheet" type="text/css">
		<!-- carousel -->
		<link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
		<!-- mediaelementplayer -->
		<link href="assets/css/mediaelementplayer.css" rel="stylesheet" type="text/css">
		<!--Light box-->
		<link href="assets/css/jquery.fancybox.css" rel="stylesheet" type="text/css">
		<!-- Revolution Style-sheet -->
			<!--Main Style-->
		<link href="assets/css/nav_corporate.css" rel="stylesheet" type="text/css">
		<link href="assets/css/style1.css" rel="stylesheet" type="text/css">
		
		
	<link href="assets/css/index3.css" rel="stylesheet" type="text/css">

		<!--Theme Color-->
		
		<link href="assets/css/theme-color/default.css" rel="stylesheet" id="theme-color" type="text/css">
			
		
	<link rel="stylesheet" type="text/css" href="wslider/engine1/style.css" />
	<script type="text/javascript" src="wslider/engine1/jquery.js"></script>
    

 
<style type="text/css">



 .welcome
{
	position:fixed;
	top:10%;
	left:20%;
	z-index:1000;
}

 .welcome .close
{
	position:absolute;
	top:-5px;
	right:90px;
	width:50px;
	height:50px;
	line-height:50px;
	padding:1px;
	background:url('adm/files/close.png') no-repeat center;
	z-index:1001;
	opacity:1

}


.demoTest
{
  position:fixed; z-index:5000; right:0px; top:330px; width:45px; height:170px; border-top-left-radius:5px; border-bottom-left-radius:5px;
  background:#0066CC; color:#000000; background-image:url(free.png); background-position:center; background-repeat:no-repeat;  background-size:24px 168px;
  -moz-transition:    background 0.4s;
 -ms-transition:     background 0.4s;
 -o-transition:      background 0.4s;
  transition:        background 0.4s;
}
.demoTest:hover
{
	background:#67B3FE;background-image:url(free.png);background-position:center; background-repeat:no-repeat;
	background-size:24px 160px;
}



.demoTest1
{
  position:fixed; z-index:5000; right:0px; top:150px; width:45px; height:170px; border-top-left-radius:5px; border-bottom-left-radius:5px;
  background:#0066CC; color:#000000; background-image:url(free1.png); background-position:center; background-repeat:no-repeat;  background-size:24px 168px;
  -moz-transition:    background 0.4s;
 -ms-transition:     background 0.4s;
 -o-transition:      background 0.4s;
  transition:        background 0.4s;
}
.demoTest1:hover
{
	background:#67B3FE;background-image:url(free1.png);background-position:center; background-repeat:no-repeat;
	background-size:24px 160px;
}





</style>


<style>


.popupBox {
    display:none;
    
    position:fixed;
    top: 30%;
    left: 40%;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em;
  
	 width:30em;
    height:36em;
    
    color: #000000;
    border:5px solid #4E93A2;
    -moz-border-radius:8px;
    -webkit-border-radius:8px;
    background-color:#FFFFFF;
    z-index: 1000;
}
.popupContent {
    display:none;
    font-family:Arial, Helvetica, sans-serif;
    color: #4E93A2;
    margin-top:30px;
    margin-left:30px;
    margin-right:30px;
}
.deleteMeetingButton {
    clear:both;
    cursor:pointer;
    width:90px;
    height:30px;
    border-radius: 4px;
    background-color: #5CD2D2;
    border:none;
    text-align:center;
    line-height:10px;
    color:#FFFFFF;
    font-size:11px;
    font-family:Arial, Helvetica, sans-serif;
    font-weight:bold;
}

/* added code below */
.deleteMeetingClose {
    font-size: 1.5em;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 5px;
}

</style>


<script>

$(document).ready(function(){

/*
$('.deleteMeeting').click(function () {
    $('#overlay').fadeIn('slow');
    $('#popupBox').fadeIn('slow');
    $('#popupContent').fadeIn('slow');
});
*/

$('#b0').click(function () {
    
    $('.deleteMeetingClose').trigger('click');
    
     $('.popupBox').width('32em');
 $('.popupBox').height('28em');

    $('#popupBox0').fadeIn('slow');
    $('#popupContent0').fadeIn('slow');
});



$('#b1').click(function () {
   
$('.deleteMeetingClose').trigger('click');
 
     $('.popupBox').width('20em');
 $('.popupBox').height('26em');

    $('#popupBox1').fadeIn('slow');
    $('#popupContent1').fadeIn('slow');
});

$('#b2').click(function () {
  $('.deleteMeetingClose').trigger('click');
  
      $('.popupBox').width('20em');
 $('.popupBox').height('26em');

    $('#popupBox2').fadeIn('slow');
    $('#popupContent2').fadeIn('slow');
});

$('#b3').click(function () {
 $('.deleteMeetingClose').trigger('click'); 
 
       $('.popupBox').width('20em');
 $('.popupBox').height('26em');

 $('#popupBox3').fadeIn('slow');
    $('#popupContent3').fadeIn('slow');
});

$('#b4').click(function () {

$('.deleteMeetingClose').trigger('click');

   $('.popupBox').width('26em');
 $('.popupBox').height('16em');
    $('#popupBox4').fadeIn('slow');
    $('#popupContent4').fadeIn('slow');
});

$('#b5').click(function () {

$('.deleteMeetingClose').trigger('click');

   $('.popupBox').width('26em');
 $('.popupBox').height('16em');
    $('#popupBox5').fadeIn('slow');
    $('#popupContent5').fadeIn('slow');
});

$('#b6').click(function () {

$('.deleteMeetingClose').trigger('click');
   
 $('.popupBox').width('22em');
 $('.popupBox').height('26em');
    $('#popupBox6').fadeIn('slow');
    $('#popupContent6').fadeIn('slow');
});

$('#b7').click(function () {

$('.deleteMeetingClose').trigger('click');
  
       $('.popupBox').width('18em');
 $('.popupBox').height('30em');

 $('#popupBox7').fadeIn('slow');
    $('#popupContent7').fadeIn('slow');
});

// added .deleteMeetingClose into the selectors
$('.deleteMeetingClose').click(function () {
    $('#overlay').fadeOut('slow');
    $('.popupBox').fadeOut('slow');
    $('.popupContent').fadeOut('slow');
});



});


</script>
	
	</head>
	
	
	<body class="full-intro background--dark">
	
	<a href="stud_enquiry.php" class="demoTest"></a>
	<a href="candidate/" class="demoTest1"></a>


	
<div class="welcome">
<a target="_blank"  href="#">
<img src="adm/files/16_Sep_2021_1631775735_Tejad.jpg" style="border:solid 7px rgba(31,137,245,.8); width:100%; height:auto;">
</a>
<div class="close"></div>


</div>

				
		<!--loader-->
		<div id="preloader">
			<div class="sk-circle">
				<div class="sk-circle1 sk-child"></div>
				<div class="sk-circle2 sk-child"></div>
				<div class="sk-circle3 sk-child"></div>
				<div class="sk-circle4 sk-child"></div>
				<div class="sk-circle5 sk-child"></div>
				<div class="sk-circle6 sk-child"></div>
				<div class="sk-circle7 sk-child"></div>
				<div class="sk-circle8 sk-child"></div>
				<div class="sk-circle9 sk-child"></div>
				<div class="sk-circle10 sk-child"></div>
				<div class="sk-circle11 sk-child"></div>
				<div class="sk-circle12 sk-child"></div>
			</div>
		</div>
		<!--loader-->
		<!-- Site Wrapper -->
		<div class="wrapper">
	
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+91 9667555300 ", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->


			<!-- HEADER -->
			<!--Start Top bar area -->
			<section class="top-bar-area">
				<div class="container">
					<div class="clearfix">
						<div class="pull-left">
							<p>
								
										<div id="google_translate_element"></div>
										<script type="text/javascript">
										  function googleTranslateElementInit() {
										    new google.translate.TranslateElement({
										      pageLanguage: 'en',
										      includedLanguages: 'hi,gu,bn,ur,ta,te',
										      layout: google.translate.TranslateElement.InlineLayout.SIMPLE
										    }, 'google_translate_element');
										  }
										</script>
										<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
								
							<i class="fa fa-clock-o"></i><b> Help Line : 0744-2392007</b>
								
							</p>	
							
							</div>
						<div class="pull-right">
							<p align="center">
							    
							    <a href="https://skills.aicsm.com/" class="_blank">
							    <button class="btn btn-primary" type="button">Skills</button></a>
							    
							    <a href="https://aicsm.online/public/" class="_blank">
							    <button class="btn btn-primary" type="button">E-Learn</button></a>
							    
								<a href="adm/"><button class="btn btn-primary" type="button">
								Center Login</button></a>
								<a href="adm/"> <button class="btn btn-danger" type="button">Officer Login</button></a>

							  <a href="candidate/"><button class="btn btn-success"> Student Login</button></a>

							<a href="SrchByFrmNoOutSide.php"><button class="btn btn-info"> Student Verification</button></a>

							 						</p>
						</div>
					</div>
				</div>
			</section>
			<!--End Top bar area -->
			<!--Start header area-->
			<header class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="logo">
								
								<a href="index.php">
								
								<img src="img/aicsmlogo2.jpg" alt="AICSM Logo">
							
								</a>
							
							</div>
						</div>
						
						
					<div class="col-md-6 col-sm-12 col-xs-12">

					
									<div class="logo" align="center">
								<a href="index.php">
								<img src="img/AICSM TEXT.jpg" alt="ALL INDIA COMPUTER SAKSHARTA MISSION">	</a>

								<br>
								
							</div>
						
						
					
					</div>

						
						
						
						<div class="col-md-3 col-sm-12 col-xs-12">
							<div class="logo"  align="center">
							<a href="index.php">	<img src="img/aicsmlogo1.jpg" alt="AICSM Since 1999">	</a>

							</div>
						</div>
					</div>
				</div>
			</header>
			<!--End header area-->
			<!--Start mainmenu area-->
			<section class="mainmenu-area">
				<div class="container">
					<div class="mainmenu-bg">
						<div class="row">
							<div class="col-md-10 col-sm-12 col-xs-12">
								<!--Start mainmenu-->
								<nav class="main-menu">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
											<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
										</button>
									</div>
									<div class="navbar-collapse collapse clearfix">
										<ul class="navigation clearfix">
 <li> <a href="index.php">Home</a> 	</li>
																						
											<li>
												<a href="#!">About Us</a>
												<ul class="sub-nav">
													<li><a href="aicsmIntro.htm">AICSM Introduction</a></li>
													<li> <a href="aicsmDirmsg.htm">Director's Message</a> </li>
													<li><a href="aicsmRules.htm">AICSM Rules</a></li>
													<li> <a href="aicsmAimGoal.htm">AICSM Aim & Goal</a></li>
													<li><a href="award-certificate.htm">Awards & Certificates</a></li>
												 <li> <a href="aicsmSantha.htm">AICSM Supported Sanstha</a></li>
											</ul>
											</li>
											
												<li>
												<a href="#!">Study Centre</a>
												<ul class="sub-nav">
													<li><a href="WhyAicsm.htm">Why AICSM </a></li>
													<li><a href="studycenter.php">Find Study Center</a></li>
												</ul>
											</li>
																						
											<li>
												<a href="#!">COURSES</a>
												<ul class="sub-nav">
													<li><a href="CerifiedCourse.htm">Certified Courses</a></li>
													<li><a href="DiplomaCourse.htm">Diploma Courses</a></li>
													<li><a href="PgdcaCourse.htm">PGDCA Courses</a></li>
													<li><a href="AdvanceDiploma.htm">Advance Diploma</a></li>
													<li><a href="CourseDetail.htm">Courses Detail</a></li>
													<li><a href="AllCourse.htm">All Courses</a></li>
													
												</ul>
											</li>
											
											
												
												
											<li>
												<a href="Insurance.htm">Insurance</a> 

											</li>
											<li>
												<a href="#!">INTRACT </a>
												<ul class="sub-nav">
												
													<li><a href="TrainingPlacement.htm">Training & Placement</a></li>
													<li><a href="Books.htm">Publication</a></li>
													<li><a href="#">Registration</a></li>
													<li><a href="Examination.htm">Examination</a></li>	
													<li><a href="Career.htm">Career</a></li>	
													<li><a href="Advertisement.htm">Advertisement</a></li>

												
													</ul>
											</li>
											
											<li>
												<a href="#!">OTHER</a>
												<ul class="sub-nav">
													<li><a href="Media.php">Media</a></li>
													<li><a href="news_event.php">News & Event</a></li>
													<li>	<a href="Download.php">Download</a>	</li>
													<li><a href="https://blog.aicsm.com/">Our Blog</a></li>
													
												</ul>
											</li>
											
											<li>
												<a href="how-to-get-center-frenchise.htm">HOW GET AFFILATION</a>
											</li>
											<li>
												<a href="contact.htm">Contact</a>
											</li>	
										</ul>

										<!-- ==============================
										=========Mobile Navigation==========
										==================================== -->
										<ul class="mobile-menu clearfix">
											
											<li>
												<a href="index.php">Home</a>
											</li>
											
												<li>
												<a href="#!">About Us</a><span class="submenu-button"></span>
													<ul class="sub-nav">
													<li><a href="aicsmIntro.htm">AICSM Introduction</a></li>
													<li> <a href="aicsmDirmsg.htm">Director's Message</a> </li>
													<li><a href="aicsmRules.htm">AICSM Rules</a></li>
													<li> <a href="aicsmAimGoal.htm">AICSM Aim & Goal</a></li>
													<li><a href="award-certificate.htm">Awards & Certificates</a></li>
												<li> <a href="aicsmSantha.htm">AICSM Supported Sanstha</a></li>
												</ul>
											</li>
											
											<li>
												<a href="#!">Study Centre</a><span class="submenu-button"></span>
												<ul class="sub-nav">
													<li><a href="WhyAicsm.htm">Why AICSM </a></li>
													<li><a href="studycenter.php">Find Study Center</a></li>
													</ul>
											</li>
											
											<li>
												<a href="#!">COURSES</a><span class="submenu-button"></span>
												<ul class="sub-nav">
													<li><a href="CerifiedCourse.htm">Certified Courses</a></li>
													<li><a href="DiplomaCourse.htm">Diploma Courses</a></li>
													<li><a href="PgdcaCourse.htm">PGDCA Courses</a></li>
													<li><a href="AdvanceDiploma.htm">Advance Diploma</a></li>
													<li><a href="CourseDetail.htm">Courses Detail</a></li>
													<li><a href="AllCourse.htm">All Courses</a></li>
											</ul>
											</li>
																							
											
											<li>
												<a href="Insurance.htm">Insurance</a>
											</li>
											
											<li>	
												<a href="#!">INTRACT </a><span class="submenu-button"></span>

												<ul class="sub-nav">
													
													<li><a href="TrainingPlacement.htm">Training & Placement</a></li>
													<li><a href="Books.htm">Publication</a></li>
													<li><a href="#">Registration</a></li>
													<li><a href="Examination.htm">Examination</a></li>	
													<li><a href="Career.htm">Career</a></li>	
													<li><a href="Advertisement.htm">Advertisement</a></li>
	
												
													</ul>
											</li>
											<li>
												<a href="#!">OTHER</a><span class="submenu-button"></span>

												<ul class="sub-nav">
													<li><a href="Media.php">Media</a></li>
													<li><a href="news_event.php">News & Event</a></li>
													<li>	<a href="Download.php">Download</a>	</li>											
													</ul>
											</li>
											
											<li>
												<a href="how-to-get-center-frenchise.htm">HOW GET AFFILATION</a>
											</li>
											<li>
												<a href="contact.htm">Contact</a>

											</li>	
											
										</ul>
									</div>
								</nav>
								<!--End mainmenu-->

							</div>
						</div>
						<div class="right-column">
							<div class="right-area">
								
								<div class="link_btn float_right">
									<a href="CustomerEnquiry.php" class="thm-btn bg-clr1">Franchise Enquiry</a>
								</div> 
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
			<!-- End Intro Section -->
			
			
			<div >
			<div  class="row">
			<div class=" bgakc1 pt-20 pb-20">
			
				
			
								<div id="wowslider-container1" class="shadow1 ">
										<div class="ws_images"><ul>
											<li><img src="wslider/data1/images/02.jpg" alt="1 (1)" title="1 (1)" id="wows1_0"/></li>
											<li><a href="http://skills.aicsm.com/"><img src="wslider/data1/images/06.png" alt="1 (1)" title="1 (1)" id="wows1_1"/></li>
											<li><img src="wslider/data1/images/03.jpg" alt="1 (1)" title="1 (1)" id="wows1_2"/></li>
											<li><img src="wslider/data1/images/04.jpg" alt="1 (2)" title="1 (2)" id="wows1_3"/></li>
											<li><img src="wslider/data1/images/05.jpg" alt="1 (2)" title="1 (2)" id="wows1_4"/></li>
											<li><img src="wslider/data1/images/01.jpg" alt="1 (1)" title="1 (1)" id="wows1_5"/></li>
																						
										</ul></div>
										<div class="ws_bullets">
										
										<div>
											
																					
										</div>
										</div>
										
										<div class="ws_script" style="position:absolute;left:-99%"><a href="#">image carousel</a> IJPAB</div>
										<div class="ws_shadow"></div>
										</div>
										
										<div class="clearfix"> </div>

						
		
		</div>
		
			


		</div>
		</div>
		


		
					
	<script type="text/javascript" src="wslider/engine1/wowslider.js"></script>
	<script type="text/javascript" src="wslider/engine1/script.js"></script>

			<!-- Offer -->
			<div class="col-sm-12 bgakc1 ptb-5">
			</div>
			
			
			
			<!-- Offer End-->
			
			
		<div class="col-sm-12 bgakc1 ptb-5">
			</div>
		<p align="center"><b>www.aicsm.com and www.aicsm.in the only official websites of All India Computer Saksharta Mission (AICSM)</b></p>	

			<section id="client-logos" class="pt-30 pb-30 ptb-xs-40 wow fadeIn ptb ">
				<div class="container">
					<div class="row pb-30 text-center">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="creative_heading">
							 
								<h2>APPRECIATED <span>BY</span></h2>
							</div>
							
						</div>
					</div>

					<div class="owl-carousel client-carousel nf-carousel-theme ">
						<div class="item  border bgakc2" align="center">
							<div class="client-logo">
								<img src="../leader/abdul-kalam.jpg" alt="" />
								
							</div>
							Late Sri Abdul Kalam, Former President Of India
							
						</div>
						
						
					
						
						
						<div class="item border bgakc2" align="center">
							<div class="client-logo ">
								<img src="../leader/anandiben-patel.jpg" alt="" />
							</div>
							Smt.Anandiben Patel, Former Chief Minister of Gujarat
							

						</div>


						
						<div class="item border bgakc2" align="center">
							<div class="client-logo ">
								<img src="../leader/bhirav-singh-shekhawat.jpg" alt="" />
							</div>
							Late Sri. Bhirav Singh Shekhawat,Former CM of Raj.

							

						</div>
						
						
						
						<div class="item border bgakc2" align="center">
							<div class="client-logo">
								<img src="../leader/mamata-banerjee.jpg" alt="" />
							</div>
							Smt. Mamata Banerjee, Chief Minister of West Bengal
							
						</div>
						<div class="item border bgakc2" align="center">
							<div class="client-logo">
								<img src="../leader/narendra-modi.jpg" alt="" />
							</div>
							Mr. Narendra Modi, Prime Minister of india
						
						</div>

						<div class="item border bgakc2" align="center">
							<div class="client-logo">
								<img src="../leader/pranab-mukherjee.jpg" alt="" />
							</div>
							Mr. Pranab Mukherjee, Former President Of India
							
						</div>
						<div class="item border bgakc2" align="center">
							<div class="client-logo">
								<img src="../leader/pratibha-patil.gif" alt="" />
							</div>
							Mrs. Pratibha Patil, Former President Of India

							

						</div>
						<div class="item border bgakc2" align="center">
							<div class="client-logo">
								<img src="../leader/tarun-gogoi.jpg" alt="" />
							</div>
							Mr. Tarun Gogoi,Former Chief Minister of Assam
						
						</div>
						<div class="item border bgakc2" align="center">
							<div class="client-logo">
								<img src="../leader/tr-zeliang.jpg" alt="" />
							</div>
							Mr. T R Zeliang,Former Chief Minister of Nagaland
						</div>
						<div class="item border bgakc2" align="center">
							<div class="client-logo">
								<img src="../leader/vasundhara-raje.jpg" alt="" />
							</div>
							Smt. Vasundhara Raje, Chief Minister of Rajasthan
						</div>
						
						

					</div>
					
									
				
				</div>
				
							
				
			</section>
			
			
			<div class="container secondary_bg">

				<div  class="row  bgakc1 shadow1">

				<div class="col-md-12 ">
					
							<div class="row ">
				<div class="clearfix">&nbsp; </div>	
										<div class="col-sm-3">
											<div class="box_content__block">
												<a href="aicsmIntro.htm"><i class="fa fa-graduation-cap"></i></a>
												<h2>Introduction <span>
												<a href="aicsmIntro.htm">About AICSM</a></span></h2>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="box_content__block">
												<a href="aicsmRules.htm"><i class="fa fa-envelope"></i></a>
												<h2>Rule <span><a href="aicsmRules.htm">Rules & regulation at AICSM</a></span></h2>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="box_content__block">
												<a href="aicsmAimGoal.htm"><i class="fa fa-globe"></i></a>
												<h2>Aim & Goal <span>
												<a href="aicsmAimGoal.htm">Aim & Objective of AICSM</a></span></h2>
											</div>
										</div>
										<div class="col-sm-3">
											<div class="box_content__block">
												<a href="aicsmDirmsg.htm"><i class="fa fa-user"></i></a>
												<h2>About us  <span>
												<a href="aicsmDirmsg.htm">Director's Message </a></span></h2>
											</div>
										</div>
		
									</div>
									
								
						</div>		
					
				</div>	
				
	
			
			</div>	
	
	<div class="clearfix">&nbsp; </div>

<div class="section-bar shadow5">
				<div class="container-fluid">
					<div class="row text-center light-color">
					
					
					<div class="col-sm-6 col-md-3 bg-pic-2 ptb-15">
							<div class="section-bar-text">
								
								<a href="adm/">
								<div class="icon-wrap text-black">
									<span><i class="fa fa-laptop" aria-hidden="true"></i></span>
								</div>
								<h3 class="heading">Center Login</h3>
								<div class="desc">
									Franchise Panel
									
								</div>
							</a>
							</div>
													
							
						</div>
						
						
						<div class="col-sm-6 col-md-3 bg-pic ptb-15">
							<div class="section-bar-text">
							<a href="SrchByFrmNoOutSide.php">
								<div class="icon-wrap ">
									<span><i class="fa fa-male" aria-hidden="true"></i></span>
								</div>
								<h3 class="heading">Verification</h3>

								<div class="desc">
									Verify a Student
									
								</div>
							</a>	
								
							</div>
						</div>

						

						<div class="col-sm-6 col-md-3 bg-pic0 ptb-15">
							<div class="section-bar-text">
								<a href="scEnquiry.php">
								<div class="icon-wrap ">
									<span><i class="fa fa-book" aria-hidden="true"></i></span>
								</div>
								<h3 class="heading">Coordinator Enquiry </h3>
								<div class="desc">
									Coordinator Application Form   								
								</div>
								</a>
							</div>

						</div>

						<div class="col-sm-6 col-md-3 bg-pic-2 ptb-15">

							<div class="section-bar-text">
								<a href="candidate/">
								<div class="icon-wrap text-black">
									<span><i class="fa fa-building-o" aria-hidden="true"></i></span>
								</div>
								<h3 class="heading">Exam Section</h3>
								<div class="desc"> Student Login 
								</div>
								</a>
							</div>
						</div>

					</div>
				</div>
			</div>
			
			
			
			
			
			<div id="project-section" class="pt-40 pb-40 pt-xs-60  secondary_bg">
			<div class="container">
				<div class="row pb-30 text-center">
					<div class="col-md-12">
						
					
					 <div class="creative_heading">
							<h2><span>WHY AICSM </span>BETTER THEN OTHER ?</h2>
							<p>
						<br>&nbsp;<br>
							</p>
						</div>
						
							


						
						<ul class="services servicesHomePageStyle">
							<li>
											<a href="WhyAicsm.htm">
											<button href="#" id="b0" class="deleteMeeting"  >
									
										<i class="icon">
								<img src="image/icon/businessman-with-doubts.svg" width="27" height="28" /></i>
										
								<h3>Why Choose us ?</h3>
								</button></a>
								
							</li>
							

						
						<!-- -->
							<li>
								<button href="#"   id="b12" class="deleteMeeting">
							
								<i class="icon"><img src="image/icon/india.svg" /></i>
								<h3>3200+ STUDY CENTERS </h3>
								</button >
							</li>
							
							
						<li>
							
							<button href="#"  id="b5" class="deleteMeeting">
							
							<i class="icon"><img src="image/icon/education1.svg" /></i>
								<h3>TRAINING PARTNER OF NSDC</h3>
								</button >

							</li>
							
							
								<div id="popupBox5" class="popupBox">
						    <div id="popupContent5" class="popupContent">
						      <img src="img/nsdc.png"  >
						    </div>
						   
						    <span class="deleteMeetingClose">&times;</span> <!-- <= added this line -->
						</div>
						
						
							<li>
								<button href="#"   id="b2" class="deleteMeeting">
							
								<i class="icon"><img src="image/icon/accreditation.svg" /></i>
								<h3>AWARDED ORGANIZATION </h3>
								</button >
							</li>
							
							<div id="popupBox2" class="popupBox">
						    <div id="popupContent2" class="popupContent">
						      <img src="img/2 (1).jpeg"  >
						       <img src="img/2 (2).jpg"  >
						        <img src="img/2 (1).jpg"  >

						    </div>
						   
						    <span class="deleteMeetingClose">&times;</span> <!-- <= added this line -->
						</div>
						
						
						<!--
							--><li>
								<button href="#"  id="b1" class="deleteMeeting" >
								
							
								<i class="icon">
								<img src="image/icon/iso.svg" width="34" height="28" /></i>
								<h3>An ISO 29990:2010 Certified Organization</h3>
							</button >	
							
								
								
							</li>
						<div id="popupBox1" class="popupBox">
						    <div id="popupContent1" class="popupContent">
						      <img src="img/ISO.jpg"  >
						    </div>
						   
						    <span class="deleteMeetingClose">&times;</span> <!-- <= added this line -->
						</div>
													
							
							
									
									
									<!--
							--><li>
							
								<button href="#"  id="b3" class="deleteMeeting">
							

								<i class="icon"><img src="image/icon/registered-sign.svg" /></i>
								<h3>REGISTER UNDER LABOUR AND EMPLOYEMENT </h3>
								
								</button >
							</li>
							
								<div id="popupBox3" class="popupBox">
						    <div id="popupContent3" class="popupContent">
						      <img src="img/labour.jpg"  >
						    </div>
						   
						    <span class="deleteMeetingClose">&times;</span> <!-- <= added this line -->
						</div>
						
						<!--
							-->

							
							<!--
							--><li>
							
							<button href="#"  id="b5" class="deleteMeeting">
							
							<i class="icon"><img src="image/icon/strategy.svg" /></i>
								<h3>COURSE REGISTERED UNDER MHRD</h3>
								</button >

							</li>
							
							
								<div id="popupBox5" class="popupBox">
						    <div id="popupContent5" class="popupContent">
						      <img src="img/MHRD.jpg"  >
						    </div>
						   
						    <span class="deleteMeetingClose">&times;</span> <!-- <= added this line -->
						</div>
						
						<!--
							--><!--
							--><li>
							<button href="#"  id="b6" class="deleteMeeting">
							
							
								<i class="icon"><img src="image/icon/support.svg" /></i>
								<h3>PART OF CENTERAL AND STATE GOVT PROJECTS</h3>
								
								</button >

							</li>
							
							
								<div id="popupBox6" class="popupBox">
						    <div id="popupContent6" class="popupContent">
						      <img src="img/PART OF CENTERAL.jpg"  >
						    </div>
						   
						    <span class="deleteMeetingClose">&times;</span> <!-- <= added this line -->
						</div>


<!--				
							--><li>
							
							<button href="#"  id="b7" class="deleteMeeting">
							
								<i class="icon"><img src="image/icon/education1.svg" /></i>
								<h3>OTHER GOVT. CERTIFICATE</h3>
								</button >
							</li>
							
							
								<div id="popupBox7" class="popupBox">
						    <div id="popupContent7" class="popupContent">
						      <img src="image/certificate/Membership_Certificate.jpg"  >
						       <img src="image/certificate/NHRS.jpg"  >

						      
						    </div>
						   
						    <span class="deleteMeetingClose">&times;</span> <!-- <= added this line -->
						</div>


                           
						</ul>			
						
			
					</div>
					
				
				</div>
				
				
		

			<div class="container secondary_bg">

				<div  class="row  bgakc1 shadow1">
				<br>
				<h2><font color="#2E6DA4">&nbsp;&nbsp;<b> AICSM Courses </b> </font> </h2>
				
				<hr class="hr1">
			<div class="col-md-12 ">
					<div class="row ">
								<div class="clearfix">&nbsp; </div>	
										
								<div class="col-md-3 bgakc1 shadow4">
								<div class="promor_wrap__block " align="center">
									<a href="CerifiedCourse.htm">	<img src="image/courses1.jpg" alt="" class="img-responsive">
											</a>
										
											
									</div>
									</div>
				
									<div class="col-md-3 ">
									<div class="border promor_wrap__block " align="center">
									<a href="DiplomaCourse.htm">	<img src="image/courses2.jpg" alt="" class="img-responsive">

											</a>
											
												
										</div>
										</div>
										
										
										
										<div class="col-md-3 mt-sm-30 mt-xs-30 bgakc1 shadow4">
								<div class="promor_wrap__block "  align="center">
									<a href="AdvanceDiploma.htm"><img src="image/courses3.jpg" alt="" class="img-responsive">
											</a>
											
											
									</div>
									</div>


										<div class="col-md-3 ">
									<div class="border promor_wrap__block " align="center">
									<a href="nsdc.php">	<img src="image/courses4.jpg" alt="" class="img-responsive">

											</a>
											
												
										</div>
										</div>
										
						<div class="clearfix">&nbsp; </div>	
				
		
							</div>				
									
									
									
									
							
						</div>		
				</div>	
				
			</div>

			<br>&nbsp; <br> 
	

			</div>

		</div>






		
		<section class="busines_promo_wrapper__block pt-30 ptb-xs-40">
			<div class="container">
				<div class="row">
					
					
								
					<div class="col-md-12 mt-sm-30 mt-xs-30 bgakc1 shadow4">
						<div class="promor_wrap__block ">
						<br>
							<h2>About AICSM </h2>
							<font color="#2E6DA4">
							<b>Run by ROSTRIYA JANKALYAN INFORMATION TECHNOLOGY SOCIETY</b>
							</font>
							<p align="justify" style="line-height: 200%">
							<font face="Arial" size="3" color="#000000">
							"ALL INDIA COMPUTER SAKSHARTA MISSION" has been run to provide the high technical computer education at the nominal fee to the person belonging to lower and middle class. All over India institution is governed by the RJITS & AICSM. RJITS trained above 1.5 lakh till 2020 and placed above 42,000 students.
							</font> 
								</p>
								
								<p align="justify" > </p>
												
												
										<div class="post-more-link pull-right">
										<a href="aicsmIntro.htm" class="btn-text">Read More</a>
										</div>
									
									
									<p align="justify" > &nbsp; <br>&nbsp; </p>
		
						
						</div>
					</div>
					
					<div class="clearfix">&nbsp; </div>

					
				<div class="col-md-12 mt-sm-30 mt-xs-30 bgakc4 shadow4">
									
						
						<div class="promor_wrap__block ">
						
							<p align="center" >
							
							<div class="link_btn" align="center">
							<a class="thm-btn bg-clr1" href="how-to-get-center-frenchise.htm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							How to get affiliation / Franchisee
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</a>
						</div>
											
						<p align="justify" > &nbsp; </p>

								<p align="justify" style="margin:6px 10px; line-height: 200%">
									<font face="Arial" size="3" 	color="#fff" >
									All India Computer Saksharta Mission (AICSM) provides single source for quality assurance in Computer Education, Skill Development Education, Vocational Training, Technical Education and all type Educational Development of every category Students of India. AICSM wants to provide maximum benefits to Authorized Training Centre and Students with quality ….... 
								</font> 
								</p>
								
								
									
							<div class="post-more-link">
								<p align="center">
								<a href="how-to-get-center-frenchise.htm" class="btn-text">Read More</a>
							</div>
																	
								<p  align="center" > &nbsp;</p>	



						</p>

							
						</div>
						
					</div>
				
				


			
							
							
				</div>
				
				<div class="clearfix">&nbsp; </div>
			</div>
		</section>


<div class="clearfix">&nbsp; </div>

						
								
								
<section id="client-logos" class="pt-30 pb-60 ptb-xs-40 wow fadeIn ptb ">
				<div class="container">
					<div class="row pb-30 text-center">
						<div class="col-sm-6 col-sm-offset-3">
							<div class="creative_heading">
							 
								<h2>AICSM's <span> LINKAGE </span></h2>
							</div>
							
						</div>
					</div>

					<div class="img11 owl-carousel client-carousel nf-carousel-theme ">
					
				
					
					
						<div class="item" align="center">
							<div class="img11 client-logo border">
								<img   src="image/linkage/CSI.PNG" alt="" />
								
							</div>
						
						</div>
						<div class="item" align="center">
							<div class="img11 client-logo border">
								<img  src="image/linkage/INDIA.PNG" alt="" />

							
							</div>
						</div>
						<div class="item" align="center">
							<div class="img11 client-logo border">
								<img  src="image/linkage/ISO.PNG" alt="" />
							</div>
						

						</div>
						<div class="item" align="center">
							<div class="img11 client-logo border">
								<img  src="image/linkage/NDLM.PNG" alt="" />
							</div>
						
						</div>
						<div class="item" align="center">
							<div class="img11 client-logo border">
								<img src="image/linkage/NIELIT.PNG" alt="" />
							</div>
							
						</div>

						<div class="item" align="center">
							<div class="img11 client-logo border">
								<img  src="image/linkage/PMKVY.PNG" alt="" />
							</div>
							
						</div>
						
						<div class="item" align="center">
							<div class="img11 client-logo border">
								<img  src="image/linkage/RASCI.PNG" alt="" />
							</div>
							
						</div>
						<div class="item" align="center">
							<div class="img11 client-logo border">
								<img src="image/linkage/RSLDC.PNG" alt="" />
							</div>
							
						</div>
						<div class="item" align="center">
							<div class="img11 client-logo border">
										<img  src="image/linkage/SKILL_INDIA.PNG" alt="" />
							</div>
							
						</div>
						
						<div class="item" align="center">
							<div class="img11 client-logo border">
							<img  src="image/linkage/WB.PNG" alt="" />
							</div>
							
						</div>



				
					</div>
					
					
				
				
				
				</div>
				
				
				
				
			</section>
		
			<!-- Client Logos Section -->
			
			<!-- End Client Logos Section -->

			<!-- FOOTER -->
			<footer class="footer pt-80 pt-xs-60">
				<div class="container">
					<!--Footer Info -->
					<div class="row footer-info mb-60">
						<div class="col-md-3 col-sm-4 col-xs-12 mb-sm-30">
							<h4 class="mb-30">CONTACT Us</h4>
							<address>
								<i class="ion-ios-location fa-icons"></i> 
							Head Office : 96 - II Floor Kalawati Paliwal Market, Gumanpura, Kota, Rajasthan.(India) 

							</address>
							<ul class="link-small">
								<li>
									<a ><i class="ion-ios-email fa-icons"></i>rjits@aicsm.com  </a></li>
								<li>
									<a><i class="ion-ios-telephone fa-icons"></i>+91-744 -2392007</a></li>
							</ul>
							
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12 mb-sm-30">
							<h4 class="mb-30">Quick Links</h4>
							<ul class="link blog-link">
								<li>
									<a href="aicsmIntro.htm"><i class="fa fa-angle-double-right"></i> AICSM Introduction</a>
								</li>
								<li>
									<a href="how-to-get-center-frenchise.htm"><i class="fa fa-angle-double-right"></i> How to get Affiliation </a>
								</li>
								<li>
									<a href="SrchByFrmNoOutSide.php"><i class="fa fa-angle-double-right"></i> Student Verification</a>
								</li>
								<li>
									<a href="Insurance.htm"><i class="fa fa-angle-double-right"></i> Insurance </a>
								</li>
								
								<li>
									<a href="Career.htm"><i class="fa fa-angle-double-right"></i> Career </a>
								</li>
								
							</ul>
						</div>
						<div class="col-md-2 col-sm-3 col-xs-12 mb-sm-30">
							<h4 class="mb-30">Courses</h4>
							<ul class="link blog-link">
								<li>
									<a href="CerifiedCourse.htm"><i class="fa fa-angle-double-right"></i> Certified Courses</a>
								</li>        
								<li>
									<a href="DiplomaCourse.htm"><i class="fa fa-angle-double-right"></i> Diploma Courses</a>         
								</li>
								<li>
									<a href="PgdcaCourse.htm"><i class="fa fa-angle-double-right"></i> PGDCA Courses</a>
								</li>
								<li>
									<a href="AdvanceDiploma.htm"><i class="fa fa-angle-double-right"></i> Advance Diploma</a>
								</li>
								
									<li>
									<a href="AllCourse.htm"><i class="fa fa-angle-double-right"></i> All Courses</a>
								</li>
							</ul>
						</div>
						
						
						<div class="col-md-4 col-sm-12 col-xs-12 mt-sm-30 mt-xs-30">
						
						<div class="icons-hover-black">
								<a href="https://web.facebook.com/allindiacomputer/" target="_blank" > <i class="fa fa-facebook"></i> </a>
								<a href="https://twitter.com/AICSM2" target="_blank" > <i class="fa fa-twitter"></i> </a>
								<a href="javascript:avoid(0);"> <i class="fa fa-youtube"></i> </a>
								<a href="https://www.linkedin.com/feed/?trk=onboarding-landing"> <i class="fa fa-linkedin"></i> </a>
						</div>
							
							<div class="newsletter">
															
									Feel free to contact us on any of the mail ids:  rjits@aicsm.com , director@aicsm.com
									

									 					
									 <br> Or call Mobile No : + 91-96675-55300, 96675-35700, 96672-22800, 96672-22700 

								 <br> <br>
								 
									  <a href="TermsCondition.htm">
									<font color="#CCCCCC">Terms & Condition</font></a><font color="#CCCCCC">  |   
									</font>   <a href="Disclaimer.htm"> 
									<font color="#CCCCCC">Disclaimer </font> </a> 
									<br>
									 <a href="PrivacyPolicy.htm">  
									<font color="#CCCCCC">Privacy Policy </font> </a>
								<font color="#CCCCCC">|  </font>  <a href="refundpollicy.htm">  
									<font color="#CCCCCC">Refund Policy </font> </a>

								
								
							</div>
						</div>
					</div>
					<!-- End Footer Info -->
				</div>
				<!-- Copyright Bar -->
				<div class="copyright">
					<div class="container">
						<p>
						
							© 2006-2021 <a>ALL INDIA COMPUTER SAKSHARTA MISSION </a>. All Rights Reserved.
							
							
						</p>
						
						
					</div>
				</div>
				<!-- End Copyright Bar -->
			</footer>
			<!-- END FOOTER -->
		</div>
		<!-- Site Wraper End -->
		
		<!--Start of Tawk.to Script-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5f1937f27258dc118beec5e1/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->

<script>

$(document).ready(function(){
    $('.close').click(function()
	{
	$(".welcome").hide()
    });
    
     $('.welcome').click(function()
	{
	$(".welcome").hide();
    });

	
});


$(document).ready(function(){
    $("button").click(function(){
		$(".newupdates").hide()
    });
	
});





$(document).ready(function(){
    $("button").click(function(){
		$(".frm").show()
    });
});

</script>

		<!-- masonry,isotope Effect Js -->
		
		
		 <script src="assets/js/jquery-1.12.4.min.js" type="text/javascript"></script>		

		<script src="assets/js/imagesloaded.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/isotope.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/masonry.pkgd.min.js" type="text/javascript"></script>
		<script src="assets/js/jquery.appear.js" type="text/javascript"></script>
		<!-- bootstrap Js -->
		<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="assets/js/plugin/owl.carousel.js" type="text/javascript"></script>
		<!-- fancybox Js -->
		<script src="assets/js/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>
		<script src="assets/js/jquery.fancybox.pack.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
		<!-- carousel Js -->
		<script src="assets/js/mediaelement-and-player.min.js" type="text/javascript"></script>

		<!-- Form Js -->
		<script src="assets/js/mail.js" type="text/javascript"></script>
		<!-- revolution Js -->
		
		<script type="text/javascript" src="assets/rs-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/rs-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
	<script type="text/javascript" src="assets/js/revolution-custom.js"></script>
		<!-- Height Js -->
		<script src="assets/js/jquery.matchHeight-min.js" type="text/javascript"></script>

		<!-- custom Js -->
		<script src="assets/js/custom.js" type="text/javascript"></script>
		
	 
   
	</body>
</html>
