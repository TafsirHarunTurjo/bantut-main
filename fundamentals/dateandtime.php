<?php
        $fonts = "verdana";
        $bgColor ="#AF7AC5";
        $fontColor ="#F4D03F"
?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP syntax</title>
        <style >
                body{
                        font-family: <?php echo $fonts?>;
                }
                .phpcoding{
                        width: 900px; margin: 0 auto; background: <?php echo "#581845"?> ; min-height: 400px;
                }
                .headeroption , .footoption  {
                        background:<?php echo $bgColor; ?> ; color: <?php echo $fontColor;?>; text-align: center; padding: 15px; 
                }
                .maincontent{
                        min-height:400px; color: powderblue; padding: 20px;
                 }
                 p{
                        margin: 0;
                 }
        </style>
</head>
<body>
<div class="phpcoding">


        <section class="headeroption">
                <h2>PHP Fundamental Training</h2>
        </section>

        <section class="maincontent">
                <h2> This is main content</h2>
        


                
        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "The Bangladeshi time is :".date("h:i:sa")."<br>";
                date_default_timezone_get();
                echo date_default_timezone_get();    
        ?>
        </span>




        <hr>
        



      
        <?php 
                 echo "Today's Date is :".date("d/m /Y")."<br>";
                 echo " And today is ".date("l")."<br>";
                 echo "Default Time is :".date("h:i:sa")."<br>";




                 date_default_timezone_set("Asia/Dhaka");
                 echo "The Bangladeshi time is :".date("h:i:sa")."<br>";
                 date_default_timezone_get();
                 echo date_default_timezone_get();



                 ##### Look at documentation ######



                 

                 echo "<br> <hr>";

                 echo "Today's Date is :".date("d.m.Y/D");
                 echo " And today is ".date("l");

                 echo "<br> <hr>";

                 echo "Today's Date is :".date("d-m-Y/D");
                 echo " And today is ".date("l");
        ?>
        


        </section>


        


        <section class="footoption">

                 <p>&copy;1995 All Rights Reserved By Tafsir Harun </p>
                 <p>&copy;<?php echo date("Y");?> All Rights Reserved By Tafsir Harun </p>
                 
                <h2><?php echo "http:/www.xyz.com"?></h2>
        </section> 
</div>       
</body>
</html>