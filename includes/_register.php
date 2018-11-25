<?php
function sanitize($dbC,$str){
				$str =@trim($str);
				$str = strip_tags($str);
				
				return mysqli_real_escape_string($dbC,$str);
				}

    if (isset($_POST['register']))
		{//start of if isset
			$f_name = sanitize($dbC, $_POST['f_name']); 
			$l_name = sanitize($dbC,$_POST['l_name']);
			$email = sanitize($dbC,$_POST['email']); 
			$pass = sanitize($dbC,$_POST['pass']); 
			$c_pass = sanitize($dbC,$_POST['c_pass']); 
			$phone = sanitize($dbC,$_POST['phone']); 
			$address = sanitize($dbC,$_POST['address']);
			$glk = base64_encode ('legit');
		
			if (!(empty($f_name))&& 
				!(empty($l_name))&&
				!(empty($email))&&
				!(empty($pass))&& 
				!(empty($c_pass))&& 
				!(empty($phone))&& 
				!(empty($address))
			   ) 
				{//start of if not empty
						$check_email = mysqli_query($dbC, "SELECT email FROM users WHERE email = '$email'");
							if (mysqli_num_rows($check_email) == 1)
							{//start of if email exists 
								echo 'sorry this email has been used by another user';
							}//end of if email esixts 
						
							else {//start of else if email doesn't exist
							
								if ($pass!=$c_pass){//start of if passwords dont match
										echo '<span class="label label-primary">Sorry passwords dont Match!</span>';
								}//end of if passwords match
								else {//else if passwords match
									$user_reg = mysqli_query($dbC, "INSERT into users (f_name, 
																					   l_name,
																					   email, 
																					   pass, 
																					   phone, 
																					   address)
															VALUES ('$f_name',
																	'$l_name',
																	'$email',
																	'$pass',
																	'$phone',
																	'$address'
																	)") or die (mysqli_error());
													if ($user_reg)
													{//start of if user reg successful
														echo '<span class="label label-success">Registration Successful! Please wait...</span>';
														header("location:login.php?reg_s=$glk");
													}//end of if user reg successful
													
													else {//start of else user reg not successful
														echo '<span class="label label-danger">Registration not successful. Please try again later					                                                                  </span>';
													}//end of else user reg not successful
								}//end of else if passwords match
							
													 
							}//end of else if email doesnt exist
				
				}//end of if not empty
				
				else {//start of else if empty
					 echo '<span class="label label-danger">Please fill in all fileds</span>';
				}//end of else if empty
		
		
		}//end of if isset
		
		
?>