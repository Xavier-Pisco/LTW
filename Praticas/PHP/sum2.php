<!DOCTYPE html>
<html>
    <head>
        <title> Sum result </title>
        <style>
            html {
                padding: 1em;
            }
            a {
                display: block;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php
            echo $_GET["num1"] + $_GET["num2"];
            echo '<a href="form2.html">Return</a>';
        ?>
    </body>
</html>