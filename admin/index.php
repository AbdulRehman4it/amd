<!-- db connection -->
<?php require_once('inc/db.php');?>

<!------ top section ------>

<?php require_once('inc/top.php');




require_once('./authentication.php');


?>


  </head>
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
            <div class="d-flex align-items-center">
            <h1>
              <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
              <!-- <small>Statistics Overview</small> -->
            </h1>
            <h5 class="ms-4 mt-3">Statistics Overview</h5>
            </div>



            <?php 
              if(isset($_SESSION['status'])){
                  ?>
                  <h5><?=$_SESSION['status']?></h5>
                  <?php
                  unset(
                  $_SESSION['status']
                  );
              }
              ?>
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
            <!-- panels start here -->
            <div class="row tag-boxes mb-4">
              <div class="col-md-6 col-lg-3">
                <div class="panel panel-primary bg-primary text-white p-2">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-3 col-sm-3">
                        <i
                          class="fa fa-comments fa-5x ms-2"
                          aria-hidden="true"
                        ></i>
                      </div>
                      <div class="col-xs-9 col-sm-9">
                        <div class="text-end huge">11</div>
                        <div class="text-end">New Comments</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-secondary">
                  <a href="comments.php" class="">
                    <div class="panel-footer p-2">
                      <span class="float-start">View All Comments</span>
                      <span class="float-end"
                        ><i
                          class="fa fa-arrow-circle-right"
                          aria-hidden="true"
                        ></i
                      ></span>
                      <div class="clearfix"></div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-md-6 col-lg-3">
                <div class="panel-red text-white p-2">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-3 col-sm-3">
                        <i
                          class="fa fa-file-text fa-4x ms-2"
                          aria-hidden="true"
                        ></i>
                      </div>
                      <div class="col-xs-9 col-sm-9">
                        <div class="text-end huge">15</div>
                        <div class="text-end">All Posts</div>
                      </div>
                    
                    </div>
                  </div>
                </div>
                <div class="bg-secondary">
                  <a href="view_posts.php" class="">
                    <div class="panel-red-footer p-2">
                      <span class="float-start">View All Posts</span>
                      <span class="float-end"
                        ><i
                          class="fa fa-arrow-circle-right"
                          aria-hidden="true"
                        ></i
                      ></span>
                      <div class="clearfix"></div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-md-6 col-lg-3">
                <div class="panel-yellow text-white p-2">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-3 col-sm-3">
                        <i
                          class="fa fa-users fa-5x ms-2"
                          aria-hidden="true"
                        ></i>
                      </div>
                      <div class="col-xs-9 col-sm-9">
                        <div class="text-end huge">30</div>
                        <div class="text-end">All Users</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-secondary">
                  <a href="" class="">
                    <div class="panel-yellow-footer p-2">
                      <span class="float-start">View All Users</span>
                      <span class="float-end"
                        ><i
                          class="fa fa-arrow-circle-right"
                          aria-hidden="true"
                        ></i
                      ></span>
                      <div class="clearfix"></div>
                    </div>
                  </a>
                </div>
              </div>

              <div class="col-md-6 col-lg-3">
                <div class="panel-green bg-success text-white p-2">
                  <div class="panel-heading">
                    <div class="row">
                      <div class="col-xs-3 col-sm-3">
                        <i
                          class="fa fa-folder-open fa-5x ms-2"
                          aria-hidden="true"
                        ></i>
                      </div>
                      <div class="col-xs-9 col-sm-9">
                        <div class="text-end huge">9</div>
                        <div class="text-end">All Categories</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="bg-secondary">
                  <a href="categories.php" class="">
                    <div class="panel-green-footer p-2">
                      <span class="float-start">View All Categories</span>
                      <span class="float-end"
                        ><i
                          class="fa fa-arrow-circle-right"
                          aria-hidden="true"
                        ></i
                      ></span>
                      <div class="clearfix"></div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <hr />
            <!----------------- Table for users----------->
            <h3 class="mt-4">New Users</h3>
            <table class="table table-hover table-striped">
              <thead>
                <tr>
                  <th>Sr #</th>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Role</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>10 march 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar 786</td>
                  <td>Admin</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>10 march 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar 786</td>
                  <td>Admin</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>10 march 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar 786</td>
                  <td>Admin</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>10 march 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar 786</td>
                  <td>Admin</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>10 march 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar 786</td>
                  <td>Admin</td>
                </tr>
              </tbody>
            </table>
            <a href="" class="btn btn-primary mb-3">View All Users</a>
            <hr />

            <!------------------------- table for posts ------------------------------>
            
            <h1>New Posts</h1>
            <!-------------------- fetch post data --------------------->
            <table class="table table-hover table-striped">
            <?php        
            $query =  " SELECT * FROM posts ORDER BY id DESC";
            $run = mysqli_query($conn, $query);
            if (mysqli_num_rows($run)> 0 ) {
            ?>
              <thead>
                <tr>
                  <th>Sr #</th>
                  <th>Date</th>
                  <th>Post Title</th>
                  <th>Category</th>
                  <th>Views</th>
                </tr>
              </thead>
              <?php 
               while($row = mysqli_fetch_array($run)){
                      $id = $row['id'];
                      $date = $row['date'];
                      $title = $row['title'];                   
                      $categories = $row['categories'];  
                      $views = $row['views']                             
               ?>
              <tbody>
                <tr>
                  <td><?php  echo $id;?></td>
                  <td><?php  echo $date;?></td>
                  <td><?php  echo $title;?></td>
                  <td><?php  echo $categories;?></td>
                  <td><i class="fa fa-eye" aria-hidden="true"></i><?php  echo $views;?> </td>
                </tr>
               
               <?php  }  ?>
              </tbody>
           <?php  } ?>
            </table>
            <a href="view_posts.php" class="btn btn-primary mb-3">View All Posts</a>
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
