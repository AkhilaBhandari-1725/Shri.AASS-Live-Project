<?php
include("config.php");

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
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
            <li><a href="careers.php">Carrers</a></li>
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
             Portfolio
            </h1>
            <p class="mx-auto text-white  mt-20 mb-40">
             Make Your Career With Vertex.....<br>
			
			</p>
            <div class="link-nav">
              <span class="box">
                <a href="index.php">Home </a>
                <i class="lnr lnr-arrow-right"></i>
                <a href="portfolio.php">Portfolio</a>
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

  <!-- ================- Start About Area ================= -->
  <center><h3>Image Gallery</h3></center>
  <?php
  $s="select * from Project_portfolio ";
  $arr=mysqli_query($con,$s);
  
  while($ar=mysqli_fetch_array($arr))
  {
  	  echo "<img src='$ar[1]' width='400' height='400' hspace='30' vspace='50'>";
				  
  }
  echo "<hr color='red' width='1000'></section>";
  include("footer.php");
  ?>
  <!-- ================- End About Area ================= -->
