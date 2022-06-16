 <?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}
include "conn.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>SCHOLARSERA</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="nav1.css">

</head>
<body class="d-flex flex-column min-vh-100">


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
        
        <li class="nav-item">
            <a class="" aria-current="page" href="contact.php">Contact us</a>
        </li>

      </ul>

  </nav>



<!--end nav-->

<div class="py-3">
<h2 class="text-center">List Of sholarships</h2></div>
	<?php
  if(isset($_POST['submit']))
  {
    $q=mysqli_query($db,"SELECT * FROM `au_sholarships` where `scholar_name` like '%$_POST[search]%' ");
    if(mysqli_num_rows($q)==0)
    {
      echo "Sorry! no sholarships found.";
    }
    else{
      echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color: #6db6b9e6; text-align: center;'>";
      //Table header
      //echo "<th>"; echo "ID"; echo "</th>";
      echo "<th>"; echo "Sholarships Name";  echo "</th>";
      echo "<th>"; echo "Amount";  echo "</th>";
      echo "<th>"; echo "Provider";  echo "</th>";
      echo "<th>"; echo "Eligibility";  echo "</th>";
      echo "<th>"; echo "Eequirment";  echo "</th>";
      echo "<th>"; echo "Website";  echo "</th>";
    echo "</tr>"; 

    while($row=mysqli_fetch_assoc($q))
    {
      echo "<tr>";
      //echo "<td>"; echo $row['id']; echo "</td>";
      echo "<td>"; echo $row['scholar_name']; echo "</td>";
      echo "<td>"; echo $row['scholar_amount']; echo "</td>";
      echo "<td>"; echo $row['scholar_provider']; echo "</td>";
      echo "<td>"; echo $row['scholar_eligibility']; echo "</td>";
      echo "<td>"; echo $row['scholar_requirment']; echo "</td>";
      echo "<td>"; echo '<a href="' . $row['scholar_link'] . '"><button type="button">Know more</button>'; echo "</td>";

      echo "</tr>";
    }
  echo "</table>";
    }
  }
  else{
    $res=mysqli_query($db,"SELECT * FROM `au_sholarships`;");

  echo "<table class='table table-bordered table-hover' >";
    echo "<tr style='background-color: #6db6b9e6;text-align: center;'>";
      //Table header
      //echo "<th>"; echo "ID"; echo "</th>";
      echo "<th>"; echo "Sholarships Name";  echo "</th>";
      echo "<th>"; echo "Amount";  echo "</th>";
      echo "<th>"; echo "Provider";  echo "</th>";
      echo "<th>"; echo "Eligibility";  echo "</th>";
      echo "<th>"; echo "Requirment";  echo "</th>";
      echo "<th>"; echo "Website";  echo "</th>";
    echo "</tr>"; 

    while($row=mysqli_fetch_assoc($res))
    {
      echo "<tr>";
      //echo "<td>"; echo $row['id']; echo "</td>";
      echo "<td>"; echo $row['scholar_name']; echo "</td>";
      echo "<td>"; echo $row['scholar_amount']; echo "</td>";
      echo "<td>"; echo $row['scholar_provider']; echo "</td>";
      echo "<td>"; echo $row['scholar_eligibility']; echo "</td>";
      echo "<td>"; echo $row['scholar_requirment']; echo "</td>";
      echo "<td>"; echo '<a href="' . $row['scholar_link'] . '"><button type="button">Know more</button>'; echo "</td>";

      echo "</tr>";
    }
  echo "</table>";
  }
  ?>

<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  padding: 50px;
  height: 500px;
}

.left {
  width: 50%;
  
}

.right {
  width: 50%;
  
}

.h2 {
  color: white;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>



<div class="row">
  <div class="column left" style="background-color: #9daaad29;">
    
    <p><div class="wp-container-1 wp-block-column tbw">
      <br><br>



  <p class="tbg"><strong>Swami Vivekananda Scholarship 2022 Application - <a href="https://svmcm.wbhed.gov.in/page/application_procedure.php">Konw More</a></strong></p>

  <p class="tbr"><strong>Nabanna Scholarship 2022 Online Application - <a href="http://wbcmo.gov.in/">Konw More</a></strong></p>
  
  <p class="tbb"><strong>Aikyashree Scholarship Scheme - <a href="https://www.wbmdfc.org/Home/scholarship">Konw More</a></strong></p>
  
  <p class="tby"><strong>SC ST OBC Scholarship Scheme 2022 - <a href="#">Konw More</a></strong></p>
  
  <p class="tbr"><strong>WBJEE JENPAS 2022 &ndash; B.Sc Nursing - <a href="#">Konw More</a></strong></p>
  
  <p class="tbg"><strong>Kanyashree Scholarship Scheme 2022 - <a href="#">Konw More</a></strong></p>
  
  <p class="tbb"><strong>Rupashree Prakalpa Online Application - <a href="#">Konw More</a></strong></p>
  
  <p class="tby"><strong>Madhyamik 2022 New Syllabus &amp; Pattern - <a href="#">Konw More</a></strong></p>


</div></p>
  </div>
  <div class="column right" style="background-color:rgba(164, 170, 81, 0.421);">
    
    <p><div>
  
  <aside id="custom_html-27" class="widget_text widget inner-padding widget_custom_html">
    <div class="textwidget custom-html-widget">
      <br>
      <br>
      <br>
      <br>


    <img  src="https://webexam.b-cdn.net/wp-content/uploads/2018/07/New.gif" class=" br-loaded"><b><span style="color:black;">Best Books &amp; Syllabus for JEXPO 2022 Exam - <a href="#">Click Here Now</a></span></b>
    <br>
    <img  src="https://webexam.b-cdn.net/wp-content/uploads/2018/07/New.gif" class=" br-loaded"><b><span style="color:brown;">WBJEE 2022 Result &amp; Rank Card Download - <a href="#">Click 
    Here</a></span></b>
    <br>
    <img  src="https://webexam.b-cdn.net/wp-content/uploads/2018/07/New.gif" class=" br-loaded"><b><span style="color:red;">Rupashree Prakalpo Online Application &amp; Status - <a href="#">Apply Now</a></span></b>
    <br>
    <img  src="https://webexam.b-cdn.net/wp-content/uploads/2018/07/New.gif" class=" ls-is-cached br-loaded"><b><span style="color:olive;">Chief Minister Relief Fund Scholarship Scheme--<a href="#">Click Here to get the Scholarship.</a></span></b>
    <br>
    <img  src="https://webexam.b-cdn.net/wp-content/uploads/2018/07/New.gif" class=" br-loaded"><b><span style="color:red;">OASIS Scholarship 2022 for SC, ST OBC Students-<a href="#">Click Here to Apply Online.</a></span></b>
    <br>
    <img  src="https://webexam.b-cdn.net/wp-content/uploads/2018/07/New.gif" class=" ls-is-cached br-loaded"><b><span style="color:MediumVioletRed;">Swami Vivekanada Merit cum Means Scholarship Renewal--<a href="#">Click Here to Apply Online.</a></span></b>
    <br>
    <img  src="https://webexam.b-cdn.net/wp-content/uploads/2018/07/New.gif" class=" ls-is-cached br-loaded"><b><span style="color:green;">WB Kanyashree K3 Scholarship Online Application-<a href="#">Click Here to Apply.</a></span></b>
    <br>
    
    </div>

</aside>

</div></p>
  </div>
</div>


    <div class="footer" style="background-color: #e3f2fd;">
    <footer class="py-1 mt-auto">
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
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
    integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
    crossorigin="anonymous"></script>
</body>
</html>