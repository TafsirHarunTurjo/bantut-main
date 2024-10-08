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
                $intnum = 300;
                $min = 1;
                $max = 200;

                if(filter_var($intnum,FILTER_VALIDATE_INT, array("options" => array ("min_range" => $min, "max_range"=> $max)))=== false){
                        echo "Its not Valid";
                }else {
                        echo "Its Valid";
                }
                */

                $intnum = 100;
                $min = 1;
                $max = 200;

                if(filter_var($intnum,FILTER_VALIDATE_INT, array("options" => array ("min_range" => $min, "max_range"=> $max)))){
                        echo "Its Valid range";
                }else {
                        echo "Its Not Valid range";
                }

                echo "<br/>";


                #                       https://www.hashbangcode.com/

                $url = "http://www.hashbangcode.com/";

                if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
                        echo "This url is valid";

                } else{
                        echo "IT has no query string.";
                }
        ?>


        
        
        

        </section>

 <?php include "footer.php";?>
