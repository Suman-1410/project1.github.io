 <?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: #");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM ssregister WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: orgs.php");
                            
                        }
                    }

                }

    }
}    


}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="nav1.css">

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
        
      

        <li><a class="menu-btn" href="home.php"> <i class="fas fa-home"></i> Home </a></li>
        
          <li class="nav-item active">
            <a class="active" aria-current="page" href="ssregister.php">Submit Scholarship</a>
          </li>
          <!--<li class="nav-item ">
            <a class="" aria-current="page" href="login.php">Login</a>
          </li>-->

      </ul>

  </nav>



        <!--<form method="post" class="form-inline my-2 my-lg-0">
      <input type="text" class="form-control mr-sm-2" name="search"  placeholder="Search" aria-label="Search" required="">
      <button type="submit" class="btn btn-outline-success my-2 my-sm-0" name="submit">Search</button>
    </form>-->
      </div>
    </div>
  </nav>
<!--end nav-->

<!--<div class = "jumbotron big-banner">-->
<div class="container mt-4 py-5">
<h3><b>Scholarship Provider Login</b></h3>
<p>Need to add, remove or update a scholarship or scholarships you have listed on Scholarships.com? Just log-in below to manage your listing(s).
</p>
<hr>
<p>If you do not already have an account with us, please <a href="ssregister.php">click here</a>.</p>
<form action="" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" required="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" required="">
  </div>
  <form ... onsubmit="return checkForm(this);">

<!--<p><input type="checkbox" required name="terms"> <u>Please verify your information before opening an account</u></p>-->
<p><input type="submit" class="btn btn-success"></p>
</form>
</form>
</div>
<div class="" style="background-color: #e3f2fd;">
    <footer class="py-2 mt-5">
      <!--<ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class=" px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class=" px-2 text-muted">Collage</a></li>
        <li class="nav-item"><a href="#" class=" px-2 text-muted">About</a></li>
        <li class="nav-item"><a href="#" class=" px-2 text-muted">Contact us</a></li>
      </ul>-->
      <p class="text-center text-muted"></p>
      <p class="text-center text-muted">©2022Group-D, Inc</p>
    </footer>
  </div>
<!--</div>-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>