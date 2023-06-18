<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper my-auto">
            <h1 class="login-title">Register Akun</h1>
            <form method="post" action="{{ route('register.store') }}">
              @csrf
              <div class="form-group">
                <label for="namaInput" class="form-label">Nama</label>
                <input type="text" class="form-control @error('namaInput') is-invalid @enderror" id="namaInput" name="namaInput" value="{{ old('namaInput') }}">
                @error('namaInput')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>                            
                @enderror
              </div>
              <div class="form-group mb-4">
                <label for="emailInput" class="form-label">Email</label>
                <input type="text" class="form-control @error('emailInput') is-invalid @enderror" id="emailInput" name="emailInput" value="{{ old('emailInput') }}">
                @error('emailInput')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>                            
                @enderror
              </div>
              <div class="form-group mb-4">
                <label for="passwordInput" class="form-label">Password</label>
                <input type="password" class="form-control @error('passwordInput') is-invalid @enderror" id="passwordInput" name="passwordInput">
                @error('passwordInput')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>                            
                @enderror
              </div>
              <div class="form-group mb-4">
                <label for="passwordInput_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control @error('passwordInput_confirmation') is-invalid @enderror" id="passwordInput_confirmation" name="passwordInput_confirmation">
                @error('passwordInput_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>                            
                 @enderror
              </div>
              <input name="login" id="login" class="btn btn-block login-btn" type="submit" value="Register">
            </form>
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="assets/img/register.png" alt="login image" class="login-img">
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
