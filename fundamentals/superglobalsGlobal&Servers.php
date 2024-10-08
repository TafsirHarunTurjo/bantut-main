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
                echo "SuperGlobals of PHP";           
        ?>
        <hr>
                
        
        <?php   
                    #GLOBAL Variables
                
                /* $x =5;
                $y =10;

                function sum(){
                        $GLOBALS["z"] = $GLOBALS['x'] + $GLOBALS['y'];

                }
                sum();
                echo $z; */








                   #$_SERVERS 

                echo $_SERVER['PHP_SELF'];
                echo '<br>';
                echo $_SERVER['SERVER_NAME'];
                echo '<br>';
                echo $_SERVER['SCRIPT_NAME'];
                echo '<br>';
                echo $_SERVER['HTTP_USER_AGENT'];
                echo '<br>';
                echo $_SERVER['SERVER_ADDR'];
        ?>
        


        </section>


        


        <section class="footoption">
                <h2><?php echo "http:/www.xyz.com"?></h2>
        </section> 
</div>       
</body>
</html>