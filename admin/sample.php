<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    /> -->
    <!-- favicon link -->
    <link rel="icon" type="image/png" href="./images/favicon.ico" />
    <!-- animated css -->
    <link rel="stylesheet" href="./css/animated.css" />
    <!-- font awesome link -->
    <link rel="stylesheet" href="./css/font-awesome.min.css" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <!-- stylesheet -->
    <link rel="stylesheet" href="./css/style.css" />

    <title>Blogging site</title>
  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Blogging Site</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarColor01"
            aria-controls="navbarColor01"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-end"
            id="navbarColor01"
          >
            <ul class="navbar-nav justify-content-end">
              <li class="nav-item me-3">
                <a class="nav-link active" href="#"
                  ><i class="fa fa-plus-square" aria-hidden="true"></i> Add
                  Post</a
                >
              </li>
              <li class="nav-item me-3">
                <a class="nav-link active" href="#">
                  <i class="fa fa-user-plus" aria-hidden="true"></i> Add User
                </a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link active" href="#"
                  ><i class="fa fa-user" aria-hidden="true"></i> Profile
                </a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link active" href="#">
                  <i class="fa fa-power-off" aria-hidden="true"></i> Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container-fluid body-section">
        <div class="row">
          <div class="col-md-3">
            <ul class="list-group">
              <li
                class="list-group-item d-flex justify-content-between align-items-start active"
              >
                <a href="" class="ms-2 me-auto text-white">
                  <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
                </a>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-start"
              >
                <a href="" class="ms-2 me-auto">
                  <i class="fa fa-file-text" aria-hidden="true"></i> All Posts
                </a>
                <span class="badge bg-primary rounded-pill">14</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-start"
              >
                <a href="" class="ms-2 me-auto"
                  ><i class="fa fa-commenting" aria-hidden="true"></i> Comments
                </a>
                <span class="badge bg-primary rounded-pill">10</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-start"
              >
                <a href="" class="ms-2 me-auto">
                  <i class="fa fa-folder-open" aria-hidden="true"></i>
                  Categories
                </a>
                <span class="badge bg-primary rounded-pill">11</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-start"
              >
                <a href="" class="ms-2 me-auto"
                  ><i class="fa fa-users" aria-hidden="true"></i> Users
                </a>
                <span class="badge bg-primary rounded-pill">09</span>
              </li>
            </ul>
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
          </div>
        </div>
      </div>

      <!----------------------- footer start here --------------------------->
      <footer class="text-center">
        Copyright &copy; by
        <a href="#" class="text-white">Blogging Website</a> from 2021 - 2022
      </footer>
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
