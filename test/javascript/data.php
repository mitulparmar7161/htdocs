<?php

$conn = mysqli_connect('localhost','root','','test');





$name=$_POST["name"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$age=$_POST["age"];
$address=$_POST["address"];
$gender=$_POST["gender"];
$hobbies=$_POST["hobbies"];
$profile=$_POST["profile"];
$date=$_POST["date"];
$time=$_POST["time"];

$string= implode(",",$hobbies);


$sqli = "insert into form (name,email,contact,age,address,gender,hobbies,profile,date,time)
        values ('$name','$email','$contact','$age','$address','$gender','$string','$profile','$date','$time')";

$done = mysqli_query($conn,$sqli);


if($done){
    echo "Data Successfully Inserted";
}
else {
    "Data Not Inserted ";
}

// echo "Name=".$name. "<br>";
// echo "Email=".$email. "<br>";
// echo "Contact=".$contact. "<br>";
// echo "Age=".$age. "<br>";
// echo "Address=".$address. "<br>";
// echo "Gender=".$gender. "<br>";
// echo "Hobbies=";
// foreach($_POST["hobbies"] as $hvalue){
//     echo $hvalue.",<br>";
// }
// echo "Profile Picture=".$profile. "<br>";
// echo "Date=".$date. "<br>";
// echo "Time=".$time. "<br>";

?>
