<!-- db connection -->
<?php require_once('inc/db.php');?>

<!------ top section ------>

<?php require_once('inc/top.php')?>
  </head>


  <?php
if(isset($_POST['delete']))
{
  $id= $_POST['delete'];
  $query= "DELETE FROM `blogs` WHERE `blogs`.`id` = $id";
  $query_run = mysqli_query($conn,$query);
  if ($query_run) { 
   
    echo "post deleted successfully";
    header('Location:view_posts.php');
  } else {
    echo "post not deleted";
    header('Location:view_posts.php');
  }
  
}

?>
  <body>
    <div id="wrapper">
    <!-- navbar section -->
    <?php require_once('inc/navbar.php')?>

      <div class="container-fluid body-section">
        <div class="row">
          <div class="col-md-3">

           <!-- sidebar section -->
           <?php require_once('inc/sidebar.php')?>
          </div>

          <div class="col-md-9">
            <h1>
              <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
              <small>Statistics Overview</small>
            </h1>
            <hr />
            <div class="scp-breadcrumb">
              <ol class="breadcrumb">
                <li class="active m-2">
                  <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                </li>
                <!-- <li><a href="#" class="me-2">Home</a></li>
                <li><a href="#" class="me-2">Products</a></li> -->
              </ol>
            </div>
            
            <hr />
      

            <!------------------------- table for posts ------------------------------>
            
            <h1>New Posts</h1>
            <!-------------------- fetch post data --------------------->
            <table class="table table-hover table-striped">
            <?php        
            $query =  " SELECT * FROM blogs ORDER BY id DESC";
            $run = mysqli_query($conn, $query);
            if (mysqli_num_rows($run)> 0 ) {
            ?>
              <thead>
                <tr>
                  <th>Sr #</th>
                  <th>Date</th>
                  <th>first Title</th>
                  <th>Second Title</th>
                  <th>Third Title</th>
                  <th>Category</th>
                  <th>Author</th>
                  <th>Blog Data</th>
                  <th>Blog Data2</th>
                  <th>Edit</th>
                  <th>Delete</th>
                
                </tr>
              </thead>
              <?php 
               while($row = mysqli_fetch_array($run)){
                      $id = $row['id'];
                      $date = $row['date'];
                      $first_title = $row['first_title'];                   
                      $second_title = $row['second_title'];                   
                      $third_title = $row['third_title'];                   
                      $categories = $row['categories'];  
                      $author = $row['author'];  
                      $blog_data = $row['blog_data'];  
                      $blog_data2 = $row['blog_data2'];  
                                            
               ?>
              <tbody>
                <tr>
                  <td><?php  echo $id;?></td>
                  <td><?php  echo $date;?></td>
                  <td><?php  echo $first_title;?></td>
                  <td><?php  echo $second_title;?></td>
                  <td><?php  echo $third_title;?></td>
                  <td><?php  echo $categories;?></td>
                  <td><?php  echo $author;?></td>
                  <td><?php  echo $blog_data;?></td>
                  <td><?php  echo $blog_data2;?></td>

                  <td>
                        <a href="post_edit.php?id=<?php echo $id;?>"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                      </td>

                      <td>
                        <form action="#" method="POST">
                        <button type="submit" name="delete" class="" value="<?php  echo $id;?>">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>
                        </form>
                      </td>
                  
                </tr>
               
               <?php  }  ?>
              </tbody>
           <?php  } ?>
            </table>
            <a href="all_posts.php" class="btn btn-primary mb-3">ADD New Post</a>
            <a href="index.php" class="btn btn-primary mb-3">Back</a>
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
