<?php  
require'connection/connect.php';
session_start();

$username=$_SESSION['uname'];
$user_prof = $yaa -> user_profile;
$temp_prof= $user_prof->findOne(['_id' => $username] );

?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" type="text/css" href="css/proftry.css">
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
	<div id="home-info">
			<?php 
				$branch=$temp_prof->branch;
				$number=$temp_prof->number_of_classes;
				$year= array();
				$subject=array();
				for($i=0;$i<$number;$i++){
					if($i==0){
						$year[$i]= $temp_prof->year_sub0->year0;
					$subject[$i] =$temp_prof->year_sub0->sub0;  
					}

					if($i==1){
						$year[$i]= $temp_prof->year_sub1->year1;
					$subject[$i] =$temp_prof->year_sub1->sub1;  

					}
					if($i==2){
						$year[$i]= $temp_prof->year_sub2->year2;
					$subject[$i] =$temp_prof->year_sub2->sub2;  

					}
					if($i==3){
						$year[$i]= $temp_prof->year_sub3->year3;
					$subject[$i] =$temp_prof->year_sub3->sub3;  

					}
					


				}  //for loop ends here
			for($i=0;$i<$number;$i++){
				if($year[$i]=='FE'){

						echo "<div id='class_fe' class='hi'  ><br>";
						echo "<a href='prof_class_fe.php'>";
						echo "<b>FE-$branch</b></a>";
						echo "</div>";
				
					}
					if($year[$i]=='SE'){

						echo "<div id='class_se' class='hi'  ><br>";
						echo "<a href='prof_class_se.php'>";
						echo "<b>SE-$branch</b></a>";
						
						echo "</div>";
				
					}
					if($year[$i]=='TE'){
						
						echo "<div id='class_te' class='hi'  ><br>";
						echo "<a href='prof_class_te.php'>";
						echo "<b>TE-$branch</b></a>";
						echo "</div>";
						
					}
					if($year[$i]=='BE'){

						echo "<div id='class_be' class='hi'  ><br>";
						echo "<a href='prof_class_be.php'>";
						echo "<b>BE-$branch</b></a>";
						
						
						echo "</div>";
				
					}
				
				}//second for loop ends here

				
			 ?>
			 
		</div>
	</div>
</body>
</html>

