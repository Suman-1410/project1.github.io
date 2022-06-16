<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
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
                    <label class="logo"> <i class="fas fa-graduation-cap"></i>SCHOLARSERA</label>
                </div>
              
                 <span class="logout-spn" >
                  <a href="logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

 <li >
                        <a href="orgs.php" ><i class="fa fa-desktop "></i>Dashboard <!--<span class="badge">Included</span>--></a>
                    </li>
                   

                   



                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">



                        <div class = "jumbotron big-banner">
<section class="my-5"><!--mergin-->
    <div class="py-5"><!--padding-->
        <h2 class="text-center">Contact us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="org_contact_userinfo.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="user" autocomplete="off" class="form-control" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control" placeholder="Enter phone no..">
            </div><div class="form-group">
                <label>Organization name</label>
                <input type="text" name="org_name" autocomplete="off" class="form-control" placeholder="Enter Org. name">
            </div>
            <div class="form-group">
                <label>Feedback</label>
                <textarea class="form-control" name="comments" placeholder="Messages"></textarea><br>
                <div class="py-3">
                <button type="submit" class="btn btn-success ">Submit</button>
              </div>
            </div>
        </form>
    </div></div>
                     





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
