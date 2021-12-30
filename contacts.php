<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#b1").click(function(){
		var nm=$("#a1").val();
		var eml=$("#a2").val();
		var sub=$("#a3").val();
		var msg=$("#a4").val();
		$.ajax({
			url:"feed.php",
			type:"post",
			data:{nm1:nm,email:eml,sub1:sub,msg1:msg},
			success:function(data){
				alert(data);
			},
			error:function(data){
				alert(data);
			}
			
		});
	});
	
});
</script>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/fav.png" />
	<!-- Author Meta -->
	<meta name="author" content="colorlib" />
	<!-- Meta Description -->
	<meta name="description" content="" />
	<!-- Meta Keyword -->
	<meta name="keywords" content="" />
	<!-- meta character set -->
	<meta charset="UTF-8" />
	<!-- Site Title -->
	<title>Contacts</title>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
	<!--
      CSS
      =============================================
    -->
	<link rel="stylesheet" href="css/linearicons.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/owl.carousel.css" />
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/hexagons.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
	<link rel="stylesheet" href="css/main.css" />
</head>

<body>
	<!-- ================ Start Header Area ================= -->
	<header class="default-header">
		<nav class="navbar navbar-expand-lg  navbar-light">
			<div class="container">
				<a class="navbar-brand" href="index.php">
					<img src="vertex.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="lnr lnr-menu"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="careers.php">Careers</a></li>
						<!-- Dropdown -->
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown">
								Contents
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="portfolio.php">Project Portfolio</a>
								<a class="dropdown-item" href="course_details.php">Course Details</a>
							</div>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" data-toggle="dropdown">
								Curriculum
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="clients.php">Clients</a>
								<a class="dropdown-item" href="technologies.php">Technologies</a>
							</div>
						</li>
						<li><a href="contacts.php">Contacts</a></li>

						<li>
							<button class="search">
								<span class="lnr lnr-magnifier" id="search"></span>
							</button>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="search-input" id="search-input-box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search-input" placeholder="Search Here" />
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- ================ End Header Area ================= -->

	<!-- ================ start banner Area ================= -->
	<section class="banner-area">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-12 banner-right">
					<h1 class="text-white">
						Contacts
					</h1>
					<p class="mx-auto text-white  mt-20 mb-40">
						There is probably no greater leap forward than building up your career.
					</p>
					<div class="link-nav">
						<span class="box">
							<a href="index.php">Home </a>
							<i class="lnr lnr-arrow-right"></i>
							<a href="contacts.php">Contacts</a>
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ End banner Area ================= -->

	<!-- ================ Start contact-page Area  ================= -->
	<section class="contact-page-area section-gap">
		<div class="container">
			<div class="row">
				<!--<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>-->
				<div class="col-lg-4 d-flex flex-column address-wrap">
				<?php
				$sql="select * from contact_us";
				$arr=mysqli_query($con,$sql);
				while($ar=mysqli_fetch_array($arr))
				{
					echo"<div class='single-contact-address d-flex flex-row'>
						<div class='icon'>
							<span class='lnr lnr-home'></span>
						</div>
						<div class='contact-details'>
							<h5>$ar[1]</h5>
							<p>
								$ar[4];
							</p>
						</div>
					</div>
					
					<div class='single-contact-address d-flex flex-row'>
						<div class='icon'>
							<span class='lnr lnr-phone-handset'></span>
						</div>
						<div class='contact-details'>
							<h5>Mobile no </h5>
							<p>$ar[3]</p>
						</div>
					</div>
					<div class='single-contact-address d-flex flex-row'>
						<div class='icon'>
							<span class='lnr lnr-envelope'></span>
						</div>
						<div class='contact-details'>
							<h5>Email id</h5>
							<p>$ar[2]</p>
						</div>
					</div>
				</div>";
				}
				?>
				<div class="col-lg-8">
					<form method="post" class="form-area contact-form text-right" id="myForm" action="mail.php" >
						<div class="row">
							<div class="col-lg-6 form-group">
								<input type="text" name="name1" id="a1" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'"
								 class="common-input mb-20 form-control" required="">

								<input type="text" name="email" id="a2" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
								 onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control"
								 required="" >

								<input type="text" name="subject"  id="a3" placeholder="Enter subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter subject'"
								 class="common-input mb-20 form-control" required="">
							</div>
							<div class="col-lg-6 form-group">
								<textarea class="common-textarea form-control" name="message" id="a4" placeholder="Enter Messege" onfocus="this.placeholder = ''"
								 onblur="this.placeholder = 'Enter Messege'" required=""></textarea>
							</div>
							<div class="col-lg-12">
								<div class="alert-msg"></div>
								<!--button>
							<input type="button" name="submit" id="btn" value="submit">
							</button>-->
								<input type="button" class="btn text-uppercase" id="b1" value="Send Message">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- ================ End contact-page Area ================= -->
<?php
include("footer.php");
?>
	<!-- ================ start footer Area ================= -->