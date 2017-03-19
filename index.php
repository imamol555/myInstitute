<?php


 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!--xml namespace-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to our_thing !!!</title>
<!-- javascript not needed for this thing
<script type="text/javascript" src="javascript/signup_validate.js"></script>
-->
<link rel="stylesheet" type="text/css" href="css/test.css" />
</head>
<body>
<div id="big_wrapper">
	<div id="top_bar">
	
		
		<div id="logo" class="header-items">
			YAA !!!
		</div>
		<div id="sub-menu" class="header-items">
			<div class="sub-menu-items">
				About us
			</div>
			<div class="sub-menu-items">
				Contact us
			</div>
		</div>
		
	</div>	
	<div id="form-body">
		<div id="login">
			<form name="login-form" action="login.php" method="post">
				<input type="text" name="l_username" value="" placeholder="Enter your Username"  value="" required="">
				<br/>
				<input  type="password" name="l_pwd" placeholder="Password" required="">
				<br>
				<button type="submit" name="login-button" width="" >Login</button>
				
			</form>
		</div>
		<div id="signup">
			<div id="new-here"><p>Sign up</p></div>	
			<div id="fill">
					<form name="signup-form" action="signup.php" method="post" >

			
					<input type="text" name="s_username" value="" placeholder="New Username"  value="" required="">
					<input  type="password" name="s_pwd1" placeholder="Enter new password" required="">
					<input  type="password" name="s_pwd2" placeholder=" Confirm Password" required="">
					<button type="submit" name="signup-button" >Sign Up</button>
					</form>
			</div>
			</div>
		</div>	

</div>
</body>


 