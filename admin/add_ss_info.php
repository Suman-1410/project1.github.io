<?php
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";
}else{
    echo "no connection";
}


mysqli_select_db($con, 'project');
{
   $scholar_name=$_POST['scholar_name'];
   $scholar_amount=$_POST['scholar_amount'];
   $scholar_provider=$_POST['scholar_provider'];
   $scholar_eligibility=$_POST['scholar_eligibility'];
   $scholar_requirment=$_POST['scholar_requirment'];
   $scholar_link=$_POST['scholar_link'];
  
  $query = " insert into au_sholarships (scholar_name, scholar_amount, scholar_provider, scholar_eligibility, scholar_requirment, scholar_link) values ('$scholar_name','$scholar_amount','$scholar_provider','$scholar_eligibility','$scholar_requirment', '$scholar_link')";

  echo "$query";
mysqli_query($con, $query);
header('location:view_ss.php');
}
?>