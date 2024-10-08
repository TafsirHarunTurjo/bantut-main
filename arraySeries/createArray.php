<?php include "header.php";?>

        <section class="maincontent">
                <h2> This is main content</h2>
                
        


                
                


        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "The Bangladeshi time is :".date("h:i:sa")."<br>";
                date_default_timezone_get();
                echo date_default_timezone_get();    
        ?>
        </span>

        <hr>

        <?php
                /*
                $car = array("Volvo", "Audi","BMW","Toyota");
                $length = count($car); 
                
                for($i = 0; $i < $length; $i++){
                    echo $car[$i]."<br/>"; 
                }
                

                $age = array(
                        "Sazzad Bhai" => 53,
                        "Sakib Bhai" => 28,
                        "Sazzat Bhai" => 32
                    );
                    
                    foreach($age as $key=>$value){
                        echo "Name = ".$key.", Age :".$value;
                        echo '<br>';
                    }
                    */


                    $employeeStatus= array(
                        array("Sazzad", 52, "TechLead","Humaira Bhaban"),
                        array("Sakib", 28, "SeniorSoft","Humaira Bhaban"),
                        array("Sazzat", 32,"SoftE","Parvin Vila"),
                        array("Navid", 30,"Intern", "Station Not Available")
                );


                for($r=0; $r<4; $r++){
                        echo "<p>Employment details</p>";
                        echo "<ul>";

                        for($c=0; $c<4; $c++){
                                echo "<li>".$employeeStatus[$r][$c]."</li>";

                        }
                        
                        echo"</ul>";
                }
                
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
