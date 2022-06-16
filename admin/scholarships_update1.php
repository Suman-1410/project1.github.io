



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

  	<?php
$conn=mysqli_connect("localhost","root","","project");

$ids = $_GET['id'];
$showquery = "select * from au_sholarships where id={$ids}";
$showdata = mysqli_query($conn, $showquery);
$arrdata = mysqli_fetch_array($showdata);
if(isset($_POST['submit'])){

	$idupdate = $_GET['id'];

	 $name=$_POST['name'];
   $amount=$_POST['amount'];
   $eligibility=$_POST['eligibility'];
   $duration=$_POST['duration'];
   $provider=$_POST['provider'];
   //$wlink=$_POST['wlink'];
  
  //$query = " insert into details (courses, t_tuition_fees, eligibility, duration, clevel, wlink) values ('$courses','$t_tuition_fees','$eligibility','$duration','$clevel','$wlink')";

  $query = "update au_sholarships set id=$ids, name='$name', amount='$amount', eligibility='$eligibility', duration='$duration', provider='$provider'where id=$idupdate ";


$res = mysqli_query($conn, $query);
if ($res) {
	header('location:view_ss.php');
}else{
	?>
	<script type="text/javascript">
		alert("Data not updated");
	</script>
	<?php
}
}

?>


  <h1 style="color:blue; text-align: center; " >Update sholarships</h1>  
  <div class="container my-5">
     <form action="" method="POST">
    <div class="mb-3 mt-3">
    <label for="Course Name" class="form-label">Scholarships Name:</label>
    <input type="text" class="form-control"  placeholder="" name="name" value="<?php echo $arrdata['name']; ?>">
    </div>
    <div class="mb-3">
    <label for="pwd" class="form-label">Scholarships Duration:</label>
    <input type="text" class="form-control"  placeholder="" name="duration" value="<?php echo $arrdata['duration']; ?>">
    </div>
    <div class="mb-3">
    <label for="pwd" class="form-label">Scholarships eligibility:</label>
    <input type="text" class="form-control"  placeholder="" name="eligibility" value="<?php echo $arrdata['eligibility']; ?>">
    </div>
    <div class="mb-3">
    <label for="tol" class="form-label">Scholarships amount:</label>
    <input type="text" class="form-control"  placeholder="" name="amount" value="<?php echo $arrdata['amount']; ?>">
  </div>
    <div class="mb-3">
    <label for="ad" class="form-label">Provider:</label>
    <input type="text" class="form-control"  placeholder="" name="provider" value="<?php echo $arrdata['provider']; ?>">
    </div>
  <form ... onsubmit="return checkForm(this);">

<p><input type="checkbox" required name="terms"> <u>Please verify your information before submit</u></p>
<p><input type="submit" name="submit" value="Update" class="btn btn-primary"></p>
</form>
</form>
 </div>
 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>