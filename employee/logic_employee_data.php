    
<?php


if(isset($_POST['email'])){
    $uemail = $_POST['email'];
    $dbh = mysqli_connect('localhost','root','','test');

    $sql = "SELECT email FROM employee WHERE email = '$uemail'";
    $stmt = mysqli_query($dbh,$sql);

   if(mysqli_num_rows($stmt)>0){
    echo "false";
   }  
   else{
    echo "true";
    
   }
}   


if(isset($_POST['phone'])){
    $phone = $_POST['phone'];
    $dbh = mysqli_connect('localhost','root','','test');

    $sql = "SELECT phone FROM employee WHERE phone = '$phone'";
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
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $doj=$_POST['doj'];
    $dob=$_POST['dob'];
    $email=$_POST["email"];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $image=$_POST['image'];
    $status=$_POST["status"];
    

    
    $sqli = "insert into employee (fname,lname,doj,dob,email,address,phone,image,status)
            values ('$fname','$lname','$doj','$dob','$email','$address','$phone','$image','$status')";
    $done = mysqli_query($conn,$sqli);
    
    if($done){
        echo "Data Successfully Inserted";
        header("Location: employee_data.php");
    }
    else {
        "Data Not Inserted ";
    }

}

if(isset($_POST['submit1'])){


    $conn = mysqli_connect('localhost','root','','test');
    $id=$_POST['id'];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $doj=$_POST['doj'];
    $dob=$_POST['dob'];
    $email=$_POST["email"];
    $address=$_POST['address'];
    $phone=$_POST['phone'];
    $image=$_POST['image'];
    $status=$_POST["status"];
    

    
    $sqli = "update employee set fname='$fname',lname='$lname',doj='$doj',dob='$dob',email='$email',address='$address',phone='$phone',image='$image',status='$status' where id=$id ";
    $done = mysqli_query($conn,$sqli);
    
    if($done){
        echo "Data Successfully Inserted";
        header("Location: employee_data.php");
    }
    else {
        "Data Not Inserted ";
    }

}
?>