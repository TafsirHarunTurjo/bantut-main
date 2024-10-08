<?php include "header.php";?>

        <section class="maincontent">
                <h2> This is main content</h2>
                


        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "Time :".date("h:i:sa")."<br>";
                  
        ?>
        </span>


        


        <hr>

        <?php
                /*
                function numCheck($num){
                        if($num>1){
                                throw new Exception("Value must be 1 or above");
                        }
                        return true;
                }
                try{
                        numCheck(10);
                        echo "If your see this, the number is 1 or below";
                }
                catch(Exception $e){
                        echo "Message :".$e->getMessage();
                }
                */


                function numCheck($num){
                        if($num !=5){
                                throw new Exception("Number is not 5");
                        }
                        return true;
                }
                try{
                        numCheck(5);
                        echo "Yes you have done";
                }
                catch(Exception $e){
                        echo "Error :".$e->getMessage();
                }



        ?>


        
        
        

        </section>

 <?php include "footer.php";?>
