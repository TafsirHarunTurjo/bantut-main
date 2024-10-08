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
        </style>
</head>
<body>
<div class="phpcoding">


        <section class="headeroption">
                <h2>PHP Fundamental Training</h2>
        </section>

        <section class="maincontent">
                <h2> This is main content</h2>
        
                <?php 
                echo "Array of PHP";           
        ?>
        <hr>
                
        
        <?php   
                        #INDEXED ARRAYS
                $x= array(5,3,9,10,15);
                 /*
                echo $x[0];
                echo $x[1];
                echo $x[2];
                echo $x[3];
                echo $x[4];
                
                $x[0]=5;
                $x[1]=3;
                $x[2]=9;
                $x[3]=10;
                $x[5]=15;
                 

                echo count($x);
                */

                        #Printing all vlaues using loop

                 $length=  count($x);
                 
                 for($i=0; $i<$length; $i++){
                        echo $x[$i];
                        echo ",<br/>";
                 }
                
        ?>
        


        </section>


        


        <section class="footoption">
                <h2><?php echo "http:/www.xyz.com"?></h2>
        </section> 
</div>       
</body>
</html>