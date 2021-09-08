
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="YXQT0cLeyba44MN3CltR9urN6BZw4mCoYalOcGow">

    <title>Laravel</title>

    <!-- Scripts -->
    <script src="http://127.0.0.1:8000/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="http://127.0.0.1:8000/css/app.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/css/seller.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/css/user.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
<div id="app">
    <div class="container">
        <div class="flex-center position-ref full-height">
            <div class="content">
                @if (Route::has('login'))
                    @auth
                        <a href="/seller">Trang người bán</a>

                    @else
                        <a href="{{ route('login') }}">Trang người bán</a>
                    @endauth
                @endif

                <div class="title m-b-md text-center">
                    <h1>foodTHK</h1>
                </div>

    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Thông tin tài khoản</div>

                        <div class="card-body">
                            <form method="POST" action="{{route('seller.storeAccount')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>

                                    <div class="col-md-6">
                                        <input id="username" readonly type="text" class="form-control " value = '{{Auth::user()-> username}}'name="username" >

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Ho và tên</label>

                                    <div class="col-md-6">
                                        <input id="shopname" type="text" class="form-control " name="fullname" >

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Ngày Sinh</label>

                                    <div class="col-md-6">
                                        <input id="dtUser" type="date" class="form-control " name="doB" >

                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Giới tính</label>

                                    <div class="col-md-6">
                                        <input id="rdGioitinh" type="radio" value = "Nam"  name="gender" >Nam
                                        <input id="rdGioitinh" type="radio"  value = "Nữ" name="gender" >Nữ
                                        <input id="rdGioitinh" type="radio"  value = "Khác" name="gender" >Khác
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="username" class="col-md-4 col-form-label text-md-right">Email</label>

                                    <div class="col-md-6">
                                        <input id="txtEmails" type="text" class="form-control " name="emails" >

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="sđt" class="col-md-4 col-form-label text-md-right">SĐT</label>

                                    <div class="col-md-6">
                                        <input id="txtSĐT" type="text" class="form-control" name="sđt" >

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
        </div>
    </div>
</div>

</body>
</html>
