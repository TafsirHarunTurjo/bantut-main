<?php include "header.php"; ?>


<?php
        if(isset($_POST['gender'])){
                $gen = $_POST['gender'];
                if($gen =="Male"){
                        echo"You are Male";
                
                }elseif($gen == "Female"){
                        echo "You are $gen";

                }else {
                        echo"Youre Gay!!";
                }
        }
?>


 <form action="" method="post" name="myform" id="myform" >
        <table>
                <tr>
                        <td>Gender :</td>
                        <td>
                                <input type="radio" name="gender" value="Male">Male
                                <input type="radio" name="gender" value="Female">Female
                                <input type="radio" name="gender" value="Others">Others
                        </td>
                </tr>
                <tr>
                        <td></td>
                        <td>
                                <input type="submit" value="Submit">
                                <input type="reset" value="Clear">
                        </td>
                </tr>
        </table>
 </form>



<?php include "footer.php"; ?>