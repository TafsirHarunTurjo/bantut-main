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
                $ourFile = fopen("text2forFileHandling.php","r") or die('File is not found');

                fread($ourFile, filesize("text2forFileHandling.php"));
                fclose($ourFile);


                #fgetc($ourFile, filesize("text2forFileHandling.php"));
                #fgetc($ourFile);

                /*
                while (!feof($ourFile)){
                        echo fgets($ourFile)."<br>";
                };

                fclose($ourFile);
                */

        ?>

        
        

        </section>

 <?php include "footer.php";?>
