<?php
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";
}else{
    echo "no connection";
}


mysqli_select_db($con, 'colleges');
{
   $courses=$_POST['courses'];
   $t_tuition_fees=$_POST['t_tuition_fees'];
   $eligibility=$_POST['eligibility'];
   $duration=$_POST['duration'];
   $clevel=$_POST['clevel'];
   $wlink=$_POST['wlink'];
  
  $query = " insert into details (courses, t_tuition_fees, eligibility, duration, clevel, wlink) values ('$courses','$t_tuition_fees','$eligibility','$duration','$clevel','$wlink')";

  echo "$query";
mysqli_query($con, $query);
header('location:svims.php');
}
?>