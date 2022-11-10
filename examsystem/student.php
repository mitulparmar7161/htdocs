<?php
include 'header.php';
include 'fetch.php';
?>





<body>


    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">


                    <form name="myform" id="myform" method="POST" action="upload.php"
                        class="px-4 py-3 d-flex align-self-center justify-content-center "
                        enctype="multipart/form-data">
                        <div class="form-group border p-4 " style="width: 500px;">

                            <label for="course">Course:</label>

                            <select id="course" name="course" class="form-select" required>

                         <option selected disabled>Select Status</option>
                              
                                    <?php
                                    $conn = mysqli_connect("localhost", "root","", "examsystem");
                                    $sql= "select * from course where status = 'active'";
                                    $course = mysqli_query($conn, $sql);
                                    while($result=mysqli_fetch_assoc($course)){?>


                                    <option value="<?php echo $result['id'] ?>"> <?php echo $result['course']?></option>

                                     <?php } ?>
                            </select>
                              <p id="course" class="error" style="color: red;"></P>     
                              

                              <label for="enroll">Student Enrollment No.:</label>

                            <input type="tel" id="enroll" name="enroll" placeholder="Enter Student Enrollment No." 
                                class="form-control">
                            <p id="enroll" class="error" style="color: red;"></P>

                            <label for="studentfName">Student First Name:</label>

                            <input type="text" id="studentfName" name="studentfName" placeholder="Enter Student First Name"
                                class="form-control">
                            <p id="studentfName" class="error" style="color: red;"></P>


                            <label for="studentlName">Student Last Name:</label>

                            <input type="text" id="studentlName" name="studentlName" placeholder="Enter Student Last Name"
                                class="form-control">
                            <p id="studentlName" class="error" style="color: red;"></P>


                            <label for="dob">Date Of Birth:</label>

                            <input type="date" id="dob" name="dob"
                                class="form-control">
                            <p id="dob" class="error" style="color: red;"></P>

                             <label for="std">Starting Date :</label>

                            <input type="date" id="std" name="std"
                                class="form-control">
                            <p id="std" class="error" style="color: red;"></P>


                            <label for="end">Ending Date :</label>

                            <input type="date" id="end" name="end"
                                class="form-control">
                            <p id="end" class="error" style="color: red;"></P>


                            


                            <div class="d-flex justify-content-center">
                                <button type="submit" id="submit" name="studentsubmit"
                                    class="btn btn-primary col-6 p-2 mt-4">Add Student</button>
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
                    <h4 class="modal-title">Edit Student</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">



                    <form name="myform1" id="myform1" method="POST" action="update.php"
                        class="px-4 py-3 d-flex align-self-center justify-content-center "
                        enctype="multipart/form-data">
                       <div class="form-group border p-4 " style="width: 500px;">

                     

                            <label for="course">Course:</label>

                            <select id="course1" name="course" class="form-select" required>

                              <option selected disabled>Select Status</option>
                              
                                    <?php
                                    $conn = mysqli_connect("localhost", "root","", "examsystem");
                                    $sql= "select * from course where status = 'active'";
                                    $course = mysqli_query($conn, $sql);
                                    while($result=mysqli_fetch_assoc($course)){?>


                                    <option value="<?php echo $result['id'] ?>"> <?php echo $result['course']?></option>

                                     <?php } ?>
                            </select>
                              <p id="course" class="error" style="color: red;"></P>     
                              
                              <input type="hidden" name="id" id="id1">


                              <label for="enroll">Student Enrollment No.:</label>

                            <input type="number" id="enroll1" name="enroll" placeholder="Enter Student Enrollment No." readonly
                                class="form-control">
                            <p id="enroll" class="error" style="color: red;"></P>

                            <label for="studentfName">Student First Name:</label>

                            <input type="text" id="studentfName1" name="studentfName" placeholder="Enter Student First Name"
                                class="form-control">
                            <p id="studentfName" class="error" style="color: red;"></P>


                            <label for="studentlName">Student Last Name:</label>

                            <input type="text" id="studentlName1" name="studentlName" placeholder="Enter Student Last Name"
                                class="form-control">
                            <p id="studentlName" class="error" style="color: red;"></P>


                            <label for="dob">Date Of Birth:</label>

                            <input type="date" id="dob1" name="dob"
                                class="form-control">
                            <p id="dob" class="error" style="color: red;"></P>

                             <label for="std">Starting Date :</label>

                            <input type="date" id="std1" name="std"
                                class="form-control">
                            <p id="std" class="error" style="color: red;"></P>


                            <label for="end">Ending Date :</label>

                            <input type="date" id="end1" name="end"
                                class="form-control">
                            <p id="end" class="error" style="color: red;"></P>


                            <div class="d-flex justify-content-center">
                                <button type="submit" id="submit1" name="studentsubmit"
                                    class="btn btn-primary col-6 p-2 mt-4">Edit Student</button>
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
                    Add student
                </button>
            </div>
            <table class="table" id="mytable">
                <thead class="bg-primary">
                    <tr class="text-white">
                        <th scope="col">Enrollment No. </th>
                         <th scope="col">Course id</th>
                        <th scope="col"> First Name </th>
                        <th scope="col"> Last name </th>
                        <th scope="col">Date Of Birth </th>
                        <th scope="col">Starting Date </th>
                        <th scope="col"> Ending Date </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                   $student=$fetchobj->fetchData("student");
                                    while($row=mysqli_fetch_assoc($student)){?>
                    <tr>

                        <td class="p-3 pe-5 ">
                            <div class="id">
                                <?php echo $row['enroll']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="course">
                                <?php echo $row['course_id']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="fname">
                                <?php echo $row['fname']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="lname">
                                <?php echo $row['lname']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="dob">
                                <?php echo $row['dob']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="std">
                                <?php echo $row['std']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="end">
                                <?php echo $row['end']?>
                            </div>
                        </td>
                      
                        <td class="p-3 pe-5"> </td>
                        <td class="p-3 pe-5"> </td>

                        <td class="p-3 pe-5"><button class='edit btn btn-success'
                                id="<?php echo $row['enroll']?>">Edit</button></td>
                        <td class="p-3 pe-5"><button class='delete btn btn-danger'  id="<?php echo $row['enroll'] ?>">Delete</button></td>

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
                                data: { id: deleteid, student: "student" },
                                datatype:"json",
                                success: function(response) {
                                    if(response == true){

                                        alert("You Can't Delete This Student");

                                        }else{
                    
                                         window.location.href='student.php'

                                  }
                               
                            	} 
                            });
                        }
                    });
                });
            </script>


            <script>


                jQuery('#myform').validate({

                    rules: {
                        course: "required",
                        enroll: {
                        number:   true,
                        required: true,
                        remote: {
                        url:   "validate.php",
                        type:  "post",
                        async: false,
                        data: {

                        enroll: function () {
                            return $('#enroll').val();
                        }
                    }

                },
            },

                        fname: "required",
                        lname: "required",
                        dob:   "required",
                        std:   "required",
                        end:   "required",
     
                    },
                    messages: {

                        enroll: {

                        remote: "Enrollment No. is already Teken..!"

                        },  
                    },
                });

                //      submitHandler: function (form) {
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
                


                jQuery('#myform1').validate({

                    rules: {
                        course: "required",
                        enroll: "required",
                        fname:  "required",
                        lname:  "required",
                        dob:    "required",
                        std:    "required",
                        end:    "required",
     
                    }
                    });

                 

               
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
                    var student = $(this).attr("id");
                    console.log(student);
                    $.ajax({
                        url: "form_fetch.php",
                        method: "POST",
                        data: { student : student },
                        dataType: "json",
                        success: function (data) {
                            $('#id1').val(data.id);
                            $('#course1').val(data.course_id)
                            $('#enroll1').val(data.enroll);
                            $('#studentfName1').val(data.fname);
                            $('#studentlName1').val(data.lname);
                            $('#dob1').val(data.dob);
                            $('#std1').val(data.std);
                            $('#end1').val(data.end);
                            $('#submit1').val("Update");
                            $('#myModal1').modal('show');
                        }
                    });
                });



            </script>

</body>