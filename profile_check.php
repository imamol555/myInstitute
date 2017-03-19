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

//------------------usertype information-------------

//###student

$s_branch = $_POST['s_branch']; 
$s_year = $_POST['s_year']; 
$s_roll = $_POST['s_roll'];

//####professor
$p_branch =$_POST['p_branch'];  // getting branch of professor


 $p_year= $_POST['p_year'] ;     //getting prof-> year of class and subject

$number =count( $_POST['p_year']);   //getting count checked boxes 
$i=0;
/*
foreach ($p_year as $key ) {
	echo $key;
}*/
/*
for($i=0;$i<$number;$i++)
{
	if($p_year[$i]=='FE') {
			$fesub=$_POST['fe_sub'];  
		}
	if($p_year[$i]=='SE') {
			$sesub=$_POST['se_sub'];  
		}
	if($p_year[$i]=='TE') {
			$tesub=$_POST['te_sub'];  
		}
	if($p_year[$i]=='BE') {
			$besub=$_POST['be_sub'];  
	}	


}
*/


//-------------inserting data according to usertype--------------

$usertype = $_POST['usertype'];

if($usertype=='student'){
		$insertuser = $user_prof->insertOne(

			['_id'=>$username,'usertype'=>$usertype,'ff_name' =>$ff_name ,'fm_name'=>$fm_name, 'fl_name'=>$fl_name,'branch'=>$s_branch,'year'=>$s_year,'roll_no'=>$s_roll, 'dob_date' => $dob_date, 'dob_month'=>$dob_month, 'dob_year' => $dob_year ,         'sex'=>$sex, 'phone_no'=>$phone_no,'email'=>$email, 
			'address'=>['street1'=>$street1,'street2'=>$street2,'city'=>$city,'state'=>$state,
			'pin'=>$pin,'country'=>'India' ]  ]

			);

		if($insertuser){header('Location:student_profile.php');}
		
		}

else      {

			$insertuser = $user_prof->insertOne(

			['_id'=>$username,'usertype'=>$usertype,'ff_name' =>$ff_name ,'fm_name'=>$fm_name, 'fl_name'=>$fl_name,'branch'=>$p_branch,
			 'dob_date' => $dob_date, 'dob_month'=>$dob_month, 'dob_year' => $dob_year ,         'sex'=>$sex, 'phone_no'=>$phone_no,'email'=>$email, 
			'address'=>['street1'=>$street1,'street2'=>$street2,'city'=>$city,'state'=>$state,
			'pin'=>$pin,'country'=>'India' ],'number_of_classes'=>$number  ]

			);
			//updateing year and subject of professor
			
			for($i=0;$i<$number;$i++) {
				/*
				if($p_year[$i]=='FE'){
					$fesub=$_POST['fe_sub']; 
					$temp1=$user_prof->findOne(['_id'=>'$username']);
					$user_prof->updateOne({})
				}*/

				

				if($p_year[$i]=='FE'){
					$fesub=$_POST['fe_sub'];  
					 $user_prof->updateOne(['_id'=>$username],
						['$set'=>['year_sub'.$i=>['year'.$i=>'FE','sub'.$i=>$fesub] ]]
						);
					}
				elseif($p_year[$i]=='SE'){
					$sesub=$_POST['se_sub'];  
					 $user_prof->updateOne(['_id'=>$username],
						['$set'=>['year_sub'.$i=>['year'.$i=>'SE','sub'.$i=>$sesub] ]]
						);
					}
				elseif($p_year[$i]=='TE'){
					$tesub=$_POST['te_sub'];  
					 $user_prof->updateOne(['_id'=>$username],
						['$set'=>['year_sub'.$i=>['year'.$i=>'TE','sub'.$i=>$tesub] ]]
						);
					}


				elseif($p_year[$i]=='BE'){
					$besub=$_POST['be_sub'];  
					 $user_prof->updateOne(['_id'=>$username],
						['$set'=>['year_sub'.$i=>['year'.$i=>'BE','sub'.$i=>$besub] ]]
						);
					}					

				

				}	

			/**code to be added latter for update
				'year'=>['year1'=>$p_year[0],'year2'=>$p_year[1],'year3'=>$p_year[2],'year4'=>$p_year[3]],'sub'=>[],
			*/

			if ($insertuser ) {
				header('Location:professor_profile.php');
			}
				

		}
	










 ?>