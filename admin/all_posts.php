<!-- db connection -->
<?php require_once('inc/db.php');?>

<!-- top section -->
<?php require_once('inc/top.php');?>
  </head>

<!-- delete category from database -->
<?php
// if(isset($_POST['delete']))
// {
//   $category_id= $_POST['delete'];
//   $query= "DELETE FROM `categories` WHERE `categories`.`id` = $category_id";
//   $query_run = mysqli_query($conn,$query);
//   if ($query_run) { 
   
//     echo "category deleted successfully";
//     header('Location:categories.php');
//   } else {
//     echo "category not deleted";
//     header('Location:categories.php');
//   }
  
// }

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
              <i class="fa fa-folder-open" aria-hidden="true"></i>Posts
              <small>Add Posts</small>
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
                  Posts
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



            <div class="row justify-content-center">
              <div class="col-md-12">
              
             
              <?php
										if (isset($_POST['submit'])){
 	
                      $image_filename=$_FILES['image']['name'];
                      $image_filetmpname=$_FILES['image']['tmp_name'];
                      $image_folder ='../assets/imgs/';
                      move_uploaded_file($image_filetmpname, $image_folder.$image_filename);

                     
                      $image2_filename=$_FILES['image2']['name'];
                      $image2_filetmpname=$_FILES['image2']['tmp_name'];
                      $image2_folder ='../assets/imgs/';
                      move_uploaded_file($image2_filetmpname, $image2_folder.$image2_filename);
                      
                      $image3_filename=$_FILES['image3']['name'];
                      $image3_filetmpname=$_FILES['image3']['tmp_name'];
                      $image3_folder ='../assets/imgs/';
                      move_uploaded_file($image3_filetmpname, $image3_folder.$image3_filename);

                      $image4_filename=$_FILES['image4']['name'];
                      $image4_filetmpname=$_FILES['image4']['tmp_name'];
                      $image4_folder ='../assets/imgs/';
                      move_uploaded_file($image4_filetmpname, $image4_folder.$image4_filename);

                      $image5_filename=$_FILES['image5']['name'];
                      $image5_filetmpname=$_FILES['image5']['tmp_name'];
                      $image5_folder ='../assets/imgs/';
                      move_uploaded_file($image5_filetmpname, $image5_folder.$image5_filename);


                      

											$date = date('Y-m-d',strtotime($_POST['date']));
											$first_title = $_POST['first_title'];
											$second_title = $_POST['second_title'];
											$third_title = $_POST['third_title'];
											$author = $_POST['author'];
											// $author_image = $_POST['author_image'];
											// $image = $_POST['image'];
                      // $filename=$_POST['author_image'];
											$categories = $_POST['categories'];
											$blog_data = $_POST['blog_data'];
											$blog_data2 = $_POST['blog_data2'];
									
											
                      $query = mysqli_query($conn,"select * from blogs where first_title = '$first_title' ") or die(mysqli_error($conn));
										$count = mysqli_num_rows($query);

										if ($count > 0){ ?>
										<script>
										alert('Data Already Exist');
										</script>
										<?php
										}else{
                      mysqli_query($conn,"INSERT INTO `blogs`( `date`, `first_title`, `second_title`, `third_title`, `author`, `image`,`image2`, `image3`, `image4`, `image5`,  `categories`, `blog_data`,`blog_data2`) 
                      values('$date','$first_title','$second_title','$third_title','$author','$image_filename','$image2_filename','$image3_filename','$image4_filename','$image5_filename', '$categories','$blog_data','$blog_data2')") or die(mysqli_error($conn));

                      // mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add Subject $course_name')")or die(mysqli_error());
                      
										?>
										<script>
										 window.location = "index.php";
										</script>
										<?php
										}
										}
										
										?>
									<div class="container justify-content-center align-items card">
                <div class="row">
                  <div class="col-md-12">
              <form class="form-horizontal" method="post"  enctype="multipart/form-data">

                    <!-- <div class="control-group">
                    <div class="controls">
                    <input name="image" class="input-file uniform_on" id="fileInput" type="file" required>
                    </div>
                    </div> -->
                    <div class="row ">
                              <div class="col-md-12">
                                  <div class="control-group">
                                      <label class="control-label" for="inputEmail"><b>Date</b></label>
                                      <div class="controls">
                                      <input class="input-field mt-2" type="text" name="date" id="inputEmail" placeholder=" Enter Date"  value="<?php  if(isset ($date)){echo $date;}?> ">
                                      </div>
                                  </div>
                              </div>
                        
                    </div>
                    <div class="row mt-3">
                    <div class="col-md-4">
                          <div class="control-group">
                                <label class="control-label" for="inputEmail"><b>First Title</b></label>
                                <div class="controls">
                                <input class="input-field2 mt-2" type="text" name="first_title" id="inputEmail" value="<?php  if(isset ($first_title)){echo $first_title;}?>" placeholder="Enter Title">
                                </div>
                          </div>
                     </div>
                        <div class="col-md-4">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail"><b>Second Title</b></label>
                                <div class="controls">
                                <input class="input-field2 mt-2" type="text" name="second_title" id="inputEmail" value="<?php  if(isset ($second_title)){echo $second_title;}?>" placeholder="Enter Title">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail"><b>Third Title</b></label>
                                <div class="controls">
                                <input class="input-field2 mt-2" type="text" name="third_title" id="inputEmail" value="<?php  if(isset ($third_title)){echo $third_title;}?>" placeholder="Enter Title">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-12">
                    <div class="control-group">
                        <label class="control-label" for="inputEmail"><b>Author</b></label>
                        <div class="controls">
                        <input  class="input-field1 mt-2" type="text" name="author" id="inputEmail" value="<?php  if(isset ($author)){echo $author;}?>" placeholder="Title">
                        </div>
                    </div>
                    </div>
                  </div>
                    <!-- author image -->
                    <div class="row mt-3">
                            <div class="col-md-12">
                            <div class="control-group">
                                <label class="control-label" for="inputPassword"><b>Blog_Image1</b></label>
                                <div class="controls">
                                <input class="input-field mt-2" type="file" name="image" class="input-file uniform_on" id="fileInput" value="<?php  if(isset ($image_filename)){echo $image_filename;}?>" required>
                                </div>
                                </div>
                              </div>
                        <!-- post image -->
                             
                    </div>

                    <div class="row mt-3">
                            <div class="col-md-12">
                            <div class="control-group">
                                <label class="control-label" for="inputPassword"><b>Blog_Image2</b></label>
                                <div class="controls">
                                <input class="input-field mt-2" type="file" name="image2" class="input-file uniform_on" id="fileInput" value="<?php  if(isset ($image2_filename)){echo $image2_filename;}?>" required>
                                </div>
                                </div>
                              </div>
                        <!-- post image -->
                             
                    </div>


                    <div class="row mt-3">
                            <div class="col-md-12">
                            <div class="control-group">
                                <label class="control-label" for="inputPassword"><b>Blog_Image3</b></label>
                                <div class="controls">
                                <input class="input-field mt-2" type="file" name="image3" class="input-file uniform_on" id="fileInput" value="<?php  if(isset ($image3_filename)){echo $image3_filename;}?>" required>
                                </div>
                                </div>
                              </div>
                        <!-- post image -->
                             
                    </div>


                    <div class="row mt-3">
                            <div class="col-md-12">
                            <div class="control-group">
                                <label class="control-label" for="inputPassword"><b>Blog_Image4</b></label>
                                <div class="controls">
                                <input class="input-field mt-2" type="file" name="image4" class="input-file uniform_on" id="fileInput" value="<?php  if(isset ($image4_filename)){echo $image4_filename;}?>" required>
                                </div>
                                </div>
                              </div>
                        <!-- post image -->
                             
                    </div>


                    <div class="row mt-3">
                            <div class="col-md-12">
                            <div class="control-group">
                                <label class="control-label" for="inputPassword"><b>Blog_Image5</b></label>
                                <div class="controls">
                                <input class="input-field mt-2" type="file" name="image5" class="input-file uniform_on" id="fileInput" value="<?php  if(isset ($image5_filename)){echo $image5_filename;}?>" required>
                                </div>
                                </div>
                              </div>
                        <!-- post image -->
                             
                    </div>

                  

                   
                    <div class="row mt-3">
                      <div class="col-md-12">
                        <div class="control-group">
                            <label class="control-label" for="inputPassword"><b>categories</b></label>
                            <div class="controls">
                            <input class="input-field1 mt-2" type="text" class="span8" name="categories" value="<?php  if(isset ($categories)){echo $categories;}?>"id="inputPassword" placeholder="Categories" required>
                            </div>
                        </div>
                       </div>
                    </div>

                     <div class="row mt-3">
                       <div class="col-md-12">
                        <div class="control-group">
                            <label class="control-label" for="inputPassword"><b>Blog Data</b></label>
                            <div class="controls mt-2">
                                <textarea name="blog_data" id="detail" class="tinymce input-field1 " value="<?php  if(isset ($blog_data)){echo $blog_data;}?>" placeholder="data here"></textarea>
                            </div>
                        </div> 
                       </div>
                    </div>


                    <div class="row mt-3">
                       <div class="col-md-12">
                        <div class="control-group">
                            <label class="control-label" for="inputPassword"><b>Blog Data2</b></label>
                            <div class="controls mt-2">
                                <textarea name="blog_data2" id="detail" class="tinymce input-field1 " value="<?php  if(isset ($blog_data2)){echo $blog_data2;}?>" placeholder="data here"></textarea>
                            </div>
                        </div> 
                       </div>
                    </div>
                
                  
                    
                    <div class="row">
                      <div class="col-md-12 " style="float:right";>
                          <div class="control-group ">
                          <div class="controls text-end">
                          <a href="#">
                          <input type="submit" value="Post"  name="submit" class="btn btn-primary mt-3 " />
                          
                        </a>
                        <a href="view_posts.php">
                          <input type="button" value="View All Posts"  name="submit" class="btn btn-primary mt-3" />
                          
                        </a>
                          
                          <?php  
                            if(isset($error_msg)){
                              echo " <span style = 'color:red;' class='pull-right'>$error_msg</span>";
                            }if(isset($msg)){
                              echo " <span style = 'color:green;' class='pull-right'>$msg</span>";
                            }
                            ?>
                        </div>
                          </div>
                      </div>
                    </div>

                    </form>
                    </div>
                    </div>
                  </div>
              
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
   <script src="js/tinymce_nightly_dev/tinymce/js/tinymce.min.js" ></script>
   <script src="js/tinymce_nightly_dev/tinymce/js/init-tinymce.js" ></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    
  </body>
</html>
