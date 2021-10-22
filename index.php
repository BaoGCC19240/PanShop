<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/css.css" rel="stylesheet">
    <link href="css/css2.css" rel="stylesheet">

    <title>PanShop</title>
    <!--
    

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="css/owl-carousel.css">

    <link rel="stylesheet" href="css/lightbox.css">

</head>

<body>
<?php
        session_start();
        include_once("connection.php");
    ?>

    <!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo">
                            <img src="images/logo.PNG" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->


                        <ul class="nav">
                            <li><a href="index.php" class="active">Home</a></li>
                            <li><a href="?page=aquarium">Aquarium</a></li>
                            <li><a href="?page=collective">Collective</a></li>
                            <li><a href="?page=contact">Contact Us</a></li>
                            <?php
                            if(!isset($_SESSION['admin']) || $_SESSION['admin']==0)
                            {
                            }
                            else{
                            ?>
                            <li class="submenu">
                                <a href="javascript:;">Management</a>
                                <ul>
                                    <li><a href="?page=category_management">Category Management</a></li>
                                    <li><a href="?page=product_management">Product Management</a></li>
                                    <li><a href="?page=feedback_management">View Feedback</a></li>
                                </ul>
                            </li>
                            <?php
                            }
                            ?>
                            <?php
                            if(isset($_SESSION['us'])&&$_SESSION['us']!="")
                            {
                            ?>
                            <li><a href="?page=update_customer"><i class="fa fa-clock">Hi, <?php echo $_SESSION['us'];?></i></a></li>
                            <li><a href="?page=logout"><i class="fa fa-door">Logout</i></a></li>
                            <?php
                            }
                            else
                            {
                            ?>
                            <li><a href="?page=login"><i class="fa fa-user">Login</i></a></li>
                            <li><a href="?page=register"><i class="fa fa-star">Register</i></a></li>
                            <?php
                            }
                            ?>
                            <li><a href="?page=cart"><i class="fa fa-cart-plus">Cart</i></a></li>

                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <?php
    include_once('connection.php');
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        if($page=="login"){
            include_once('Login.php');
        }
        if($page=="register"){
            include_once('Register.php');
        }
        if($page=="logout"){
            include_once('Logout.php');
        }
        if($page=="product_management"){
            include_once('Product_Management.php');
        }
        if($page=="add_product"){
            include_once('Add_Product.php');
        }
        if($page=="update_product"){
            include_once('Update_Product.php');
        }
        if($page=="category_management"){
            include_once('Category_Management.php');
        }
        if($page=="add_category"){
            include_once('Add_Category.php');
        }
        if($page=="update_category"){
            include_once('Update_Category.php');
        }
        if($page=="update_customer"){
            include_once('Update_customer.php');
        }
        if($page=="contact"){
            include_once('contactus.php');
        }
        if($page=="aquarium"){
            include_once('Aquarium.php');
        }
        if($page=="collective"){
            include_once('Collective.php');
        }
        if($page=="feedback_management"){
            include_once('feedback_management.php');
        }
    }
    else
    {
        include_once('Content.php');
    }
    ?>



    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                        </ul>

                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright PanShop Co.

                            <br>Design: PhanChiBao</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/owl-carousel.js"></script>
    <script src="js/accordions.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/lightbox.js"></script>
    <script src="js/isotope.js"></script>

    <!-- Global Init -->
    <script src="js/custom.js"></script>
    
</body>

</html>