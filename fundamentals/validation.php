<?php
$fonts = "verdana";
$bgColor = "#AF7AC5";
$fontColor = "#F4D03F"
?>



<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP syntax</title>
        <style>
                body {
                        font-family: <?php echo $fonts ?>;
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
                                        <tr>
                                                <td>Name</td>
                                                <td><input type="text" name="name"  /></td>

                                        </tr>
                                        <tr>
                                                <td>E-mail</td>
                                                <td><input type="text" name="email" /></td>
                                        </tr>
                                        <tr>
                                                <td>Website</td>
                                                <td><input type="text" name="website" /></td>
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

                        $name = $email = $website = $comment = $gender = ""; 
                       
                                           

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                $name    = validate($_POST["name"]);
                                $email   = validate($_POST["email"]);
                                $website = validate($_POST["website"]);
                                $comment = validate($_POST["comment"]);
                                $gender  = validate($_POST["gender"]);




                                echo "Name: " . $name . "<br>";
                                echo "Email: " . $email . "<br>";
                                echo "Website: " . $website . "<br>";
                                echo "Comment: " . $comment . "<br>";
                                echo "Gender: " . $gender;

                        }



                        function validate($data)
                        {

                                $data = trim($data);
                                $data = stripcslashes($data);
                                $data = htmlspecialchars($data);

                                return $data;
                        }







                        ?>



                </section>





                <section class="footoption">
                        <h2><?php echo "http:/www.xyz.com" ?></h2>
                </section>
        </div>
</body>

</html>