<?php


if(isset($_POST['enroll'])){
    $enroll = $_POST['enroll'];
    $dbh = mysqli_connect('localhost','root','','examsystem');

    $sql = "SELECT enroll FROM student WHERE enroll = '$enroll'";
    $stmt = mysqli_query($dbh,$sql);

   if(mysqli_num_rows($stmt)>0){
    echo "false";
   }  
   else{
    echo "true";
   }
} 



?>