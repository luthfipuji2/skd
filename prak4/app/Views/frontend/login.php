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
              <div class="form-label-group">
                <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username">
                <label for="inputUsername">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                <label for="inputPassword">Password</label>
              </div>


              <button class="btn btn-sm btn-primary btn-block text-uppercase" type="submit">Sign In</button>

              <form class="form-signin">
                <hr class="my-4">
                <a href="/register" class="btn btn-sm btn-success btn-block text-uppercase" type="submit">Sign up</a>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>