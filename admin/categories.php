<!-- db connection -->
<?php require_once('inc/db.php');?>

<!-- top section -->
<?php require_once('inc/top.php');?>
  </head>

<!-- delete category from database -->
<?php
if(isset($_POST['delete']))
{
  $category_id= $_POST['delete'];
  $query= "DELETE FROM `categories` WHERE `categories`.`id` = $category_id";
  $query_run = mysqli_query($conn,$query);
  if ($query_run) { 
   
    echo "category deleted successfully";
    header('Location:categories.php');
  } else {
    echo "category not deleted";
    header('Location:categories.php');
  }
  
}

?>
  <body>
    <div id="wrapper">
     <!-- navbar section -->

         <?php require_once('inc/navbar.php');?>
       

      <div class="container-fluid body-section">
        <div class="row">
          <div class="col-md-3">

          <!-- sidebar section -->
            <?php require_once('inc/sidebar.php')?>
          </div>

          <div class="col-md-9">
            <h1>
              <i class="fa fa-folder-open" aria-hidden="true"></i> Categories
              <small>Different Categories</small>
            </h1>
            <hr />
            <div class="scp-breadcrumb">
              <ol class="breadcrumb p-2">
                <li>
                  <a href="index.html" class="me-2"
                    ><i class="fa fa-tachometer" aria-hidden="true"></i>
                    Dashboard</a
                  >
                </li>
                <li class="active me-2">
                  <i class="fa fa-folder-open" aria-hidden="true"></i>
                  Categories
                </li>
                <!-- <li><a href="#" class="me-2">Products</a></li> -->
              </ol>
            </div>


                  <!------ fetch category data ------->
             <?php
             if(isset($_POST['submit'])){
              $cate_name = $_POST['category'];
              if (empty($cate_name)) {
                $error_msg = "All (*) fields are Required";
              } else {
               $cate_query = "INSERT INTO `categories` (`id`, `category`) VALUES (NULL, '$cate_name')";
              if (mysqli_query($conn, $cate_query)) {
                 $msg = "Category Submited";
                 $cate_name = ""; 
                } else {
                  $error_msg = "Category Has not be submited";
                }
              }
             }
             ?>



            <div class="row">
              <div class="col-md-6">
                <form action="" method="post">
                  <div class="form-group">
                    <label for="category">Category Name*:</label>
                    <input
                      type="text"
                      value="<?php  if(isset ($cate_name)){echo $cate_name; }?>"
                      placeholder="Category Name"
                      class="form-control"
                      name= "category"
                    />
                  </div>
                  <input
                    type="submit"
                    value="Add Category"
                    name="submit"
                    class="btn btn-primary mt-3"
                  />  <?php  
                      if(isset($error_msg)){
                        echo " <span style = 'color:red;' class='pull-right'>$error_msg</span>";
                      }if(isset($msg)){
                        echo " <span style = 'color:green;' class='pull-right'>$msg</span>";
                      }
                      ?>
                </form>
              </div>
              <div class="col-md-6">
                <table class="table table-hover table-bordered table-striped">
                  

                
								
                <?php        
            $cate_query =  " SELECT * FROM categories ORDER BY id DESC";
            $cate_run = mysqli_query($conn, $cate_query);
            if (mysqli_num_rows($cate_run)> 0 ) {
            ?>
            <div class="comment">         
             <h3>Comments</h3>
                  <thead>
                    <tr>
                      <th>Sr #</th>
                      <th>Category Name</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <?php 
               while($cate_row = mysqli_fetch_array($cate_run)){
                      $cate_id = $cate_row['id'];
                      $cate_category = $cate_row['category'];
                                      
               ?>
                  <tbody>
                    <tr>
                      <td><?php  echo $cate_id;?></td>
                      <td><?php  echo $cate_category;?></td>


                      <td>
                        <a href="category_edit.php?id=<?php echo $cate_id;?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      </td>
                      <td>
                        <form action="#" method="POST">
                        <button type="submit" name="delete" class="" value="<?php  echo $cate_id;?>">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        </form>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                  <?php }  ?>
                </table>             
              </div>             
            </div>
          </div>
        </div>
      </div>
      <!----------------------- footer start here --------------------------->
   <?php require_once('inc/footer.php')?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
