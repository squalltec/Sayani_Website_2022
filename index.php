<?php

$con=mysqli_connect("truth01908.domaincommysql.com", "danial", "Shaktimaan@29", "websitequery");
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

?>



<?php 

if(isset($_POST['submit']))
{
	
	
	$name=$_POST['name'];
    $email= $_POST['email'];
	$subject= $_POST['subject'];
	$message=$_POST['message'];
	
    
		
 $sqll = "INSERT INTO websitequery (name, email,subject,message) VALUES ('$name', '$email', '$subject', '$message')";
 $resultt = $con->query($sqll);

 

}

	
?>




<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->


<!-- Mirrored from mtechwebsoft.com/templates/tess/demo/home-parallax.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 11:39:35 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sayani Group of Companies</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="images/favicon.png" rel="icon" />

	<!-- font-awesome -->
    <link rel="stylesheet" href="libraries/font-awesome/css/font-awesome.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
	<!-- animate -->
    <link href="libraries/animate/animate.min.css" rel="stylesheet" />
    <!-- magnific-popup -->
    <link href="libraries/lightbox/magnific-popup.css" rel="stylesheet" />
    <!-- headhesive -->
    <link href="libraries/headhesive/headhesive.css" rel="stylesheet" />
    <!-- sidebar-panel -->
    <link href="libraries/sidebar-panel/sidebar-panel.css" rel="stylesheet" />
    <!-- owl carousel -->
    <link href="libraries/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <!-- aos animation -->
    <link href="libraries/aos/aos.css" rel="stylesheet" />

    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/helper_style.css">
    <link rel="stylesheet" href="css/responsive.css">
	
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Merriweather:300,300i,400,700" rel="stylesheet">

	<!-- Google map. Please place the API key to work properly -->
    <script src="https://maps.google.com/maps/api/js?libraries=places&amp;key=AIzaSyCfYfGJEPizt6YtNwuP7jU-oAY2vhQCXnE"></script>

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<style>

.owl-nav{
    
    background-color:white;
    font-size:50px;
    
  
    
}


.owl-prev{
     float:left;
     margin-left:45%;
}
.owl-next{
    
    float:right;
    background-color:white;
    margin-right:45%;
   
}
.awesome_features{
    background-color:white;
    
}


.icon-bar {
  position: fixed;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #c5b358;
  color: white;
   border-style: solid;
  border-color: black;
  border-width: thin;
}

.twitter {
  background: #c5b358;
  color: white;
   border-style: solid;
  border-color: black;
  border-width: thin;
}

.google {
  background: #c5b358;
  color: white;
  border-style: solid;
  border-color: black;
  border-width: thin;
}

.linkedin {
  background:#c5b358;
  color: white;
   border-style: solid;
  border-color: black;
  border-width: thin;
}

.youtube {
  background: #c5b358;
  color: white;
   border-style: solid;
  border-color: black;
  border-width: thin;
}

.content {
  margin-left: 75px;
  font-size: 30px;
}


