<?php 
require'connection/connect.php';


//session che kam

session_start();

$username=$_SESSION['uname'];
//------
$users = $yaa -> users;



$user_prof = $yaa -> user_profile;



$ff_name = $_POST['ff_name'];
$fm_name = $_POST['fm_name'];
$fl_name = $_POST['fl_name'];

$dob_date =$_POST['dob-date'];
$dob_month =$_POST['dob-month'];
$dob_year =$_POST['dob-year'];

$sex = $_POST['sex'];

$phone_no = $_POST['phone'];
$email = $_POST['email'];

$street1 = $_POST['street1'];
$street2 = $_POST['street2'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$country = $_POST['country'];





$usertype = $_POST['usertype'];



/*we have embedded the address document in document for user profilezx*/



		if($usertype=='student'){
					echo'<form  method="post" name="byform"> ';
					echo'<input type="text" name="s_branch" placeholder="Branch" value="" required=""> ';
					echo'<input type="text" name="s_year" placeholder="Year" value="" required="">';
					echo '<input type="submit"  value="Submit" name="sub-btn">';
					echo"</form> ";

					if(isset($_POST['sub-btn']))	{

						$branch = $_POST['s_branch'];
						$year = $_POST['s_year'];

						$insertuser = $user_prof->insertOne(

						['_id'=>$username,'usertype'=>$usertype,'ff_name' =>$ff_name ,'fm_name'=>$fm_name, 'fl_name'=>$fl_name,'branch'=>$branch,'year'=>$year, 'dob_date' => $dob_date, 'dob_month'=>$dob_month, 'dob_year' => $dob_year ,         'sex'=>$sex, 'phone_no'=>$phone_no,'email'=>$email, 
							'address'=>['street1'=>$street1,'street2'=>$street2,'city'=>$city,'state'=>$state,
							'pin'=>$pin,'country'=>'India' ]  ]

						);
						if($insertuser){header('Location:student_profile.php');
										}
						}


					
					

			
		}
		else{
				header('Location:professor_profile.php');

		}
	










 ?>