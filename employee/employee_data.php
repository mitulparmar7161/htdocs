



<?php
include '../admin/header.php';
?>



 


<?php




    $connect = mysqli_connect("localhost", "root", "", "test");
    $query = "select * from employee";
    $filter_result = mysqli_query($connect, $query);
    

?>




<body>
    



    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Employee</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    



    <form name="myform" id="myform" action="logic_employee_data.php"  method="POST"
        class="px-4 py-3 d-flex align-self-center justify-content-center ">
        <div class="form-group border p-4 " style="width: 500px;">
        

            <label for="lname">First Name:</label>
           
            <input type="text" id="fname" name="fname" placeholder="Enter Your First Name" class="form-control">
            <p id="fname" class="error" style="color: red;"></P>


            <label for="lname">Last Name:</label>
           
            <input type="text" id="lname" name="lname" placeholder="Enter Your Last Name" class="form-control">
            <p id="lname" class="error" style="color: red;"></P>


             <label for="doj">Date of Joining:</label>
           
            <input type="date" id="doj" name="doj"  class="form-control">
            <p id="doj" class="error" style="color: red;"></p>

            <label for="name">Date of Birth:</label>
           
            <input type="date" id="dob" name="dob" class="form-control">
            <p id="dob" class="error" style="color: red;"></p>


            <label for="email" >Email:</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email">
            <p id="uemail" class="error" style="color: red;"></p>



            <label for="address" >Address:</label>
            <textarea  id="address" name="address" class="form-control" placeholder="Enter Your Address"></textarea>

            <p id="address" class="error" style="color: red;"></p>


                <label for="phone" >Phone No.:</label>
 
                <input type="text" inputmode="numeric" id="phone" name="phone" placeholder="Enter Your Phone No." maxlength="10" class="form-control">
                <p id="phone" class="error" style="color: red;"></p>



                 <label for="image" >Profile Image:</label>

                 <input type="file"  id="image" name="image" placeholder="Select Your Image" class="form-control"  accept=".png,.jpg,.jpeg">
                <p id="image" class="error" style="color: red;"></p>


                 <label for="status" >Status:</label>
                
            <select id="status" name="status" class="form-select"  required>
                 <option  selected disabled>Select Status</option>
                 <option value="active">Active</option>
                 <option value="inactive">Inactive</option>
            </select>


            <div class="d-flex justify-content-center">
                <button type="submit" id="submit" name="submit" class="btn btn-primary col-6 p-2 mt-4">Add Employee</button>
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
    <div class="modal" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Employee</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    



    <form name="myform1" id="myform1" action="logic_employee_data.php"  method="POST"
        class="px-4 py-3 d-flex align-self-center justify-content-center ">
        <div class="form-group border p-4 " style="width: 500px;">
            <input type="hidden" id="id1" name="id">

            <label for="lname1">First Name:</label>
           
            <input type="text" id="fname1" name="fname" placeholder="Enter Your First Name" class="form-control">
            <p id="fname" class="error" style="color: red;"></P>


            <label for="lname">Last Name:</label>
           
            <input type="text" id="lname1" name="lname" placeholder="Enter Your Last Name" class="form-control">
            <p id="lname" class="error" style="color: red;"></P>


             <label for="doj">Date of Joining:</label>
           
            <input type="date" id="doj1" name="doj"  class="form-control">
            <p id="doj" class="error" style="color: red;"></p>

            <label for="name">Date of Birth:</label>
           
            <input type="date" id="dob1" name="dob" class="form-control">
            <p id="dob" class="error" style="color: red;"></p>


            <label for="email" >Email:</label>
            <input type="text" id="email1" name="email" class="form-control" placeholder="Enter Your Email">
            <p id="uemail" class="error" style="color: red;"></p>



            <label for="address" >Address:</label>
            <textarea  id="address1" name="address" class="form-control" placeholder="Enter Your Address"></textarea>

            <p id="address" class="error" style="color: red;"></p>


                <label for="phone" >Phone No.:</label>
 
                <input type="text" inputmode="numeric" id="phone1" name="phone" placeholder="Enter Your Phone No." maxlength="10" class="form-control">
                <p id="phone" class="error" style="color: red;"></p>



                 <label for="image" >Profile Image:</label>

                 <input type="file"  id="image1" name="image" placeholder="Select Your Image" class="form-control" accept=".png,.jpg,.jpeg">
                <p id="image" class="error" style="color: red;"></p>


                 <label for="status" >Status:</label>
                
            <select id="status1" name="status" class="form-select" required>
                 <option  selected disabled>Select Status</option>
                 <option value="active">Active</option>
                 <option value="inactive">Inactive</option>
            </select>


            <div class="d-flex justify-content-center">
                <button type="submit" id="submit1" name="submit1" class="btn btn-primary col-6 p-2 mt-4">Add Employee</button>
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
            
        
            <div class="table-responsive mt-3">
                <div class="container-fluid d-flex justify-content-end mb-3">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Employee
        </button>
    </div>
            <table class="table">
                <thead class="bg-primary">
                    <tr class="text-white">
                                <th scope="col">ID </th>
                                <th scope="col">First Name     </th>
                                <th scope="col">Last Name      </th>
                                <th scope="col">J Date         </th>
                                <th scope="col">B Date         </th>
                                <th scope="col">Email          </th>
                                <th scope="col">Address        </th>
                                <th scope="col">Phone No.      </th>
                                <th scope="col">Profile Image  </th>
                                <th scope="col">Status         </th>
                                <th scope="col">               </th>
                                <th scope="col">               </th>
                                <th scope="col">               </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                   
                                    while($row=mysqli_fetch_assoc($filter_result)){?>
                                        <tr>
                                          
                                            <td class="p-3 pe-5"><?php echo $row['id']?>       </td>
                                            <td class="p-3 pe-5"><?php echo $row['fname']?>    </td>
                                            <td class="p-3 pe-5"><?php echo $row['lname']?>    </td>
                                            <td class="p-3 pe-5"><?php echo $row['doj']?>      </td>
                                            <td class="p-3 pe-5"><?php echo $row['dob']?>      </td>
                                            <td class="p-3 pe-5"><?php echo $row['email']?>    </td>
                                            <td class="p-3 pe-5"><?php echo $row['address']?>  </td>
                                            <td class="p-3 pe-5"><?php echo $row['phone']?>    </td>
                                            <td class="p-3 pe-5"><?php echo $row['image']?>    </td>
                                            <td class="p-3 pe-5"><?php echo $row['status']?>   </td>
                                            <td class="p-3 pe-5">                              </td>
                                            <td class="p-3 pe-5"><button class='edit btn btn-success' id="<?php echo $row['id']?>">Edit</button></td>
                                            <td class="p-3 pe-5"><button class='delete btn btn-danger' data-id='<?= $row['id']; ?>'>Delete</button></td>
    
                                        </tr>
                                        <?php } ?> 
                </tbody>
            </table>