</style>
<body class="loading">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
	<div id="page">
		
		<div id="preloader">		  
	    	<img class="image" src="images/preload.png" alt="image">	
	    	<div class="image_text">Loading...</div>   	
		 </div>	

		<!-- header section -->
		<header id="header" class="header_top_area no_sticky header_transparent">
			<div class="container header_top">
				<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-2 col-lg-4">
						<div class="header_logo">
							<div class="logo">
								<a href="#"><img src="images/logo/logo.png" alt="Tess"></a>
							</div>
						</div>
					</div>
					<div class="col-xs-6 col-sm-9 col-md-10 col-lg-8">
						<div class="main_menu_area clearfix">
							<nav id="main_menu" class="main_menu">
								<ul>
									<li ><a style="color:#c5b358;" href="#page">Home</a></li>
									<li><a href="#about_section">About</a></li>
									<li><a href="#companiess">Companies</a></li>
									<li><a href="#brand">Brands</a></li>
									<li><a href="#team_section">Team</a></li>
									
									<li><a href="#contact_section">Contact</a></li>
								</ul>
							</nav>
							<div class="sidebar_nav_icon nav_icon" data-action="toggle" data-side="right">
								<i class="fa fa-bars"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<!-- Top parallax area -->
		<div class="top_parallax_area parallax-window" data-parallax="scroll" data-image-src="images/top_banner_bg/top_banner.jpg">
			<div class="container top_parallax">
				<div class="row">
					<div class="col-sm-12">
						<div class="top_parallax_inner">
							<div class="top_parallax_content">
								<div style='margin-top:-25%;'class="top_parallax_content_top">
								
								
								<style>
								
								.goldd{
								   background-image: linear-gradient(
	to right,
	gold 0,
       	#cb9b51 22%, 
	#f6e27a 45%,
	#f6f2c0 50%,
	#f6e27a 55%,
	#cb9b51 78%,
	gold 100%
	);
   color:transparent;
   -webkit-background-clip:text;
   
     text-shadow: 10px 10px 20px white;
	 }
								
								</style>
								
								
								
									<p><span class="">Sayani</span> Group of Companies<span class="goldd">.</span></p>
<img src='divider.png'/>
								</div>
								<div class="top_parallax_content_bottom">
<style>
.aac:hover{
background-color:gold;
}

</style>
									<a style="border-color:gold;" class="aac btn btn-white" href="#about_section">Explore</a>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="icon-bar"> 
  <a href="https://wa.me/971506509976" class="google"><i class="fa fa-whatsapp"></i></a> 
  <a href="https://www.linkedin.com/company/84013910/admin/" class="linkedin"><i class="fa fa-linkedin"></i></a>
  
  <a href="https://www.instagram.com/sayanigroupholdings/" class="linkedin"><i class="fa fa-instagram"></i></a>
  
  <a href="https://www.facebook.com/search/top?q=sayani%20group%20holdings" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> 
</div>
		<!-- about us section -->
		<section id="about_section" class="about_us_area">
			<div class="container about_us">
				<div class="row">
					<div class="col-sm-12">
						<div class="page_title_area">
						
							<h2>about us</h2>
							
						</div>
					</div>
					<div class="col-sm-12">
						<div class="about_us_content">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">who we are</a></li>
							   
								<li role="presentation"><a href="#vision" aria-controls="vision" role="tab" data-toggle="tab">Our Vision</a></li>
							    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Our Mission</a></li>
								
							    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Our Values</a></li>
							</ul>
							<!-- Tab panes -->
							<div class="tab-content">
							    <div role="tabpanel" class="tab-pane fade in active" id="home">
									
									<div class="about_tab_content_right">
										<h4 align="center">Who we are </h4>
										<p align="center">Since its founding in 1995, Sayani Group Holdings has become an internationally recognized and award winning company with a consistent record of excellence in all phases of Perfume Manufacturing, Packaging, Trading, Clothes Manufacturing, Printing and Paper mills, General Trading, Finance Acquisitions, and repositioning.
Along with a professional management team with a proven track record we have consistently enhanced our expertise and versatility into our core strength. Our primary commitment to everyone whose lives we touch.
For 25 years, Sayani Group Holdings has stood at the forefront of leading development projects not only in the United Arab Emirates but also in countries such as India, Egypt, Uzbekistan, Ghana, Dar Salam and Ethiopia.
In every case, we seek opportunities to introduce new ideas and customize solutions that command the full potential of the project’s value. </p>
										</div>
							    </div>
							    <div role="tabpanel" class="tab-pane fade" id="profile">
							    	
							    	
							    </div>
							    <div role="tabpanel" class="tab-pane fade" id="messages">
									
									
									<div class="about_tab_content_right">
									    </br>
										<h4 align="center">Our Values</h4>
										<p align="center">We advance our mission by living out the values that have delivered success to our business and our customers for decades. As members of Sayani Group, we:
