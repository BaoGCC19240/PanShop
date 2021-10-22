<!-- ***** Main Banner Area Start ***** -->
<div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>PanShop</h4>
                            <h6>The best experience</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">More information</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="image/aquafish.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="image/dragonfish.PNG" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                            <!-- Item -->
                            <div class="item">
                                <div class="img-fill">
                                    <img src="image/koifish.jpg" alt="">
                                </div>
                            </div>
                            <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->





    <!-- ***** Fish Area Starts ***** -->
    <section class="section" id="chefs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Aquarium</h6>
                        <h2>We offer the best fish for you</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                        <?php
                            include_once('connection.php');
		  				   	$result = pg_query($conn, "SELECT * FROM product where Cat_ID='A001'" );
			
			                if (!$result) { //add this check.
                                die('Invalid query: ' . mysqli_error($conn));
                            }
		
                            
                            while($row = pg_fetch_array($result, PGSQL_ASSOC)){
				        ?>
                <div class="col-lg-4">
                    <div class="chef-item">
                        <div class="thumb">
                            <div class="overlay"></div>
                            <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-cart-plus"> Add to cart</i></a></li>
                            </ul>
                            <img src="image/<?php echo $row['Pro_image']?>" width="360px" height="341px" alt="">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $row['Product_Name'];?></h4>
                            <span class="text"><?php echo $row['SmallDesc'];?></br></span>
                            <span class="price"><?php echo $row['Price']?>$</span>
                        </div>
                    </div>
                </div>
                <?php
                        }
                ?>
                
            </div>
        </div>
    </section>
    <!-- ***** Fish Area Ends ***** -->