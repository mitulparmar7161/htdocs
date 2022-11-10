<?php


// Delete With class And Function


class delete{
       
 function deleteData($table,$id){

        $con= mysqli_connect('localhost','root','','examsystem');

        if($table=="student"){

                $query = "DELETE FROM $table WHERE enroll=".$id;

        }

        else{

                $query = "DELETE FROM $table WHERE id=".$id;

        }

        $row=mysqli_query($con,$query);

          return $row;

}  

} 

$deleteobj=new delete;

if(isset($_POST['course'])){

$id=$_POST['id'];

$table=$_POST['course'];

$connect= mysqli_connect('localhost','root','','examsystem');

$sql="select * from student where course_id='$id'";

$check =mysqli_query($connect,$sql);

$row = mysqli_fetch_assoc($check);

if($row <= 0){

        $deleteobj->deleteData($table,$id);
     
}
else{
       
          echo true;
}


}   

if(isset($_POST['exam'])){

$id=$_POST['id'];

$table=$_POST['exam'];

$connect= mysqli_connect('localhost','root','','examsystem');

$sql="select * from marks where exam_id='$id'";

$check=mysqli_query($connect,$sql);

$row = mysqli_fetch_assoc($check);

if($row <= 0){

        $deleteobj->deleteData($table,$id);
     
}
else{
        
          echo true;
        
}

}  

if(isset($_POST['marks'])){

$id=$_POST['id'];

$table=$_POST['marks'];

$deleteobj->deleteData($table,$id);

}  

if(isset($_POST['student'])){

$id=$_POST['id'];

$table=$_POST['student'];

$deleteobj->deleteData($table,$id);

}  

?>  


