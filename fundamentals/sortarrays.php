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
                echo "Sorting Array of PHP";           
        ?>
        <hr>
                
        
        <?php   
                /*$names = array("Sazzad", "Sakib", "Sazzat", "Navid");
                sort($names);

                for($i=0; $i<4; $i++){
                        echo $names[$i];
                        echo"<br>";
                }*/



                /*$names = array("Sazzad", "Sakib", "Sazzat", "Navid");
                sort($names);
                $length= count($names);

                for($i=0; $i<$length; $i++){
                        echo $names[$i];
                        echo"<br>";
                }*/



                /*$names = array("Sazzad", "Sakib", "Sazzat", "Navid");
                rsort($names);
                $length= count($names);

                for($i=0; $i<$length; $i++){
                        echo $names[$i];
                        echo"<br>";
                }*/




                /*
                $num = array(25, 5, 15, 30, 20);
                sort($num);
                $length= count($num);

                for($i=0; $i<$length; $i++){
                        echo $num[$i];
                        echo"<br>";
                }*/



                /*$num = array(25, 5, 15, 30, 20);
                rsort($num);
                $length= count($num);

                for($i=0; $i<$length; $i++){
                        echo $num[$i];
                        echo"<br>";
                }*/




                /*$age = array("Sazzad"=>"52", "Sakib"=>"28", "Sazzat"=>"32", "Navid"=>"30");

                asort($age);

                foreach($age as $x=>$value){
                        echo "The age of ".$x." is ".$value;
                        echo "<br>";

                }*/


                $age = array("Sazzad"=>"52", "Sakib"=>"28", "Sazzat"=>"32", "Navid"=>"30");

                ksort($age);

                foreach($age as $x=>$value){
                        echo "The age of ".$x." is ".$value;
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