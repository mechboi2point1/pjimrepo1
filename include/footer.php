<?php
include('../connection.php');
?>             
             <div class="footer mt-5">
             	<div class="footr container">
             		<div class="col-md-12">
             			<div class="row">
             				<div class="col-md-1 p-0">
             					<div class="h100">
             						<img src="images/panditji_book.png" alt="panditji_book" class="img-fluid" style="height:166px;">
             					</div>
             				</div>
             				<div class="col-md-3">
             					<h4 class="m-0 "><span class="orngTxt">Rasraj Pandit Jasraj</span> <br><span class="fnt17">Audio Book Excerpts</span> </h4>
             					<?php
									
include('../connection.php');
									$con = mysqli_connect($host, $user, $password, $db_name);
									$sql = "select * from audio_table ORDER BY linkid DESC";
									$result = mysqli_query($con, $sql);
									$i = 0;
									while ($row = mysqli_fetch_assoc($result)) {
										if ($i == 2) {
											break;
										}
										$title = $row['title'];
										$link = $row['link'];
										echo '<div class="audio_list">
             						<p class="mb-0 mt-2 fnt13">' . $title . '</p>
             						<audio controls class="w100">
             							<source src="' . $link . '" type="audio/mp3">
             						</audio>
             					</div>';
										$i++;
									}
									?>


             					<p class="fnt11 logoCor mb-1"><a href="../pjim/research.php">View more excerpts</a></p>
             				</div>
             				<div class="col-md-2">
             					<div>
             						<h3><span class="orngTxt">Suggested</span> Links</h3>
             						<ul class="pl-0 list-unstyled">
             							<?php

											
											//$con = mysqli_connect($host, $user, $password, $db_name);
											$sql = "select * from suggested_link_table";
											$result = mysqli_query($con, $sql);
											while ($row = mysqli_fetch_assoc($result)) {
												$title = $row['title'];
												$link = $row['link'];
												echo '<li><a href="' . $link . '">' . $title . '</a></li>';
											}
											?>


             						</ul>
             					</div>
             				</div>
             				<div class="col-md-3">
             					<div>
             						<h4><span class="orngTxt"> Follow</span> us
             							<div class="social_media mt-1">
             								<!--<a  target="_blank" href="https://www.facebook.com/Pandit-Jasraj-Institute-for-Music-Research-Artistry-and-Appreciation-174254982652890"><span class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>-->
             								<!--<a href="https://www.instagram.com/pandit_jasraj_institute/"  target="_blank"><span class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>-->
             								<!--<a href="https://www.youtube.com/user/DisciplesAtPJIM/featured"  target="_blank"><span class="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></span></a>-->
             								<!--<a href="https://pjim.podbean.com/" target="_blank"><span class="wifi"><i class="fa fa-wifi" aria-hidden="true"></i></span></a>-->


             								<a target="_blank" href="https://www.facebook.com/Pandit-Jasraj-Institute-for-Music-Research-Artistry-and-Appreciation-174254982652890">
             									<span class="facebook"><img src="images/fb.png" alt="facebook" class="img-fluid"></span>
             								</a>
             								<a href="https://www.instagram.com/pandit_jasraj_institute/" target="_blank">
             									<span class="insta"><img src="images/instgrm.png" alt="facebook" class="img-fluid"></span>
             								</a>
             								<a href="https://www.youtube.com/user/DisciplesAtPJIM/featured" target="_blank">
             									<span class="youtube"><img src="images/yt.png" alt="facebook" class="img-fluid"></span>
             								</a>
             								<a href="https://pjim.podbean.com/" target="_blank">
             									<span class="wifi"><img src="images/pd.png" alt="facebook" class="img-fluid"></span>
             								</a>
             								<a href="#" target="_blank">
             									<span class="wiki"><img src="images/wikipedia.png" alt="wikipedia" class="img-fluid"></span>
             								</a>
             								<!--<span></span> -->


             							</div>
             						</h4>
             						<div>
             							<p class="mt-2">Join our mailing list for upcoming events and updates.</p>
             							<p class="d-flex subscribe align-items-center mt-1 mb-2">
             								<input type="email" name="sub_scribe" class="form-control">
             								<span>
             									<a href="#" class="sends">Send</a></span>
             								</span>
             							</p>
             							<?php
											include('../connection.php');
											$con = mysqli_connect($host, $user, $password, $db_name);
											$sql = "select * from email_table";
											$result = mysqli_query($con, $sql);
											$b = '';
											while ($row = mysqli_fetch_assoc($result)) {
												$b = $row['email'];
											}


											echo "<p class='mt-2 pt-1 mb-0'><a href='mailto:{$b}'><span class='logoCor'>Email:</span> {$b}</a></p>";
											?>

             						</div>
             					</div>
             				</div>
             				<!-- <div class="col-md-1"></div>						 -->

             				<div class="col-md-3 h100">
             					<p class="mb-1 h100">
             						<a href="https://www.youtube.com/channel/UCXAoObbS9dr71X-yfXbskJw" class="h100" target="_blank"><img src="images/footer_VIdeo_link.png" alt="footer_VIdeo_link" class="img-fluid h100"></a>
             					</p>
             					<p class="fnt11 text-center logoCor mb-1"><a href="https://www.youtube.com/channel/UCXAoObbS9dr71X-yfXbskJw" target="_blank">Subscribe to our <span class="">Youtube</span> Channel</a></p>
             				</div>



             			</div>
             		</div>
             		<div class="col-md-12 p-3 d-flex" style="border-top:1px solid #ccc;">
             			<span class="">
             				<span class=" "> &copy; 2022 PJIM. All Rights Reserved</span>
             			</span>
             			<span class="text-right ml-auto">
             				Designed by <a href="#" class=""><img src="images/Cassixcom-Favicon.png" alt="Cassixcom-Favicon.png" class="img-fluid" style="width:30px;"></a>
             			</span>
             		</div>
             		<span class="to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
             		<span class="to-home">
             			<a href="./"><img src="images/home_img.png" alt="home_icon" class="img-fluid"></a>
             		</span>
             	</div>
             </div>
             </div>
             <style>
             	.to-top {
             		/*border: 1px solid #f6aa27;*/
             		/*position: fixed;*/
             		/*right: 14px;*/
             		/*bottom: 12px;*/
             		/*padding: 5px 14px;*/
             		/*cursor: pointer;*/
             		/*color: #f6aa27;*/
             		/*z-index: 99999;*/
             		/*background:#fff;*/
             		/*display:none;*/

             		border: 1px solid #f6aa27;
             		position: fixed;
             		padding: 5px 14px;
             		cursor: pointer;
             		color: #f6aa27;
             		z-index: 99999;
             		background: #fff;
             		display: none;
             		top: 42%;
             		right: 50px;
             		transform: translateY(-50%);
             		width: 40px;
             		height: 40px;
             		border-radius: 50%;
             	}

             	.to-home img {
             		position: fixed;
             		top: 50%;
             		right: 50px;
             		transform: translateY(-50%);
             		width: 40px;
             		height: 40px;
             		display: none;
             	}

             	.slick-prev:before {
             		width: 40px;
             		position: relative;
             		height: 40px;
             		max-width: 100%;
             		content: '';
             		background: url('images/video_img/right.png');
             		display: block;
             		background-size: cover;
             		background-repeat: no-repeat;
             	}

             	.slick-next:before {
             		width: 40px;
             		position: relative;
             		height: 40px;
             		max-width: 100%;
             		content: '';
             		background: url('images/video_img/left.png');
             		display: block;
             		background-size: cover;
             		background-repeat: no-repeat;
             		left: -37px;
             	}

             	.slick-slide img {
             		display: block;
             		padding: 7px;
             		width: 100%;
             	}
             </style>



             </div>
             <?php
				include('include/modal-popup.php');
				?>

             <script src="js/jQuery.js"></script>
             <script src="js/popper-min.js"></script>
             <script src="js/bootstrap.js"></script>
             <script src="js/aniaosJs.js"></script>
             <!-- <script src="js/plyrs.js"></script>  -->
             <script src="js/siteJs.js"></script>
             <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
             <!-- fontawesome JavaScript -->
             <script src="js/fontawesome.js"></script>
             <script>
             	AOS.init({
             		easing: 'ease-in-out-sine'
             	});
             </script>
             <script>
             	$('.regular').slick({
             		dots: true,
             		infinite: false,
             		speed: 300,
             		slidesToShow: 3,
             		slidesToScroll: 3,
             		responsive: [{
             				breakpoint: 1024,
             				settings: {
             					slidesToShow: 3,
             					slidesToScroll: 3,
             					infinite: true,
             					dots: true
             				}
             			},

             			{
             				breakpoint: 768,
             				settings: {
             					slidesToShow: 2,
             					slidesToScroll: 2
             				}
             			},
             			{
             				breakpoint: 500,
             				settings: {
             					slidesToShow: 1,
             					slidesToScroll: 1
             				}
             			}
             		]
             	});
             </script>
             <?php
				if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
					$url = "https://";
				else
					$url = "http://";
				$url .= $_SERVER['HTTP_HOST'];

				$url .= $_SERVER['REQUEST_URI'];

				?>
             <?php if ($url === 'http://localhost/pjim') { ?>
             	echo'<script>
             		jQuery(document).ready(function() {
             			jQuery('.to-home img').css('display', 'none');
             		});
             	</script>';
             <?php }  ?>
             <?php if ($url === 'https://cassixcom.info/pjim/gurukul.php') { ?>
             	<script>
             		jQuery(document).ready(function() {
             			jQuery('.gurukul').hide();
             			//$('.guurukul').parent().find().addClass('active');
             			jQuery('.gurukul').closest('li').addClass('active');
             		});
             	</script>
             <?php }  ?>
             <?php if ($url === 'https://cassixcom.info/pjim/institute.php') { ?>
             	<script>
             		jQuery(document).ready(function() {
             			jQuery('.intitute').hide();
             			//$('.guurukul').parent().find().addClass('active');
             			jQuery('.intitute').closest('li').addClass('active');
             		});
             	</script>
             <?php }  ?>
             <?php if ($url === 'https://cassixcom.info/pjim/research.php') { ?>
             	<script>
             		jQuery(document).ready(function() {
             			jQuery('.research').hide();
             			//$('.guurukul').parent().find().addClass('active');
             			jQuery('.research').closest('li').addClass('active');
             		});
             	</script>
             <?php }  ?>
             <?php if ($url === 'https://cassixcom.info/pjim/appreciations.php') { ?>
             	<script>
             		jQuery(document).ready(function() {
             			jQuery('.appreciations').hide();
             			// $('.guurukul').parent().find().addClass('active');
             			jQuery('.appreciations').closest('li').addClass('active');
             		});
             	</script>
             <?php }  ?>
             <?php if ($url === 'https://cassixcom.info/pjim/celebration.php') { ?>
             	<script>
             		jQuery(document).ready(function() {
             			jQuery('.celebration').hide();
             			// $('.guurukul').parent().find().addClass('active');
             			jQuery('.celebration').closest('li').addClass('active');
             		});
             	</script>
             <?php }  ?>
             <?php if ($url === 'https://cassixcom.info/pjim/artistry.php') { ?>
             	<script>
             		jQuery(document).ready(function() {
             			jQuery('.artistry').hide();
             			// $('.guurukul').parent().find().addClass('active');
             			jQuery('.artistry').closest('li').addClass('active');
             		});
             	</script>
             <?php }  ?>

             <?php if ($url === 'https://cassixcom.info/pjim/student_center.php') { ?>
             	<script>
             		jQuery(document).ready(function() {
             			jQuery('.student_center').hide();
             			// $('.guurukul').parent().find().addClass('active');
             			jQuery('.student_center').closest('li').addClass('active');
             		});
             	</script>
             <?php }  ?>
             <?php if ($url === 'https://cassixcom.info/pjim/Treasured_legacy.php') { ?>
             	<script>
             		jQuery(document).ready(function() {
             			jQuery('.treasure_legacy').hide();
             			// $('.guurukul').parent().find().addClass('active');
             			jQuery('.treasure_legacy').closest('li').addClass('active');
             		});
             	</script>
             <?php }  ?>


             </body>

             </html>