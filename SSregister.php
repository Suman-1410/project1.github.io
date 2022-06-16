 <?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM ssregister WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
  $name=$_POST['name'];
  $phone =$_POST['phone'];
  $org =$_POST['org'];

    $sql = "INSERT INTO ssregister (username, password, name, phone, org) VALUES (?, ?, '$name','$phone', '$org')";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: sslogin.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="nav1.css">



    <title>Registration form</title>
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
        
        <li class="nav-item active">
            <a class="" aria-current="page" href="home.php">Home</a>
        </li>

        <li><a class="active" href="ssregister.php#"> <i class=""></i> Submit scholarship </a></li>
        
        <li class="nav-item active">
            <a class="" aria-current="page" href="college_list.php">Colleges</a>
        </li>
        
        <li><a class="" aria-current="page" href="sholarships.php">Scolarships</a></li>
        
        <li class="nav-item">
            <a class="" aria-current="page" href="WLcontact.php">Contact us</a>
        </li>

      </ul>

  </nav>

<!--end nav-->

<div class="container mt-4 py-5">
<h3><b>Submit A Scholarship</b></h3>
<p>Got a scholarship you would like to list on the internet's premiere college and scholarship search site? Quickly and easily submit your scholarship online using our simple scholarship submission form. Just create an account by answering a few questions below. Once you have registered with SCHOLARSERA, you will be able to log-in and list, review and update your scholarships all in one place!</p>
<hr>
<p>If you already have scholarship(s) listed on SCHOLARSERA, please <a href="sslogin.php">click here</a> to log in.</p>
<form action="" method="post">
  <div class="">
    <div class="form-group">
      <label for="inputEmail4">Name :</label>
      <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="" required="">
    </div> 
    <div class="form-group">
      <label for="inputEmail4">Email :</label>
      <input type="text" class="form-control" name="username" id="inputEmail4" placeholder="" required="">
    </div>
    <div class="form-group">
      <label for="inputEmail4">Phone Number :</label>
      <input type="text" class="form-control" name="phone" id="inputEmail4" placeholder="" required="">
    </div> 
    <div class="form-group">
      <label for="inputEmail4">Organization Name :</label>
      <input type="text" class="form-control" name="org" id="inputEmail4" placeholder="" required="">
    </div>
    <div class="form-group">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="" required="">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword4">Confirm Password</label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="" required="">
    </div>

  <form ... onsubmit="return checkForm(this);">

<p><input type="checkbox" required name="terms"> <u>Please verify your information before opening an account</u></p>
<p><input type="submit" class="btn btn-success"></p>
</form>
</form>
</div>
<div class="" style="background-color: #e3f2fd;">
    <footer class="py-2 mt-5">
      <!--<ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Collage</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact us</a></li>
      </ul>-->
      <p class="text-center text-muted"></p>
      <p class="text-center text-muted">©2022Group-D, Inc</p>
    </footer>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