Value long-term relationships with owners, stakeholders, associates, colleagues, and everyone else whose lives we touch. </br>We commit ourselves first and foremost to the quality of living we create for others
</br>Improve the communities we serve by collaborating with them
</br>Attract and retain business by exceeding expectations
</br>Seek out opportunities to innovate in every aspect of our business
</br>Strive for solid financial performance.  </p>
									</div>
							    </div>
							    <div role="tabpanel" class="tab-pane fade" id="settings">

							    	
							    	<div class="about_tab_content_right">
							    	    </br>
							    	    </br>
							    	    </br>
							    	    </br>
							    		<h4 align="center">Our Mission</h4>
							    		<p align="center">Our mission is to add value to the lives of everyone we serve—clients, investors, partners and associates by excelling in the manufacturing, development, distribution, financing and management.</p>
							    	</div>
							    </div>
							
							 <div role="tabpanel" class="tab-pane fade" id="vision">

							    	
							    	<div class="about_tab_content_right">
							    	    </br>
							    	    </br>
							    		<h4 align="center">Our Vision</h4>
							    		<p align="center">Many exciting and innovative plans will continue to be unfolded in the coming months and years. We are a very subtle organization and we like to create examples from our work. Our practicality sets us apart from our competitors providing our scope of services. We are expanding and will continue to do so. We continue to add new partners to our business and we continue to improve our division services continuously.
Over the past 25 plus years that we have been in business we have adopted according to continuous market trends and opportunities.</p>
							    	</div>
							    </div>
							
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>





















<div class='msgg'style="background-color:black;">