<script type="text/javascript">
        $(document).ready(function(){

            $('.delete').click(function(){
                var el = this;

                var deleteid = $(this).data('id');

                var confirmalert = confirm("Are you sure?");
                if (confirmalert == true) {
                  $.ajax({
                    url: 'empdata_logic.php',
                    type: 'POST',
                    data: { id:deleteid },
                    success: function(response){

                      if(response == 1){
                        $(el).closest('tr').css('background','red');
                        $(el).closest('tr').fadeOut(0,function(){
                        $(this).remove();
                     });
                }else{
                    
                        alert('Invalid ID.');
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
            lname: "required",
            fname: "required",
            doj: "required",
            dob: "required",
            address: "required",
            status: "required",
            image: "required",
            email: {
                email: true,
                required: true,
                remote: {
                    url: "logic_employee_data.php",
                    type: "post",
                    async: false,
                    data: {

                        email: function () {
                            return $('#email').val();
                        }
                    }

                },
            },
             phone: {
                number: true,
                required: true,
                minlength: 10,
		        maxlength: 10,
                remote: {
                    url: "logic_employee_data.php",
                    type: "post",
                    async: false,
                    data: {
                        phone: function () {
                            return $('#phone').val();
                        }
                    }

                },
            },
        },
        messages: {
            email: {
                remote: "Email is already Teken..!"
            },
            phone: {
                remote: "Phone No. is already Teken..!"
            },
           

        }

    });


     jQuery('#myform1').validate({
    
        rules: {
            lname: "required",
            fname: "required",
            doj: "required",
            dob: "required",
            address: "required",
            status: "required",
            image: "required",
            email: {
                email: true,
                required: true,
                remote: {
                    url: "logic_employee_data.php",
                    type: "post",
                    async: false,
                    data: {

                        email: function () {
                            return $('#email').val();
                        }
                    }

                },
            },
             phone: {
                number: true,
                required: true,
                minlength: 10,
		        maxlength: 10,
                remote: {
                    url: "logic_employee_data.php",
                    type: "post",
                    async: false,
                    data: {
                        phone: function () {
                            return $('#phone').val();
                        }
                    }

                },
            },
        },
        messages: {
            email: {
                remote: "Email is already Teken..!"
            },
            phone: {
                remote: "Phone No. is already Teken..!"
            },
           

        }

    });

 $(document).on('click', '.edit', function(){  
           var employee_id = $(this).attr("id");  
           console.log(employee_id);
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                    $('#id1').val(data.id); 
                     $('#fname1').val(data.fname);  
                     $('#lname1').val(data.lname);  
                     $('#doj1').val(data.doj);
                     $('#dob1').val(data.dob);
                     $('#email1').val(data.email);
                     $('#address1').val(data.address);  
                     $('#phone1').val(data.phone); 
                //   $('#image').val(data.image);
                     $('#status1').val(data.status);      
                     $('#submit1').val("Update");  
                     $('#myModal1').modal('show');  
                }  
           });  
      });  


            //    $.ajax({  
            //          url:"logic_employee_data.php",  
            //          method:"POST",  
            //          data:$('#myform').serialize(),  
            //          beforeSend:function(){  
            //               $('#submit').val("Inserting");  
            //          },   
            //          success:function(data){  
            //               $('#myform')[0].reset();  
            //               $('#myModal').modal('hide');  
            //          }  
            //     });

    
</script>



</body>




