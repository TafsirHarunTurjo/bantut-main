<?php include "header.php"; ?>


<?php   
        if(isset($_POST['submit'])){
                $coder = $_POST['coder'];
                echo "You Have Selected :";
                foreach($coder as $leng=>$value){
                        echo $value.",";
                        
                }
        }
?>





 <form action="" method="post" name="myform" id="myform">
        <table>
                <tr>
                        <td>Language :</td>
                        <td>
                                <input type="checkbox" name="coder[]" value="PHP">PHP
                                <input type="checkbox" name="coder[]" value="JAVA">JAVA
                                <input type="checkbox" name="coder[]" value="C#">C#
                        </td>
                </tr>
                <tr>
                        <td></td>
                        <td>
                                <input type="submit" name="submit" value="Submit">
                                <input type="reset" value="Clear">
                        </td>
                </tr>
        </table>
 </form>



<?php include "footer.php"; ?>