<style>
.column1 {
  float: left;
  width: 30%;
  padding: 10px;
  
}
.column2 {
  float: left;
  width: 70%;
  padding: 10px;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</style>

<div style="padding-left:5%; padding-right:5%;" class="row">
  <div class="column1" >
<br/>
<br/>
<br/><br/>
  <h1 align="center"><img src='yasindp.png'  style="width:80% ; margin-bottom:-2%; margin-top:1%; border-radius: 15px;"></h1>
  </div>
  <div class="column2">

 <h2 align="center" style="color:white;"></br>Chairman's Message</h2>
</br>
<p style="color:white; font-size:1.0em; padding-left:5%; padding-right:5%;" align="center">A dream of many ideas coming together, with great passion and an opportunity ceased is how our very first venture Natural Fragrances was born. This venture propelled us into various other segments. 
Our aim at building and setting up Sayani Group Holdings was to create an entity independent in the various sectors that we are active in today. We have built our divisions in order to create the perfect utilization of our available resources and eliminate needs of sub-contracting, which in turn saves us a great deal of time in servicing our customers.
We have been developing our divisions with immense speed and take great interest in the interests of our consumers and understanding their challenges. Sayani Group Holdings has been and always will be a consumer-oriented entity. 
Developing ourselves in order to be the one stop solution to every aspect of the industries we serve has been our priority. During the past few year’s major changes in our infrastructure, division expansion and an increase in employee numbers are evident to these changes and prove a positive motion, which we continue to practice and achieve on a day to day basis. </br></br>Finally, We would like to thank you for visiting our website and hope that we have been able to profile our company, our products and services to tweak your interest.
</br>
</br><h3 style="color:white; margin-right: 8%; "align="right">THANK YOU
</br>

</h3>

<img  align="right" style="margin-right:7%;" src="yasin.png"/>
</br>
</br>
</br>



</span></p>

  </div>
</div>














</div>





















<!-- Awesome features -->









	
		
		<style>
		
		.warpper{
  display:flex;
  flex-direction: column;
  align-items: center;
}
.tab{
  cursor: pointer;
  padding:10px 20px;
  margin:0px 2px;
  background:#000;
  display:inline-block;
  color:#fff;
  border-radius:3px 3px 0px 0px;
  box-shadow: 0 0.5rem 0.8rem #00000080;
}
.panels{
  background:#fffffff6;
  box-shadow: 0 2rem 2rem #00000080;
  min-height:200px;
  width:100%;
  max-width:1000px;
  border-radius:3px;
  overflow:hidden;
  padding:20px;  
}
.panel{
  display:none;
  animation: fadein .8s;
}
@keyframes fadein {
    from {
        opacity:0;
    }
    to {
        opacity:1;
    }
}
.panel-title{
  font-size:1.5em;
  font-weight:bold
}
.radio{
  display:none;
}
#one:checked ~ .panels #one-panel,
#two:checked ~ .panels #two-panel,
#three:checked ~ .panels #three-panel,
#four:checked ~ .panels #four-panel,
#five:checked ~ .panels #five-panel,
#six:checked ~ .panels #six-panel,
#seven:checked ~ .panels #seven-panel,
#nine:checked ~ .panels #nine-panel,
#eight:checked ~ .panels #eight-panel{
  display:block
}
#one:checked ~ .tabs #one-tab,
#two:checked ~ .tabs #two-tab,
#three:checked ~ .tabs #three-tab,
#four:checked ~ .tabs #four-tab,
#five:checked ~ .tabs #five-tab,
#six:checked ~ .tabs #six-tab,
#seven:checked ~ .tabs #seven-tab,
#nine:checked ~ .tabs #nine-tab,
#eight:checked ~ .tabs #eight-tab{
  background:#fffffff6;
  color:#000;
  border-top: 3px solid #000;
}
		
		
		</style>
		
		
		
		









	
		<!-- about us section -->
		<section style=""id="about_section" class="">
			<div class="container about_us">
				<div class="row">
					<div class="col-sm-12">
						<div class="page_title_area">
							
							<h2 id="companiess">Our Companies</h2>
							
						</div>
					</div>
					
					
					
					
					
					
					
					
					
					
					<div>
					
					
					
					</div>
					
			

		
				</div>
			</div>
		</section>


		
		<div style=""class="warpper">
  <input class="radio" id="one" name="group" type="radio" checked>
  <input class="radio" id="two" name="group" type="radio">
  <input class="radio" id="three" name="group" type="radio">
  <input class="radio" id="four" name="group" type="radio">
  <input class="radio" id="five" name="group" type="radio">
  <input class="radio" id="six" name="group" type="radio">
  <input class="radio" id="seven" name="group" type="radio">
  <input class="radio" id="eight" name="group" type="radio">
  <input class="radio" id="nine" name="group" type="radio">
  
  
  <div align="center" class="tabs">
  <style>
  .tab{
  margin-bottom:10px;
  }
  </style>
  <label class="tab" id="one-tab" for="one">Natural Fragrances</label>
  <label class="tab" id="two-tab" for="two">Proton Gulf Trading</label>
  <label class="tab" id="three-tab" for="three">Decor Glass</label>
  <label class="tab" id="four-tab" for="four">Royal Garden Trading</label>
  </br>
  <label class="tab" id="five-tab" for="five">Premier Paper Mill</label>
  <label class="tab" id="six-tab" for="six">Wreckless Collection</label>
  <label class="tab" id="seven-tab" for="seven">Alumatic Cans</label>
   <label class="tab" id="nine-tab" for="nine">Floressence</label>
  <label class="tab" id="eight-tab" for="eight">House of Smart Perfumes</label>
  
  
  
 
    </div>
	</br>
	</br>
	</br>
  <div class="panels">
  <div class="panel" id="one-panel">
  <h1  align="center"><img width="100px"src="NF.png"/></h1>
    <div class="panel-title" align="center">Natural Fragrances</div>
    <p align="center">At Natural Fragrances, we understand our customers need and preferences and serve them accordingly by producing quality perfumes and deodorants of all types, from the mass markets, mid mass segments and notably our best selling products the High-end Niche market perfumes. Our state of the art integrated production facility assists us in providing cutting edge products over our competitors and delivering these as per the demands of the customers.</p>

  <a href="#"><h5 style="color:#c5b358;"align="center">www.naturalfragrances.ae</h5></a>
   
  
  
  </div>
   
  <div class="panel" id="two-panel">
  <h1  align="center"><img width="100px"src="PG.png"/></h1>
    <div class="panel-title" align="center">Proton Gulf</div>
    <p align="center">From humble beginnings in 2016, where we solely started with the sourcing and distribution of freshest fruits and vegetables from all over the world, we gradually moved into selling Basmati Rice and Sunflower oil under our own brand RG.
