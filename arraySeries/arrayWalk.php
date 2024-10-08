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

                    function myFunction($designation,$name){
                                echo "$name works as $designation in bracits<br> ";
                    }
                
                $name = array(
                        "Sazzad Bhai" => "TechLead",
                        "Sakib Bhai" => "SeniorSoft",
                        "Sazzat Bhai" => "Soft"
                    );
                
                array_walk($name , "myFunction")
                

                /*
                print("<pre>");
                print_r($color_one) ;
                print("</pre>");
                */
                
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
