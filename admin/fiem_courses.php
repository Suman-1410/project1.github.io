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
<h1 style="color:blue; text-align: center; " >Add Course Name</h1>  
  <div class="container my-5">
     <form action="fiem_add_course.php" method="POST">
    <div class="form-group">
    <label for="Course Name" class="form-label">Course Name:</label>
    <input type="text" class="form-control"  placeholder="" name="courses">
    </div>
    <div class="form-group">
    <label for="pwd" class="form-label">Duration:</label>
    <input type="text" class="form-control"  placeholder="" name="duration">
    </div>
    <div class="form-group">
    <label for="pwd" class="form-label">Course level:</label>
    <input type="text" class="form-control"  placeholder="" name="clevel">
    </div>
    <div class="form-group">
    <label for="tol" class="form-label">Total Tuition Fees:</label>
    <input type="text" class="form-control"  placeholder="" name="t_tuition_fees">
  </div>
    <div class="form-group">
    <label for="ad" class="form-label">Eligibility:</label>
    <input type="text" class="form-control"  placeholder="" name="eligibility">
    </div>
    <div class="form-group">
    <label for="ad" class="form-label">Link:</label>
    <input type="text" class="form-control"  placeholder="" name="wlink">
    </div>
  <form ... onsubmit="return checkForm(this);">

<p><input type="checkbox" required name="terms"> <u>Please verify your information before submit</u></p>
<p><input type="submit" class="btn btn-primary"></p>
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
