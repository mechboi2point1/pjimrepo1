             
               
            <div class="footer mt-5">
				<div class="footr container">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-2"> 
								<div>
									<h3 class="orngTxt">Suggested Links</h3>
									<ul class="pl-0 list-unstyled">
										<li><a href="#">Events</a></li>
										<li><a href="#">Saraansh</a></li>
										<li><a href="#">JasRangi Magazine</a></li>
										<li><a href="#">Saakshya</a></li>
										<li><a href="#">Ittivrita(Memories)</a></li>
									</ul>
								</div>
							</div> 
							<div class="col-md-3"> 
								<div>
									<h4 class="orngTxt"> Follow us
										<span class="social_media mt-3">
											<span class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></span>
											<span class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></span>
											<span class="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></span>
										 	<span class="wifi"><i class="fa fa-wifi" aria-hidden="true"></i></span>
										<!--<span></span> -->
										</span>
										</h4>
									<div>
										<p class="mt-3">Join our mailing list for upcoming events, straight to your inbox!</p>
										<p class="d-flex subscribe align-items-center">
											<input type="email" name="sub_scribe" class="form-control">
											<span>
												<a href="#" class="sends">Send</a></span>
											</span> 
										</p>
										<p class="mb-2"><a href="mailto:info@pjim.org"><span class="logoCor">Email:</span> info@pjim.org</a></p>
									</div>
								</div>								
							</div>
							<div class="col-md-1"></div>						
							
							<div class="col-md-2 h100"> 
								 <p class="mb-1 h100">
									<a href="https://www.youtube.com/" class="h100"><img src="images/footer_VIdeo_link.png" alt="footer_VIdeo_link" class="img-fluid h100"></a>
								 </p>
								  <p class="fnt11 text-center logoCor mb-1"><a href="https://www.youtube.com/">Subscribe to our <span class="">Youtube</span> Channel</a></p>
							</div>
							<div class="col-md-3"> 
								 <p class="orngTxt m-0 font-weight-bold fnt13">Rasraj Pandit Jasraj  [Audio Book] excerpts </p>
								 <div class="audio_list">
								     <p class="mb-0 fnt13">Kritagyata[Gratitude]</p>
								     <audio controls class="w100">
                                      <source src="images/audio_music.mp3"  type="audio/mp3" >  
                                    </audio>
								 </div>
								 <div class="audio_list">
								     <p class="mb-0 fnt13">Kritagyata[Gratitude]</p>
								     <audio controls class="w100">
                                      <source src="images/audio_music.mp3" type="audio/ogg">  
                                    </audio>
								 </div> 
 


							</div>
							<div class="col-md-1 p-0"> 
								<div class=" ">
								    <img src="images/panditji_book.png" alt="panditji_book" class="img-fluid">
								</div>
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
			display:none;
		}
	</style>
	
  

	</div> 

    <script src="js/jQuery.js" ></script>
    <script src="js/popper-min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/aniaosJs.js"></script>
	<!-- <script src="js/plyrs.js"></script>  -->
    <script src="js/siteJs.js"></script>
    <!-- fontawesome JavaScript -->
    <script src="js/fontawesome.js"></script> 
	<script>	 
		AOS.init({
			easing: 'ease-in-out-sine'
		  });
		  

	</script> 
		 <?php
			if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
				$url = "https://";   
			else  
				$url = "http://";    
			$url.= $_SERVER['HTTP_HOST'];   
			  
			$url.= $_SERVER['REQUEST_URI'];    
				
		?>	 
		<?php if ($url === 'http://localhost/pjim') { ?>
			echo'<script>   
				jQuery(document).ready(function(){ 
					jQuery('.to-home img').css('display','none'); 
				}); 
			</script>';
   		 <?php }  ?> 
		<?php if ($url === 'https://cassixcom.info/pjim/gurukul.php') { ?>
			echo'<script>   
				jQuery(document).ready(function(){ 
					jQuery('.gurukul').hide();
					 //$('.guurukul').parent().find().addClass('active');
					jQuery('.gurukul').closest('li').addClass('active'); 
				}); 
			</script>';
   		 <?php }  ?>
		<?php if ($url === 'https://cassixcom.info/pjim/institute.php') { ?>
			echo'<script>  
				jQuery(document).ready(function(){
					jQuery('.intitute').hide();
					 //$('.guurukul').parent().find().addClass('active');
					jQuery('.intitute').closest('li').addClass('active');
				}); 
			</script>';
   		 <?php }  ?>
			<?php if ($url === 'https://cassixcom.info/pjim/research.php') { ?>
			echo'<script>  
				jQuery(document).ready(function(){
					//jQuery('.intitute').hide();
					 //$('.guurukul').parent().find().addClass('active');
					jQuery('.research').closest('li').addClass('active');
				}); 
			</script>';
   		 <?php }  ?>
		<?php if ($url === 'https://cassixcom.info/pjim/artistry.php') { ?>
			echo'<script>  
				jQuery(document).ready(function(){
					//jQuery('.intitute').hide();
					// $('.guurukul').parent().find().addClass('active');
					jQuery('.artistry').closest('li').addClass('active');
				}); 
			</script>';
   		 <?php }  ?>
</body>
</html>