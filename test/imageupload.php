<?php
include '../admin/header.php';
?>
<body>  
  
<div class="container col-lg-5  mt-5 border p-4" >  
  <div class="panel panel-primary">  
    <div class="h2"> Add Profile images</div>  
    <div class="panel-body">  
  
        <form action="fileupload.php" method="POST" id="myform" enctype='multipart/form-data'>  
  
        <div class="input-group control-group after-add-more">  
          <input id="inputval" type="file" name="file[]" class="form-control me-3" placeholder="Enter Name Here" required accept=".png,.jpg,.jpeg">  
          <div class="input-group-btn">   
            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>  
          </div>  
        </div>  
        <div class="before-add-more">
            
        </div>
       
        <button type="submit" name="submit" class="btn btn-primary mt-3 mb-3">Upload</button>
        </form> 
  
        <!-- Copy Fields -->  
        <p class="h6"style="color:red;"></p>
        <div class="copy d-none">  
          <div class="control-group input-group" style="margin-top:10px">  
            <input id="inputval" type="file" name="file[]" class="form-control me-3" placeholder="Enter Name Here" required accept=".png,.jpg,.jpeg">  
            <div class="input-group-btn">   
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>  
            </div>  
          </div>  
        </div>  
  
    </div>  
  </div>  
</div>  
  
<script type="text/javascript">  
  
    $(document).ready(function() {  
     
        var   y=0;
      $(".add-more").click(function(){   
       $("#myform input").each(function() {
      
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
         $('p').html("File is Empty");
       }
     

      });  
  
      $("body").on("click",".remove",function(){   
          $(this).parents(".control-group").remove();  

      });  
  
    });  
  
</script>  
  
</body>  

