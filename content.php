<?php
	include("config.php");		
			$s="select * from our_course";
			$rrr=mysqli_query($con,$s);
			echo "<ul>";
			echo "<br>";
			while($rr=mysqli_fetch_array($rrr))
			{	
				echo "<div class='content'>
                            <ul class='course-list'>
                                <li class='justify-content-between d-flex'>
                                    <p><b>$rr[1]</b></p>
									 <input type='button' name='btn' value='View Details'>
                                </li>";
								echo "<div id='desc'>
								</div>";
								if(isset($_POST['btn']))
								{
						$s='select * from our_course where Cid="$rr[0]"';
						$r=mysqli_query($con,$s);
							while($res=mysqli_fetch_array($r))
								{
										echo "$res[2]";
								
								}
								}
                           echo" </ul>
                        </div>
			<br>";
			}
?>