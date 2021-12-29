

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AuditKeu | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/googleapis.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page"> 
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <hr>
      <img src="{{ asset('template') }}/dist/img/pnc.png" alt="PncLogo" width="60" height="60" style=" margin:auto;">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>AuditKeu | PNC </b>Login</a>
      </div>
      <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data" class="main-form">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" id="username" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <!-- <select name="level" id="level" class="form-control">
              <option style="color: white;">Level User</option>
              <option style="color: black;" value="1">Direktur</option>
              <option style="color: black;" value="2">Auditee</option>
              <option style="color: black;" value="3">Auditor</option>
              <option style="color: black;" value="4">Ketua SPI</option>
            </select>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-layer-group"></span>
              </div>
            </div> -->
            <input type="hidden" name="level">
            <input type="hidden" name="status">
            
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Ingat saya
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="login" id="login" class="btn btn-primary btn-block">Sign In</button>
            </div>
            <!-- /.col -->
        </div>
        </form>
        <!-- /.social-auth-links -->

        <p class="my-3 text-center">
            <a href="/register" class="" role="button">Register | </a>
            <a href="/" class="">Lupa password</a>
        </p>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>
</body>

</html>