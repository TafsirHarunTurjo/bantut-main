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
                $name = array(
                        array(
                                'id'   => '1001',
                                'first_name' => 'Sazzad',
                                'last_name' => 'Bhai'
                        ),
                        array(
                                'id'   => '1002',
                                'first_name' => 'Sakib',
                                'last_name' => 'Bhai'
                        ),
                        array(
                                'id'   => '1003',
                                'first_name' => 'Sazzat',
                                'last_name' => 'Bhai'
                        ),
                        array(
                                'id'   => '1004',
                                'first_name' => 'Navid',
                                'last_name' => 'Morshed'
                        )
                        );

                        $firstName = array_column($name, 'first_name','id');

                        print("<pre>");
                        print_r($firstName);
                        print("</pre>");
                
        ?>
        
        

        </section>

 <?php include "footer.php";?>
