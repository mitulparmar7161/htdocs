
<?php



if(isset($_POST['email'])){
    $uemail = $_POST['email'];
    $dbh = mysqli_connect('localhost','root','','test');

    $sql = "SELECT email FROM form WHERE email = '$uemail'";
    $stmt = mysqli_query($dbh,$sql);

   if(mysqli_num_rows($stmt)>0){
    echo "false";
   }  
   else{
    echo "true";
   }
}   

if(isset($_POST['submit'])){


    $conn = mysqli_connect('localhost','root','','test');

    $name=$_POST["name"];
    $email=$_POST["email"];
    $contact=$_POST["contact"];
    $age=$_POST["age"];
    $address=$_POST["address"];
    $gender=$_POST["gender"];
    $profile=$_POST["profile"];
    $date=$_POST["date"];
    $time=$_POST["time"];
    
    
    $sqli = "insert into form (name,email,contact,age,address,gender,profile,date,time)
            values ('$name','$email','$contact','$age','$address','$gender','$profile','$date','$time')";
    $done = mysqli_query($conn,$sqli);
    
    if($done){
        echo "Data Successfully Inserted";
        header("Location: form2.php");
    }
    else {
        "Data Not Inserted ";
    }

}






?>