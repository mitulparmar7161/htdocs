<?php

include_once 'header.php';

?>

<body>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Student Marks</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">


                    <form name="myform" id="myform" method="POST" action="upload.php"
                        class="px-4 py-3 d-flex align-self-center justify-content-center "
                        enctype="multipart/form-data">
                        <div class="form-group border p-4 " style="width: 500px;">







                            <label for="enroll">Enrollment:</label>

                            <select id="enroll" name="enroll" class="form-select" required>

                             <option selected disabled>Select Status</option>
                              
                                    <?php
                                    $conn = mysqli_connect("localhost", "root","", "examsystem");
                                    $sql= "select * from student";
                                    $course = mysqli_query($conn, $sql);
                                    while($result=mysqli_fetch_assoc($course)){?>


                                    <option value="<?php echo $result['enroll'] ?>"> <?php echo $result['enroll']?></option>

                                     <?php } ?>
                            </select>

                              <p id="course" class="error" style="color: red;"></P>  

                               <label for="exam">Exam :</label>

                              <select id="exam" name="examName" class="form-select" required>

                             <option selected disabled>Select Status</option>
                              
                                    <?php
                                    $conn = mysqli_connect("localhost", "root","", "examsystem");
                                    $sql= "select * from exam where status='active'";
                                    $course = mysqli_query($conn, $sql);
                                    while($result=mysqli_fetch_assoc($course)){?>


                                    <option value="<?php echo $result['id'] ?>"> <?php echo $result['exam']?></option>

                                     <?php } ?>
                            </select>
                              <p id="course" class="error" style="color: red;"></P>  

                             <label for="java">Java :</label>

                            <input type="number" id="java" name="java" required placeholder="Enter Marks out of 100" class="form-control">
                            <p id="java" class="error" style="color: red;"></P>


                            <label for="php">PHP :</label>

                            <input type="number" id="php" name="php" required placeholder="Enter Marks out of 100" class="form-control">
                            <p id="php" class="error" style="color: red;"></P>


                            <label for="python">Python :</label>

                            <input type="number" id="python" name="python" required placeholder="Enter Marks out of 100" class="form-control">
                            <p id="python" class="error" style="color: red;"></P>


                            


                            <div class="d-flex justify-content-center">
                                <button type="submit" id="submit" name="markssubmit"
                                    class="btn btn-primary col-6 p-2 mt-4">Add Marks</button>
                            </div>

                        </div>
                    </form>


                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



    <!-- The Modal -->
    <div class="modal fade" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Marks</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">



                    <form name="myform1" id="myform1" method="POST" action="update.php"
                        class="px-4 py-3 d-flex align-self-center justify-content-center "
                        enctype="multipart/form-data">
                         <div class="form-group border p-4 " style="width: 500px;">

                            <input type="hidden" name="id" id="id1">





                            <label for="enroll">Enrollment:</label>

                            <select id="enroll1" name="enroll" class="form-select" required>

                               <option selected disabled>Select Status</option>
                              
                                    <?php
                                    $conn = mysqli_connect("localhost", "root","", "examsystem");
                                    $sql= "select * from student";
                                    $course = mysqli_query($conn, $sql);
                                    while($result=mysqli_fetch_assoc($course)){?>


                                    <option value="<?php echo $result['enroll'] ?>"> <?php echo $result['enroll']?></option>

                                     <?php } ?>
                            </select>

                              <p id="course" class="error" style="color: red;"></P>  

                               <label for="exam">Exam :</label>

                              <select id="exam1" name="examName" class="form-select" required>

                           <option selected disabled>Select Status</option>
                              
                                    <?php
                                    $conn = mysqli_connect("localhost", "root","", "examsystem");
                                    $sql= "select * from exam where status='active'";
                                    $course = mysqli_query($conn, $sql);
                                    while($result=mysqli_fetch_assoc($course)){?>


                                    <option value="<?php echo $result['id'] ?>"> <?php echo $result['exam']?></option>

                                     <?php } ?>
                            </select>
                              <p id="course" class="error" style="color: red;"></P>  

                             <label for="java1">Java :</label>

                            <input type="number" id="java1" name="java" required placeholder="Enter Marks out of 100" class="form-control">
                            <p id="java" class="error" style="color: red;"></P>


                            <label for="php">PHP :</label>

                            <input type="number" id="php1" name="php" required placeholder="Enter Marks out of 100" class="form-control">
                            <p id="php" class="error" style="color: red;"></P>


                            <label for="python">Python :</label>

                            <input type="number" id="python1" name="python" required placeholder="Enter Marks out of 100" class="form-control">
                            <p id="python" class="error" style="color: red;"></P>


                            


                            <div class="d-flex justify-content-center">
                                <button type="submit" id="submit1" name="markssubmit"
                                    class="btn btn-primary col-6 p-2 mt-4">Edit Marks</button>
                            </div>

                        </div>
                    </form>




                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>



    <div class="container-fluid d-flex justify-content-center">


        <div class="table-responsive mt-3" id="tabledata">
            <div class="container-fluid d-flex justify-content-end mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                    Add Marks
                </button>
            </div>
            
            <table class="table" id="mytable">
                <thead class="bg-primary">
                    <tr class="text-white">
                        <th scope="col">Enrollment No. </th> 
                        <th scope="col">Exam id </th>
                        <th scope="col">Java</th>
                        <th scope="col">PHP</th>
                        <th scope="col">Python</th>
                        <th scope="col">Total </th>
                        <th scope="col"> Percent</th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php       
                    
                                    include_once 'fetch.php';
                                   
                                    $marks = $fetchobj->fetchData("marks");
                                    while($row=mysqli_fetch_assoc($marks)){?>
                    <tr>

                    <td class="p-3 pe-5 ">
                            <div class="enroll">
                                <?php echo $row['enroll']?>
                            </div>
                        </td>

                        <td class="p-3 pe-5 ">
                            <div class="exam_id">
                                <?php echo $row['exam_id']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="java">
                                <?php echo $row['java']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="php">
                                <?php echo $row['php']?>
                            </div>  
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="python">
                                <?php echo $row['python']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="total">
                                <?php echo $row['total']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="percent">
                                <?php echo $row['percent']?>
                            </div>  
                        </td>
                       
                        <td class="p-3 pe-5"> </td>

                        <td class="p-3 pe-5"> </td>

                        <td class="p-3 pe-5"><button class='edit btn btn-success' id="<?php echo $row['id']?>">Edit</button></td>
                                

                       <td class="p-3 pe-5"><button class='delete btn btn-danger'  id="<?php echo $row['id'] ?>">Delete</button></td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            
             
              <script type="text/javascript">
                $(document).ready(function () {

                    $('.delete').click(function () {
                    

                        var deleteid =  $(this).attr("id");
                        console.log(deleteid);
                        var confirmalert = confirm("Are you sure?");
                        if (confirmalert == true)
                        {
                            $.ajax({
                                url: 'delete.php',
                                type: 'POST',
                                data: { id: deleteid, marks: "marks" },
                                datatype:"json",
                                success: function(response) {
		                       
                                     window.location.href='studentexam.php'

                            	} 
                            });
                        }
                    });
                });
            </script>



            <script>


                jQuery('#myform').validate({

                    rules: {
            
                        enroll: "required",
                        exam:   "required",
                        java:   "required",
                        php:    "required",
                        python: "required",
                       
                    }
                      });
                        jQuery('#myform1').validate({

                    rules: {
            
                        enroll: "required",
                        exam:   "required",
                        java:   "required",
                        php:    "required",
                        python: "required",
                       
                    }
                      });

                //     submitHandler: function (form) {
                //         $.ajax({
                //             url: 'logic_employee_data.php',
                //             type: 'POST',
                //             data: new FormData(form),
                //             mimeType: "multipart/form-data",
                //             contentType: false,
                //             cache: false,
                //             processData: false,
                //             success: function (response) {
                //                 $('#myModal').modal('hide');
                //                 window.location.href = 'employee_data.php'
                //             }
                //         });
                //     }
              



                    // submitHandler: function (form) {
                    //     $.ajax({
                    //         url: 'logic_employee_data.php',
                    //         type: 'POST',
                    //         data: new FormData(form),
                    //         mimeType: "multipart/form-data",
                    //         contentType: false,
                    //         cache: false,
                    //         processData: false,
                    //         success: function (response) {
                    //             $('#myModal1').modal('hide');
                    //             window.location.href = 'employee_data.php'
                    //         }
                    //     });
                    // }

          

                $(document).on('click', '.edit', function () {
                    var marks = $(this).attr("id");
                    console.log(marks);
                    $.ajax({
                        url: "form_fetch.php",

                        method: "POST",

                        data: { marks: marks },

                        dataType: "json",

                        success: function (data) {

                            $('#id1').val(data.id);

                            $('#enroll1').val(data.enroll);

                            $('#exam1').val(data.exam_id);

                            $('#java1').val(data.java);

                            $('#php1').val(data.php);

                            $('#python1').val(data.python);

                            $('#submit1').val("Update");

                            $('#myModal1').modal('show');
                        }
                    });
                });



            </script>

</body>