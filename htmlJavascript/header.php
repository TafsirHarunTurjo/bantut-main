<?php
        $fonts = "verdana";
        $bgColor ="#AF7AC5";
        $fontColor ="#F4D03F"
?>



<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP syntax</title>
        <style >
                body{
                        font-family: <?php echo $fonts?>;
                }
                .phpcoding{
                        width: 900px; margin: 0 auto; background: <?php echo "#581845"?> ; min-height: 400px;
                }
                .headeroption , .footoption  {
                        background:<?php echo $bgColor; ?> ; color: <?php echo $fontColor;?>; text-align: center; padding: 15px; 
                }
                .maincontent{
                        min-height:400px; color: powderblue; padding: 20px;
                 }
                 p{
                        margin: 0;
                 }
                 input[type = "text"]{
                        width: 250px;
                 }
                 select{
                        font-size: 18px; padding: 2px 5px; width: 250px;
                 }
                 .tblone{
                        width: 420px; border: 1px solid #fff; margin: 20px;
                 }
                 .tblone td{
                        padding: 5px 10px;
                 }
                 table.tblone tr:nth-child(2n+1){
                        background-color: #AF7AC5; height: 30px;
                 }
                 table.tblone tr:nth-child(2n){
                        background-color: #AF7AC5; height: 30px;
                 }
                 #myform{
                        width: 420px ; border: 1px solid #fff ; padding: 20px; 
                 }
        </style>
</head>
<body>
<div class="phpcoding">


        <section class="headeroption">
                <h2>HTML Form Handling With PHP & JavaScript</h2>
        </section>
                 
        <section class="maincontent">
        <h2> Main Content</h2>

        <span style="float:right">
                <?php
                date_default_timezone_set("Asia/Dhaka");
                echo "Time:" . date("h:i:sa");

                ?>
        </span>


        <hr>