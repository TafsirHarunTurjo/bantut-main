<?php
$fonts = "verdana";
$bgColor = "#D7BDE2";
$fontColor = "#212F3C";

$errname = $erremail = $errweb  = $errgender = ""; #flag variables
$name = $email = $website = $comment = $gender = "";  
                                         

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {


                                if(empty($_POST["name"])){
                                        $errname ="<span style='color:red'>Name is Required</span>";
                                }else{
                                        $name    = validate($_POST["name"]);
                                }






                                if(empty($_POST["email"])){
                                        $erremail ="<span style='color:red'>E-mail is Required</span>";
                                }elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
                                        $erremail ="<span style='color:red'>Invalid E-mail</span>";
                                }else{
                                        $email   = validate($_POST["email"]);
                                }






                                if(empty($_POST["website"])){
                                        $errweb ="<p style='color:red'>Website is Required</p>";
                                }elseif(!filter_var($_POST["website"], FILTER_VALIDATE_URL)){
                                        $errweb ="<span style='color:red'>Invalid Website Format</span>";
                                }else{
                                        $website = validate($_POST["website"]);
                                }






                                if(empty($_POST["gender"])){
                                        $errgender ="<span style='color:red'>Gender is Required</span>";
                                }else{
                                        $gender  = validate($_POST["gender"]);
                                }




                                
                                

                                #$name    = validate($_POST["name"]);
                                #$email   = validate($_POST["email"]);
                                #$website = validate($_POST["website"]);
                                $comment = validate($_POST["comment"]);
                                #$gender  = validate($_POST["gender"]);




                                /*echo "Name: " . $name . "<br>";
                                echo "Email: " . $email . "<br>";
                                echo "Website: " . $website . "<br>";
                                echo "Comment: " . $comment . "<br>";
                                echo "Gender: " . $gender;*/

                        }



                        function validate($data)
                        {

                                $data = trim($data);
                                $data = stripcslashes($data);
                                $data = htmlspecialchars($data);

                                return $data;
                        }
?>



<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP syntax</title>
        <style>
                body {
                        font-family: <?php echo $fonts ?>; background-color: #D5D8DC;
                }

                .phpcoding {
                        width: 900px;
                        margin: 0 auto;
                        background: <?php echo "#581845" ?>;
                        min-height: 400px;
                }

                .headeroption,
                .footoption {
                        background: <?php echo $bgColor; ?>;
                        color: <?php echo $fontColor; ?>;
                        text-align: center;
                        padding: 15px;
                }

                .maincontent {
                        min-height: 400px;
                        color: powderblue;
                        padding: 20px;
                        background-color: #5D6D7E;
                }
        </style>
</head>

<body>
        <div class="phpcoding">


                <section class="headeroption">
                        <h2>PHP Fundamental Training</h2>
                </section>

                <section class="maincontent">
                        <h2> This is main content</h2>

                        <?php
                        echo "PHP Form Validation";
                        ?>
                        <hr>








                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                                <table>

                                <p style="color:yellow">* Required Fields </p>
                                        <tr>
                                                <td>Name</td>
                                                <td><input type="text" name="name"  />*<?php echo $errname ?></td>

                                        </tr>
                                        <tr>
                                                <td>E-mail</td>
                                                <td><input type="text" name="email" />*<?php echo $erremail ?></td>
                                        </tr>
                                        <tr>
                                                <td>Website</td>
                                                <td><input type="text" name="website" />*<?php echo $errweb ?></td>
                                        </tr>
                                        <tr>
                                                <td>Comment</td>
                                                <td><textarea name="comment" rows="5" cols="40"></textarea></td>
                                        </tr>





                                        <tr>
                                                <td>Gender</td>

                                                <td>
                                                        <input type="radio" name="gender" value="male"  /> Male
                                                        <input type="radio" name="gender" value="female" /> Female
                                                        <input type="radio" name="gender" value="others" /> Others
                                                        *<?php echo $errgender ?>
                                                </td>
                                        </tr>


                                        <tr>
                                                <td></td>

                                                <td>
                                                        <input type="submit" name="submit" value="Submit" />
                                                </td>
                                        </tr>


                                </table>

                        </form>




                        <?php

                        







                        ?>



                </section>





                <section class="footoption">
                        <h2><?php echo "http:/www.xyz.com" ?></h2>
                </section>
        </div>
</body>

</html>