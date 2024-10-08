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
                if(isset($_POST['text'])){
                        global $txt;
                        $txt = $_POST['text'];
                        echo strtoupper($txt);
                }
                
                if(isset($_POST['text'])){
                        global $txt;
                        $txt = $_POST['text'];
                        echo strtolower($txt);
                }
                
                if(isset($_POST['text'])){
                        global $txt;
                        $txt = $_POST['text'];
                        echo ucfirst($txt);
                }
               
                if(isset($_POST['text'])){
                        global $txt;
                        $txt = $_POST['text'];
                        echo ucwords($txt);
                }
                 */




                 ###### trim ####

                 if(isset($_POST['text'])){
                        global $txt;
                        $txt = $_POST['text'];
                        echo trim($txt, " .");
                }
        ?>


        <form action="caseChange.php" method="post">
                <input type="text" name="text" value="<?php global $txt; echo $txt;?>"/>
                <input type="submit" value="Submit"/>
        </form>

        
        
        

        </section>

 <?php include "footer.php";?>
