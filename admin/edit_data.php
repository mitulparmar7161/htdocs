
<?php



if(isset($_POST['submit'])){


    $conn = mysqli_connect('localhost','root','','test');
    $id= $_POST["id"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $password= password_hash($_POST["password"], PASSWORD_DEFAULT);
    

    
    $sqli = "update login SET name='$name',email='$email',password='$password' where id='$id'";
    $done = mysqli_query($conn,$sqli);
    
     // Count total uploaded files
 $totalfiles = count($_FILES['file']['name']);

 // Looping over all files
 for($i=0;$i<$totalfiles;$i++){
 $filename = $_FILES['file']['name'][$i];
 
// Upload files and store in database
if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'images/'.$filename)){
		// Image db insert sql
		$insert = "INSERT into userimages(userid,images) values('$id','$filename')";
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
header("Location: userdata.php");


}



?>
