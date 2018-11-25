<?php
session_start();
include 'includes/db_connect.php';

?>
<head>
<title>OneTech</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
 </head>
 
 <header>
 
 </header>
 
 <!-- Banner -->

	<div class="banner">
		<div class="banner_background" style="background-image:url(images/banner_background.jpg)"></div>
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="banner_product_image"><img src="images/banner_product.png" alt=""></div>
				<div class="col-lg-5 offset-lg-4 fill_height">
					<div class="banner_content">
                    
						<h1 class="banner_text">Shop new era</h1>
						<div class="banner_price"><span>NGN53,000</span>NGN46,000</div>
						<div class="banner_product_name">Enjoy discount Sales and alot <br /> of freebies </div>
						<div class="button banner_button"><a href="reg.php">Register Now</a></div>
                        <br><br>
                        <?php  
						if (isset($_GET['reg_s'])){
							echo '<div class="alert alert-primary alert-dismissable">
              					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             					  Your Registeration is Successful! Now you can Sign in below. 
								  </div>';
								
						}
						else {
							echo '';
						}
						
						?>
                        
                        <?php include 'includes/_login.php'; ?>
                        
                         <h3>SIGN IN </h3>
      <form class="form-horizontal well" method="post" action="" >
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="first_name">Email</label>
            <div class="controls">
              <input type="text" class="form-control input-xlarge" id="first_name" name="email" required>
            </div>
          </div>
           <div class="control-group">
            <label class="control-label" for="last_name">password</label>
            <div class="controls">
              <input type="password" class="form-control input-xlarge" id="last_name" name="pass" required>
            </div>
          </div><br>
           
          <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="login">Sign in</button>
            <button type="reset" class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
                        
					</div>
				</div>
			</div>
		</div>
	</div>

 <div style="margin-left:100px" class="col-lg-5" align="left" >
  
      
    </div>
  </div>
  
  <?php
//include('includes/footer.php');
 ?>