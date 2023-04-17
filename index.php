<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExamMaster</title>
    <link rel="stylesheet" href="style.css">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!--header start-->
<?php
require("header.php");
?>
<!--header end-->            
<!--image start-->
<section class="image-box">
<section class="title">
<h1 class ="text-big">Your key to academic success</h1>
   <form action="search.php" method="$_GET">
                             <input type="search" name="search" id="search" placeholder="search for courses,Question Papers,Class.....">
                                <input type="submit" id="btn" value="search" >                          
   </form>
                         <section class="text-small">
                            <p><span id="exam">Exam Master</span> is a comprehensive college platform that offers students a wealth of resources, including notes, question papers, and study materials to help them excel in their studies and achieve academic success.</p>
                      <a href="about.php" class="btn" >Read more</a>
                            <a href="register.php" class="btn" >Sign Up</a>
                         </section>
</section>   
 </section>
                  

<!--image end-->


<!--icons start--->
<section class="icons">

<h1 class="heading">Grow smarter together</h1>
<div class="box-container">
     <div class="box">
        <div class="image">
        <img src="images\syllabus2.jpg"alt="Syllabus">
        </div>
        <div class="content">
        <h3>Syllabus</h3></a>
        <p>Download punjab university Syllabus from here</p>
        <a href="https://pu.ac.in/syllabus.php?qstrfacid=4" class="button">Download</a>
    </div>
     </div>
    <div class="box">
    <div class="image">
            <img src="images\notes2.jpg"alt="notes"class="notes">
            </div>
        <div class="content">
            <h3>Free Notes</h3>
            <p>Download Free Notes for any subject from here</p>
             <a href="notes.php" class="button">Download</a>
        </div>
    
    </div>

    <div class="box">
    <div class="image">
    <img src="images\papers.jpg"alt="Question"class="Question">
            </div>
        <div class="content">
               <h3>Question Papers</h3> 
               <p>Download Previous Years question papers of punjab university from here</p>
               <a href="Question.php"class="button">Download</a>
        </div>
    </div>
    
    <div class="box">
    <div class="image">
    <img src="images\result.png"alt="result"class="result">
               </div>
        <div class="content">
        <h3> Results</h3>
            <p>View Your punjab university result </p>
            <a href="https://results.puexam.in/"class="button">View</a>
        </div>
    </div>
    
    <div class="box">
    <div class="image">
    <img src="images\cal.jpg"alt="result"class="result">
            </div>
        <div class="content">
        <h3> Calculator</h3>
            <p>This calculator makes your life easy</p>
            <a href="https://www.calculator.net/"class="button">view</a>
        </div>
    </div>
    
    <div class="box">
    <div class="image">
                <img src="images\maxresdefault.jpg"alt="result"class="result">
            </div>
        <div class="content">
        <h3> Free Certificate cources</h3>
            <p> offers free certificate cources</p>
             <a href="https://www.mygreatlearning.com/academy"class="button">view</a>
        </div>
    </div>
    </div>

 </section>
 <!--icons end-->
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
<!------------------------------------------------------------------------------------>
<section class="other">

<h1 class="other-heading">other userful websites for college students</h1>
<div class="other-container">
<div class="other-box">
     <div class="content">
        
   <p>Grammarly - an online writing assistant to improve writing skills and correct grammar errors</p>
   <div class="image"> <a href="https://www.grammarly.com/" >
            <img src="images\grammarly.svg"alt="Syllabus" ></a></div>

     </div>
</div>
<div class="other-box">
        <div class="content">
       <p> Wolfram Alpha - a computational knowledge engine to solve complex math problems and generate graphs</p>
       <div class="image"> <a href="https://www.wolframalpha.com/" >
             <img src="images\wolfa.svg"alt="Syllabus"></a></div>
   
    
    </div>
</div>
    <div class="other-box">
        <div class="content">
            <p>TED - a platform for inspiring and informative talks from experts in various fields: </p>
            <div class="image"><a href="https://www.ted.com/" >
          <img src="images\ted.png"alt="Syllabus"></a></div>
  
    </div>
    </div>
    <div class="other-box">
        <div class="content">
      <p>  Coursera - offers access to thousands of online courses from top universities around the world:</p>
      <div class="image">  <a href="https://www.coursera.org/" ><img src="images\corsera.svg"alt="Syllabus"></a></div>
    </div>
    </div>
    <div class="other-box">
        <div class="content">
            <p>Quizlet - a platform for creating flashcards and study materials:</p>
            <div class="image"> <a href="https://quizlet.com/" >
             <img src="images\quizlet.png"alt="Syllabus"></a></div>
    </div>
    </div>
    <div class="other-box">
        <div class="content">
            <p>Project Gutenberg - offers free access to over 60,000 e-books in the public domain:</p>
            <div class="image"> <a href="https://www.gutenberg.org/" > <img src="images\pg-logo.png"alt="Syllabus"></a></div>
    </div>
    </div>
    <div class="other-box">
    <div class="content">
        <p>Canva - a graphic design platform to create professional-looking presentations, flyers, posters, and more:</p>
        <div class="image"><a href=" https://www.canva.com/" > <img src="images\canva.svg"alt="Syllabus"></a></div>
    </div>
    </div>
    <div class="other-box">
    <div class="content">
        <p>Geeks for Geeks: the ultimate hub for computer science resources and coding knowledge</p>
        <div class="image">    <a href="https://www.geeksforgeeks.org/"> <img src="images\gfg.png"alt="Syllabus"></a></div>
    </div>
    </div>
    <div class="other-box">
    <div class="content">
        <p>Evernote - a note-taking and organization app to keep track of lectures, assignments, and other important information</p>
       <div class="image"> <a href="https://evernote.com/" > <img src="https://evernote.com/img/logo/evernote/primary.svg"alt="Syllabus"></a></div>
    </div>
    </div>
    </div>
    </section>

<!------------------------------------------------------------------------------->
<!--footer start-->
<?php
require("footer.php");
?>
<!--footer end-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>