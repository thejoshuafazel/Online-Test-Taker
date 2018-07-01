<html>
    <head>
    </head>
    <body>
        <?php
            require_once 'Connect.php';
            if(isset($_POST['submit'])){
                $email = $_POST['email']; 
                $duplicate = "select * from teachers where email='$email'";
                $dup_result = mysqli_query($conn , $duplicate) or die(mysql_error());
                if( mysqli_num_rows($dup_result) >=1)
                {
                    header('Location: Tsign.html?email=registered');
                    exit();
                }
                else {
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $inst = $_POST['inst'];
                        $fid = $_POST['fid'];
                        $pwd = $_POST['pass'];
                        $encrypt_pwd = sha1( $pwd );
                        $query = "insert into teachers(fname,lname,inst,fid,email,pass) values ('$fname','$lname','$inst','$fid','$email','$encrypt_pwd')";
                        mysqli_query($conn, $query);
                        header('Location: TLogin.html');
                }
            }
        ?>
    </body>
</html>