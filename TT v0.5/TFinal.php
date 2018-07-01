<?php
    session_start();
    setcookie("email", "", time() - 3600);
    session_unset(); 
    session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Thank You!</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" script-name="bebas-neue" src="http://use.edgefonts.net/bebas-neue.js"></script>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            .containers{
                width: 600px;
                position: absolute;
                left: 50%;
                top: 20%;
            }
            .container{
                width: 600px;
                padding: 30px;
                background-color: #f1f1f1;
                border-radius: 4px;
                position: relative;
                left: -50%;
                top: 30%;

                -webkit-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                -moz-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
            }
            h2 {
                font: normal 30px/1 "bebas-neue", Helvetica, sans-serif;
                color: black;
                letter-spacing: 4px;
            }
            .text {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <div class="containers">
            <div class="container">
                <h2>Thank You!</h2><br>
                <p class="text">Your questions have been added to the database!</p><br>
                <p>You can now close this window.</p>
            </div>
        </div>
    </body>
</html>