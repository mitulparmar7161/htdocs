  <?php  
 //fetch.php  

 

 
class formfetch{

public function formdata($table,$id){
      $connect = mysqli_connect("localhost", "root", "", "examsystem"); 
      if($table=="student"){
        $query = "SELECT * FROM $table WHERE enroll = '".$id."'";  
      }
      else{
        $query = "SELECT * FROM $table WHERE id = '".$id."'";  
      }
      
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  

}


}

$formobj = new formfetch;


 if(isset($_POST["course"]))  
 {  

    $course_id = $_POST["course"];
    $formobj->formdata("course",$course_id);
 }  

 if(isset($_POST["exam"]))  
 {  

    $exam = $_POST["exam"];
    $formobj->formdata("exam",$exam);
 }  

 
 if(isset($_POST["student"]))  
 {  

    $student = $_POST["student"];
    $formobj->formdata("student",$student);
 } 

 if(isset($_POST["marks"]))  
 {  

    $marks = $_POST["marks"];
    $formobj->formdata("marks",$marks);
 } 

 ?>