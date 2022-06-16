<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
  <!-- BOOTSTRAP STYLES-->   
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <style type="text/css">
  label.logo{
  color: white;
  font-size: 25px;
  line-height: 80px;
  padding: 0 70px;
  font-weight: bold;
}</style>
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <label class="logo"> <a href="index.php"> <i class="fas fa-graduation-cap"></i></a>SCHOLARSERA</label>
                </div>
              
                 <span class="logout-spn" >
                  <a href="logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">


<br>
  	<?php
$conn=mysqli_connect("localhost","root","","colleges");

$ids = $_GET['id'];
$showquery = "select * from fiem where id={$ids}";
$showdata = mysqli_query($conn, $showquery);
$arrdata = mysqli_fetch_array($showdata);
if(isset($_POST['submit'])){

	$idupdate = $_GET['id'];

	$courses=$_POST['courses'];
   $t_tuition_fees=$_POST['t_tuition_fees'];
   $eligibility=$_POST['eligibility'];
   $duration=$_POST['duration'];
   $clevel=$_POST['clevel'];
   $wlink=$_POST['wlink'];
  
  //$query = " insert into details (courses, t_tuition_fees, eligibility, duration, clevel, wlink) values ('$courses','$t_tuition_fees','$eligibility','$duration','$clevel','$wlink')";

  $query = "update fiem set id=$ids, courses='$courses', t_tuition_fees='$t_tuition_fees', eligibility='$eligibility', duration='$duration', clevel='$clevel', wlink='$wlink' where id=$idupdate ";


$res = mysqli_query($conn, $query);
if ($res) {
	header('location:fiem.php');
}else{
	?>
	<script type="text/javascript">
		alert("Data not updated");
	</script>
	<?php
}
}

?>







  <h1 style="color:blue; text-align: center; " >Update Course Name</h1>  
  <div class="container my-5">
     <form action="" method="POST">
    <div class="mb-3 mt-3">
    <label for="Course Name" class="form-label">Course Name:</label>
    <input type="text" class="form-control"  placeholder="" name="courses" value="<?php echo $arrdata['courses']; ?>">
    </div>
    <div class="mb-3">
    <label for="pwd" class="form-label">Duration:</label>
    <input type="text" class="form-control"  placeholder="" name="duration" value="<?php echo $arrdata['duration']; ?>">
    </div>
    <div class="mb-3">
    <label for="pwd" class="form-label">Course level:</label>
    <input type="text" class="form-control"  placeholder="" name="clevel" value="<?php echo $arrdata['clevel']; ?>">
    </div>
    <div class="mb-3">
    <label for="tol" class="form-label">Total Tuition Fees:</label>
    <input type="text" class="form-control"  placeholder="" name="t_tuition_fees" value="<?php echo $arrdata['t_tuition_fees']; ?>">
  </div>
    <div class="mb-3">
    <label for="ad" class="form-label">Eligibility:</label>
    <input type="text" class="form-control"  placeholder="" name="eligibility" value="<?php echo $arrdata['eligibility']; ?>">
    </div>
    <div class="mb-3">
    <label for="ad" class="form-label">Link:</label>
    <input type="text" class="form-control"  placeholder="" name="wlink" value="<?php echo $arrdata['wlink']; ?>">
    </div>
  <form ... onsubmit="return checkForm(this);">

<p><input type="checkbox" required name="terms"> <u>Please verify your information before submit</u></p>
<p><input type="submit" name="submit" value="Update" class="btn btn-primary"></p>
</form>
</form>
 </div>
 

</div>
                </div>              
                 <!-- /. ROW  -->
              
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
             <div class="row">
                <div class="col-lg-12 text-center" >
                    &copy;  Group-D
                </div>
        </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
