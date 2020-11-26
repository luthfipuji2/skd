<!DOCTYPE html>
<html>

<head>
  <title>register</title>
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
            <h5 class="card-title text-center">Registration</h5>
            <form action="auth/register" method="post" class="form-signin">
              <?= $validate->listErrors() ?>
              <div class="form-label-group">
                <input type="text" id="inputUsername" class="form-control" placeholder="Username" name="username">
                <label for="inputUsername">Username</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
                <label for="inputPassword">Password</label>
              </div>

              <div class="form-label-group">
                <select class="form-control" name="role">
                  <option>Admin</option>
                  <option>Staff</option>
                </select>
              </div>


              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Submit</button>
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