    
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
    $role=$_POST["role"];
    $password= password_hash($_POST["password"], PASSWORD_DEFAULT);
    

    
    $sqli = "insert into login (name,email,password,role)
            values ('$name','$email','$password','$role')";
    $done = mysqli_query($conn,$sqli);
    
    $imageq="select id from login where email='$email'";
    $select= mysqli_query($conn,$imageq);
    $rowdata = mysqli_fetch_array($select);
    $userid=$rowdata['id'];


     $totalfiles = count($_FILES['file']['name']);

 // Looping over all files
 for($i=0;$i<$totalfiles;$i++){
 $filename = $_FILES['file']['name'][$i];
 
// Upload files and store in database
if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'images/'.$filename)){
		// Image db insert sql
		$insert = "INSERT into userimages(userid,images) values('$userid','$filename')";
		if(mysqli_query($conn, $insert)){
		  echo 'Data inserted successfully';
		}
		else{
		  echo 'Error: '.mysqli_error($conn);
		}
	}else{
		echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
	}
 
 }



    if($done){
        echo "Data Successfully Inserted";
        header("Location: userdata.php");
    }
    else {
        "Data Not Inserted ";
    }

}



?>