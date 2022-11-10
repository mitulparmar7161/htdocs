<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$connect = mysqli_connect("localhost", "root", "","test");
		$record = mysqli_query($connect, "SELECT * FROM login WHERE id=$id");

		
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$email = $n['email'];
              
	
	}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <link rel="stylesheet" href="style.css">

            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body>
     <form name="myform" id="myform" action="edit_data.php" method="POST" class="px-4 py-3 d-flex align-self-center justify-content-center " style="margin-top: 220px;">
        <div class="form-group border p-4 " style="width: 500px;">
            <div class="h1 d-flex justify-content-center">Edit Data</div>

            <input type="hidden" name="id" value="<?php echo $id; ?>">


             <label for="email" class="mt-4">Email:</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $email ?>" readonly="readonly">
            <p id="uemail" class="error" style="color: red;"></p>




            <label for="name">Name:</label>
           
            <input type="text" id="name" name="name" placeholder="Enter Your Name" class="form-control" value="<?php echo $name ?>">
            <p id="uname" class="error" style="color: red;"></P>

           



            <label for="password" class="mt-4">Password:</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password"
                maxlength="8">

            <p id="upassword" class="error" style="color: red;"></p>


                <label for="cpassword" class="mt-4">Confirm Password:</label>
 
                <input type="password" id="cpassword" name="cpassword" placeholder="Enter confirmation Password" maxlength="8" class="form-control">
                <p id="upassword" class="error" style="color: red;"></p><br>

            <div class="d-flex justify-content-center">
                <a href="userdata.php" role="button" class="btn btn-danger col-6 p-2 me-3 ">Cancle</a>
                <input type="submit"  name="submit" class="btn btn-primary col-6 p-2 "></input>
            </div>

            
        </div>
    </form>

<script>


jQuery('#myform').validate({
      
      rules:{
      name:"required",
      email:{
          email:true,
          required:true,

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

      
      });

</script>

    </body>
</html>