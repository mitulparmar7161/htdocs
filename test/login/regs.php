
<?php



if(isset($_POST['email'])){
    $uemail = $_POST['email'];
    $dbh = mysqli_connect('localhost','root','','test');

    $sql = "SELECT email FROM login WHERE email = '$uemail'";
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
    $password= password_hash($_POST["password"], PASSWORD_DEFAULT);
    

    
    $sqli = "insert into login (name,email,password)
            values ('$name','$email','$password')";
    $done = mysqli_query($conn,$sqli);
    
    if($done){
        echo "Data Successfully Inserted";
        header("Location: login.php");
    }
    else {
        "Data Not Inserted ";
    }

}



?>