We thereafter started producing and selling our own Soft Tissues and wet wipes production under our brand Proton Gulf. Most recently we have partnered with companies such as Bakalland from Poland to distribute their value for money and quality nuts and seeds products. We are very keen to market and distribute also our brand of Tea to the high end and mass markets and would be delighted to discuss this possibility no sooner this becomes a viable option.</p>

<a href="https://protongulf.ae/"><h5  style="color:#c5b358;"align="center">www.protongulf.ae</h5></a>
   </div>
   
  <div class="panel" id="three-panel">
  <h1  align="center"><img width="200px"src="DG.png"/></h1>
    <div class="panel-title" align="center">Decor Glass</div>
    <p align="center">At Decor Glass, we pride ourselves on exceptional quality, from the initial concept to the final product, our attention to detail is second to none. In an ever-evolving industry, DECOR GLASS has set the bar for innovation by giving a glass bottle a personalized look with these options. </br>

<ul style="padding:18px;"><li>COATING</li></br>
<li>SILKSCREEN</li></br>
<li>HOT STAMPING</li></br>
<li>EMBOSSING</li></ul></p>
<a href="https://www.decorglass.ae/"><h5  style="color:#c5b358;"align="center">www.decorglass.ae</h5></a>
   </div>
   
  
   <div class="panel" id="four-panel">
   <h1  align="center"> <img width="100px"src="royalgardenn.png""/></h1>
    <div align="center" class="panel-title">Royal Garden</div>
    <p align="center">Royal Garden Middle East is a consumer goods company based in Dubai, the United Arab Emirates.

We specialize in the Food and Beverage products distribution and marketing segment.

Since our inception in 2016, we have always prided ourselves to only distributing high quality products to our customers through our extensive market reach that has been honed during the past few decades that started through our perfume manufacturing and distribution arm Natural Fragrances that was established in 2005 in Sharjah.</p>
  <a href="http://royalgardenme.com/"><h5  style="color:#c5b358;"align="center">www.royalgardenme.com</h5></a>
  </div>
  
  
   <div class="panel" id="five-panel">
   <h1  align="center"><img width="100px"src="ppm.png"/></h1>
    <div class="panel-title" align="center">Premier Paper Mill</div>
    <p align="center">Pending Description.</p>
     <a href="#"><h5  style="color:#c5b358;"align="center">www.premierpapermill.com</h5></a>
  </div>
  
  
   <div class="panel" id="six-panel">
   <h1  align="center"><img width="100px"src="wrecklessjeans.png"/></h1>
    <div class="panel-title" align="center">Wreckless Collection</div>
    <p align="center">Wreckless Collection designs, markets, produces, and distributes a distinguished portfolio of private label jeans-wear brands throughout Africa. We work with retailers in every tier of distribution, seamlessly adapting to the dynamic retail landscape to reach our widespread consumer base. Our focus is on achieving long-term growth by delivering the most innovative product and brand strategies in the market.</p>
      <a href="#"><h5  style="color:#c5b358;"align="center">www.wrecklesscollection.com</h5></a>
  </div>
 
   <div class="panel" id="seven-panel">
   <h1  align="center"><img width="150px"src="alumatic.png"/></h1>
    <div class="panel-title" align="center">Alumatic Cans</div>
    <p align="center">ALUMATIC CANS PVT. LTD.
 is currently one of the biggest producer of aluminium aerosol cans in India. Our vision is to remain the largest producer of aluminum aerosol cans in India. Our product includes Aluminium Rigid Can and Vitamin container. We have invested in the state of the art 200 can per min high speed line.</p>
    <a href="http://www.alumatic.in/"><h5  style="color:#c5b358;"align="center">www.alumatic.in</h5></a>
 </div>
  
  
  
   <div class="panel" id="nine-panel">
   <h1  align="center"><img width="100px"src="florenceslogo.png"/></h1>
    <div class="panel-title" align="center">Floressence</div>
    <p align="center">FLORESSENCE PERFUMES PVT. LTD. has ability and expertise to create exclusive Fine Fragranced Perfumes, deodorants & Roll-ons. We also make Fragrances for ARABIC ATTAR type Products like OOD, MAJMUA and MUKHALLAT.</p>
    <a href="http://floressence.in/"><h5  style="color:#c5b358;"align="center">www.floressence.in</h5></a>
   </div>
    
   
  
   <div class="panel" id="eight-panel">
   <h1  align="center"><img width="100px"src="hs.PNG"/></h1>
    <div class="panel-title" align="center">House of Smart Perfumes</div>
    <p align="center">House of Smart Perfumes, distributes fragrances around the world for any kind of occasion, celebration and lifestyle.  Our mission is to distribute fragrances of our renowned brands that have been attracting loyal customers for decades and keep serving our community. Our main customers are Perfume Wholesalers, Perfume Stores and Duty Free Shops.</p>
    <a href="http://houseofsmartperfumes.ae/"><h5  style="color:#c5b358;"align="center">www.houseofsmartperfumes.ae</h5></a>
   </div>
   

   
    
   

  </div>
