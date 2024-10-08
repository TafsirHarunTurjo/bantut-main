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
                        #MULTIDIMENTIONAL ARRAYS
                /*
                $cars= array(
                        array("BMW", 20, "ok"),
                        array("audi", 30, 5.9),
                        array("Nissan", 25,10),
                        array("Ford", 15,40)
                );
                #echo $cars[2][0];


                for($row=0; $row<4; $row++){
                        echo "<p>Row Number $row</p>";
                        echo "<ul>";
                        for($col=0; $col<3; $col++){
                                echo "<li>".$cars[$row][$col]."</li>";
                        }
                        echo "</ul>";
                }
                */



                $employeeStatus= array(
                        array("Sazzad", 52, "TechLead","Humaira Bhaban"),
                        array("Sakib", 28, "SeniorSoft","Humaira Bhaban"),
                        array("Sazzat", 32,"SoftE","Parvin Vila"),
                        array("Navid", 30,"Intern", "Station Not Available")
                );


                for($r=0; $r<4; $r++){
                        echo "<p>Employment details</p>";
                        echo "<ul>";

                        for($c=0; $c<4; $c++){
                                echo "<li>".$employeeStatus[$r][$c]."</li>";

                        }
                        
                        echo"</ul>";
                }


                
        ?>
        


        </section>


        


        <section class="footoption">
                <h2><?php echo "http:/www.xyz.com"?></h2>
        </section> 
</div>       
</body>
</html>