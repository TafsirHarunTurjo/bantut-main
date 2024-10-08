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

                $creatFile =  fopen("new.txt", "w") or die('File is not found');  

                $one = "I work at bracits\n";
                fwrite($creatFile,$one);

                $two = "It is a Big Company\n";
                fwrite($creatFile,$two);

                $three = "The work environment is great\n";
                fwrite($creatFile,$three);

                

                fclose($$creatFile);
               

        ?>

        
        

        </section>

 <?php include "footer.php";?>