</div>
		
		








</br>

</br>





		
		<!-- Team Section -->
		<section style="margin-top:0px; margin-bottom:-250px;" class="team_member_area">
			<div id="team_section" class="container team_member">
				<div class="row">
					<div class="col-sm-12">
						<div class="page_title_area">
							
							<h2>Management</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<ul id="team_container" class="team_container">
					
					
					
					
					<li class="item col-sm-4">
							<figure class="single_item">
								<a class="single_item_thumbnail" href="#"><img class="img-responsive" src="danish.png" alt="Team Member"></a>
								<figcaption>
									<div class="team_inner">
										<h5 align="center" class="team_member_name">Danish Sayani</h5>
										<p align="center">Group General </br>Manager</p>
										
									</div>
								</figcaption>
							</figure>
						</li>
					
					
					
					
					
						<li class="item col-sm-4">
							<figure class="single_item">
								<a class="single_item_thumbnail" href="#"><img class="img-responsive" src="images/team/saq.png" alt="Team Member"></a>
								<figcaption>
									<div class="team_inner">
										<h5 align="center" class="team_member_name">Saquib Rizvi</h5>
										<p align="center">Head of</br> Finance </p>
										
										
									</div>
								</figcaption>
							</figure>
						</li>
						
						
						
						
						
						
						
						
						
						<li class="item col-sm-4">
							<figure class="single_item">
								<a class="single_item_thumbnail" href="#"><img class="img-responsive" src="images/team/aqeel.png" alt="Team Member"></a>
								<figcaption>
									<div class="team_inner">
										<h5 align="center" class="team_member_name">Syed Aqeel</h5>
										<p align="center">Head of Logistics and Shipping</p>
										
									</div>
								</figcaption>
							</figure>
						</li>
						<li class="item col-sm-4">
							<figure class="single_item">
								<a class="single_item_thumbnail" href="#"><img class="img-responsive" src="images/team/rashid.jpg" alt="Team Member"></a>
								<figcaption>
									<div class="team_inner">
										<h5 align="center" class="team_member_name">Rashid Rizvi</h5>
										<p align="center">Head of HR and Administration</p>
										
									</div>
								</figcaption>
							</figure>
						</li>
						
						
					</ul>
				</div>
			</div>
			
			
			
			
			
		</section>
		
		
		
		
		
		
		
		
		
		
		
<!-- Awesome features -->
		<section style="margin-top:-1%;"id="features_section" class="awesome_features_area">

			<div class="awesome_features">

<div style='padding-bottom: 0px;' class="page_title_area">
							<img src='divider.png'/>
</br></br>
							<h2>Our Brands</h2>
							
						</div>

<div id="awesome_features_carousel" class="awesome_features_content clearfix" data-aos="fade-up">
					<div id="brand" style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width:25%; float:center;"src="mcl.png"/>
