<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP syntax</title>
        <style >
                .phpcoding{
                        width: 900px; margin: 0 auto; background: <?php echo "#581845"?> ;
                }
                .headeroption , .footoption  {
                        background: #C70039; color: #FFC300; text-align: center; padding: 15px; 
                }
                .maincontent{
                        min-height:400px; color: powderblue; padding: 20px;
                 }
        </style>
</head>
<body>
<div class="phpcoding">


        <section class="headeroption">
                <h2>PHP Fundamental</h2>
        </section>

        <section class="maincontent">
                <h2> This is main content</h2>
        </section>


        <?php 
        echo "I love PHP "

                 /*comments*/


        ?>
        


        <section class="footoption">
                <h2><?php echo "http:/www.xyz.com"?></h2>
        </section> 
</div>       
</body>
</html>