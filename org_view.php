<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

   
    <style type="text/css">#table {
  text-align: center;
  border-collapse: collapse;
  width: 100%;
}

#table td, #table th {
  border: 1px solid #ddd;
  padding: 8px;
}
 
#table tr:nth-child(even){background-color: #f2f2f2;}

#table tr:hover {background-color: #ddd;}

#table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #214761;
  color: white;
}


label.logo{
  color: white;
  font-size: 25px;
  line-height: 80px;
  padding: 0 70px;
  font-weight: bold;
}
</style>
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
        <!-- /. NAV SIDE  -->
        
    <h3 style="text-align: center;">Submitted Scholarships</h3>   
<table id="table">
  <tr>
    <th>Scholarship Name</th>
    <th>Amount</th>
    <th>Provider</th>
    <th>Eligibility</th>
    <th>Requirements</th>
    <th>Link</th>
    <th>Submitted_at</th>
  </tr>
  <tbody>
    <?php 

  $conn=mysqli_connect("localhost","root","","project");  
          /* server name, username, passwor, database name */

$selecrquery = "select * from org_ss_submit ";
$query = mysqli_query($conn,$selecrquery);

$num = mysqli_num_rows($query);

while ($res = mysqli_fetch_array($query)) {
    //echo $res['username'] . "<br>";
?>
    <tr>

                        <td><?php echo $res['scholar_name']; ?></td>
                        <td><?php echo $res['scholar_amount']; ?></td>
                        <td><?php echo $res['scholar_provider']; ?></td>
                        <td><?php echo $res['scholar_eligibility']; ?></td>
                        <td><?php echo $res['scholar_requirment']; ?></td>
                        <td><?php echo $res['submited_at']; ?></td>
                        <td><?php echo '<a href="' . $res['scholar_link'] . '"><button type="button">Know more</button>'; ?></td>
                        
                        
                    </tr>

<?php
}




 ?>
                    
    </tbody>
</table>  

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
