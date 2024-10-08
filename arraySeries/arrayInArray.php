<?php include "header.php";?>

        <section class="maincontent">
                <h2> This is main content</h2>
                
        


                
                


        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "Time:".date("h:i:sa")."<br>";
         
        ?>
        </span>

        <hr>

        <?php
                $coder = array("Sazzad", "Sakib", "Sazzat", "Navid");
                if(isset($_POST['username'])){
                        $txt = $_POST['username'];


                        if(in_array($txt, $coder)){
                                echo "$txt Exists.";
                        }else{
                                echo "$txt does not exists!!!";
                        }
                }
                       
                
        ?>
        
        <form action="arrayInArray.php" method="post">
                <input type="text" name="username">
                <input type="submit" value="Submit">
        </form>
        

        </section>

 <?php include "footer.php";?>
