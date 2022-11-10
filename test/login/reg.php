<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <link rel="stylesheet" href="style.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
      <div class="main">
      <div class="row">
    <div class="col-md-12">
      <form name="myform" id="myform" action="regs.php"  method="POST">
    
          <h1>Registration</h1>
        
          <label for="name">Name:</label>
          <p id="uname" class="error" style="color: red;"></P>
          <input type="text" id="name" name="name" placeholder="Enter Your Name"><br> 


          <label for="email">Email:</label>
          
          <input type="text" id="email" name="email" placeholder="Enter Your Email" >
          <p id="uemail" class="error" style="color: red;"></p>

          
          <label for="password">Password:</label>
          <p id="upassword" class="error" style="color: red;"></p>

          <input type="password" id="password" name="password" placeholder="Enter Password"  maxlength="8"><br> 


          <label for="cpassword">Confirm Password:</label>
          <p id="upassword" class="error" style="color: red;"></p>

          <input type="password" id="cpassword" name="cpassword" placeholder="Enter confirmation Password"  maxlength="8"><br> 

        <button type="submit" id="logout" name="submit" >Submit</button>
        <div class="link">
        <a href="login.php">Click Here to Login..!</a>
        </div>
       </form>
       
        </div>
      </div>
  </div>
<script>


jQuery('#myform').validate({
      
      rules:{
      name:"required",
      email:{
          email:true,
          required:true,
          remote:{
            url:"regs.php",
            type:"post",
            async: false,
            data:{
             email: function() {
                  return  $('#email').val();
                }
          }
      
                  },
                },           
      password:{
            required: true,
                minlength: 8,
                maxlength: 8,
                       
      },
      cpassword:{
        required: true,
            minlength: 8,
            maxlength: 8,
            equalTo: "#password",
  },
      },
      messages:{
        email:{
          remote:"Email is already Teken..!"
        },
        cpassword:{
          equalTo:  "The password and confirmation password do not match..!",
        }

          }
      
      });

</script>

    </body>
</html>