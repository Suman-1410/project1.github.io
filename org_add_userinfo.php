<?php
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'project');

$scholar_name= $_POST['scholar_name'];
$scholar_amount= $_POST['scholar_amount'];
$scholar_provider= $_POST['scholar_provider'];
$scholar_link= $_POST['scholar_link'];
$scholar_eligibility= $_POST['scholar_eligibility'];
$scholar_requirment= $_POST['scholar_requirment'];

$query = " insert into org_ss_submit (scholar_name, scholar_amount, scholar_provider, scholar_link, scholar_eligibility, scholar_requirment) values('$scholar_name','$scholar_amount','$scholar_provider','$scholar_link', '$scholar_eligibility', '$scholar_requirment')";

echo "$query";
mysqli_query($con, $query);
header('location:org_view.php');

?>