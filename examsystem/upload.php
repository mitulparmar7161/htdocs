<?php




class upload{

 
public function uploadData($table){
    
echo $table;

    $con = mysqli_connect('localhost','root','','examsystem');


  if($table=="course"){
      $course=$_POST['courseName'];

      $status=$_POST['status'];

      $query = "insert into $table (course,status)
                 values ('$course','$status')";
     
        mysqli_query($con,$query);  

        header("Location:course.php");

  }



  if($table =="exam"){
      $exam=$_POST['examName'];
      $status=$_POST['status'];



       $query = "insert into $table (exam,status)
                 values ('$exam','$status')";
     
        mysqli_query($con,$query);  
        header("Location:exam.php");

  }

    if($table =="student"){
      $course=$_POST['course'];
      $fname=$_POST['studentfName'];
       $lname=$_POST['studentlName'];

      $dob=$_POST['dob'];
      $std=$_POST['std'];
      $end=$_POST['end'];
      $enroll=$_POST['enroll'];



      $query = "insert into $table (enroll,course_id,fname,lname,dob,std,end)
                 values ('$enroll','$course','$fname','$lname','$dob','$std','$end')";
     
        mysqli_query($con,$query);  

        header("Location:student.php");
  }



  
  if($table=="marks"){
      
    $enroll=$_POST["enroll"];

    $exam=$_POST['examName'];

    $java=$_POST["java"];

    $php=$_POST['php'];

    $python=$_POST['python'];

    $total=$java + $php + $python;

    $round= ($total*100)/300;

    $percent=round($round, 2);

    $query = "insert into $table (enroll,exam_id,java,php,python,total,percent)
                 values ('$enroll',$exam,'$java','$php','$python','$total',$percent)";
     
        mysqli_query($con,$query);  
        header("Location:studentexam.php");

  }


}

}
$uploadobj = new upload;

if(isset($_POST['coursesubmit'])){
      $uploadobj->uploadData("course");
}


if(isset($_POST['examsubmit'])){
      $uploadobj->uploadData("exam");
}


if(isset($_POST['studentsubmit'])){
    $uploadobj->uploadData("student");
}

if(isset($_POST['markssubmit'])){
    $uploadobj->uploadData("marks");
}



?>   