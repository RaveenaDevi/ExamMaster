
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
	<title> BCom Question Papers</title>
    
</head>
<body>
    
<?php
require("header.php");
?>

<section class="icons">
<h1 class="heading">B Com-Previous year question paper</h1>
<h2 class="heading2">Previous year question paper for all subjects in 2nd sem , 4th sem , 6th sem , 1st sem , 3rd sem , 5th sem of B Com</h2>

<div class="box-container">

    <div class="box">
    <div class="dropdown">
  <button class="dropbtn"><h3> 1st-sem</h3></button>
  <div class="dropdown-content">
    <a href="uploads/BE(1st)Dec2020(1)  bcom question paper.pdf" target="_blank">business ecomomics</a>
    <a href="uploads/CL(1st)Dec2020 bcom question papers.pdf" target="_blank">commercial law</a>
    <a href="uploads/Punjabi(1st)Dec2020(1) bcom question papers.pdf" target="_blank">punjabi</a>
    <a href="uploads/ME(1st)Dec2020 bcom question papers.pdf" target="_blank">micro economics</a>
  </div>
</div>
    <div class="dropdown">
  <button class="dropbtn"><h3> 2nd-sem</h3></button>
  <div class="dropdown-content">
    <a href="uploads/B.COM-BUSINESS-LAWS question papers.pdf" target="_blank">BUSINESS law</a>
    <a href="uploads/B.COM-History-and-Culture-of-Punjabold question papers.pdf" target="_blank">History-and-Culture-of-Punjab</a>
    <a href="uploads/B.COM-HUMAN-RESOURCE-MANAGEMENT question paprs.pdf" target="_blank">HUMAN-RESOURCE-MANAGEMENT</a>
    <a href="uploads/B.COM-OBJECT-ORIENTED-PROGRAMMING-USING-C question papers.pdf" target="_blank">OBJECT-ORIENTED-PROGRAMMING-USING-C</a>
  </div>
</div>
  
        <div class="dropdown">
  <button class="dropbtn"><h3> 3rd-sem</h3></button>
  <div class="dropdown-content">     
  <a href="uploads/B.COM-BUSINESS-LAWS question papers.pdf" target="_blank">BUSINESS law</a>
    <a href="uploads/B.COM-History-and-Culture-of-Punjabold question papers.pdf" target="_blank">History-and-Culture-of-Punjab</a>
    <a href="uploads/B.COM-HUMAN-RESOURCE-MANAGEMENT question paprs.pdf" target="_blank">HUMAN-RESOURCE-MANAGEMENT</a>
    <a href="uploads/B.COM-OBJECT-ORIENTED-PROGRAMMING-USING-C question papers.pdf" target="_blank">OBJECT-ORIENTED-PROGRAMMING-USING-C</a>
       
  </div>
</div>

  
<div class="dropdown">
  <button class="dropbtn"><h3> 4rth-sem</h3></button>
  <div class="dropdown-content">
  <a href="uploads/B.COM-BUSINESS-LAWS question papers.pdf" target="_blank">BUSINESS law</a>
    <a href="uploads/B.COM-History-and-Culture-of-Punjabold question papers.pdf" target="_blank">History-and-Culture-of-Punjab</a>
    <a href="uploads/B.COM-HUMAN-RESOURCE-MANAGEMENT question paprs.pdf" target="_blank">HUMAN-RESOURCE-MANAGEMENT</a>
    <a href="uploads/B.COM-OBJECT-ORIENTED-PROGRAMMING-USING-C question papers.pdf" target="_blank">OBJECT-ORIENTED-PROGRAMMING-USING-C</a>
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn"><h3> 5th-sem</h3></button>
  <div class="dropdown-content">
  <a href="uploads/B.COM-BUSINESS-LAWS question papers.pdf" target="_blank">BUSINESS law</a>
    <a href="uploads/B.COM-History-and-Culture-of-Punjabold question papers.pdf" target="_blank">History-and-Culture-of-Punjab</a>
    <a href="uploads/B.COM-HUMAN-RESOURCE-MANAGEMENT question paprs.pdf" target="_blank">HUMAN-RESOURCE-MANAGEMENT</a>
    <a href="uploads/B.COM-OBJECT-ORIENTED-PROGRAMMING-USING-C question papers.pdf" target="_blank">OBJECT-ORIENTED-PROGRAMMING-USING-C</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn"><h3> 6th-sem</h3></button>
  <div class="dropdown-content">
  <a href="uploads/B.COM-BUSINESS-LAWS question papers.pdf" target="_blank">BUSINESS law</a>
    <a href="uploads/B.COM-History-and-Culture-of-Punjabold question papers.pdf" target="_blank">History-and-Culture-of-Punjab</a>
    <a href="uploads/B.COM-HUMAN-RESOURCE-MANAGEMENT question paprs.pdf" target="_blank">HUMAN-RESOURCE-MANAGEMENT</a>
    <a href="uploads/B.COM-OBJECT-ORIENTED-PROGRAMMING-USING-C question papers.pdf" target="_blank">OBJECT-ORIENTED-PROGRAMMING-USING-C</a>
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