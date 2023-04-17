
<?php
  // Check if the user is logged in
  include("auth.php");

  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="classes.css"/>


    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title> BCA Question Papers</title>
    
</head>
<body>
    
<?php
require("header.php");
?>
<style>
     
        .icons .box-container .box{

border-width: 1rem;
  margin-bottom: 2rem;
   background-color:white;
   box-shadow: 5px 5px 4px 4px rgba(0, 0, 0, 0.808);
   align-items: center;
   justify-content: center;
   text-align: center;
 
        }
        .icons .box-container .box .content h3{
    font-size: 3rem;
    color: #020244;
    font-weight: bolder;
    padding-bottom: 3rem;
        }
      </style>
<section class="icons">
<h1 class="heading">PGDCA-Previous year question paper</h1>
<h2 class="heading2">Previous year question paper for all subjects in 2nd sem  ,1st sem  of PGDCA</h2>
<style>
    h2{
    font-size: 1.5rem;
    color: #020008;
   text-align: center;
   align-items: center;
   
   text-transform: uppercase;
   margin-top: 2rem;
   font-weight: bolder;
   font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;}
   .icons .box-container{
                
            
                background-size: cover;
               background-position: center;   
               justify-content: center;
               align-items: center;
               padding: 2rem;
            
              
            }
    </style>
<div class="box-container">

<div class="dropdown">
  <button class="dropbtn"><h3> 1st-sem</h3></button>
  <div class="dropdown-content">
    <a href="" target="_blank">computer fundamentals</a>
    <a href="" target="_blank">c</a>
    <a href="" target="_blank">dbms</a>
    <a href="" target="_blank">data communication</a>
  </div>
</div>
    <div class="dropdown">
  <button class="dropbtn"><h3> 2nd-sem</h3></button>
  <div class="dropdown-content">
    <a href="" target="_blank">java</a>
    <a href="" target="_blank">web technologies</a>
    <a href="" target="_blank">software engineering</a>
    <a href="" target="_blank">computer based accounting</a>
  </div>
</div>
    
    
</section>

<!--homeabout start  -->               
                              
<section class="home-about">
    <div class="image">
    <img src="images\laptop.jpg"alt="study" class="imagestudy">
    </div>
    <div class="content">
                <h2>About ExamMaster</h2>
                <p> a user-friendly interface, easy navigation, and a commitment to quality, Exam Master is the go-to destination for students looking to succeed in their college studies. Join us today and take your academic performance to the next level!"...........</p>
                <a href="about.php" class="button">read more</a>
    </div>
</section>
<!--homeabout end -->
    <?php
    require("footer.php");
    ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>