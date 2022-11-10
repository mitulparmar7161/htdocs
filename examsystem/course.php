<?php
include 'header.php';
include 'fetch.php';
?>




    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Course</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">


                    <form name="myform" id="myform" method="POST" action="upload.php"
                        class="px-4 py-3 d-flex align-self-center justify-content-center "
                        enctype="multipart/form-data">
                        <div class="form-group border p-4 " style="width: 500px;">


                            <label for="courseName">Course Name:</label>

                            <input type="text" id="courseName" name="courseName" placeholder="Enter Course Name"
                                class="form-control">
                            <p id="CourseName" class="error" style="color: red;"></P>


                            <label for="status">Status:</label>

                            <select id="status" name="status" class="form-select" required>
                                <option selected disabled>Select Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>


                            <div class="d-flex justify-content-center">
                                <button type="submit" id="submit" name="coursesubmit"
                                    class="btn btn-primary col-6 p-2 mt-4">Add Course</button>
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
                    <h4 class="modal-title">Edit Course</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">



                    <form name="myform1" id="myform1" method="POST" action="update.php"
                        class="px-4 py-3 d-flex align-self-center justify-content-center "
                        enctype="multipart/form-data">
                        <div class="form-group border p-4 " style="width: 500px;">
                            <input type="hidden" id="id1" name="id">

                            <label for="courseName1">Course Name:</label>

                            <input type="text" id="course1" name="courseName" placeholder="Enter Course Name"
                                class="form-control">
                            <p id="CourseName" class="error" style="color: red;"></P>



                            <label for="status">Status:</label>

                            <select id="status1" name="status" class="form-select" required>
                                <option selected disabled>Select Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>


                            <div class="d-flex justify-content-center">
                                <button type="submit" id="submit1" name="coursesubmit"
                                    class="btn btn-primary col-6 p-2 mt-4">Edit Course</button>
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
                    Add course
                </button>
            </div>
            <table class="table" id="mytable">
                <thead class="bg-primary">
                    <tr class="text-white">
                        <th scope="col">ID </th>
                        <th scope="col">Course Name </th>
                        <th scope="col">Status </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                   $course=$fetchobj->fetchData("course");
                                    while($row=mysqli_fetch_assoc($course)){?>
                    <tr>

                        <td class="p-3 pe-5 ">
                            <div class="id">
                                <?php echo $row['id']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="fname">
                                <?php echo $row['course']?>
                            </div>
                        </td>
                        
                        <td class="p-3 pe-5 ">
                            <div class="status">
                                <?php echo $row['status']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5"> </td>
                        <td class="p-3 pe-5"> </td>

                        <td class="p-3 pe-5"><button class='edit btn btn-success'
                                id="<?php echo $row['id']?>">Edit</button></td>
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
                                url:  'delete.php',
                                type: 'POST',
                                data: { id: deleteid, course: "course" },
                                datatype:"json",
                                 success: function(response) {
                                    if(response == true){

                                        alert("You Can't Delete This course");

                                        }else{
                    
                                         window.location.href='course.php'

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
                        courseName: "required",
                        status:     "required",

                    },

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
              

                jQuery('#myform1').validate({

                    rules: {
                        courseName: "required",
                        status:     "required",

                    },

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
                    var course = $(this).attr("id");
                    console.log(course);
                    $.ajax({
                        url: "form_fetch.php",
                        method: "POST",
                        data: { course: course },
                        dataType: "json",
                        success: function (data) {
                            $('#id1').val(data.id);
                            $('#course1').val(data.course);
                            $('#status1').val(data.status);
                            $('#myModal1').modal('show');
                        }
                    });
                });



            </script>

</body>