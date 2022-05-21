{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
              <div class="card-body p-4">
                <div class="text-center">
                  <h4>Reset password</h4>
                  <p>You will receive an e-mail in maximum 60 seconds</p>
                </div>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <form class="form-body row g-3" method="POST" action="{{ route('password.email') }}">
                  @csrf
                  <div class="col-12">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" id="inputEmail" placeholder="abc@example.com">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12">
          <div class="position-absolute top-0 h-100 d-xl-block d-none login-cover-img au-reset-password-cover">
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