<!DOCTYPE html>
<html>
    <head>
        <title>Question Input</title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript" script-name="bebas-neue" src="http://use.edgefonts.net/bebas-neue.js"></script>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            .wrapper{
                width: 600px;
                height: 800px;
                position: absolute;
                left: 40%;
                top: 15px;
            }
            .content{
                width: 800px;
                padding: 30px;
                background-color: #f1f1f1;
                border-radius: 4px;
                position: relative;
                left: -40%;
                top: 15px;
                -webkit-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                -moz-box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
                box-shadow: 0px 0px 77px -2px rgba(0,0,0,0.51);
            }
            textarea{
                width: 100%;
                height: 320px;
                padding: 12px 20px;
                font-size: 16px;
                box-sizing: border-box;
                border: 2px solid rgba(0, 0, 0, 0.25);
                border-radius: 4px;
                background-color: #ffffff;
                resize: none;
                outline: none;
                margin-bottom: 20px;
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
                width: 50%;
                display: inline;
                margin: 5px;
                margin-top: 20px;
            }
            input[type=text], input[type=password] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 2px solid rgba(0, 0, 0, 0.25);
                border-radius: 4px;
                box-sizing: border-box;
            }
            input[type=text]:focus, input[type=password]:focus,select:focus {
                border: 2px solid #555;
                outline: none;
            }
            textarea:focus{
                border: 2px solid #555;
                outline: none;
            }
            h3{
                padding-bottom: 10px;
            }
            select {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 2px solid rgba(0, 0, 0, 0.25);
                border-radius: 4px;
                box-sizing: border-box;
            }
        </style>
    </head>
    <body>
        <?php
            session_start();
            require_once 'Connect.php';
            if(isset($_POST['submit'])){
                $nono = $_SESSION['counter'];
                $nono -= 1;
                $_SESSION['counter']=$nono;
                if($nono==0){
                    $Q = $_POST['Q'];
                    $A = $_POST['A']; 
                    $B = $_POST['B']; 
                    $C = $_POST['C']; 
                    $D = $_POST['D'];
                    $Corr = $_POST['Corr'];
                    $query = "insert into questions(Question,OptionA,OptionB,OptionC,OptionD,Correct) values ('$Q','$A','$B','$C','$D','$Corr')";
                    mysqli_query($conn, $query);
                    header('Location: ../webupdated/TFinal.php');
                    exit();
                }
                elseif($nono<90){
                    $Q = $_POST['Q'];
                    $A = $_POST['A']; 
                    $B = $_POST['B']; 
                    $C = $_POST['C']; 
                    $D = $_POST['D'];
                    $Corr = $_POST['Corr'];
                    $query = "insert into questions(Question,OptionA,OptionB,OptionC,OptionD,Correct) values ('$Q','$A','$B','$C','$D','$Corr')";
                    mysqli_query($conn, $query);
                }   
            }
        ?>
        <div class="wrapper">
            <div class="content">
                <form action='Qint.php' method='post'>
                    <h3>Question No.
                        <?php 
                            $num= 91-$_SESSION['counter']; 
                            echo $num;
                            if($num>=1&&$num<=30)
                            {
                                echo " (Physics)";
                            }
                            elseif($num>=31&&$num<=60)
                            {
                                echo " (Chemistry)";
                            }
                            elseif($num>=61&&$num<=90)
                            {
                                echo " (Mathematics)";
                            }
                        ?>
                    </h3>
                    <textarea name='Q'>Enter Question here</textarea>
                    Option A<input type='text' name='A'><br>
                    Option B<input type='text' name='B'><br>
                    Option C<input type='text' name='C'><br>
                    Option D<input type='text' name='D'><br>
                    Correct Option
                    <select name='Corr'>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                    <center>
                        <input type='submit' name='submit' value='Next'>
                    </center>
                </form>
            </div>
        </div>
    </body>
</html>