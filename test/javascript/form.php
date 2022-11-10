<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <link rel="stylesheet" href="form.css">
        <script src="form.js"></script>
       
    </head>
    <body>
      <div class="row">
    <div class="col-md-12">
      <form name="myform" action="data.php" method="POST" onsubmit="return validate()">
    
          
        
          <label for="name">Name:</label>
          <p id="uname" style="color: red;"></p>
          <input type="text" id="name" name="name" placeholder="Enter Your Name">


          <label for="email">Email:</label>
          <p id="uemail" style="color: red;"></p>
          <input type="text" id="email" name="email" placeholder="Enter Your Email" >
       

          
          <label for="contact">Contact</label>
          <p id="ucontact" style="color: red;"></p>

          <input type="text" id="contact" name="contact" placeholder="Enter Your Contact Number"  maxlength="10">
        
          <label>Age:</label>
          <p id="uage" style="color: red;"></p>
          <input type="radio" id="age" value="under_18" name="age"><label for="under_18" class="light" >Under 18</label><br>
          <input type="radio" id="age" value="over_18" name="age"><label for="over_18" class="light" >Over 18</label><br>
          
       
       
          <br>
         <label for="address">Address:</label>
         <p id="uaddress" style="color: red;"></p>
          <textarea id="address" name="address" placeholder="Enter Your Address"></textarea>
        
       
        
         <label for="Gender">Gender:</label>
         <p id="ugender" style="color: red;"></p>
          <select id="gender" name="gender" >
            <option value="" disabled selected>Select Gender</option>
            <option value="Male">Male</option>
            <option value="female">Female</option>
          </select>
          
          <label>Hobbies:</label>
          <p id="uhobbies" style="color: red;"></p>
          <input type="checkbox" id="programing" value="programing" name="hobbies[]">Programing
          <input type="checkbox" id="gamming" value="gamming" name="hobbies[]">Gamming
          <input type="checkbox" id="music" value="music" name="hobbies[]">Music
          <input type="checkbox" id="designing" value="designing" name="hobbies[]">Designing <br>
            <br>

          <label for="profile" >Profile Picture</label>
          <p id="uprofile" style="color: red;"></p>
          <input type="file" name="profile" id="profile" accept=".jpg, .jpeg, .png" >
          
          

          <label for="date">Date</label>
          <p id="udate" style="color: red;"></p>
          <input type="date" name="date" id="date">
          <p id="utime" style="color: red;"></p>
          <label for="time">Time</label>
          <input type="time" name="time" id="time">

        <button type="submit">Submit</button>
        
       </form>
        </div>
      </div>
      
    </body>
</html>