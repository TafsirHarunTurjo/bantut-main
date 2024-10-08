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
                /*function school($name){
                        echo "$name is a good school <br>";
                }
                school("MGHS");
                school("DRMC");
                school("VMC");
                school("AHS");
                school("BNMPC");
                school("BNMMRC");*/



                /*function bhai($name){
                        echo "$name is a humble person <br>";
                }
                bhai("BORO SAZZAD BHAI");
                bhai("choto sazzat bhai"); */



                /*function bhai($name="Sakib bhai"){
                        echo "$name is a humble person <br>";
                }
                bhai("BORO SAZZAD BHAI");
                bhai("choto sazzat bhai");
                bhai(); */


                /*function bhai($name = "Sakib Bhai", $year="1990"){
                        echo "$name is a humble person and and started their career in $year <br>";
                }
                bhai("BORO SAZZAD BHAI","1944");
                bhai("choto sazzat bhai","2010");
                bhai(); */


                function calculate($num1, $num2){
                        $numTot= $num1+$num2;
                        /*$numTot= $num1-$num2;
                        $numTot= $num1*$num2;
                        $numTot= $num1/$num2;*/
                        return $numTot;
                }
                echo "The value of 10+5 =".calculate(10, 5);
                /*echo "<br>The value of 10-5 =".calculate(10, 5);
                echo "<br>The value of 10*5 =".calculate(10, 5);
                echo "<br>The value of 10/5 =".calculate(10, 5);*/
        ?>
        <hr>
        <?php   
             
        ?>
        


        </section>


        


        <section class="footoption">
                <h2><?php echo "http:/www.xyz.com"?></h2>
        </section> 
</div>       
</body>
</html>