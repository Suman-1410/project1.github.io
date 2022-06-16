<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

include "conn.php";
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





<h2></h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by college names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
  <th style="width:30%; text-align: center; ">College-Name</th>
    <th style="width:10%; text-align: center; ">College-Id</th>
    <th style="width:10%; text-align: center;">College-location</th>
    <th style="width:10%; text-align: center;">Type of University</th>
    <th style="width:10%; text-align: center;">Course-details</th>
  </tr>
  <tr>
  <td style="text-align: center;">Swami Vivekananda Institute of Modern Science</td>
    <td style="text-align: center;">264</td>
    <td style="text-align: center;">karbala</td>
    <td style="text-align: center;">Private</td>
    <td style="text-align: center;"> <form action="college_detail.php" method=""><button type="submit" class="btn btn-success ">Details</button></form> </td>
  </tr>
  <td style="text-align: center;">Future Institute of Engineering and Management</td>
    <td style="text-align: center;">777</td>
    <td style="text-align: center;">Sonarpur</td>
    <td style="text-align: center;">Private</td>
    <td style="text-align: center;"> <form action="fiem.php" method=""><button type="submit" class="btn btn-success ">Details</button></form> </td>
  </tr>
  

</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>



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