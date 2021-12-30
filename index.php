<?php
include("config.php");
include("header.php");
?>
 <!-- ================ Start Popular Course Area ================= -->
 <?php
echo '<section class="popular-course-area section-gap">
		<div class="container-fluid">
			 <div class="row justify-content-center section-title">
				<div class="col-lg-12">
				  <h2>
					Popular Courses <br />
					Available Right Now
				  </h2>
				  </div><br><br><hr color="red" width="1000">
				  </div>';
				  
				 /* echo '<marque direction="left">Programming Languages</marque><br>';*/
				  
				  $sql="select * from our_course";
				  $arr=mysqli_query($con,$sql);
				  while($ar=mysqli_fetch_array($arr))
				  {
					  echo '<img src="'.$ar[3].'" width="200" height="100" hspace="30" vspace="50">';
				  }
				  echo '<hr color="red" width="1000"></section>';
		?>
	 <!-- ================ End Popular Course Area ================= -->
	  <!-- ================ Start Feature Area ================= -->
	
					  <section class='other-feature-area'>
							<div class='container'>
							  <div class='feature-inner row'>
								<div class='col-lg-12'>
								  <div class='section-title text-left'>
									<h2>Our services</h2>
									<p><b>The Thing We Love To Do,For You!</b></p><br>
									<p>Vertex Technosys provides various services. 
									Students and faculty here are provided with the srvices such as 
									web development,custom application and so on.....</p>
								  </div>
								</div>								
				  
		<?php		  
	$s="select * from our_services";
	$res=mysqli_query($con,$s );

	$i=0;				
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
  
	  echo  '<section class="blog-post-area section-gap">
    <div class="container-fluid">
      <div class="feature-inner row">
        <div class="col-lg-12">
          <div class="section-title text-left">
            <h2>
              Our Clients
            </h2>
            <p>
              The clients here are provided with ......
            </p>
          </div>
        </div>';
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
              <a href='clients.php' class='primary-btn'>
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