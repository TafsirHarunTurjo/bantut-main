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
                
                        $array_one = array(
                                "a" => "red",
                                "b" => "green",
                                "c" => "blue",
                                "d" => "yellow"
                        );
                        $array_two = array(
                                "e" => "red",
                                "f" => "black",
                                "gf" => "purple"
                        );
                        $array_three = array(
                                "a" => "red",
                                "b" => "black",
                                "h" => "yellow"
                        );

                        $differ = array_diff($array_one, $array_two, $array_three);


        
                        print("<pre>");
                        print_r( $differ ) ;
                        print("</pre>");
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
