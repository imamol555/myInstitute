<?php  
require'connection/connect.php';
session_start();

$username=$_SESSION['uname'];
$user_prof = $yaa -> user_profile;
$temp_prof= $user_prof->findOne(['_id' => $username] );

/*----class details for professor-------*/
$year=$_SESSION['year'];
$subject=$_SESSION['subject'];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/update_attendence_styel.css">
	<link rel="stylesheet" type="text/css" href="css/proftry.css">
</head>
<body>
	<div id="profile">
		
	<p> profile pic and basic user info</p>
		<div id="profile-basic">
			<h5><?php echo "$temp_prof->ff_name $temp_prof->fl_name"; ?></h5>
			<br><br>
			<h6><?php echo "$temp_prof->dob_date/$temp_prof->dob_month/$temp_prof->dob_year"; ?></h6>
			<br><br>
			<h6><?php echo "$temp_prof->email"; ?></h6>

			
		</div>
		<div id="profile-adv">
			<h5><?php echo "$temp_prof->branch"; ?></h5>
			<br>
			
		</div>
		<div id="profile-pic">

		<a href="upload-pic.php">Upload DP</a>
		</div>
		<div id="uname-block"><b><?php echo $username ?></b></div>
	</div>
	<div id="classinfo">
		<b>Class: <?php echo $year; ?> </b>
		<br>
		<b>Subject: <?php echo $subject; ?> </b>


	</div>
	<div id="form_sathi">
		 
			<form method="post" name="postdate" action="attendence_transaction.php">
				<div id="dt">
					<div id="d">
					DATE
					<input type="text" name="date"  placeholder="dd/mm/yyyy" style="width: 100px;">
					</div>
					<div id="t">
					TIME
					<input type="text" name="time"  placeholder="hh:mm" style="width: 100px; ">
					</div>
				</div>
				<br>
				<div id="check">
				<p>
				Fill attendence here 
				<br>
				<b>
					1.<input type="checkbox" name="attendence[]" value="1"> 
					2.<input type="checkbox" name="attendence[]" value="2">    
					3.<input type="checkbox" name="attendence[]" value="3">   
					4.<input type="checkbox" name="attendence[]" value="4">    
					5.<input type="checkbox" name="attendence[]" value="5">  
					<br>  
					6.<input type="checkbox" name="attendence[]" value="6">  
					7.<input type="checkbox" name="attendence[]" value="7">  
					8.<input type="checkbox" name="attendence[]" value="8">  
					9.<input type="checkbox" name="attendence[]" value="9">  
					10.<input type="checkbox" name="attendence[]" value="10"> 
				</b>
				</p>
				<button type="submit" name="submit-form" >Submit</button>
				<button type="submit" name="update-form" >Update</button>
				</div>
				
			</form>
	
	</div>

</body>
</html>