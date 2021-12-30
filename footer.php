 <!-- ================ start footer Area ================= -->
	<?php
	include("config.php");
	$sql="select * from contact_us";
	$arr=mysqli_query($con,$sql);
	while($ar=mysqli_fetch_array($arr))
	{
	echo '<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Vertex Technosys</h4>
						<div class="icon">
							<span class="lnr lnr-home"></span>
						</div>
						<div class="contact-details">
							<p>'.$ar[4].'</p>
						</div>
				</div>
				
			<div class="col-lg-2 col-md-6 single-footer-widget"></div>';
				
			echo	'<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Contact</h4>
						<div class="icon">
							<span class="lnr lnr-phone-handset"></span>
						</div>
						<div class="contact-details">
							<p>'.$ar[3].'</p>
						</div>
				</div>
				
				<div class="col-lg-2 col-md-6 single-footer-widget">
				</div>';
				
			echo	'<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Email</h4>
					<div class="icon">
							<span class="lnr lnr-envelope"></span>
						</div>
						<div class="contact-details">
							<p>'.$ar[2].'</p>
						</div>
				</div>
				<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12"></div>
	
<br><br>
<center>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i>by
</p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
				</center>
			</div>
		</div>
	</footer>';
	}
	?>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	<!-- ================ End footer Area ================= -->

<?php
 echo '<script src="js/vendor/jquery-2.2.4.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="js/vendor/bootstrap.min.js"></script>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/hexagons.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>';
?>