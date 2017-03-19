<?php  
require'connection/connect.php';
session_start();

$username=$_SESSION['uname'];
$user_prof = $yaa -> user_profile;
$temp= $user_prof->findOne(['_id' => $username] );


?>

<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/stud_profile.css">
	<link rel="stylesheet" type="text/css" href="css/header-style.css">
</head>
<body>
<div id="big-wrapper">
	<div id="header">
	<form id="logout" action="logged_out.php">
		<input type="submit" name="log_out" value="Log Out"> 
	</form>

	</div>
	<div id="profile">
		
	<p> profile pic and basic user info</p>
		<div id="profile-basic">
			<h5><?php echo "$temp->ff_name $temp->fl_name"; ?></h5>
			<br>
			<h6><?php echo "$temp->dob_date/$temp->dob_month/$temp->dob_year"; ?></h6>
			<br>
			<h6><?php echo "$temp->email"; ?></h6>

			
		</div>
		<div id="profile-adv">
			<h5><?php echo "$temp->branch"; ?></h5>
			<br>
			<h6><?php echo "$temp->year"; ?></h6>
			<br>
			<h6><?php echo "$temp->roll_no";?></h6>
		</div>
		<div id="profile-pic">

		<a href="upload-pic.php">Upload DP</a>
		</div>
		<div id="uname-block"><b> <?php echo $username?></b></div>
	</div>
	<div id="home-info">
			<p>all divisions of yaa</p>
		<div id="academic" class="hi" >
			<p>academic things</p>
			<div id="attendence" class="hi">
				<p>attendence</p>
			</div>
			<div id="result" class="hi">
				<p>result</p>
			</div>
		</div>
		<div id="outofbox">
			<p>out od box things</p>
			<div id="technical" class="ob">
				<p>technical things</p>
			</div>
			<div id="cultural" class="ob">
				<p>cultural things</p>
			</div>
			<div id="sports" class="ob">
				
			<p>sports</p>
			</div>

		</div>
		<div id="documents">
			<p>document</p>
		</div>

	</div>
</div>
</body>
</html>

