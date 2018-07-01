<?php
     require_once 'Connect.php';
     $ques=$_GET["q"];
     $sql="SELECT OptionD FROM questions WHERE QID='$ques'";
     $result=mysqli_query($conn,$sql);
     if(mysqli_num_rows($result)>0){
         while($row = mysqli_fetch_row($result))
         {
             echo $row[0];
         }
     }
?>