
<?php
            include 'header.php';
            ?>

<?php
if(!isset($_SESSION['email'])){
  header("Location: logout.php");
}

?>
  
  
  <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Form</title>
            <link rel="stylesheet" href="userdata.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </head>
        <body>
            

          <div class="row">
        <div class="col-md-12">
            <div class="mainform">
          <form action="userdata.php" method="get">
            <br>



    <?php

      $connect = mysqli_connect("localhost", "root", "", "test");
      $data="";
      $limit = 10;     
      if (isset($_GET["page"])) { 
        $pn  = (int) $_GET["page"]; 
      } 
      else { 
        $pn=1; 
      };  
    
      $start_from = ($pn-1) * $limit;  

    ?>



<?php



function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "test");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}





if(isset($_GET['search']))
{
    // session 
    $_SESSION['search_string']=$_GET['searchdata'];

    $valueToSearch = $_SESSION['search_string']; 
    
    $query = "SELECT * FROM `login` WHERE CONCAT(`id`, `name`, `email`) LIKE '%".$valueToSearch."%' LIMIT $start_from, $limit";
    $search_result = filterTable($query);


}




else if(isset($_SESSION['search_string'])){
    $valueToSearch = $_SESSION['search_string'];
    $query = "SELECT * FROM `login` WHERE CONCAT(`id`, `name`, `email`) LIKE '%".$valueToSearch."%' LIMIT $start_from, $limit";
    $search_result = filterTable($query);
}
else {
    $query = "SELECT * FROM `login` LIMIT $start_from, $limit";
    $search_result = filterTable($query);
}


if (isset($_SESSION['search_string'])){

$searchsort=$_SESSION['search_string'];


    if (isset($_GET['sort'])) {
        $data = $_GET['sort'];
    

        if($data =='idup'){
           
            $connect = mysqli_connect("localhost", "root", "", "test");
            $sortquery = "SELECT * FROM login WHERE CONCAT(`id`, `name`, `email`) LIKE '%".$searchsort."%' order by id ASC LIMIT $start_from, $limit";
            $search_result = mysqli_query($connect,$sortquery);
        }
        if ($data =='iddown') {
            $_SESSION['iddown_session'] = $data;
            $connect = mysqli_connect("localhost", "root", "", "test");
            $sortquery = "SELECT * FROM login  WHERE CONCAT(`id`, `name`, `email`) LIKE '%".$searchsort."%'  order by id DESC LIMIT $start_from, $limit";
            $search_result = mysqli_query($connect,$sortquery);
           } 


           
     if($data =='nameup'){
        $connect = mysqli_connect("localhost", "root", "", "test");
        $sortquery = "SELECT * FROM login WHERE CONCAT(`id`, `name`, `email`) LIKE '%".$searchsort."%' order by name ASC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
    }
    if ($data =='namedown') {
        $connect = mysqli_connect("localhost", "root", "", "test");
        $sortquery = "SELECT * FROM login WHERE CONCAT(`id`, `name`, `email`) LIKE '%".$searchsort."%' order by name DESC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
       }



       
       if($data =='emailup'){
        $connect = mysqli_connect("localhost", "root", "", "test");
        $sortquery = "SELECT * FROM login WHERE CONCAT(`id`, `name`, `email`) LIKE '%".$searchsort."%' order by email ASC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
    }
    if ($data =='emaildown') {
        $connect = mysqli_connect("localhost", "root", "", "test");
        $sortquery = "SELECT * FROM login  WHERE CONCAT(`id`, `name`, `email`) LIKE '%".$searchsort."%' order by email DESC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
       } 

           
        }
}


else if (isset($_GET['sort'])) {
    $data = $_GET['sort'];



    if($data =='idup'){
        $_SESSION['idup_sessoin'] = $data;
        $connect = mysqli_connect("localhost", "root", "", "test");
        $sortquery = "SELECT * FROM login  order by id ASC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
    }
    if ($data =='iddown') {
        $connect = mysqli_connect("localhost", "root", "", "test");
        $sortquery = "SELECT * FROM login  order by id DESC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
       } 



    if($data =='nameup'){
        $connect = mysqli_connect("localhost", "root", "", "test" );
        $sortquery = "SELECT * FROM login order by name ASC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
    }
    if ($data =='namedown') {
        $connect = mysqli_connect("localhost", "root", "","test");
        $sortquery = "SELECT * FROM login  order by name DESC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
       } 



       if($data =='emailup'){
        $connect = mysqli_connect("localhost", "root", "", "test");
        $sortquery = "SELECT * FROM login  order by email ASC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
    }
    if ($data =='emaildown') {
        $connect = mysqli_connect("localhost", "root", "", "test");
        $sortquery = "SELECT * FROM login  order by email DESC LIMIT $start_from, $limit";
        $search_result = mysqli_query($connect,$sortquery);
       } 

   } 


?>


<!-- DELETE DATA -->

<?php

