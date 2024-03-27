<!-- db connection -->
<?php require_once('inc/db.php');?>

<!-- top section -->
<?php require_once('inc/top.php');?>
</head>
<body>
    <div id="wrapper">
        <!-- navbar section -->
        <?php require_once('inc/navbar.php');?>
        <div class="container-fluid body-section">
            <div class="row">
                <div class="col-md-3">
                    <!-- sidebar section -->
                    <?php require_once('inc/sidebar.php');?>
                </div>
                <div class="col-md-9">
                    <h1>
                        <i class="fa fa-folder-open" aria-hidden="true"></i>Blogs
                        <small>Edit Blog</small>
                    </h1>
                    <hr />
                    <?php
                    // Fetch post data from database based on post id
                    $post_id = $_GET['id'];
                    $query = mysqli_query($conn, "SELECT * FROM `video_blogs` WHERE `id` = $post_id");
                    $row = mysqli_fetch_assoc($query);
                    ?>
                    <div class="container justify-content-center align-items card">
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                    <!-- Populate form fields with post data -->
                                    <input type="hidden" name="post_id" value="<?php echo $post_id; ?>">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="control-group">
                                                <label class="control-label" for="inputEmail"><b>Date</b></label>
                                                <div class="controls">
                                                    <input class="input-field mt-2" type="date" name="date" id="inputEmail" placeholder="Date" value="<?php echo $row['date']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="control-group">
                                                <label class="control-label" for="inputEmail"><b>First Title</b></label>
                                                <div class="controls">
                                                    <input class="input-field2 mt-2" type="text" name="first_title" id="inputEmail" value="<?php echo $row['first_title']; ?>" placeholder="First Title">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="control-group">
                                                <label class="control-label" for="inputEmail"><b>Second Title</b></label>
                                                <div class="controls">
                                                    <input class="input-field2 mt-2" type="text" name="second_title" id="inputEmail" value="<?php echo $row['second_title']; ?>" placeholder="Second Title">
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="control-group">
                                                <label class="control-label" for="inputEmail"><b>Categories</b></label>
                                                <div class="controls">
                                                    <input class="input-field1 mt-2" type="text" name="categories" id="inputEmail" value="<?php echo $row['categories']; ?>" placeholder="Categories">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="control-group">
                                                <label class="control-label" for="inputPassword"><b>Blog Video 1</b></label>
                                                <div class="controls">
                                                    <input class="input-field mt-2" type="file" name="video" class="input-file uniform_on" id="fileInput">
                                                    <img src="../assets/imgs/<?php echo $row['video']; ?>" alt="Blog Video 1" width="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>             
                                    <div class="row">
                                        <div class="col-md-12" style="float:right;">
                                            <div class="control-group">
                                                <div class="controls text-end">
                                                    <input type="submit" value="Update Post" name="update" class="btn btn-primary mt-3" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                    // Update post data in database if form is submitted
                    if (isset($_POST['update'])) {
                        // Retrieve form data
                        $post_id = $_POST['post_id'];
                        $date = $_POST['date'];
                        $first_title = $_POST['first_title'];
                        $second_title = $_POST['second_title'];
                        $categories = $_POST['categories'];
                       
                        // Update post data in database
                        $query = "UPDATE `video_blogs` SET `date`='$date', `first_title`='$first_title', `second_title`='$second_title', `categories`='$categories' WHERE `id`='$post_id'";
                        if (mysqli_query($conn, $query)) {
                            echo "<script>window.location = 'index.php';</script>";
                        } else {
                            echo "Error updating post: " . mysqli_error($conn);
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!----------------------- footer start here --------------------------->
        <?php require_once('inc/footer.php')?>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
