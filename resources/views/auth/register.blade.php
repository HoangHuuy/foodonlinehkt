<html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/signInAndUp.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>Đăng nhập</title>
</head>

<body>
<header>
    <div class="logo">
        <a href="/"><img class="img-responsive" src="assets/images/logo/logo.png"
                         alt="logo.jpg" /></a>
    </div>
</header>

<div class="main-wrapper">
    <div class="main">
        @error('username')
        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
        @enderror
        @error('password')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror
        <p class="sign">Đăng kí</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="center-items">
                <input id="username" type="text" placeholder="Username"
                       class="un form-control @error('username') is-invalid @enderror"
                       name="username" value="{{ old('username') }}" required autocomplete="username">


            </div>

            <div class="center-items">
                <input id="password" type="password"
                       class="pass form-control @error('password') is-invalid @enderror" name="password" required
                       placeholder="Password">

            </div>
            <div class="center-items">
                <input placeholder="Repassword" id="password-confirm" type="password"
                       class="pass form-control" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="center-items">
{{--                <a type="submit" class="submit">Đăng kí</a>--}}
                <button type="submit" class="btn btn-primary submit">
                    Đăng kí
                </button>
            </div>

            <!-- phần đầu code chưa xử lí -->
            <div class="center-items">
                @if (Route::has('password.request'))
                    <p class="forgot"><a href="{{ route('password.request') }}">Quên mật khẩu</a></p>
                @endif
            </div>

        </form>

    </div>
</div>
</body>

</html>
