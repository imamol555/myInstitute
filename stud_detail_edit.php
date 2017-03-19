<?php 
require'connection/connect.php';

session_start();

$username=$_SESSION['uname'];
$user_prof = $yaa -> user_profile;

$res = $user_prof -> findOne(['_id' => $username] );
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Details</title>
 </head>
 <body>
 	<form method="post" action="student_profile.php">
 		
 		<input type="text" name="s_branch" placeholder="Branch" value="" required="">
 		<br>
 		<input type="text" name="s_year" placeholder="Year" value="" required="">
 		<br>
 		<input type="submit" name="sub-btn" value="Submit">
 		<?php 
 			if(isset($_POST['sub-btn'])){
 				$branch = $_POST['s_branch'];
 				$year = $_POST['s_year'];
 			}
 			
 			$user_prof-> save(
 						[
 						'_id'=>$username,
 						'branch'=>$branch,

 						'year' => $year
 						]
 				);
 		 ?>
 	</form>
 </body>
 </html>