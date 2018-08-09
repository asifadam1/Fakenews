<?php 
  include("includes/header.php");
  include("includes/nav.php");
  
?>

       





    <!-- Page Content -->
<div id="main">
    <div class="container">

        <div class="row">

<?php 
  include("includes/sideMenu.php");
  
  
?>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
								
								   <div class="cat">Funny News</div>
                                    <img class="slide-image" src="images/goldfish.png" alt="">
									<div class="carousel-caption">
                            
											<a href="Funny.php"><p>Man makes tiny customised ‘wheelchair’ for goldfish with bladder disorder</p></a>
												
										</div>
                                </div>
								
								 <div class="item">
								 <div class="cat">International</div>
                                    <img class="slide-image" src="images/trump2.jpg" alt="trump">
										<div class="carousel-caption">
                            
											<a href="International.php"><p>Trumps expression towards mexican women</p></a>
												
										</div>
                                </div>
                                <div class="item">
								 <div class="cat">Celebrity News</div>
                                    <img class="slide-image" src="images/mrbean.png" alt="">
									<div class="carousel-caption">
                            
											<a href="Technology.php"><p>Mr Bean Has Made A Welcome Return To The Big Screen</p></a>
												
										</div>
                                </div>
                                
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">

                   <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="news">
							<div class="img-figure">
								<div class="cat">Bizzare</div>
									<img src="images/walkingdead1.jpg" class="img-responsive">
							</div>	

								<div class="title">
									<h1>Bizzare</h1>
								</div>
								<p class="description">
									Man On Meth Kills 19 dead 
								</p>

								<p class="more">
									<a href="Bizzare.php" class="btn btn-default btn-block">read more</a>
								</p>
						</div>
                    </div>
					  <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="news">
							<div class="img-figure">
								<div class="cat">UK</div>
									<img src="images/eating-beard1.jpg" class="img-responsive">
							</div>	

								<div class="title">
									<h1>UK</h1>
								</div>
								<p class="description">
									Man forced to eat beard 
								</p>

								<p class="more">
									<a href="Uk.php" class="btn btn-default btn-block">read more</a>
								</p>
						</div>
                    </div>
					  <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="news">
							<div class="img-figure">
								<div class="cat">sport</div>
									<img src="images/sport.jpg" class="img-responsive">
							</div>	

								<div class="title">
									<h1>Sport</h1>
								</div>
								<p class="description">
									Wenger fan is confused? 
								</p>

								<p class="more">
									<a href="Sport.php" class="btn btn-default btn-block">read more</a>
								</p>
						</div>
                    </div>
				</div>
				
				 <div class="row">
				
				<div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="news">
							<div class="img-figure">
								<div class="cat">Travel</div>
									<img src="images/plane.png" class="img-responsive">
							</div>	

								<div class="title">
									<h1>Travel</h1>
								</div>
								<p class="description">
									planes forced not to land
								</p>

								<p class="more">
									<a href="Travel.php" class="btn btn-default btn-block">read more</a>
								</p>
						</div>
                    </div>
					  <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="news">
							<div class="img-figure">
								<div class="cat">Funny</div>
									<img src="images/goldfish1.png" class="img-responsive">
							</div>	

								<div class="title">
									<h1>Funny</h1>
								</div>
								<p class="description">
									gold fish in wheel chair
								</p>

								<p class="more">
									<a href="Funny.php" class="btn btn-default btn-block">read more</a>
								</p>
						</div>
                    </div>
					  <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="news">
							<div class="img-figure">
								<div class="cat">international</div>
									<img src="images/trump3.jpg" class="img-responsive">
							</div>	

								<div class="title">
									<h1>International</h1>
								</div>
								<p class="description">
									Trump loves mexican women 
								</p>

								<p class="more">
									<a href="International.php" class="btn btn-default btn-block">read more</a>
								</p>
						</div>
                    </div>
				</div>
				
				
				

            </div><!--/.col-md-9!-->

        </div>

    </div>
    <!-- /.container -->
	
</div><!--Main-->	

 
<?php
include("includes/footer.php");
?>  
