
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
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Employee</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    

    <form name="myform" id="myform"  method="POST" class="px-4 py-3 d-flex align-self-center justify-content-center " enctype="multipart/form-data" >
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
    <div class="modal fade"  id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add New Employee</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    


    <form name="myform1" id="myform1"  method="POST"
        class="px-4 py-3 d-flex align-self-center justify-content-center " enctype="multipart/form-data">
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
            
        
            <div class="table-responsive mt-3" id="tabledata">
                <div class="container-fluid d-flex justify-content-end mb-3">

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Employee
        </button>
    </div>
            <table class="table" id="mytable">
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
                                <th scope="col">               </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                                   
                                    while($row=mysqli_fetch_assoc($filter_result)){?>
                                        <tr>
                                         
                                            <td class="p-3 pe-5 "><div class="id"><?php echo $row['id']?></div></td>
                                            <td class="p-3 pe-5 "><div class="fname"><?php echo $row['fname']?></div><span class="message" id="fnamemessage" style="color:red;">This Field is Requaired</span></td>
                                            <td class="p-3 pe-5 "><div class="lname"><?php echo $row['lname']?></div><span class="message" id="lnamemessage" style="color:red;">This Field is Requaired</span></td>
                                            <td class="p-3 pe-5 "><div class="doj"><?php echo $row['doj']?></div><span class="message" id="dojmessage" style="color:red;">This Field is Requaired</span></td>
                                            <td class="p-3 pe-5 "><div class="dob"><?php echo $row['dob']?></div><span class="message" id="dobmessage" style="color:red;">This Field is Requaired</span></td>
                                            <td class="p-3 pe-5 "><div class="email"><?php echo $row['email']?></div><span class="message" id="emailmessage" style="color:red;">This Field is Requaired</span><span class="message" id="invalidemailmessage" style="color:red;">Invalid Email </span></td>
                                            <td class="p-3 pe-5 "><div class="address"><?php echo $row['address']?></div><span class="message" id="addressmessage" style="color:red;">This Field is Requaired</span></td>
                                            <td class="p-3 pe-5 "><div class="phone"><?php echo $row['phone']?></div><span class="message" id="phonemessage" style="color:red;">This Field is Requaired</span><span class="message" id="invalidphonemessage" style="color:red;">Invalid Phone NO.</span></td>
                                            <td class="p-3 pe-5 "><div class="image"><img class="rounded-2 " width="100px;"  src="images/<?php echo $row['image']; ?>"></div></td>
                                            <td class="p-3 pe-5 "><div class="status"><?php echo $row['status']?></div><span class="message" id="statusmessage" style="color:red;">This Field is Requaired</span></td>
                                            <td class="p-3 pe-5">                              </td>
                                            <td class="p-3 pe-5">
                                            <button id="editdata" class='btn btn-success editdata' id="<?php echo $row['id']?>">Edit</button>
                                            <button id="savedata"  name="savedata" class='btn btn-success savedata' id="<?php echo $row['id']?>">Save</button><br>
                                 
                                        
                                        </td>
                                    
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
           

        },
    submitHandler: function(form){
    $.ajax({
	url: 'logic_employee_data.php',
	type: 'POST',
    data: new FormData(form),
    mimeType:"multipart/form-data", 
    contentType: false, 
    cache: false, 
    processData:false, 
	success: function(response) {
		$('#myModal').modal('hide');
        window.location.href='employee_data.php'
	}            
      });		
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
            },
             phone: {
                number: true,
                required: true,
                minlength: 10,
		        maxlength: 10,
            },
        },
        messages: {
            email: {
                remote: "Email is already Teken..!"
            },
            phone: {
                remote: "Phone No. is already Teken..!"
            },
           

        },
    submitHandler: function(form){
    $.ajax({
	url: 'logic_employee_data.php',
	type: 'POST',
    data: new FormData(form),
    mimeType:"multipart/form-data", 
    contentType: false, 
    cache: false, 
    processData:false,
	success: function(response) {
		$('#myModal1').modal('hide');
        window.location.href='employee_data.php'
	}            
      });		
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
         
                     $('#status1').val(data.status);      
                     $('#submit1').val("Update");  
                     $('#myModal1').modal('show');  
                }  
           });  
      });  


    
</script>

<script>

















