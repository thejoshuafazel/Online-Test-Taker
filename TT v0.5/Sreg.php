<html>
    <head>
    </head>
    <body>
        <?php
            require_once 'Connect.php';
            if(isset($_POST['submit'])){
                $email = $_POST['email']; 
                $duplicate = "select * from students where email='$email'";
                $dup_result = mysqli_query($conn , $duplicate) or die(mysql_error());
                if( mysqli_num_rows($dup_result) >=1)
                {
                    header('Location: Ssign.html?email=registered');
                    exit();
                }
                else {
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $inst = $_POST['inst'];
                        $pwd = $_POST['pass'];
                        $encrypt_pwd = sha1( $pwd );
                        $query = "insert into students(fname,lname,inst,email,pass) values ('$fname','$lname','$inst','$email','$encrypt_pwd')";
                        mysqli_query($conn, $query);
                        header('Location: SLogin.html');
                }
            }
        ?>
    </body>
</html>