{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">em</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}








<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="/assets/css/pace.min.css" rel="stylesheet" />
  <script src="/assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/icons.css" rel="stylesheet">
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
                  <h4>Reset Password</h4>
                  
                </div>
                <form class="form-body row g-3"    method="POST" action="{{ route('password.update') }}"  >
                  @csrf
                  <input type="hidden" name="token" value="{{ $token }}">
                  <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" id="inputEmail">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>




                  <div class="col-12">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" id="inputPassword">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  
                  </div>

                  <div class="col-12">
                    <label for="inputPassword" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" id="inputPassword">
                  </div>
                  
                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Reset Password</button>
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