<?php
$con = mysqli_connect('localhost', 'root');

if($con){
    echo "Connection Successful";
}else{
    echo "no connection";
}

mysqli_select_db($con, 'project');

$user= $_POST['user'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$comments= $_POST['comments'];
$org_name= $_POST['org_name'];
$query = " insert into org_responds (user, email, mobile, comments, org_name) values('$user','$email','$mobile','$comments','$org_name')";

echo "$query";
mysqli_query($con, $query);
header('location:orgs.php');

?>