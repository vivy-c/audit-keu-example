

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AuditKeu | Register</title>

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
  <div class="login-box ">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary my-5">
      <hr>
      <img src="{{ asset('template') }}/dist/img/pnc.png" alt="PncLogo" width="60" height="60" style=" margin:auto;">
      <div class="card-header text-center">
        <a href="#" class="h1"><b>AuditKeu | PNC </b>Register</a>
      </div>
      <div class="card-body">
        <form action="/register" method="post" enctype="multipart/form-data" class="main-form">
          @csrf
          <div class="input-group mb-3">
            <input type="text" class="form-control @error('username') is-invalid @enderror" placeholder="Username" name="username" id="username" value="{{ old('username') }}" >
            @error('username')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" id="password" >
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="nama" name="nama" id="nama" value="{{ old('nama') }}">
            @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="nip_npak" class="form-control @error('nip_npak') is-invalid @enderror" placeholder="nip_npak" name="nip_npak" id="nip_npak" value="{{ old('nip_npak') }}">
            @error('nip_npak')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{--  <div class="input-group mb-3">
            <select name="level" id="level" class="form-control">
                <option style="color: white;">Level User</option>
                <option style="color: black;" value="1">Direktur</option>
                <option style="color: black;" value="2">Auditee</option>
                <option style="color: black;" value="3">Auditor</option>
                <option style="color: black;" value="4">Ketua SPI</option>
            </select>
        </div>  --}}
        <input type="hidden" name="level" value="1">
        <input type="hidden" name="status" value="0">
        {{--  <div class="input-group my-3">
            <input type="no_hp" class="form-control" placeholder="no_hp" name="no_hp" id="no_hp" >
        </div>  --}}
        <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" id="email" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        {{--  <div class="mb-3 pr-3">
            <label for="foto">Foto</label>
                <input class="form-control" type="file" id="foto" placeholder="upload foto">
            </div>
            <div class="mb-3 pr-3">
                <label for="ttd">ttd</label>
                <input class="form-control" type="file" id="ttd" placeholder="upload ttd">
            </div>  --}}
            
          
            
            <div class="row">
                <div class="col-8">
                    <a href="/login"><i class="fas fa-arrow-left mr-1"></i>Sign in</a>
                </div>
                <!-- /.col -->
                <div class="col-4">
                    <button type="submit" name="login" id="login" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    
        <!-- /.social-auth-links -->

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