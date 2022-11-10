<?php
session_start();
if(isset($_SESSION['email'])){

	$email=$_SESSION['email'];
	$conn = mysqli_connect('localhost', 'root', '', 'test');
	$sql ="select id from login where email='$email'";
	
	$resultAll= mysqli_query($conn,$sql);

	$rowData = mysqli_fetch_array($resultAll);
	echo $email;
	 $userid=$rowData['id'];
	 echo $userid;
}
?>


<?php 

//Database Connection
$conn = mysqli_connect('localhost', 'root', '', 'test');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}

if(isset($_POST['submit'])){
 // Count total uploaded files
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
header("Location: imageupload.php");
} 
?>