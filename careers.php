

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<script src="jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#btn").click(function(){
		var nm=$("#sname").val();
		var add=$("#address").val();
		var cnt=$("#contact").val();
		var clg=$("#college").val();
		var brch=$("#branch").val();
		var unm=$("#uname").val();
		var paswrd=$("#pass").val();
		var eml=$("#email").val();
		
		var cLength=cnt.length;
		var pLength=paswrd.length;
		
		if(cLength==10&&pLength==8)
		{
		$.ajax({
			url:"stud_registration.php",
			type:"post",
			data:{nm1:nm,add1:add,cnt1:cnt,clg1:clg,brch1:brch,unm1:unm,paswrd1:paswrd,email:eml},
			success:function(data){
				alert(data);
			},
			error:function(data){
				alert(data);
			}
			
		});
		}
		else
		{
			alert("Invalid contact / password should have 8 characters..");
		}
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
  <title>Courses</title>

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
          <img src="vertex.png">
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
                Blog
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
 <!--<section class="banner-area">
      <div class="container">
        <div class="row justify-content-center align-items-center">
			<div class='col-lg-11 col-md-8 home-banner-left'>
					  <h1 class='text-white'>$ar[1]</h1>					  
					  <p class='mx-auto text-white  mt-20 mb-40'>
						$ar[2]
					  </p>
					</div>
					</div>
					</div>
					</section>
  

  <!-- ================ start banner Area ================= -->
  <section class="banner-area">
      <div class="container">
        <div class="row justify-content-center align-items-center">
		
		  <div class="col-lg-7 col-md-2 banner-right">
            <h1 class="text-white">
              Careers
            </h1>
            <p class="mx-auto text-white  mt-20 mb-40">
             Make Your Career With Vertex.....<br>
			
			</p>
            <div class="link-nav">
              <span class="box">
                <a href="index.php">Home </a>
                <i class="lnr lnr-arrow-right"></i>
                <a href="careers.php">Careers</a>
              </span>
            </div>
			
          </div>
        </div>
      </div>
    </section>
  <!-- ================ End banner Area ================= -->
  
  <!-- ================ Start Feature Area ================= -->
	<?php
	include("class_course_ebook.php");
	?>
  <!-- ================ End Feature Area ================= -->

 <!-- ================ Start Registration Area ================= -->
  <section class="registration-area">
    <div class="container">
      <div class="row align-items-end">
        <div class="col-lg-5">
          <div class="section-title text-top-left text-black">
            <h2 >
              Make your career with vertex!!!!!
            </h2>
            <p>
              Explore opportunities to take your career to the next level. 
            </p>
          </div>
        </div>
        <div class="offset-lg-3 col-lg-4 col-md-6">
          <div class="course-form-section">
            <h3>REGISTRATION</h3>
            <p>It is high time for learning</p>
            <form method="post" class="course-form-area contact-page-form course-form text-right"  id="myForm" >
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="sname" name="sname" placeholder="Full Name" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Name'">
              </div>
			  
			   <div class="form-group col-md-12">
                <input type="text" class="form-control" id="address" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Address '">
              </div>
			   <div class="form-group col-md-12">
                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Contact '">
              </div>
			   <div class="form-group col-md-12">
                <input type="text" class="form-control" id="college" name="college" placeholder="College Name" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'College '">
              </div>
			   <div class="form-group col-md-12">
                <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Branch'">
              </div>
			  
              <div class="form-group col-md-12">
                <input type="text" class="form-control" id="uname" name="uname" placeholder="Username" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Username'">
              </div>
			   <div class="form-group col-md-12">
                <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Password'">
              </div>
              <div class="form-group col-md-12">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''"
                 onblur="this.placeholder = 'Email Address'">
              </div>
              <div class="col-lg-12 text-center">
                <input type="button" class="btn text-uppercase" id="btn" value="Register">  
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Registration Area ================= -->
 
 <!-- ================ Start Feature Area ================= -->
    <?php
	echo "<section class='other-feature-area'>
							<div class='container'>
							  <div class='feature-inner row'>
								<div class='col-lg-12'>
								  <div class='section-title text-left'>
									<h2>Our services</h2>
									<p>The Thing We Love To Do,For You!</p>
									<p>Vertex Technosys provides various services. 
									Students and faculty here are provided with the srvices such as 
									web development,custom application and so on.....</p>
								  </div>
								</div>";								
				  
			  
	$s="select * from our_services";
	$res=mysqli_query($con,$s);	
				  while($re=mysqli_fetch_array($res))
				  {
						
						  echo" 
						  <div class='col-lg-10 col-md-10'>
							  <div class='other-feature-item'>
								<h4>$re[1]</h4>
								<div>
								   <p>$re[2]</p>
								</div>
							  </div>
							</div>
					   </div>
						</div>
						</div>
					  </section>";
					  
				  }
				  ?>
	<!-- ================ Start Popular Course Area ================= -->

<!-- ================ Start Blog Post Area ================= -->
 <?php
  
	  echo  "<section class='blog-post-area section-gap'>
    <div class='container-fluid'>
      <div class='feature-inner row'>
        <div class='col-lg-12'>
          <div class='section-title text-left'>
            <h2>
              Our Clients
            </h2>
            <p>
              The clients here are provided with ......
            </p>
          </div>
        </div> ";
		$sql="select * from our_clients";
			$arr=mysqli_query($con,$sql);
		 while($ar=mysqli_fetch_array($arr))
		{
        echo "<div class='col-lg-4 col-md-6'>
          <div class='single-blog-post'>
            <img src='$ar[4]' width='500' height='550' class='img-fluid' alt='' />
            <div class='overlay'></div>
            
            <div class='text'>
               <h4 class='text-white'>$ar[1]</h4>
              <div>
                <p>
                  
                </p>
              </div>
              <a href='#' class='primary-btn'>
                View Details
                <i class='fa fa-long-arrow-right'></i>
              </a>
            </div>
          </div>
        </div>	
		
		</div>
    </div>
	
  </section>";
  }
  include("footer.php");
  
  ?>