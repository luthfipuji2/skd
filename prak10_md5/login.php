
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Login</title>

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

                    <!-- cek pesan notifikasi -->
              <?php 
              if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                  echo "Login gagal! username dan password salah!";
                }else if($_GET['pesan'] == "logout"){
                  echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                  echo "Anda harus login untuk mengakses halaman admin";
                }
              }
              ?>

            <form action="login_process.php" class="inner-login" method="POST">
            <h3 class="text-center title-login">FORM LOGIN</h3>
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                </div>  

                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                </div>
                
                <input type="submit" class="btn btn-block btn-custom-green" value="LOGIN" />
            </form>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>