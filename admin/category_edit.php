<!-- db connection -->
<?php require_once('inc/db.php');?>

<!-- top section -->
<?php require_once('inc/top.php');?>

<!-- update category data -->
<?php

if(isset($_POST['submit']))
{
    $category_id= $_POST['category_id'];
     $cate_name = $_POST['category'];
     $query = "UPDATE categories SET category='$cate_name' WHERE id='$category_id'";
     $query_run = mysqli_query($conn,$query);

     if ($query_run) {
      echo ("updated successfully");
      header('Location: categories.php?id='.$category_id);
     } else {
        echo "something went wrong";
        header('Location: category_edit.php?id='.$category_id);
     }
     
}
?>




  </head>
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
            //  if(isset($_POST['submit'])){
            //   $cate_name = $_POST['category'];
            //   if (empty($cate_name)) {
            //     $error_msg = "All (*) fields are Required";
            //   } else {
            //    $cate_query = "INSERT INTO `categories` (`id`, `category`) VALUES (NULL, '$cate_name')";
            //   if (mysqli_query($conn, $cate_query)) {
            //      $msg = "Category Submited";
            //      $cate_name = ""; 
            //     } else {
            //       $error_msg = "Category Has not be submited";
            //     }
            //   }
            //  }
             ?>



            <div class="row">
              <div class="col-md-6">
                <!-- form data fetch from database -->
                <?php
                if(isset($_GET['id']))
                  {                 
                $category_id = $_GET['id'];
                $category_edit_query= "SELECT * FROM categories WHERE id='$category_id' LIMIT 1";
                $category_run=  mysqli_query($conn,$category_edit_query);

                if (mysqli_num_rows($category_run)>0) {
                    $row = mysqli_fetch_array($category_run);
                    ?>
                     
                 <form action="#"  method="post">
                 <input type="hidden" name="category_id" value="<?= $row['id'];?>"/> 
                  
                  <div class="form-group">
                    <label for="category">Category Name*:</label>
                    <input type="text" value="<?= $row['category']?>" placeholder="Category Name" class="form-control" name= "category"/>
                  </div>
                  <!-- buttons -->
                  <input type="submit" value="Category_Update " name="submit" class="btn btn-primary mt-3"/> 
                  <a href="categories.php">
                    <input type="button" value="Back"  name="submit" class="btn btn-primary mt-3" />
                  </a>
                   <?php  
                      if(isset($error_msg)){
                        echo " <span style = 'color:red;' class='pull-right'>$error_msg</span>";
                      }if(isset($msg)){
                        echo " <span style = 'color:green;' class='pull-right'>$msg</span>";
                      }
                      ?>
                </form> 


                    <?php
                } else {
                   ?>
                   <h4>No Category Found</h4>
                   <?php
                }
                
                   }
                ?>
             
                       
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
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
