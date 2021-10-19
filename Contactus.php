<!-- ***** Reservation Us Area Starts ***** -->
<div id="top">

<section class="section" id="reservation">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-center">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>You can know more information about PanShop</h2>
                        </div>
                        <p>PanShop is a store that has been present in Vietnam for a long time. Here we provide rare and precious fish from many regions of the country with the quality you want, 
                            and also have equipment to support the rearing of the scene at an affordable price. 
                            We as PanShop will bring the best experience to customers. Thereby increasing the value of aquarium fish farming. For a nice aquarium community.</p>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="phone">
                                    <i class="fa fa-phone"></i>
                                    <h4>Phone Numbers</h4>
                                    <span><a href="#">+84 0332207377</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="message">
                                    <i class="fa fa-envelope"></i>
                                    <h4>Emails</h4>
                                    <span><a href="#">PanShop@company.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form id="contact" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h4>Feedback Form</h4>
                                    <?php
include_once('connection.php');
if(isset($_SESSION["us"])){

}
else{
  $_SESSION["us"]="";
}
?>
<?php

 if(isset($_POST["btnSend"])){
   $us=$_POST["txtUsername"];
   $email=$_POST["txtEmail"];
   $content=$_POST["txtcontent"];
   $err="";
   if($email==""){
    $err.= "<li>Enter your email, please</li>";
   }
   if($content==""){
    $err.= "<li>Enter what you want to send to me, please</li>";
   }
   if($err!=""){
     echo $err;
   }
   else
   {
    include_once('connection.php');
    mysqli_query($conn,"INSERT INTO feedback(Username, email, content) VALUES ('$us','$email','$content')")
    or die(mysqli_error($conn));
    echo"You have sended successfully";
   }
 }
?>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="txtUsername" type="text" id="name" placeholder="<?php echo $_SESSION['us'];?>" readonly>
                                    </fieldset>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <fieldset>
                                        <input name="txtEmail" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email Address" >
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="txtcontent" rows="6" id="message" placeholder="Message" ></textarea>
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit" name="btnSend" id="form-submit" class="main-button-icon">Send</button>
                                        <input type="reset" name="btnClear"  class="main-button-icon" id="form-submit" value="Clear" >
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- ***** Reservation Area Ends ***** -->