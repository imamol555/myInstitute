<?php 
require'connection/connect.php';
session_start();

$username=$_SESSION['uname'];
$user_prof = $yaa -> user_profile;
$temp_prof= $user_prof->findOne(['_id' => $username] );

$branch=$temp_prof->branch;
$number=$temp_prof->number_of_classes;
$class_details=$yaa->class_details;
$total_temp=$class_details->findOne(['year' => 'BE','branch' => $branch] );
$total_s=$total_temp->total_strength;
$temp=array();

	if($number==1){
		$temp0=$temp_prof->year_sub0->year0;
	}
	elseif($number==2){
		$temp0=$temp_prof->year_sub0->year0;
		$temp1=$temp_prof->year_sub1->year1;
	}
	elseif($number==3){
		$temp0=$temp_prof->year_sub0->year0;
		$temp1=$temp_prof->year_sub1->year1;
		$temp2=$temp_prof->year_sub2->year2;
	}
	elseif($number==4){
		$temp0=$temp_prof->year_sub0->year0;
		$temp1=$temp_prof->year_sub1->year1;
		$temp2=$temp_prof->year_sub2->year2;
			$temp3=$temp_prof->year_sub3->year3;
	}

	
	

	if($temp0=='BE'){$index='0';  $sub=$temp_prof->year_sub0->sub0;}

	elseif($temp1=='BE'){$index='1'; $sub=$temp_prof->year_sub1->sub1;}

	
	elseif($temp2=='BE'){$index='2'; $sub=$temp_prof->year_sub2->sub2;}
 
	
	elseif($temp3=='BE'){$index='3'; $sub=$temp_prof->year_sub3->sub3;}

	
/*-------session professor year subject data---------*/
$_SESSION['year']='BE';
$_SESSION['subject']=$sub;

/*-------------attendence count_------------*/

$prof_class_att=$yaa->prof_class_att;

$total_lectures=$prof_class_att->count(['prof_name'=>$username,'class'=>'BE','subject'=>$sub]);
$att_count_be=0;

$temp1=$prof_class_att->find(['prof_name'=>$username,'class'=>'BE','subject'=>$sub]);

foreach ($temp1 as $key ) {
	$a= $key->att_count;
	$att_count_be = $att_count_be + $a ;
}

$result = (($att_count_be) / ($total_lectures * 10))*100;



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="css/prof_class_one.css">
 </head>
 <body>
 	<div id="class_info">
 		
 		<div id="one">
 			<h2><?php echo "BE"; ?></h2>
 		<br>
 		<h2><?php echo $branch; ?></h2><br>
 		<h2> <?php echo $sub; ?></h2>
 		<br>
 		</div>
 		<div id="two">
 			<h1> Total strength : <?php echo $total_s; ?></h1>
 		</div>


 	</div>
 	<div id="class_details">
 		<p>class details here</p>

 		<div id="att_ass_wrapper">
 			<div id="attendence_info" class="aaw">
 				<h1></h1>
 				<a href="update_attendence.php">Update attendence</a>
 				 <h2>Attendence % = <?php echo $result; ?></h2>
 			</div>
 			<div id="assignments" class="aaw">
 				<p>ASSIGNMENTS</p>
 				<p><h2>Assignment 1</h2></p>
 			</div>
 		</div>

 		<div id="exams_info">
 			<p>exams info</p>
 		</div>

 		<div id="notice_smat_wrapper">
 			<div id='notice' class="nsw">
 	 			<p>notice board  about subject</p>
 		 	</div>
 	 		<div id="study_material" class="nsw">
 	 			<p>study material</p>
 			 </div>
 		</div>
 		
 		
 	</div>	 
 </body>
 </html>