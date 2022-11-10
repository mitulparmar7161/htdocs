<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Employee</title>
</head>

<body>


<div class="container mt-3">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Employee
        </button>
    </div>

    <!-- The Modal -->
    <div class="modal" action="register_data.php" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Employee</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    



    <form name="myform" id="myform"  method="POST"
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

                 <input type="file"  id="image" name="image" placeholder="Select Your Image" class="form-control">
                <p id="image" class="error" style="color: red;"></p>


                 <label for="status" >Status:</label>
                
            <select id="status" name="status" class="form-select" required>
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















<script>


    jQuery('#myform').validate({
    
        rules: {
            lname: "required",
            fname: "required",
            doj: "required",
            dob: "required",
            address: "required",
            status: "required",
            file: "required",
            email: {
                email: true,
                required: true,
                remote: {
                    url: "register_data.php",
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
                    url: "register_data.php",
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

               $.ajax({  
                     url:"register_data.php",  
                     method:"POST",  
                     data:$('#myform').serialize(),  
                     beforeSend:function(){  
                          $('#submit').val("Inserting");  
                     },  
                     success:function(data){  
                          $('#myform')[0].reset();  
                          $('#myModal').modal('hide');  
                     }  
                });

    
</script>



</body>

</html>