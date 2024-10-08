<?php include "header.php";?>

        <section class="maincontent">
                <h2> This is main content</h2>
                


        <span style="float:right">
        <?php 
                date_default_timezone_set("Asia/Dhaka");
                echo "Time :".date("h:i:sa")."<br>";
                  
        ?>
        </span>


        <!--
        <table>
                <tr>
                        <td>Filter Name</td>
                        <td>Filter ID</td>
                </tr>
                <?php 
                        foreach(filter_list() as $id => $filter) {
                                echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
                        }
                ?>
        </table>
        -->


        <hr>

        <?php
                /*
                $str = "<h2> I am learning PHP<h2>";
                $newstr = filter_var($str, FILTER_SANITIZE_STRING);
                echo $newstr;
                

                
                $int = 50.5;
                if(filter_var($int, FILTER_VALIDATE_INT)){
                        echo " its an integer value";
                }else{
                        echo " the value is not integer";
                }
                

                $ip = "127.0.0.1";
                if(filter_var($ip, FILTER_VALIDATE_IP)){
                        echo " Its a valid IP address";
                }else{
                        echo " $ip is not a valid ip address";
                }
                
                

                $mail = "th.turja94@gmail.com";
                if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
                        echo " Its a valid Email address";
                }else{
                        echo " $mail is not a valid email address";
                }
                */

                $url = "http://www.xyz.com";
                if(filter_var($url, FILTER_VALIDATE_URL)){
                        echo " Its a valid web address";
                }else{
                        echo " $url is not a valid web  address";
                }

        ?>


        
        
        

        </section>

 <?php include "footer.php";?>
