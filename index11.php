<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: home.php");
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCHOLARSERA</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="index11.css">
    
    
</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="index11.php#" class="logo"> <i class="fas fa-graduation-cap"></i> SCHOLARSERA </a>

    <nav class="navbar">
        <div id="nav-close" class="fas fa-times"></div>

        
               

    
        

        <a href="index11.php">Home</a>
        <a class="nav-link" aria-current="page" href="college_list.php">Colleges</a>
        <a class="nav-link" aria-current="page" href="sholarships.php">Scolarships</a>
        <a class="nav-link" aria-current="page" href="contact.php">Contact us</a>
        <a class="nav-link" aria-current="page" href="logout.php">Logout</a>

    </nav>

    <div class="icons">
        <div id="menu-btn" class="fas fa-bars"></div>
        <div id="search-btn" class=""></div>
    </div>

</header>

<!-- header section ends -->

<!-- search form  -->

<div class="search-form">

    <div id="close-search" class="fas fa-times"></div>

    <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box" style="background: url(images/15.jpg) no-repeat;">
                    <div class="content">
                        <span>never stop</span>
                        <h3>exploring</h3>
                        <p>ALWAYS WE ARE HERE FOR YOU!  FOR GETTING BEST OF BEST SCHOLARSHIPS EASY IN YOUR FINGERTIPS </p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: url(images/7.jpg) no-repeat;">
                    <div class="content">
                        <span>build your career</span>
                        <h3>amazing</h3>
                        <p>ALWAYS WE ARE HERE FOR YOU!  FOR GETTING BEST OF BEST SCHOLARSHIPS EASY IN YOUR FINGERTIPS </p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box" style="background: url(images/41.jpg) no-repeat;">
                    <div class="content">
                        <span>feel comfortable</span>
                        <h3>new world</h3>
                        <p>ALWAYS WE ARE HERE FOR YOU!  FOR GETTING BEST OF BEST SCHOLARSHIPS EASY IN YOUR FINGERTIPS </p>
                        <a href="#" class="btn">get started</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->












<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="index.js"></script>

</body>
</html>