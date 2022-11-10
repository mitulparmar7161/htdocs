<?php
include 'header.php';
?>

<body>




<div class="container col-lg-5 mt-4 border p-4" >  
  <div class="panel panel-primary">   
    <div class="panel-body">  

  
        <form action="add_user_data.php" method="POST" id="myform" enctype='multipart/form-data'>  
  


         <div class="h1 d-flex justify-content-center">Add New User</div>
       
             <p id="uname" class="error" style="color: red;"></P>
            <label for="name" class=" h5">Name:</label>
           
            <input type="text" id="name" name="name" placeholder="Enter Your Name" class="form-control">
            <p id="uname" class="error" style="color: red;"></P>

            <label for="email" class="mt-4 h5">Email:</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email">
            <p id="uemail" class="error" style="color: red;"></p>



            <label for="password" class="mt-4 h5">Password:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password"
                maxlength="8">

            <p id="upassword" class="error" style="color: red;"></p>


                <label for="cpassword" class="mt-4 h5">Confirm Password:</label>
 
                <input type="password" id="cpassword" name="cpassword" placeholder="Enter confirmation Password" maxlength="8" class="form-control">
                <p id="upassword" class="error" style="color: red;"></p>

                
            <label for="role" class="mt-4 h5">Role:</label>
                
            <select id="role" name="role" class="form-select" required>
                 <option  selected disabled>Select user role</option>
                 <option value="admin">Admin</option>
                 <option value="user">User</option>
            </select>


           






 <label for="images" class="mt-4 h5">Images:</label>
        <div class="input-group control-group after-add-more">  
           
          <input id="inputvala" type="file" name="file[]" class="form-control me-3" placeholder="Enter Name Here" required accept=".png,.jpg,.jpeg">  
          <div class="input-group-btn">   
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button> 
          </div>  
        </div>  
        <div class="before-add-more">
            
        </div>
        <span class="h6"style="color:red;"></span><br>
        

            <div class="d-flex justify-content-center mt-4">
                <a id="logout" href="userdata.php" name="cancel" class="btn btn-danger col-6 p-2 me-3">Cancel</a>
                <button type="submit" id="logout" name="submit" class="btn btn-primary col-6 p-2 ">Add User</button>
            </div>


        </form>  
  
        <!-- Copy Fields -->  
         
        <div class="copy d-none">  
          <div class="control-group input-group" style="margin-top:10px">  
            <input id="inputvalr" type="file" name="file[]" class="form-control me-3" placeholder="Enter Name Here" required accept=".png,.jpg,.jpeg">  
            <div class="input-group-btn">   
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>  
            </div>  
          </div>  
        </div>  
    </div>  
  </div>  
</div>  

</div>
</div>



<script>


    jQuery('#myform').validate({

        rules: {
            name: "required",
            email: {
                email: true,
                required: true,
                remote: {
                    url: "add_user_data.php",
                    type: "post",
                    async: false,
                    data: {
                        email: function () {
                            return $('#email').val();
                        }
                    }

                },
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 8,

            },
            cpassword: {
                required: true,
                minlength: 8,
                maxlength: 8,
                equalTo: "#password",
            },
        },
        messages: {
            email: {
                remote: "Email is already Teken..!"
            },
            cpassword: {
                equalTo: "The password and confirmation password do not match..!",
            }

        }

    });

</script>


<script type="text/javascript">  
  
    $(document).ready(function() {  
        var x=0;
        var   y=0;
      $(".add-more").click(function(){   
       $("#myform input[type=file]").each(function() {
      
       if (isNaN(this.value)) {  
         y=1;
        
       }
       else{
        y=0;
        return false;
       }
    });
  
       if(y===1){
        var html = $(".copy").html();  
         $(".before-add-more").before(html);  
          $('p').html("");
          y=0;
       }
       else{
         $('span').html("All fields are required before adding a new one");
       }
     
      });  
  
      $("body").on("click",".remove",function(){   
          $(this).parents(".control-group").remove();  
          x=0;
      });  
  
    });  
  
</script>  
  
</body>  





</body>

