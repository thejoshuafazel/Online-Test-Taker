<?php
    session_start();
    require_once 'Connect.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $newpwd = $_POST['pass'];
        $encrypt_pwd = sha1($newpwd);
        $query = "select * from teachers where email = '$email' and pass='$encrypt_pwd'";
        $result = mysqli_query( $conn, $query) or die(mysql_error());
        if(mysqli_num_rows($result) == 1)
        { 
            if(!isset($_COOKIE['email'])) {
                setcookie("email", $email, time()+(86400*30));
                $_SESSION['counter'] = 91;
            }
        }
        else
        { 
            header ('Location: ./Tlogin.html?login=failed');
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Question Input</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" script-name="bebas-neue" src="http://use.edgefonts.net/bebas-neue.js"></script>
        <style>
            * {
                margin: 0;
                padding: 0;
            }
            input[type=submit] {
                background-color: green;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                width: 48%;
                display: inline;
                margin: 5px;
                margin-top: 20px;
            }
            input[type=submit]:hover {
                opacity: 0.8;
            }
            .container {
                position: absolute;
                left: 50%;
                top: 20%;
            }
            .content {
                width: 400px;
                background-color: #f1f1f1;
                border-radius: 4px;
                padding: 40px;
                position: relative;
                left: -50%;
                top: 30%;

                -webkit-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                -moz-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
            }
            h3 {
               margin-bottom: 15px; 
            }
            ul li{
                padding: 4px;
                font-size: 18px;
            }
            h3 {
                font: normal 30px/1 "bebas-neue", Helvetica, sans-serif;
                color: black;
                letter-spacing: 2px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                    <ul>
                        <center>
                            <h3>INSTRUCTIONS TO ENTER QUESTIONS</h3>
                        </center>
                        <li>Please DO NOT refresh the page while entering the questions.</li>
                        <li>Please DO NOT close the page before finishing.</li>
                        <li>The first 30 questions should be Physics problems.</li>
                        <li>The next 30 questions should be Chemistry problems.</li>
                        <li>The last 30 questions should be Mathematics problems.</li>
                    </ul>
                <center>
                    <form action="Qint.php" method="post">
                        <input type="submit" name="submit" value="Start">
                    </form>
                </center>
            </div>
        </div>
    </body>
</html>