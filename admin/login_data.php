
<?php



if(isset($_POST['email'])){
    $uemail = $_POST['email'];
    $dbh = mysqli_connect('localhost','root','','test');

    $sql = "SELECT email FROM login WHERE email = '$uemail' and role= 'admin'";
    $stmt = mysqli_query($dbh,$sql);

   if(mysqli_num_rows($stmt)<=0){
    echo "false";
    die;    
   }  
   else{
    echo "true";
   }
}   



if(isset($_POST['password']) && isset($_POST['pemail'])){
    $uemail = $_POST['pemail'];
    $dbh = mysqli_connect('localhost','root','','test');

    $sql = "SELECT password FROM login WHERE email = '$uemail'";
    $stmt = mysqli_query($dbh,$sql);
    $pass=$_POST['password'];
    $hash = $stmt->fetch_assoc();
    if($hash!=NULL){
        $newpass = password_verify($pass,$hash['password']);
   if(!$newpass){
    echo "false";
    die;
   }  
   else{
    echo "true";

   }
}  
else {
    echo "false";
}

}




if(isset($_POST['submit'])){
    session_start();
    
    $email=$_POST['email'];

    $_SESSION['email'] = $email;

    header("Location: home.php");

}
?>


