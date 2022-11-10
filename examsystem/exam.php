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
                    <h4 class="modal-title">Add New Exam</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">


                    <form name="myform" id="myform" method="POST" action="upload.php"
                        class="px-4 py-3 d-flex align-self-center justify-content-center "
                        enctype="multipart/form-data">
                        <div class="form-group border p-4 " style="width: 500px;">


                            <label for="examName">Exam Name:</label>

                            <input type="text" id="examName" name="examName" placeholder="Enter Exam Name"
                                class="form-control">
                            <p id="examName" class="error" style="color: red;"></P>


                            <label for="status">Status:</label>

                            <select id="status" name="status" class="form-select" required>
                                <option selected disabled>Select Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>


                            <div class="d-flex justify-content-center">
                                <button type="submit" id="submit" name="examsubmit"
                                    class="btn btn-primary col-6 p-2 mt-4">Add Exam</button>
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
                    <h4 class="modal-title">Edit Exam</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <form name="myform1" id="myform1" method="POST" action="update.php"
                        class="px-4 py-3 d-flex align-self-center justify-content-center "
                        enctype="multipart/form-data">
                        <div class="form-group border p-4 " style="width: 500px;">
                            <input type="hidden" id="id1" name="id">

                            <label for="examName1">Exam Name:</label>

                            <input type="text" id="exam1" name="examName" placeholder="Enter Exam Name"
                                class="form-control">
                            <p id="examName" class="error" style="color: red;"></P>



                            <label for="status">Status:</label>

                            <select id="status1" name="status" class="form-select" required>
                                <option selected disabled>Select Status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>


                            <div class="d-flex justify-content-center">
                                <button type="submit" id="submit1" name="examsubmit"
                                    class="btn btn-primary col-6 p-2 mt-4">Edit Exam</button>
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
                    Add Exam
                </button>
            </div>
            <table class="table" id="mytable">
                <thead class="bg-primary">
                    <tr class="text-white">
                        <th scope="col">ID </th>
                        <th scope="col">Exam Name </th>
                        <th scope="col">Status </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                        <th scope="col"> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                   $exam=$fetchobj->fetchData("exam");
                                    while($row=mysqli_fetch_assoc($exam)){?>
                    <tr>

                        <td class="p-3 pe-5 ">
                            <div class="id">
                                <?php echo $row['id']?>
                            </div>
                        </td>
                        <td class="p-3 pe-5 ">
                            <div class="fname">
                                <?php echo $row['exam']?>
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
                                url: 'delete.php',
                                type: 'POST',
                                data: { id: deleteid, exam: "exam" },
                                datatype:"json",
                                 success: function(response) {
                                    if(response == true){

                                        alert("You Can't Delete This Exam");

                                        }else{
                    
                                         window.location.href='exam.php'

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
                        examName: "required",
                        status: "required",
                    },
   
                 });



                 jQuery('#myform1').validate({

                    rules: {
                        examName: "required",
                        status: "required",
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
                    var exam = $(this).attr("id");
                    console.log(exam);
                    $.ajax({
                        url: "form_fetch.php",
                        method: "POST",
                        data: { exam : exam },
                        dataType: "json",
                        success: function (data) {
                            $('#id1').val(data.id);
                            $('#exam1').val(data.exam);
                            $('#status1').val(data.status);
                            $('#myModal1').modal('show');
                        }
                    });
                });



            </script>

</body>