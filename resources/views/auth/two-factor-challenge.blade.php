<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('backend/img/icons/icon-48x48.png')}}" />

    <title>Two Factor Challenge</title>

    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-6 col-lg-4 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">
                    <div class="text-center mt-4">
                        <h1 class="h2">Two Factor Challenge</h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <form method="POST" action="{{ route('admin.two-factor.login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="code"  class="form-label">Code</label>
                                        <input class="form-control form-control-lg @error('code') is-invalid @enderror " id="code" type="text" name="code" placeholder="Enter your Verification code"  value="{{ old('code') }}"  autofocus />

                                        @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <small>
                                            <a href="{{ url('admin/two-factor-recover') }}">Login With Recovery Code?</a>
                                        </small>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Proceed</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

<script src="{{asset('js/app.js')}}"></script>

</body>

</html>