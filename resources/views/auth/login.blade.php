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

            <p class="sign">Đăng nhập</p>

            <form method="POST" action="{{ route('login') }}" class="form1">
                @csrf

                <div class="center-items">
                    <input id="username" type="text"
                        class="un form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" required autofocus
                        placeholder="Username">

                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="center-items">
                    <input id="password" type="password"
                        class="pass form-control @error('password') is-invalid @enderror" name="password" required
                        placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="center-items">
                    <a onclick="this.closest('form').submit();return false;" class="submit">Đăng nhập</a>
                </div>

                <!-- phần đầu code chưa xử lí -->
                <div class="center-items">
                    @if (Route::has('password.request'))
                    <p class="forgot"><a href="{{ route('password.request') }}">Quên mật khẩu</a></p>
                    @endif
                </div>
                <!-- kết thúc code chưa xử lí -->

            </form>

            <div class="center-items">

                <div class="no-account">
                    <span>Bạn chưa có tài khoản? &nbsp; </span>
                    <a class="" href="{{ route('register') }}">
                        Đăng ký ngay
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
