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


                        $arr = array(
                                "name","age");

                                


                                if(array_key_exists(2, $arr)){
                                        echo "Key already exists";
                                }else{
                                        echo "Key does not exists";
                                }


                        
                        /*$arr = array(
                                "name"=> "Tafsir",
                                "age" => "29"
                        );

                        if(array_key_exists("name", $arr)){
                                echo "Key already exists";
                        }else{
                                echo "Key does not exists";
                        }*/


                        /*
                        print("<pre>");
                        print_r( $result ) ;
                        print("</pre>");
                        */
        ?>
        
        

        </section>

 <?php include "footer.php";?>
