<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         
  <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="login.css"/>
    <title>Document</title>
</head>
<body>
    




<?php include 'header.php';
// print_r($serchData);
?>
    <div id="main-content">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- post-container -->
                <div class="post-container">
                  <h2 class="page-heading">Search : Search Term</h2>
                  <?php   foreach($serchData as $data): ?>
                    <div class="post-content">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="post-img" href="single.php"><img src=" admin/upload/<?=$data['post_img'];?>" alt=""/></a>
                            </div>
                            <div class="col-md-8">
                                <div class="inner-content clearfix">
                                    <h3><a href='single.php'><?=  $data['title'] ?></a></h3>
                                    <div class="post-information">
                                        <span>
                                            <i class="fa fa-tags" aria-hidden="true"></i>
                                            <a href='category.php'><?= $data['category_name'] ?></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href='author.php'><?= $data['username']?></a>
                                        </span>
                                        <span>
                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                            <?=$data['post_date'];?>
                                        </span>
                                    </div>
                                    <p class="description">
                                       <?= $data['description'] ?>
                                    </p>
                                    <a class='read-more pull-right' href='single.php?singleId=<?= $data['user_id'] ?>'>read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
                   
                    <ul class='pagination'>
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                    </ul>
                </div><!-- /post-container -->
            </div>
            <?php include 'footer.php'; ?>
        </div>
      </div>
    </div>
<!-- <php include 'footer.php'; ?> -->
