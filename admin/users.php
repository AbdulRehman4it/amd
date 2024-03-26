<!------top section ------>
<?php require_once('inc/top.php')?>
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
            <h1>
              <i class="fa fa-users" aria-hidden="true"></i> Users
              <small>View All Users</small>
            </h1>
            <hr />
            <div class="scp-breadcrumb">
              <ol class="breadcrumb p-2">
                <li>
                  <a href="#" class="me-2"
                    ><i class="fa fa-tachometer" aria-hidden="true"></i>
                    Dashboard</a
                  >
                </li>
                <li class="active me-2">
                  <i class="fa fa-users" aria-hidden="true"></i> Users
                </li>

                <!-- <li><a href="#" class="me-2">Products</a></li> -->
              </ol>
            </div>
            <div class="row mb-4">
              <div class="col-sm-8 col-md-4">
                <form action="">
                  <div class="row">
                    <div class="col-xs-4 col-md-5 col-sm-4">
                      <div class="form-group">
                        <select name="" id="" class="form-control form-select">
                          <option value="delete">Delete</option>
                          <option value="author">Change to Author</option>
                          <option value="admin">Change to Admin</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-8 col-md-7 col-sm-8">
                      <input
                        type="submit"
                        class="btn btn-success"
                        value="Apply"
                      />
                      <a href="#" class="btn btn-primary">Add New</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <hr />

            <table class="table table-hover table-bordered table-striped">
              <thead>
                <tr>
                  <th><input type="checkbox" /></th>
                  <th>Sr #</th>
                  <th>Date</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Image</th>
                  <th>Password</th>
                  <th>Role</th>
                  <th>Post</th>
                  <th>Edit</th>
                  <th>Del</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input type="checkbox" /></td>
                  <td>1</td>
                  <td>10 March 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar22</td>
                  <td>Test@gmail.com</td>
                  <td>
                    <img
                      src="./images/unknown user.png"
                      alt=""
                      class=""
                      width="30px"
                    />
                  </td>
                  <td>test123</td>
                  <td>Admin</td>
                  <td>11</td>
                  <td>
                    <a href="#"
                      ><i class="fa fa-pencil" aria-hidden="true"></i
                    ></a>
                  </td>
                  <td>
                    <a href=""
                      ><i class="fa fa-times" aria-hidden="true"></i
                    ></a>
                  </td>
                </tr>

                <tr>
                  <td><input type="checkbox" /></td>
                  <td>1</td>
                  <td>10 March 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar22</td>
                  <td>Test@gmail.com</td>
                  <td>
                    <img
                      src="./images/unknown user.png"
                      alt=""
                      class=""
                      width="30px"
                    />
                  </td>
                  <td>test123</td>
                  <td>Admin</td>
                  <td>11</td>
                  <td>
                    <a href="#"
                      ><i class="fa fa-pencil" aria-hidden="true"></i
                    ></a>
                  </td>
                  <td>
                    <a href=""
                      ><i class="fa fa-times" aria-hidden="true"></i
                    ></a>
                  </td>
                </tr>

                <tr>
                  <td><input type="checkbox" /></td>
                  <td>1</td>
                  <td>10 March 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar22</td>
                  <td>Test@gmail.com</td>
                  <td>
                    <img
                      src="./images/unknown user.png"
                      alt=""
                      class=""
                      width="30px"
                    />
                  </td>
                  <td>test123</td>
                  <td>Admin</td>
                  <td>11</td>
                  <td>
                    <a href="#"
                      ><i class="fa fa-pencil" aria-hidden="true"></i
                    ></a>
                  </td>
                  <td>
                    <a href=""
                      ><i class="fa fa-times" aria-hidden="true"></i
                    ></a>
                  </td>
                </tr>

                <tr>
                  <td><input type="checkbox" /></td>
                  <td>1</td>
                  <td>10 March 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar22</td>
                  <td>Test@gmail.com</td>
                  <td>
                    <img
                      src="./images/unknown user.png"
                      alt=""
                      class=""
                      width="30px"
                    />
                  </td>
                  <td>test123</td>
                  <td>Admin</td>
                  <td>11</td>
                  <td>
                    <a href="#"
                      ><i class="fa fa-pencil" aria-hidden="true"></i
                    ></a>
                  </td>
                  <td>
                    <a href=""
                      ><i class="fa fa-times" aria-hidden="true"></i
                    ></a>
                  </td>
                </tr>

                <tr>
                  <td><input type="checkbox" /></td>
                  <td>1</td>
                  <td>10 March 2023</td>
                  <td>Muhammad Babar</td>
                  <td>Babar22</td>
                  <td>Test@gmail.com</td>
                  <td>
                    <img
                      src="./images/unknown user.png"
                      alt=""
                      class=""
                      width="30px"
                    />
                  </td>
                  <td>test123</td>
                  <td>Admin</td>
                  <td>11</td>
                  <td>
                    <a href="#"
                      ><i class="fa fa-pencil" aria-hidden="true"></i
                    ></a>
                  </td>
                  <td>
                    <a href=""
                      ><i class="fa fa-times" aria-hidden="true"></i
                    ></a>
                  </td>
                </tr>
              </tbody>
            </table>
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
