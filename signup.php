<?php

require'connection/connect.php';


	


	$users = $yaa -> users;

	$username = $_POST['s_username'];
	$password1= $_POST['s_pwd1'];
	$password2= $_POST['s_pwd2'];
	if($password1!= $password2 ){
		echo "<p>Password did not match . redirecting ...</p>";
		header('refresh:3;url=index.php');
		
		
	}
	else
	{


		$query = $users -> findOne(['_id' => $username] );
		if(empty($query))
			{
				$add_user=$users->insertOne( 
				['_id'=>$username, 'password'=>$password1]
				);

				

				echo "<p>Sign up successfull</p><br>";

				// session start
					session_start();
					$_SESSION['uname']=$username;
				//-------redirecting 
				header('Location:profile_edit.php');
				#echo "<a href='profile_edit.php'>edit your profile</a>";

				

			}
		else 
			{
				echo "<p>username already exists</p>";


			}	

	}

 ?>