if(isset($_GET['delete'])){
    $deleteid=$_GET['delete'];
    $connect = mysqli_connect("localhost", "root", "", "test");
    $query = "DELETE FROM login WHERE id=$deleteid";
    $delete = mysqli_query($connect,$query);
  
}


?>






    <div class="data">
    <div class="input" style="margin-bottom:5px;">
    <?php  
    
        if(isset($_SESSION['search_string'])){
            echo "<input  type='text' id='search' name='searchdata' value='".$_SESSION['search_string']."' placeholder='Search Here.' >"; 
        }
        else{
            echo "<input  type='text' id='search' name='searchdata' value='' placeholder='Search Here.' >"; 
        }
    
    ?><button type="submit" name="search" id="searchbtn">Search</button>
    
    </div>
    <div class="message">
    <?php
        if(isset($_GET['delete'])){
            echo "<span style='color:green'>Record Delete Successful</span>";
        header("Refresh:1; URL= userdata.php"); 
        }
        
        ?>
    </div>

    <div class="data">
     
    <table class="table">
            <thead >
   
            <th>User ID  
                    
           <?php echo "<a href='userdata.php?sort=idup&page=".$pn."' class='sort'>▲</a>&nbsp <a href='userdata.php?sort=iddown&page=".$pn."' class='sort'>▼</a>"; ?>

        </th>
            <th>Name      <?php  echo "<a href='userdata.php?sort=nameup&page=".$pn."' class='sort'>▲</a>&nbsp <a href='userdata.php?sort=namedown&page=".$pn."' class='sort'>▼</a>"; ?></th>
            <th>Email    <?php echo "<a href='userdata.php?sort=emailup&page=".$pn."' class='sort'>▲</a>&nbsp <a href='userdata.php?sort=emaildown&page=".$pn."' class='sort'>▼</a>"; ?></th>
            <th></th>
            <th></th>
            </thead>
        <tbody >
        <?php
                                   
                                    while($row=mysqli_fetch_assoc($search_result)){?>
                                        <tr>
                                          
                                            <td><?php echo $row['id']?></td>
                                            <td><?php echo $row['name']?></td>
                                    <td><?php echo $row['email']?></td>
                                            <td><a  class='edit' href="javascript: edit_user(<?php echo $row['id']; ?>)" ><span>EDIT</span></a></td>
                                            <script type="text/javascript">
                                                        function edit_user(uid)
                                                        {
                                                             if (confirm('Are You Sure to Edit this Record?'))
                                                         {
                                                             window.location.href = 'edit.php?edit=' + uid;
                                                                         }
                                                        }
                                             </script>
                                            <td><a  class='delete' href="javascript: delete_user(<?php echo $row['id']; ?>)" ><span>DELETE</span></a></td>
                                            <script type="text/javascript">
                                                        function delete_user(uid)
                                                        {
                                                             if (confirm('Are You Sure to Delete this Record?'))
                                                         {
                                                             window.location.href = 'userdata.php?delete=' + uid;
                                                                         }
                                                        }
                                             </script>
    
                                        </tr>
                                        <?php } ?> 
                                        
        </tbody>
    
          </table>
          </div>
          <div class="page">
          <ul class="pagination">
      <?php  
      $connect = mysqli_connect("localhost", "root", "", "test");
        
        if(isset($_SESSION['search_string']))
        {
            $valueToSearch = $_SESSION['search_string'];
            $sql = "SELECT COUNT(*) FROM login  WHERE CONCAT(`id`, `name`, `email`) LIKE '%".$valueToSearch."%'";
        }
        else{
        $sql = "SELECT COUNT(*) FROM login";  
        }
        $rs_result = mysqli_query($connect,$sql);  
        $row = mysqli_fetch_row($rs_result);  
        $total_records = $row[0];  
          
        
        $total_pages = ceil($total_records / $limit);  
        $pagLink = "";     
        


        for ($i=1; $i<=$total_pages; $i++) {
          if ($i==$pn) {
              $pagLink .= "<a  href='userdata.php?page="
                                                .$i."&sort=".$data."'><li class='active'  style='background-color:rgb(65, 109, 255); color:white;'>".$i."</li></a>";
                                                $_SESSION['pagevalue']=$i;
          }            
          else  {
              $pagLink .= "<a href='userdata.php?page=".$i."&sort=".$data."'><li>
                                                ".$i."</li></a>";  
                                                
          }
        }  
       
        $x=$_SESSION['pagevalue'];
       if($x > 1){
        echo "<a href='userdata.php?page=".($x-1)."&sort=".$data."'><li><<</li></a>";
       }
        echo $pagLink;  
        if($x < $total_pages){

            echo "<a href='userdata.php?page=".($x+1)."&sort=".$data."'><li>>></li></a>";
        }
        
      ?>
      </ul>
    </div>    
    <br><br>  
    
    

            
           </form>
                </div>
            </div>
    </div>
          </div>
 </body>
</html>

