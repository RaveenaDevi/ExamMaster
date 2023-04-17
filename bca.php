
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

<section class="icons">
<h1 class="heading">BCA-Previous year question paper</h1>
<h2 class="heading2">Previous year question paper for all subjects in 2nd sem , 4th sem , 6th sem , 1st sem , 3rd sem , 5th sem of BCA</h2>
<div class="box-container">
<div class="dropdown">
  <button class="dropbtn"><h3> 1st-sem</h3></button>
  <div class="dropdown-content">
    <a href="" target="_blank">Computer Fundamentals</a>
    <a href="uploads/B.COM-OBJECT-ORIENTED-PROGRAMMING-USING-C question papers.pdf" target="_blank">c programming</a>
    <a href="uploads/DCN(1st)Dec2020 pgdca question papers.pdf" target="_blank">Mathematics</a>
   
  </div>
</div>
    <div class="dropdown">
  <button class="dropbtn"><h3> 2nd-sem</h3></button>
  <div class="dropdown-content">
    <a href="uploads/Computer organizationO(6th)May2018 bca question papers.pdf" target="_blank">Computer Organization</a>
    <a href="uploads/WADU(5th)Dec2020 bca question papers.pdf" target="_blank">web Programming</a>
    <a href="uploads/C++(2nd)May2019(bca).pdf" target="_blank">OOPs c++</a>
 
  </div>
</div>
  
        <div class="dropdown">
  <button class="dropbtn"><h3> 3rd-sem</h3></button>
  <div class="dropdown-content">     
<a href="uploads/ISDI(3rd)Dec2020 bca question papers.pdf" target="_blank">information System Design</a>
<a href="uploads/DS(3rd)Dec2020(1) bca question papers.pdf" target="_blank">Data Structures</a>
<a href="uploads/CONM(3rd)Dec2020(1) bca question papers.pdf" target="_blank">numerical Methods</a>

       
  </div>
</div>

  
<div class="dropdown">
  <button class="dropbtn"><h3> 4rth-sem</h3></button>
  <div class="dropdown-content">
    <a href="" target="_blank">Software project management </a>
    <a href="" target="_blank">Operating System</a>
    <a href="uploads/DBMS(1st)Dec2020(1) pgdca question papers.pdf" target="_blank">DBMS</a>
   
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn"><h3> 5th-sem</h3></button>
  <div class="dropdown-content">
    <a href="uploads/CN(5th)Dec2020 bca question papers.pdf" target="_blank">Computer Networks</a>
    <a href="uploads/JP(5th)Dec2020 (1) bca question papers.pdf" target="_blank">java</a>
    <a href="uploads/Php(5th)Dec2018 bca question papers.pdf" target="_blank">PHP</a>
    <a href="uploads/discretemach_ bsc.pdf" target="_blank">Discrete Mathematics</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn"><h3> 6th-sem</h3></button>
  <div class="dropdown-content">
    <a href="" target="_blank">e-commerce</a>
    <a href="" target="_blank">VB.Net</a>
    <a href="uploads/CGMA(6th)May2019(bca).pdf" target="_blank">Computer graphics</a>

  </div>
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