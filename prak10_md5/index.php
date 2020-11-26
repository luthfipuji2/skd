<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Register</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="col-md-4 col-md-offset-4 form-login">
    
    <?php
    /* handle error */
    if (isset($_GET['error'])) : ?>
        <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Warning!</strong> <?=base64_decode($_GET['error']);?>
        </div>
    <?php endif;?>

        <div class="outter-form-login">
        <div class="logo-login">
            <em class="glyphicon glyphicon-user"></em>
        </div>
            <form action="registrasi.php" class="inner-login" method="POST">
            <h3 class="text-center title-login">FORM REGISTER</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                </div>  

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="REGISTRASI" />
            <div class="form-group mt-4 mb-0" align="text-center">
              <a  href="login.php"  type="submit" >Have an account? Go to login</a>
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>