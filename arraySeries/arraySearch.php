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
               
                $color_one = array("a"=> "red","b"=> "green","c"=> "blue","d"=> "yellow");

                if(isset($_POST['text'])){
                        global $txt;
                        $txt = $_POST['text'];
                        $result = array_search($txt, $color_one);
                        echo "You have searched by -> $txt and your key is  -> $result";
                }
               
                /*
                print("<pre>");
                print_r( $color_one) ;
                print("</pre>");
                

                print("<pre>");
                print_r(  $result) ;
                print("</pre>");
                */
                
        ?>
        <form action="arraySearch.php" method="post">
                <input type="text" name="text" value="<?php global $txt; echo $txt;?>">
                <input type="submit" name="Submit" class="">
        </form>
        
        

        </section>

 <?php include "footer.php";?>
