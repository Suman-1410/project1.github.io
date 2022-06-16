<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: home.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="profile.css">
    <link rel="stylesheet" type="text/css" href="nav1.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
     <nav>


      </label>

    <style>
      a{
        text-decoration:none;  
      }
    </style>
     
      <label class="logo"> <i class="fas fa-graduation-cap"></i>SCHOLARSERA</label>

      <ul>
        
        <li>
               <a href="#"> <i class="fa fa-user"></i>
               <i class="fas fa-caret-down"></i>
               </a>
               <ul>
                  <li><a href="profile.php#"> <i class="fa fa-id-badge"></i> Profile</a></li>
                  <li><a href="logout.php#"> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
                  
               </ul>

        </li>

        <li><a class="menu-btn" href="index11.php#"> <i class="fas fa-home"></i> Home </a></li>
        
        <li class="nav-item active">
            <a class="" aria-current="page" href="college_list.php">Colleges</a>
        </li>
        
        <li><a class="active" aria-current="page" href="sholarships.php">Scolarships</a></li>
        
        

      </ul>

  </nav>
<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
<div class="col-xl-6 col-md-12">
    <?php
    $db=mysqli_connect("localhost","root","","project"); 
    $q=mysqli_query($db,"SELECT * FROM users where username='$_SESSION[username]'; ");
    $row=mysqli_fetch_assoc($q); 
    ?>
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-md-12 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <!--<div class="m-b-25">
                                                                    <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image">
                                                                </div>-->
                                                                <p>Welcome</p>
                                                                <h6 class="f-w-600"><?php echo $_SESSION['username']; ?></h6>
                                                                
                                                                <!--<a href=".php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="right" title="Edit"><i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i></a>-->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="card-block">
                                                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Name</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['name'] ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['email'] ?></h6>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">College Name</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['cname'] ?></h6>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Stream</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $row['stream'] ?></h6>
                                                                    </div>
                                                                </div>
                                                                     
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                             </div>
                                                </div>
                                            </div>


<div class="" style="background-color: #e3f2fd;">
    <footer class="py-1 my-2">
      <!--<ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Collage</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact us</a></li>
      </ul>-->
      <p class="text-center text-muted"></p>
      <p class="text-center text-muted"><b>©2022Group-D, Inc</b></p>
    </footer>
  </div>
</body>
</html>