<!DOCTYPE html>
<?php
    if(!isset($_COOKIE['emails'])) {
        header ('Location: ./Slogin.html');
        exit();
    }
    include_once('Connect.php');
    $ans=$_GET['ans'];
    $num=$_GET['qno'];
    $wrong=0;
    $j=0;
    $correct=0;
    for( $i = 1; $i <= 90; $i++ ) {
        $ss=$num*90+$i;
        $sql="SELECT Correct FROM questions WHERE QID='$ss'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            while($row = mysqli_fetch_row($result))
            {   
                $char = substr( $ans, $j, 1 );
                $j=$j+2;
                if($row[0]==$char)
                    $correct++;
                else if($row[0]!=$char&&$char!='U')
                    $wrong++;
            }
        }
    }
    if(isset($_COOKIE['emails'])) {
        setcookie("emails", "", time()-3600);
    }
?>
<html>
    <head>
        <title>Result</title>
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
        </style>
    </head>
    <body>
        <div class="containers">
            <div class="container">
                <h2>Result</h2><br>
                <div>
                    <h1>You have scored :<?php echo $marks=$correct*3-$wrong;?>/270</h1><br>
                    <p>Number of questions answered correctly:<?php echo $correct;?><br><br></p>
                    <p>You can now close this window and start a new test</p>
                </div>
            </div>
        </div>
    </body>
</html>