
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
	<title> BA Question Papers</title>
    
</head>
<body>
    
<?php
require("header.php");
?>

<section class="icons">
<h1 class="heading">BA-Previous year question paper</h1>
<h2 class="heading2">Previous year question paper for all subjects in 2nd sem , 4th sem , 6th sem , 1st sem , 3rd sem , 5th sem of BA</h2>

<div class="box-container">
    <div class="dropdown">
  <button class="dropbtn"><h3> 1st-sem</h3></button>
  <div class="dropdown-content">
  <a href="uploads/History(3rd)Dec2020(1) ba,bsc question papers.pdf" target="_blank">History 2020</a>
  
    <a href="uploads/PS(2nd)May2019 ba question papers.pdf" target="_blank">political science</a>
    <a href="" target="_blank">Mathematics</a>
    <a href="uploads/CN(5th)Dec2018 bca question papers.pdf" target="_blank">Computer</a>
  </div>
         </div>
    <div class="dropdown">
  <button class="dropbtn"><h3> 2nd-sem</h3></button>
  <div class="dropdown-content">
  <a href="uploads/HC(2nd)May2018 ba,bsc question papers.pdf" target="_blank">History</a>
    <a href="uploads/PS(2nd)May2019 ba question papers.pdf" target="_blank">political</a>
    <a href="uploads/PhyEdu(2nd)May2019 ba question papers.pdf" target="_blank">Physical education</a>
    <a href="uploads/Punjabi-C(1st)Dec2020(2) ba question papers.pdf" target="_blank">Punjabi</a>
  </div>
</div>
  
        <div class="dropdown">
  <button class="dropbtn"><h3> 3rd-sem</h3></button>
  <div class="dropdown-content">     
  <a href="uploads/History(3rd)Dec2020(1) ba,bsc question papers.pdf" target="_blank">History</a>
    <a href="uploads/PhyEdu(3rd)Dec2020(2) ba question papers.pdf" target="_blank">Physical education</a>
    <a href="uploads/PS(3rd)Dec2020(2) ba question papers.pdf" target="_blank">political
    </a>
    <a href="uploads/Punjabi-C(3rd)Dec2020(2) ba question papers.pdf" target="_blank">Punjabi</a>
       
  </div>
</div>

  
<div class="dropdown">
  <button class="dropbtn"><h3> 4rth-sem</h3></button>
  <div class="dropdown-content">
  <a href="uploads/History(4th)May2019 ba,bsc question papers.pdf" target="_blank">History</a>
    <a href="uploads/Punjabi-E(4th)May2019 ba question papers.pdf" target="_blank">Punjabi elective</a>
    <a href="uploads/HS(4th)May2018 ba,bsc question papers.pdf" target="_blank">Home Science</a>
    <a href="uploads/PS(4th)May2019 ba question papers.pdf" target="_blank">political science</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn"><h3> 5th-sem</h3></button>
  <div class="dropdown-content">
  <a href="uploads/History-HP(5th)Dec2020 ba,bsc question papers.pdf" target="_blank">History</a>
    <a href="uploads/PhyEdu(5th)Dec2020(1) ba question papers.pdf" target="_blank">Physical education</a>
    <a href="uploads/English-C(5th)Dec2020 ba,bsc question papers.pdf" target="_blank">English</a>
    <a href="uploads/Eductation(5th)Dec2020 ba question papers.pdf" target="_blank">Eductation</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn"><h3> 6th-sem</h3></button>
  <div class="dropdown-content">
  <a href="uploads/History(6th)May2019 ba,bsc question papers.pdf" target="_blank">History</a>
    <a href="uploads/PhyEdu(6th)May2019 ba question papers.pdf" target="_blank">Physical education</a>
    <a href="uploads/Punjabi-E(6th)May2019 ba question papers.pdf" target="_blank">Mpunjabi</a>
    <a href="uploads/HS(6th)May2019 ba,bsc question papers.pdf" target="_blank">home science</a>
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