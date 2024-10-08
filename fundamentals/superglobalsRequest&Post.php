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
                
        


        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                
                 Username: <input type="text" name= "username"/>
                 <input type="submit" value="Submit"/>

        </form>
        
        <?php   
                    #_Request varibale

                    /*if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $name = $_REQUEST['username'];
                        if(empty($name)){
                                echo "<span style='color:red'>User Name Cannot be empty!!</span>";
                        }
                        else{
                                echo"<span style='color:green'>You have submitted:".$name."</span>";
                        }
                    }*/


                        #POST variable


                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $name = $_POST['username'];
                        if(empty($name)){
                                echo "<span style='color:red'>User Name Cannot be empty!!</span>";
                        }
                        else{
                                echo"<span style='color:green'>You have submitted:".$name."</span>";
                        }
                    }



        ?>
        


        </section>


        


        <section class="footoption">
                <h2><?php echo "http:/www.xyz.com"?></h2>
        </section> 
</div>       
</body>
</html>