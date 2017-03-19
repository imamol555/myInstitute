<?php

require'connection/connect.php';

//form items into variables-------
$username = $_POST['l_username'];
$password= $_POST['l_pwd'];

//----collection selection----------
$users = $yaa -> users;
$user_prof = $yaa -> user_profile;

//-----------username doc into temp var
$temp= $user_prof->findOne(['_id' => $username] );
$usertype= $temp->usertype;




$query = $users -> findOne(['_id' => $username] );
if(empty($query)){

	echo "invalid username";
	header('refresh:3;url=index.php');
	}
else{

	if($query->password == $password){
		
		if($usertype=='student'){
			session_start();
					$_SESSION['uname']=$username;
			header('Location:student_profile.php');
		}
		else {
			session_start();
					$_SESSION['uname']=$username;
			header('Location:professor_profile.php');
		}
		
		}
	else{
		echo "incorrect password";
		header('refresh:3;url=index.php');

		}	
	}	

?>	