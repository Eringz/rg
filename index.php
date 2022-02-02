<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RG Headgear</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="icon" type="image/x-icon" href="images/brand logo/rglogo.ico">  
  <style type="text/css">
		<?php
			include 'css/style.css';
		?>
	</style>
  
</head>



<body>
<?php
    include_once 'header.php'
?>
<div class="jumbotron p-0 jbsize">
		<div class="embed-responsive embed-responsive-16by9 jbsize">
			<video loop muted autoplay preload="auto" class="jbsize">
				<source src="img/ads.mp4" type="video/mp4" >
			</video>
		</div>
	</div>

	<div class="container py-3">	  
			<div class="row">
				<div class="col bg-dark">

				<img class ="mt-3 ml-4 " src="images/HIGHLIGHT.jpg"  alt="..." style="width: 30rem; border-radius: 3px;" >
					
				</div>

				<div class="col mx-auto bg-dark" style="text-align: center;" >

					<div class="card p-3 mt-3 bg-dark" style="text-align: center; border-top:none;border-bottom:none;border-left:none;border-Right:none;">
						
						<h1 style="color: white;">MX-BLCK100 </h1>
						<h4 style="text-align:center;color: white; font-size: 12px;"> 
							<p>XXS: 51-52 cm</p>
							<p>XS: 53-53 cm</p>
							<p>S: 55 - 56 cm</p>
							<p>M: 57 - 58 cm</p>
							<p>L: 59 - 60 cm</p>
						</h4>

						<button class="btn-prmary "> Order now </button>


					</div>

					

				</div>

			</div>
</div>
<div class="container">
	<div class="row p-0">
		<div class="col-md  ">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/carousel/item4.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block mb-1">
               <p class="paragraph1">lorem ipsum</p>
              <div class="slider-btn mb-3">
                        <button class="btn carousel-btn">GET IT NOW!</button>
              </div>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/carousel/item5.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p class="paragraph2">lorem ipsum</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="images/carousel/item6.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <p class="">lorem ipsum</p>
            </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </button>
       </div>
		</div>

</div>
</div>
<?php
        include_once 'footer.php'
?>



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script> 

</body>
</html>
