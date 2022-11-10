  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <link rel="stylesheet" href="form.css">
        <script src="form.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form name="myform" id="myform"  action="data.php" method="POST">
    
          
        
          <label for="name">Name:</label>
          <p id="uname" class="error" style="color: red;"></P>
          <input type="text" id="name" name="name" placeholder="Enter Your Name"><br> <br> <br>


          <label for="email">Email:</label>
          
          <input type="text" id="email" name="email" placeholder="Enter Your Email" >
          <p id="uemail" class="error" style="color: red;"></p>

          
          <label for="contact">Contact</label>
          <p id="ucontact" class="error" style="color: red;"></p>

          <input type="text" id="contact" name="contact" placeholder="Enter Your Contact Number"  maxlength="10"><br> <br> <br>
        
          <label>Age:</label>
       
          <input type="radio" id="age" value="under_18" name="age">Under 18<br>
          <input type="radio" id="age" value="over_18" name="age">Over 18<br><br>
      
       
       
          <br>
         <label for="address">Address:</label>
         <p id="uaddress" class="error" style="color: red;"></p>
          <textarea id="address" name="address" placeholder="Enter Your Address"></textarea><br> <br> <br>
        
       
        
         <label for="Gender">Gender:</label>
         <p id="ugender" class="error" style="color: red;"></p>
          <select id="gender" name="gender" >
            <option value="" disabled selected>Select Gender</option>
            <option value="Male">Male</option>
            <option value="female">Female</option>
          </select><br> <br> <br>
          
 

          <label for="profile" >Profile Picture</label>
          <p id="uprofile" class="error" style="color: red;"></p>
          <input type="file" name="profile" id="profile" accept=".jpg, .jpeg, .png" ><br> <br> <br>
          
          

          <label for="date">Date</label>
          <p id="udate" class="error" style="color: red;"></p>
          <input type="date" name="date" id="date"><br> <br> <br>
          <p id="utime" class="error" style="color: red;"></p>
          <label for="time">Time</label>
          <input type="time" name="time" id="time"><br> <br> <br>

        <button type="submit" id="submit" name="submit">Submit</button>
        
       </form>
        </div>
      </div>






      <script>

// $(document).ready(function() {

// $("#email").keyup(function(){

// var email = $('#email').val();
// $.ajax({
// type:"post",
// url:"data.php",
// data:{
//   'check':1,
//   'email':email,
// },
// success:function (response){
//   console.log(response);
//   $("#uemail").html(response);
// }


// });

//   });

// });



jQuery('#myform').validate({

rules:{
name:"required",
email:{
    email:true,
    required:true,
    remote:{
      url:"data.php",
      type:"post",
      async: false,
      data:{
       email: function() {
            return  $('#email').val();
          }
    }

            },
          },           
contact:{
      required: true,
		  number: true,
		  minlength: 10,
		  maxlength: 10
},
age:"required",
address:"required",
gender:"required",
profile:"required",
date:"required",
time:"required"
},
messages:{
  email:{
    remote:"Email is already Teken..!"
  },
    }

});


      </script>
    </body>
</html>