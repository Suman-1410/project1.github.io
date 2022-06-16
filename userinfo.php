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

$query = " insert into responds (user, email, mobile, comments) values('$user','$email','$mobile','$comments')";

echo "$query";
mysqli_query($con, $query);
header('location:index11.php');

?>