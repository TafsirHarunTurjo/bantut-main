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

                if(isset($_FILES['image'])){
                        $fileName = $_FILES['image']['name'];
                        $filetmp  = $_FILES['image']['tmp_name'];
                        move_uploaded_file($filetmp,"images/".$fileName);
                        echo "image uplaodes successfully";
                }
               

        ?>


        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
                <input type="file" name="image"/>
                <input type="submit" value="Submit"/>
        </form>

        
        

        </section>

 <?php include "footer.php";?>
