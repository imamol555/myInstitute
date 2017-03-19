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
 	<title></title>
 </head>
 <body>
 		<form name='class_details'>
 			

 		</form>
 </body>
 </html>