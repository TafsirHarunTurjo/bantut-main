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

                
                    $name = array(
                        "Sazzad Bhai" => "52",
                        "Sakib Bhai" => "28",
                        "Sazzat Bhai" => "32",
                        "Navid" => "30"
                    );

                    //arsort($name);
                    asort($name);



                    
                    foreach($name as $name=> $age){
                        echo "Name: ".$name."And his age is :".$age."<br>";
                    }


                     
               
                /*

               
                print("<pre>");
                print_r($color_one) ;
                print("</pre>");
                */
                
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
