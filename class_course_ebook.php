<!-- ================ Start Feature Area ================= -->
	<?php	
	include("config.php");
	$sql="select * from banner where id=1";
	$res=mysqli_query($con,$sql);
	while($ar=mysqli_fetch_array($res))
		{
		echo '<br><br><br><section class="feature-area">
				<div class="container-fluid">
				  <div class="feature-inner row">
					<div class="col-lg-2 col-md-6">
					  <div class="feature-item d-flex">
						<i class="ti-book"></i>
						<div class="ml-20">
						  <h4>Classes</h4>
						  <p>'.
							$ar[2].'</p>
						</div>
					  </div>
					</div>
			
			<div class="col-lg-2 col-md-6">
					  <div class="feature-item d-flex">
						<i class="ti-cup"></i>
						<div class="ml-20">
						  <h4>Courses</h4>
						  <p>'.
							 $ar[2].'
						  </p>
						</div>
					  </div>
					</div>
					<div class="col-lg-2 col-md-6">
					  <div class="feature-item d-flex border-right-0">
						<i class="ti-desktop"></i>
						<div class="ml-20">
						  <h4>E-Books</h4>
						  <p>
							'.$ar[2].'
						  </p>
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  </section>';
		}
			  ?>
  <!-- ================ End Feature Area ================= -->