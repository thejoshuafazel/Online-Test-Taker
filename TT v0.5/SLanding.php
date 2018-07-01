<?php
    session_start();
    require_once 'Connect.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $newpwd = $_POST['pass'];
        $encrypt_pwd = sha1($newpwd);
        $query = "select * from students where email = '$email' and pass='$encrypt_pwd'";
        $result = mysqli_query( $conn, $query) or die(mysql_error());
        if(mysqli_num_rows($result) == 1)
        { 
            if(!isset($_COOKIE['emails'])) {
                setcookie("emails", $email, time()+(86400*30));
            }
        }
        else
        { 
            header ('Location: .Slogin.html?login=failed');
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Question Papers</title>
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
                width: 600px;
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
            a {
                color: inherit;
                text-decoration: none;
            }
            .qp {
                font-size: 18px;
                width: 125px;
                height: 40px;
                padding: 20px;
                margin: 10px;
                background-color: white;
                display: inline-block;
                border-radius: 4px;
                text-align: center;
                -webkit-box-shadow: 0px 0px 20px -2px rgba(0,0,0,0.48);
                -moz-box-shadow: 0px 0px 20px -2px rgba(0,0,0,0.48);
                box-shadow: 0px 0px 20px -2px rgba(0,0,0,0.48);
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div>
                    <?php
                        require_once 'Connect.php';
                        $query = "SELECT * from questions";
                        $result = mysqli_query( $conn, $query) or die(mysql_error());
                        $row_cnt = $result->num_rows;
                        $qno = 0;
                        echo "<h2>Number Of Questions in Our Database: ".$row_cnt."</h2><br>";
                        while($row_cnt%90==0&&$row_cnt>0)
                        {
                            $row_cnt -= 90;
                            $qq=$qno+1;
                            echo "<div class='qp'>
                                    <a href='./Exam.php?qno=$qno'>Question Paper $qq</a>
                                    </div>";
                            $qno +=1;
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>