Tea
						</div>
						
					</div>
					<div style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width:25%; float:center;"src="SC.png"/>
						</div>
						
					</div>
					<div style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width:25%; float:center;"src="EF.png"/>
						</div>
						
					</div>
					<div style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width: 25%; float:center;"src="FR.png"/>
						</div>
						
					</div>
					<div style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width:25%; float:center;"src="expar.png"/>
						</div>
						
					</div>
					
					
					
					
					
					<div style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width:25%; float:center;"src="EX.png"/>
						</div>
						
					</div>
					<div style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width:25%; float:center;"src="ram.png"/>
						</div>
						
					</div>
					<div style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width:25%; float:center;"src="yak.png"/>
						</div>
						
					</div>
					<div style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width:25%; float:center;"src="abeer.png"/>

						</div>
						
					</div>
					
<div style='min-height:100px;' class="single_features_item">
						<div class="single_features_item_top">
							<img style=" margin-left: auto; margin-right: auto;width:25%; float:center;"src="royalgardenn.png"/>
						</div>
						
					</div>
					

					
				</div>
				
				</div>
				</section>




		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		<!-- Contact us section -->
		<section style="padding-bottom: 50px; margin-top:-10%;"id="contact_section" class="contact_us_area">
			<div class="container contact_us">
				<div class="row">
					<div class="col-sm-12">
						<div class="page_title_area page_title_white">
							<h2>Get in touch say hello</h2>
							
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="contact_us_form">
						<form action="#" method="post" data-toggle="validator">
							
								<div style="margin-top:-8%; margin-bottom:-8%;" class="row">
									<div class="col-sm-4 form-group">
										<div class="input-group">
										  	<span class="input-group-addon"><i class="fa fa-user"></i></span>
										  	<input id="input_form_name" name="name" type="text" class="form-control" placeholder="Name" required aria-describedby="input_form_name" data-error="Please enter your name">
										</div>
									
									</div>
									<div class="col-sm-4 form-group">
										<div class="input-group">
										  	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
										  	<input name="email" id="input_form_email" type="email" class="form-control" placeholder="Email Address" required aria-describedby="input_form_email" data-error="Please enter your email">
										</div>
									
									</div>
									<div class="col-sm-4 form-group">
										<div class="input-group">
										  	<span class="input-group-addon"><i class="fa fa-book"></i></span>
										  	<input name="subject" id="input_form_subject" type="text" class="form-control" placeholder="Subject" required aria-describedby="input_form_subject" data-error="Please enter your message subject">
										</div>
									
									</div>
									<div class="col-sm-12 form-group">
										<div class="input-group">
										  	<span class="input-group-addon"><i class="fa fa-edit"></i></span>
										  	<textarea name="message" id="input_form_message" cols="20" rows="10" class="form-control" placeholder="Write Message" required aria-describedby="input_form_message" data-error="Write your message"></textarea>
										</div>
										
									</div>
									<div class="col-sm-12">
										<div class="input-submit t_align_c">
											<input name="submit" type="submit" class="btn btn-white" value="Send Message">
										</div>
									</div>
								</div>
<div id="msgSubmit" class="submit_message h4 text-center hidden"></div> 
								<div class="clearfix"></div> 
								
							</form>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>


		<!-- google map -->
		<section class="google_map_area clearfix">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="2000" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Natural%20Fragrances%20LLC&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:2000px;}</style><a href="https://www.embedgooglemap.net">google maps for web</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:2000px;}</style></div></div>
		
		
			<div id="gmap"></div>
		</section>
		


		<!-- footer section -->
		<footer class="footer_area">
			<div class="footer_top_area">
				<div class="container footer_top">
					<div class="row">
						<div class="col-sm-4">
							<div class="block footer_contact_us m_top_45">
								<h4 class="block_title">contact us</h4>
								<div class="block_content">
									<p>+971 6 5346 834 <br>info@sayanigroupholdings.com <br>www.sayanigroupholdings.com</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="block footer_about t_align_c">
								<div class="block_content">
									<a href="#"><img style="width:60%; height:auto;""class="img-responsive footer_logo" src="images/logo/logo.png" alt=""></a>
								
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="block footer_location t_align_r m_top_45">
								<h4 class="block_title">location</h4>
								<div class="block_content">
									<p>Natural Fragrances LLC,<br>Industrial Area 10</br>
