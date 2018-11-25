<?php
function sanitize($dbC,$str){
				$str =@trim($str);
				$str = strip_tags($str);
				
				return mysqli_real_escape_string($dbC,$str);
				}


	   if (isset($_POST['login'])) 
	   {//start of if isset
			$email = sanitize($dbC,$_POST['email']); 
			$pass = sanitize($dbC,$_POST['pass']); 
				if (!(empty($email))&& !(empty($pass)))
				{//start of if not empty
					$log_in = mysqli_query($dbC, "SELECT * FROM users WHERE email ='$email' && pass='$pass'");
					
						if (mysqli_num_rows($log_in) == 1)
						{//start of if login details match
							
							 echo '<span class="label label-success">Login Successful. Please wait...! </span>';
							$row = mysqli_fetch_assoc($log_in);
							//$first_name = $row['first_name'];
							//echo $first_name;
							$_SESSION['loggedin']= TRUE;
							$_SESSION['user_id'] = $row['user_id'];
							$_SESSION['f_name'] = $row['f_name'];
							$_SESSION['l_name'] = $row['l_name'];
							$_SESSION['email'] = $row['email'];
							$_SESSION['phone'] = $row['phone'];
							$_SESSION['address'] = $row['address'];
							header("location:index.php");
							ob_flush();

						}//end of if login details match
						else
						{//start of else login details doesn't match
							echo '<span class="label label-danger">Invalid Email/Password Combination! </span>';
						}//end of else login details doesn't match
				}//end of if not empty
				
				else 
				{//start of else if empty
					echo 'Please fill in all fields.';
				}//end of else if empty
	   }//end of if isset
		   
		   
	   
	   ?>