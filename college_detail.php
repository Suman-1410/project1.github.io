<?php

  $db=mysqli_connect("localhost","root","","colleges");  
          /* server name, username, passwor, database name */


session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: home.php");
}
?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="nav1.css">

<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}


body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #111;}

ul.topnav li a.active {background-color: #04AA6D;}

ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
</style>
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
            <a class="active" aria-current="page" href="college_list.php">Colleges</a>
        </li>
        
        <li><a class="" aria-current="page" href="sholarships.php">Scolarships</a></li>
        
        <li class="nav-item">
            <a class="" aria-current="page" href="contact.php">Contact us</a>
        </li>

      </ul>

  </nav>

  </nav>
<div>
<h1></h1>
</div>
<!--<ul class="topnav">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li class="right"><a href="#about">About</a></li>
</ul>

<div style="padding:0 16px;">
  <h2>Responsive Topnav Example</h2>
  <p>This example use media queries to stack the topnav vertically when the screen size is 600px or less.</p>
  <p>You will learn more about media queries and responsive web design later in our CSS Tutorial.</p>
  <h4>Resize the browser window to see the effect.</h4>
</div>-->

<div class="py-3">
<h2 class="text-center">List Of Courses</h2></div>
  <?php
  if(isset($_POST['submit']))
  {
    $q=mysqli_query($db,"SELECT * FROM `details` where `courses` like '%$_POST[search]%' ");
    if(mysqli_num_rows($q)==0)
    {
      echo "Sorry! no course found.";
    }
    else{
      echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color: #6db6b9e6;text-align:center;'>";
      //Table header
      echo "<th>"; echo "Courses"; echo "</th>";
      echo "<th>"; echo "Duration";  echo "</th>";
      echo "<th>"; echo "Course Level";  echo "</th>";
      echo "<th>"; echo "Tuition fees";  echo "</th>";
      echo "<th>"; echo "Eligibility";  echo "</th>";
      echo "<th>"; echo "Website";  echo "</th>";
    echo "</tr>"; 

    while($row=mysqli_fetch_assoc($q))
    {
      echo "<tr>";
      echo "<td>"; echo $row['courses']; echo "</td>";
      echo "<td>"; echo $row['duration']; echo "</td>";
      echo "<td>"; echo $row['clevel']; echo "</td>";
      echo "<td>"; echo $row['t_tuition_fees']; echo "</td>";
      echo "<td>"; echo $row['eligibility']; echo "</td>";
      echo "<td>"; echo '<a href="' . $row['wlink'] . '"><button type="button">Know more</button>'; echo "</td>";

      echo "</tr>";
    }
  echo "</table>";
    }
  }
  else{
    $res=mysqli_query($db,"SELECT * FROM `details`;");

  echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color: #6db6b9e6;text-align:center;'>";
      //Table header
      echo "<th>"; echo "Courses"; echo "</th>";
      echo "<th>"; echo "Duration";  echo "</th>";
      echo "<th>"; echo "Course Level";  echo "</th>";
      echo "<th>"; echo "Tuition fees";  echo "</th>";
      echo "<th>"; echo "Eligibility";  echo "</th>";
      echo "<th>"; echo "Website";  echo "</th>";
      //echo "<th>"; echo "Quantity";  echo "</th>";
    echo "</tr>"; 

    while($row=mysqli_fetch_assoc($res))
    {
      echo "<tr>";
      echo "<td>"; echo $row['courses']; echo "</td>";
      echo "<td>"; echo $row['duration']; echo "</td>";
      echo "<td>"; echo $row['clevel']; echo "</td>";
      echo "<td>"; echo $row['t_tuition_fees']; echo "</td>";
      echo "<td>"; echo $row['eligibility']; echo "</td>";
      echo "<td>"; echo '<a href="' . $row['wlink'] . '"><button type="button">Know more</button>'; echo "</td>";
      //echo "<td>"; echo $row['quantity']; echo "</td>";

      echo "</tr>";
    }
  echo "</table>";
  }
  ?>





























<div class="pt-5">
<div class="pt-5">
<div class="pt-5">
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
  </div></div></div></div>


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