behind Al Jaber building</br>
Sharjah, United Arab Emirates</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
	

			<div class="footer_bottom_area">
				<div class="container footer_bottom">
					<div class="row">
						<div class="col-sm-12">
							<div class="footer_copyright">
								<p>Copyright &copy; 2022 Sayani Group of Companies. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</footer>


	</div> <!-- #page -->


	<!-- scroll to top -->
	<div class="kr_scroll_top">
		<a id="scroll_top" href="#">
			<i class="fa fa-angle-up"></i>
		</a>
	</div>

	<!-- sidebar menu panel -->
	<div id="sidebar_panel" class="sidebar_panel right">
		<div class="sidebar_nav_icon_close" data-action="close" data-side="right">
			<i class="fa fa-times"></i>
		</div>
		<div class="sidebar_panel_wrap">
			<div class="sidebar_panel_inner">
				<div class="sidebar_menu_area clearfix" role="navigation">
					
					<nav class="main_menu">
					    <ul>
					       <li ><a style="color:#c5b358;" href="#page">Home</a></li>
									<li><a href="#about_section">About</a></li>
									<li><a href="#companiess">Companies</a></li>
									<li><a href="#brand">Brands</a></li>
									<li><a href="#team_section">Team</a></li>
									
									<li><a href="#contact_section">Contact</a></li>
					    </ul>
						
						
						
							
					</nav>
					
				</div>

			</div>
		</div>
	</div>






    <!-- Jquery -->
    <script src="../../../../ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.12.4.min.js"><\/script>')
    </script>
	<!-- Easing Animation Effect -->
	<script src="js/vendor/jquery.easing.min.js"></script>
	<!-- bootstrap -->
	<script src="js/vendor/bootstrap.min.js"></script>

	<!-- portfolio shuffle  -->
    <script src="libraries/shuffle/imagesloaded.pkgd.min.js"></script> 
    <script src="libraries/shuffle/jquery.ba-throttle-debounce.min.js"></script> 
    <script src="libraries/shuffle/jquery.shuffle.min.js"></script>
	<!-- waypoints -->
    <script src="libraries/waypoints/jquery.waypoints.min.js"></script>
    <!-- sidebar panel -->
    <script src="libraries/sidebar-panel/jquery.sidebar.min.js"></script>
	<!-- magnic popup -->
    <script src="libraries/lightbox/jquery.magnific-popup.min.js"></script>
    <!-- owl carousel -->
    <script src="libraries/owl-carousel/owl.carousel.min.js"></script>
    <!-- jquery counter -->
    <script src="libraries/jquery.counter/jQuery.counter.min.js"></script>
    <!-- headhesive  -->
    <script src="libraries/headhesive/headhesive.min.js"></script>
    <!-- aos  -->
    <script src="libraries/aos/aos.min.js"></script>
    <!-- typed.js  -->
    <script src="libraries/jquery.typed/typed.min.js"></script>
    <!-- parallax.js v1.4.2 -->
    <script src="libraries/parallax/parallax.min.js"></script>
    <!-- smooth scroll scripts -->
    <script src="libraries/smoothScroll/smoothscroll.min.js"></script>
    <!-- all custom scripts -->
    <script src="libraries/jquery.mb.YTPlayer/jquery.mb.YTPlayer.min.js"></script>
    <!-- ajax contact from -->
    <script src="libraries/ajax-contact-form/js/form-validator.min.js"></script>  
    <script src="libraries/ajax-contact-form/js/contact-form-script.min.js"></script>
    <!-- all custom scripts -->
    <script src="js/custom.min.js"></script>
</body>


<!-- Mirrored from mtechwebsoft.com/templates/tess/demo/home-parallax.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 11:40:02 GMT -->
</html>
