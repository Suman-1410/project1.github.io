<!DOCTYPE html>
<html lang="en">
<head>
    <title>SCHOLARSERA</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

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
        
        

         <li class="nav-item">
            <a class="" aria-current="page" href="college_list.php">Colleges</a>
          </li>
          <li class="nav-item">
            <a class="" aria-current="page" href="sholarships.php">Scolarships</a>
          </li>
      
          <li class="nav-item">
            <a class="" aria-current="page" href="WLcontact.php">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="" aria-current="page" href="ssregister.php">Submit a Scholarship</a>
          </li>
          <li class="nav-item">
            <a class="" aria-current="page" href="login.php">Login</a>
          </li>

      </ul>

  </nav>

<!--end nav-->
<!--end nav-->
<div class = "jumbotron big-banner">
<section class="my-5"><!--mergin-->
    <div class="py-5"><!--padding-->
        <h2 class="text-center">Contact us</h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
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
            </div>
            <div class="form-group">
                <label>Feedback</label>
                <textarea class="form-control" name="comments" placeholder=""></textarea>
                <div class="py-3">
                <button type="submit" class="btn btn-success ">Submit</button>
              </div>
            </div>
        </form>
    </div></div>

<div class="" style="background-color: #e3f2fd;">
    <footer>
        <p class="p-3 text-center"><b>©2022Group-D, Inc</b></p>
    </footer>
  </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>
</body>
</html>