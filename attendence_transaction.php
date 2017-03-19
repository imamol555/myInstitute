<?php 
require'connection/connect.php';
/*-----session things----------- */
session_start();

$username=$_SESSION['uname'];
$subject=$_SESSION['subject'];
$year=$_SESSION['year'];

/**------------collection selections---------------**/
$prof_class_att = $yaa -> prof_class_att;



/*****************fetching form inputs****************/
/**------fetching checkbox values-----**/
$roll= $_POST['attendence'] ; 
$number =count( $_POST['attendence']); 




/*---------fetching date n time---------*/
$date=$_POST['date'];
$time=$_POST['time'];
/**--------------database transaction-----------**/
$prof_class_att->insertOne(['_id'=>$date.$time,'prof_name'=>$username,'class'=>$year,'subject'=>$subject,'date'=>$date,'time'=>$time,'att_count'=>$number]);
for($i=0;$i<$number;$i++){
	$key=$roll[$i];
	
	$prof_class_att->updateOne(['_id'=>$date.$time],
						['$push'=>
							[
							'attendence'=>[$key=>'P']	
								]
						]
						);

}

header('Refresh:3 ,url=professor_profile.php');
/**/
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <h1>Attendence Updated</h1>
 </body>
 </html>