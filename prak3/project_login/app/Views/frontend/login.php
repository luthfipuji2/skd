<!DOCTYPE html>
<html>

<head>
  <title>login</title>
  <link rel="stylesheet" href="resources/all.css">
  <link rel="stylesheet" href="resources/main.css">
  <link rel="stylesheet" href="resources/bootstrap.min.css">
  <script src="resources/jquery.slim.min"></script>
  <script src="resources/bootstrap.bundle.min"></script>
</head>


<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Log In</h5>
            <?= session()->get('pesan') ?>
            <form class="form-signin" method="POST" action="/auth/login">
              <div class="form-group">

                <div class="form-group">
                    <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username">
                    <label for="inputUsername">Username</label>
                  </div>

                  <div class="form-group">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                    <label for="inputPassword">Password</label>
                  </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="password.html">Forgot Password?</a>


              <button class="btn btn-primary" type="submit">Sign In</button>
          </div>

              <form class="form-signin">
                <hr class="my-4">
                <div class="card-footer text-center">
                <a href="/register" class="small" type="submit">Sign up</a>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>