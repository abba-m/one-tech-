<?php
include 'includes/db_connect.php';

?><head>
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
 <?php
//include('includes/header.php');
 ?>
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
                        <br><br>
                        <?php include 'includes/_register.php'; ?>
                        <br>
                         <h3>REGISTER</h3>
      <form class="form-horizontal well" method="post" action="" >
        <fieldset>
          <div class="control-group">
            <label class="control-label" for="first_name">First Name</label>
            <div class="controls">
              <input type="text" class="form-control input-xlarge" id="first_name" name="f_name" required>
            </div>
          </div>
           <div class="control-group">
            <label class="control-label" for="last_name">Last Name</label>
            <div class="controls">
              <input type="text" class="form-control input-xlarge" id="last_name" name="l_name" required>
            </div>
          </div>
           <div class="control-group">
            <label class="control-label" for="email">Email</label>
            <div class="controls">
              <input type="email" class="form-control input-xlarge" id="email" name="email" required>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="email">Password</label>
            <div class="controls">
              <input type="password" class="form-control input-xlarge" id="pass" name="pass" required>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="email">Confirm Password</label>
            <div class="controls">
              <input type="password" class="form-control input-xlarge" id="c_pass" name="c_pass" required>
            </div>
          </div>
           
           <div class="control-group">
            <label class="control-label" for="phone">Phone Number</label>
            <div class="controls">
              <input type="text" class="form-control input-xlarge" id="phone" name="phone" required>
            </div>
          </div>
          <div class="control-group">
            <label class="control-label" for="textarea">Address</label>
            <div class="controls">
              <textarea class="form-control input-xlarge" id="address" name="address" rows="3" required></textarea>
            </div>
          </div><br>
        
          <div class="form-actions">
            <button type="submit" class="btn btn-primary" name="register">Register</button>
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