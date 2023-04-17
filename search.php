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
  <title>search+</title>
</head>
<body>
	<?php
	require("header.php");
	?>
<div class="upload">
<form action="search.php" method="$_GET">
                             <input type="search" name="search" id="search" placeholder="search for courses,Question Papers,Class.....">
                                
                                <input type="submit" id="btn" value="search" >
                                
   </form>
	

<?php

	$dir = "uploads/"; // folder path where notes are stored
	$files = scandir($dir);
	$keywords = $_GET['search'];
	if ($keywords !== '') {
		$filtered_files = array();
		foreach($files as $file) {
			if ($file !== '.' && $file !== '..') {
				if (stripos($file, $keywords) !== false) {
					$filtered_files[] = $file;
				}
			}
		}
		if (!empty($filtered_files)) {
			foreach($filtered_files as $file) {
				echo "<li><a href='$dir$file' target='_blank'>$file</a></li>";
			}
		} else {
			echo "No notes found for '$keywords'";
		}
	}
?>

</div>    

	<style>
		
form{
display: flex;
align-items:center;
height: 2.7rem;
width: 70%;
border-radius: 40px;
background-color: #f3f3ef;
margin: auto;
margin-top: 2rem;
margin-bottom: 2rem;
}
form:focus {
	
   border-radius: 40px;
   border-width: 1rem;
   border-style: groove;
   border-color:  #0d80eb;
   display: flex;
align-items:center;
height: 2.7rem;
width: 90%;
}
		.upload{
		  
		  transition: all 0.3s;
		  font-size: 16px;
		  margin-bottom: .2rem;
background-size: cover;
list-style: none;
 align-items: center;
		text-align: center;
		justify-content: center;
		}
	.upload	a{  display: block;

  padding-top: 1rem;
  background-color: rgb(223, 205, 255);
    box-shadow: -3px 3px 4px 2px rgba(0, 0, 0, 0.308);
    text-align: center;
    justify-content: center;
    align-items: center;
	width: 100%;
	margin-bottom: .2rem;
	align-items: center;
		text-align: center;
		justify-content: center;
		}
		a:hover {
		  color: #007bff;
		}
	</style>
