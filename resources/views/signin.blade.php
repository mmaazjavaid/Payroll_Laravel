<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <title>HT</title>
</head>

<body class="bg-white">

  <!--start wrapper-->
  <div class="wrapper">
    <div class="">
      <div class="row g-0 m-0">
        <div class="col-xl-6 col-lg-12">
          <div class="login-cover-wrapper">
            <div class="card shadow-none">
              <div class="card-body">
                <div class="text-center">
                  <h4>Sign In</h4>
                  <p>Sign In to your account</p>
                </div>
                <form class="form-body row g-3"   method="POST" action="{{ route('login') }}"   >
                  @csrf
                  <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }} " id="inputEmail">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="col-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  id="inputPassword">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  
                  </div>
                  
                  <div class="col-12 col-lg-6 text-start">
                    <a  href="{{ route('password.request') }}">Forgot Password?</a>
                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
                      <button type="button" class="btn btn-primary">Sign In</button>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="position-absolute top-0 h-100 d-xl-block d-none login-cover-img">
            <div class="text-white p-5 w-100">

            </div>
          </div>
        </div>
      </div>
      <!--end row-->
    </div>
  </div>
  <!--end wrapper-->


</body>

</html>