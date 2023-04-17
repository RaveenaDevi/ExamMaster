
<?php
  // Check if the user is logged in
  include('auth.php');

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    


    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Question Papers</title>
    
</head>
<body>
    
<?php
require('header.php');
?>
<style>
        .icons .box-container .box{

border-width: 1rem;
  margin-bottom: 2rem;
   background-color:lightpink;
   box-shadow: 5px 5px 4px 4px rgba(0, 0, 0, 0.808);
   text-align: center;
        }
        .icons .box-container .box .content h3{
    font-size: 2rem;
    color: #020244;
    font-weight: bolder;
        }
      </style>
<section class="icons">
<h1 class="heading">Previous year question paper</h1>
<h2 class="heading2">Punjab University Chandigarh</h2>
<style>
    h2{
    font-size: 3rem;
    color: #020008;
   text-align: center;
   align-items: center;
   
   text-transform: uppercase;
   margin-top: 2rem;
   font-weight: bolder;
   font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
    </style>
<div class="box-container">

    <div class="box">
    
    
        <div class="content">
               <h3>BCA </h3> 
               <p>Download BCA all subjects question papers</p>
               <a href="bca.php"class="button">download</a>
        </div>
    </div>
    
    <div class="box">
   
    
        <div class="content">
        <h3> PGDCA</h3>
            <p>Download PGDCA all subjects question papers</p>
            <a href="pgdca.php"class="button">download</a>
        </div>
    </div>
    
    <div class="box">
    
        <div class="content">
        <h3> B.Com</h3>
            <p>Download B.Com all subjects question papers</p>
            <a href="bcom.php"class="button">Download</a>
        </div>
    </div>
    
    <div class="box">
   
        <div class="content">
        <h3>Bachelor of Arts</h3>
            <p>Download BA all subjects question papers</p>
             <a href="ba.php"class="button">Download</a>
        </div>
    </div>
    <div class="box">
        <div class="content">
        <h3>BSC</h3>
            <p>Download BSC all subjects question papers</p>
             <a href="bsc.php"class="button">Download</a>
        </div>
    </div>   
    <div class="box">
        <div class="content">
        <h3>Fashion Designing</h3>
            <p>Download FD all subjects question papers</p>
             <a href="fd.php"class="button">Download</a>
        </div>
    
    </div>
    </div>
    
</section>
<section class="home-about">
<div class="image">
    <img src="images\pu.jpg"alt="study" class="imagestudy">
    </div>
    <div class="content">
    <h2>About Punjab university </h2>
<p>
Established in 1882 as University of Punjab at Lahore (now in Pakistan). 
Ranked 4th amongst Indian institutes / universities by International Ranking Agency, the Times Higher Education (WUR) in 2019-2020.. 1st Rank in
ARIIA Ranking 2021
amongst University & Deemed to be University (Government & Government Aided) (Technical). &amp; Emerging Economies. University campus is spread over an area of 550 acres (2.2 km2) in sectors 14 and 25 of the city of Chandigarh.  University has 188 affiliated colleges spread over Punjab and having one rural Regional Centre at Kauni, and 3 Regional Centres at Muktsar, Ludhiana and Hoshiarpur. </p>
    </div>
    
</section>
    <?php
    require("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>