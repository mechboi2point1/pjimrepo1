
<?php
    include('include/header.php');
    
?>

<div class="pagecontent z100">
	<section class="col-md-12 p-0" >
		<div class="sliderBanners ">
			<div class="col-md-12 p-0 h100">  
				<div id="carouselExampleSlidesOnly" class="carousel slide h100" data-ride="carousel">
				  	<ol class="carousel-indicators">
				  	    <?php
				  	    include('connection.php'); 
				  	    $sql = "select *from banner_table";  
        $result = mysqli_query($con, $sql);  
        
        $count = mysqli_num_rows($result);
    
        for($i=0;$i<$count;$i++)
        {
            if($i===0){
                echo '<li data-target="#carouselExampleSlidesOnly" data-slide-to="'.$i.'" class="active"></li>';
            }
            else{
                echo '<li data-target="#carouselExampleSlidesOnly" data-slide-to="'.$i.'"></li>';
            }
           
        }
        echo '</ol>';
        echo '<div class="carousel-inner h100 dv_device"> ';
        $i=0;
         while($row = mysqli_fetch_assoc($result)) {
             $path=$row['path'];
             
             if($i==0){
                 
                 
                 echo '<div class="carousel-item active">
							<img src="'.$path.'" alt="banner_model" class="img-fluid w100 h100">
						</div>';
             }
             else{
                 
                 echo '<div class="carousel-item">
							<img src="'.$path.'" alt="slide'.$i.'" class="img-fluid w100 h100">
						</div>'; 
             }
             $i++;
    
}
echo '</div>';
				  	    ?>
						
						

					
				 	 
						
		
					<div class="carousel-inner h100 mb_device">
						<div class="carousel-item  active">
							<img src="images/mb_slide1.jpg" alt="slide1" class="img-fluid w100 h100">
						</div>	
						<div class="carousel-item">
							<img src="images/mb_slide2.jpg" alt="slide2" class="img-fluid w100 h100">
						</div> 
					</div>
				</div> 
			</div>
		</div>
	</section>   
</div>
	<style>
		.to-home img {
			display:none!important;
		}
	</style>
<?php
    include('include/footer.php');
?>
