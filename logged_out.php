<?php 
require'connection/connect.php';
session_start();

$username=$_SESSION['uname'];
session_destroy();

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h1>You have successfully logged out.  </h1>
 	<h6>Redirecting...</h6>
 	<?php 
 		header('Refresh:3 url=index.php');
 	 ?>
 </body>
 </html>