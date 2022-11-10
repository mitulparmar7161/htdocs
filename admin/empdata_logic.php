<?php 


if(isset($_POST['id'])){
    $con= mysqli_connect('localhost','root','','test');
    $id = $_POST['id'];

    $checkRecord = mysqli_query($con,"SELECT * FROM employee WHERE id=".$id);
    $totalrows = mysqli_num_rows($checkRecord);

    if($totalrows > 0){
        $query = "DELETE FROM employee WHERE id=".$id;
        mysqli_query($con,$query);
        echo 1;
        exit;
    }else{
        echo 0;
        exit;
    }
}

echo 0;
exit;
?>