<!doctype html>
<html>
<head>
 <title>PHP Code Practice</title>
 <style>
  body{font-family:verdana}
  .phpcoding{width:900px; margin: 0 auto;background:#f1f1f1}
  .headeroption, 
  .footeroption{background:#2B81D7;color:#fff;text-align:center;padding:20px;}
  .headeroption h2, 
  .footeroption h2{margin:0}
  .maincontent{min-height:350px; padding:20px;}
  span{color: #2B81D7;}
 </style>
</head>
<body>

<div class="phpcoding">
 <section class="headeroption">
  <h2><?php echo "Object-Oriented PHP"; ?></h2>
 </section> 
 <section class="maincontent">
 
 
 <span style="float:right">
                <?php
                date_default_timezone_set("Asia/Dhaka");
                echo "Time:" . date("h:i:sa");

                ?>
        </span>
   <?php
     
   ?>