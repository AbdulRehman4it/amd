<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Form | Blogging Site</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="./css/style.css" />
    <!-- animated css link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
  </head>

  <body class="main-bg bg-color">
    <!-- Login Form -->
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-6 col-sm-6">
          <div class="card shadow animate__animated animate__shakeX">
            <div class="card-title text-center border-bottom">
              <h2 class="p-3">Login Form</h2>
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label for="username" class="form-label"
                    >Username/Email Address</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="username"
                    placeholder="Email Address"
                  />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="password"
                    placeholder="Password"
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="remember"
                  />
                  <label for="remember" class="form-label">Remember Me</label>
                </div>
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