$(".savedata").hide();
$('.message').hide();
$(document).on('click', '.editdata', function() {


      $(this).parent().siblings().children('div.id').each(function() {
    var content = $(this).html();
    $(this).html('<input readonly style="border:none;" type="text" id="iddata" name="id" required value="' + content + '" />');
 
  });
  $(this).parent().siblings().children('div.fname').each(function() {
    var content = $(this).html();
    $(this).html('<input type="text" id="fnamedata" name="fname" required value="' + content + '" />');
 
  });
    $(this).parent().siblings().children('div.lname').each(function() {
    var content = $(this).html();
    $(this).html('<input type="text" id="lnamedata" name="lname" required value="' + content + '" />');
  });
   $(this).parent().siblings().children('div.doj').each(function() {
    var content = $(this).html();
    $(this).html('<input type="date" id="dojdata" name="doj" required value="' + content + '" />');
  });
     $(this).parent().siblings().children('div.dob').each(function() {
    var content = $(this).html();
    $(this).html('<input type="date" id="dobdata" name="dob" required value="' + content + '" />');
  });
  $(this).parent().siblings().children('div.email').each(function() {
    var content = $(this).html();
    $(this).html('<input type="email" id="emaildata" name="email" required value="' + content + '" />');
  });
    $(this).parent().siblings().children('div.address').each(function() {
    var content = $(this).html();
    $(this).html('<input type="text" id="addressdata" name="address"  value="' + content + '" />');
  });
      $(this).parent().siblings().children('div.phone').each(function() {
    var content = $(this).html();
    $(this).html('<input type="text" id="phonedata" name="phone" max="10" required value="' + content + '" />');
  });
  $(this).parent().siblings().children('div.status').each(function() {
    var content = $(this).html();
    $(this).html('<select name="status" id="statusdata" required><option value="active">Active</option><option value="inactive">Inactive</option></select>');
  });





            



  $(this).siblings('.savedata').show();
  $(this).hide();
  $('.editdata').attr('disabled',true);
});

$(document).on('click', '.savedata', function() {
       var id=$('#iddata').val();
       var fname=$('#fnamedata').val();
       var lname=$('#lnamedata').val();
       var doj=$('#dojdata').val();
       var dob=$('#dobdata').val();
       var email=$('#emaildata').val();
       var address=$('#addressdata').val();
       var phone=$('#phonedata').val();
       var status=$('#statusdata').val();
       var $EmailIdRegEx = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,8}\b$/i;
       var $ConNoRegEx = /^([0-9]{10})$/;

       console.log(fname,lname,doj,dob,email,address,phone,status);

    

        if(fname === ""){

        $(this).parent().siblings().children('span#fnamemessage').show();
     
       }
       else if(lname === ""){
         $(this).parent().siblings().children('span#lnamemessage').show();
          
       }
       else if(doj === "" ){
         $(this).parent().siblings().children('span#dojmessage').show();
       }
       else if( dob === "" ){
         $(this).parent().siblings().children('span#dobmessage').show();
       }
       else if(email === "" ){
         $(this).parent().siblings().children('span#emailmessage').show();
       }
       else if(address === ""){
         $(this).parent().siblings().children('span#addressmessage').show();
       }
       else if(phone === ""){
         $(this).parent().siblings().children('span#phonemessage').show();
       }
       else if(status === ""){
         $(this).parent().siblings().children('span#statusmessage').show();
       }
    else if(!email.match($EmailIdRegEx)){
       $(this).parent().siblings().children('span#invalidemailmessage').show();
    }   
    else if(!phone.match($ConNoRegEx)){
         $(this).parent().siblings().children('span#invalidphonemessage').show();
    }  
	else{
$('.message').hide();
 $.ajax({
        type: "POST",
        url: 'logic_employee_data.php',
        datatype: 'json',
        data: {savedata:'savedata', id:id ,fname: fname, lname: lname, doj:doj , dob:dob,  email:email, address:address, phone:phone, status:status},
        success: function (result) {
           // do something here
      }
 });





  $('input').each(function() {
    var content = $(this).val();
    $(this).html(content);
    $(this).contents().unwrap();
  });
  $('select').each(function() {
    var content = $(this).val();
    $(this).html(content);
    $(this).contents().unwrap();
  });
  $(this).siblings('.editdata').show();
  $(this).hide();
  $('.editdata').removeAttr('disabled');




    }


});

</script>  


</body>




