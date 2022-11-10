<?php
include 'header.php';
?>

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



    <body>

    <div class="container col-lg-5 mt-5 border p-4" >  
  <div class="panel panel-primary">  
    <div class="panel-body">  
  
        <form action="edit_data.php" method="POST" id="myform" enctype='multipart/form-data'>  




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

            

            
            




<?php

if(isset($_GET['delete'])){
    $deleteid=$_GET['delete'];
    $connect = mysqli_connect("localhost", "root", "", "test");
    $query = "DELETE FROM userimages WHERE id=$deleteid";
    $delete = mysqli_query($connect,$query);
  
}   


?>








<label for="images" class="mt-4">Your Images:</label>

<div id="display-image" class="d-flex-wrap p-5 justify-content-center">
           <?php
        $query = " select * from userimages where userid=$id";
        $result = mysqli_query($connect, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
         ?>
    
         <img class="rounded-2 me-1 mt-4 ms-3 col-4 "  src="images/<?php echo $data['images']; ?>"> 
        <a  class='bg-danger text-white p-2 '  style='text-decoration:none; border-radius: 3px;'  href="javascript: delete_user(<?php echo $data['id']; ?>,<?php echo $id ?>)" ><span>DELETE</span></a>
      
     
          <script type="text/javascript">
                                                        function delete_user(uid,id)
                                                        {
                                                             if (confirm('Are You Sure to Delete this Image?'))
                                                         {
                                                             window.location.href = 'edit.php?delete=' + uid + '&edit=' + id;
                                                                         }
                                                        }
                                             </script>
    <?php
        }
    ?>
    </div><br>

  
        <div class="input-group control-group after-add-more">  
          <input id="inputvala" type="file" name="file[]" class="form-control me-3" placeholder="Enter Name Here"  accept=".png,.jpg,.jpeg">  
          <div class="input-group-btn">   
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button> 
          </div>  
        </div>  

          

        <div class="before-add-more">
            
        </div>
         <span class="h6"style="color:red;"></span>
       <div class="d-flex justify-content-center">
                <a href="userdata.php" role="button" class="btn btn-danger col-6 p-2 me-3 mt-5">Cancle</a>
                <input type="submit"  name="submit" class="btn btn-primary col-6 p-2 mt-5"></input>
            </div>
        </form>  
  
        <!-- Copy Fields -->  
        
        <div class="copy d-none">  
          <div class="control-group input-group" style="margin-top:10px">  
            <input id="inputvalr" type="file" name="file[]" class="form-control me-3" placeholder="Enter Name Here"  accept=".png,.jpg,.jpeg">  
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
          $('span').html("");
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
