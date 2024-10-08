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
                        min-height:500px; color: powderblue; padding: 20px;
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

                1.String
                2.Int
                3.Float
                4.Boolean
                5.Array
                6.Object
                7.Null
                8.Resource

                <br><hr>
                

                1.String
                <br>
                
        <?php 
             $str ="String Data";
             echo $str;
        ?>      
               <br>  <hr>         

                2.Int
                <br>
        <?php
             $int = 10;
             echo $int;
             var_dump($int);
             
        ?>
        
        <br><hr>
                

                3.Float
                <br>
                
        <?php 
             $float =10.12898198278;
             echo $float;
        ?>      
               <br>  <hr> 


               
                

                4.Boolean
                <br>
                
        <?php 
             $bool ="true";
             echo $bool."/";
             $bool ="false";
             echo $bool;

        ?>      
               <br>  <hr> 


               5.Array
                <br>
                
        <?php 
              $arr = array("BMW","AUDI","Nissan","Toyota"); 
              echo var_dump($arr);

        ?>      
               <br>  <hr> 

               6.Object
                <br>
                
        <?php 
               class Student{
                        function department(){
                                return "Physics";
                        }
                        function details(){
                               echo $this->department();
                        }
               }
               $st = new Student();
               $st ->details();

        ?>      
               <br>  <hr> 


        </section>


        


        <section class="footoption">
                <h2><?php echo "http:/www.xyz.com"?></h2>
        </section> 
</div>       
</body>
</html>