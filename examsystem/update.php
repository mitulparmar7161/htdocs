      <?php



class update{

 
public function updateData($table){
    
echo $table;

    $con = mysqli_connect('localhost','root','','examsystem');


if($table=="course"){
      $id=$_POST['id'];

      $course=$_POST['courseName'];

      $status=$_POST['status'];

      $query = "UPDATE $table SET course='$course', status='$status' WHERE id=$id";
     
        mysqli_query($con,$query);  

        header("Location:course.php");

  }


  if($table =="exam"){
      $id = $_POST['id'];

      $exam=$_POST['examName'];
      
      $status=$_POST['status'];

      $query = "UPDATE $table SET exam='$exam', status='$status' WHERE id=$id";
     
        mysqli_query($con,$query);  
        header("Location:exam.php");

  }

    if($table =="student"){
      $id=$_POST['id'];
      $course=$_POST['course'];
      $fname=$_POST['studentfName'];
      $lname=$_POST['studentlName'];
      $dob=$_POST['dob'];
      $std=$_POST['std'];
      $end=$_POST['end'];
      $enroll=$_POST['enroll'];



       $query = "UPDATE $table SET enroll='$enroll',course_id='$course', fname='$fname',lname='$lname',dob='$dob', std='$std', end='$end'  WHERE id=$id";
     
        mysqli_query($con,$query);  

        header("Location:student.php");
  }



  
  if($table=="marks"){
    $id=$_POST['id'];
    $enroll=$_POST["enroll"];
    $exam=$_POST['examName'];
    $java=$_POST["java"];
    $php=$_POST['php'];
    $python=$_POST['python'];
    $total=$java + $php + $python;
    $round= ($total*100)/300;
    $percent=round($round, 2);
    $query = "UPDATE $table SET enroll='$enroll',exam_id='$exam', java='$java',php='$php',python='$python', total='$total', percent='$percent'  WHERE id=$id";
     
        mysqli_query($con,$query);  
        header("Location:studentexam.php");

  }


}

}
$updateobj = new update;

if(isset($_POST['coursesubmit'])){
      $updateobj->updateData("course");
}


if(isset($_POST['examsubmit'])){
      $updateobj->updateData("exam");
}


if(isset($_POST['studentsubmit'])){
    $updateobj->updateData("student");
}

if(isset($_POST['markssubmit'])){
    $updateobj->updateData("marks");
}



?>   