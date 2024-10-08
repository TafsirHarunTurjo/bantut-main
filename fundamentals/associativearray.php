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
                        #ASSOCIATIVE ARRAYS
               
                $ages =array("Sazzad Bhai"=>"52","Sazzat Bhai"=>"32","Sakib Bhai"=>"28");

                /*
                $ages["Sazzad Bhai"]="52";
                $ages["Sazzat Bhai"]="32";
                $ages["Sakib Bhai"]="28";
                */


                foreach($ages as $num=>$age){
                        echo "Boro Bhai er naam hocche ".$num.","."and age hocche ".$age;
                        echo "<br>";
                }

                
        ?>
        


        </section>


        


        <section class="footoption">
                <h2><?php echo "http:/www.xyz.com"?></h2>
        </section> 
</div>       
</body>
</html>