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
            <form class="form-signin" action="auth/register" method="POST">
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
                <input type="text" id="inputnomorhp" class="form-control" placeholder="Nomor HP" name="nomor_hp">
                <label for="inputnomorhp">Nomor HP</label>
              </div>

              <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="alamat" id="alamat" aria-describedby="alamat" placeholder="Masukkan Alamat...">
                    </div>


              <div class="form-label-group">
                  <select class="form-control" name="role">
                    <option>Admin</option>
                    <option>Staff</option>
                  </select>
              </div>
<div class="form-group mt-4 mb-0">
              <button class="btn btn-primary btn-block" type="submit">Create Account</button>
            </div>
            <div class="form-group mt-4 mb-0" align="text-center">
              <a  href="/"  type="submit" >Have an account? Go to login</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

                                  