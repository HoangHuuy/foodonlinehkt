<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="fRQyDNrrmaG2Kx3tLuNxKDu7sAGnxFn29kVGrtwL">
    <title>Admin | FoodKTH</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/iCheck/all.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/shortcut-buttons-flatpickr@0.3.0/dist/themes/light.min.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap-fileinput/css/fileinput.min.css?v=4.5.2">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/select2/select2.min.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/ionslider/ion.rangeSlider.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/ionslider/ion.rangeSlider.skinNice.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.min.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap-duallistbox/dist/bootstrap-duallistbox.min.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/dist/css/skins/skin-blue-light.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/laravel-admin/laravel-admin.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/nprogress/nprogress.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/sweetalert2/dist/sweetalert2.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/nestable/nestable.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/toastr/build/toastr.min.css">
    <link rel="stylesheet"
        href="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap3-editable/css/bootstrap-editable.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/google-fonts/fonts.css">
    <link rel="stylesheet" href="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/dist/css/AdminLTE.min.css">

    <script src="https://kit.fontawesome.com/6ea5a547fb.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">


    <script src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition skin-blue-light sidebar-mini sidebar-collapse">


    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="http://127.0.0.1:8000/admin" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>La</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Laravel</b> admin</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <ul class="nav navbar-nav hidden-sm visible-lg-block">

                </ul>

                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="javascript:void(0);" class="container-refresh">
                                <i class="fa fa-refresh"></i>
                            </a>
                        </li>

                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/dist/img/user2-160x160.jpg"
                                    class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">Administrator</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <p>
                                        Administrator
                                        <small>Member since admin 2021-09-28 19:39:04</small>
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="http://127.0.0.1:8000/admin/auth/setting"
                                            class="btn btn-default btn-flat">Setting</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="http://127.0.0.1:8000/admin/auth/logout"
                                            class="btn btn-default btn-flat">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->

                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/dist/img/user2-160x160.jpg"
                            class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Administrator</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- search form (Optional) -->
                <form class="sidebar-form" style="overflow: initial;" onsubmit="return false;">
                    <div class="input-group">
                        <input type="text" autocomplete="off" class="form-control autocomplete" placeholder="Search...">
                        <span class="input-group-btn">
                            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i
                                    class="fa fa-search"></i>
                            </button>
                        </span>
                        <ul class="dropdown-menu" role="menu"
                            style="min-width: 210px;max-height: 300px;overflow: auto;">
                            <li>
                                <a href="http://127.0.0.1:8000/admin/user"><i class="fa fa-users"></i>Người dùng</a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/product"><i class="fa fa-snapchat"></i>Báo Cáo</a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/category"><i class="fa fa-bars"></i>Danh mục</a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/users"><i class="fa fa-users"></i>Users</a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/roles"><i class="fa fa-user"></i>Roles</a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/permissions"><i
                                        class="fa fa-ban"></i>Permission</a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/menu"><i class="fa fa-bars"></i>Menu</a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/logs"><i class="fa fa-history"></i>Operation
                                    log</a>
                            </li>
                        </ul>
                    </div>
                </form>
                <!-- /.search form -->

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <li class="header">Menu</li>
                    <li>
                        <a href="http://127.0.0.1:8000/admin/user">
                            <i class="fa fa-users"></i>
                            <span>Người dùng</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1:8000/admin/product">
                            <i class="fa fa-snapchat"></i>
                            <span>Báo Cáo</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://127.0.0.1:8000/admin/category">
                            <i class="fa fa-bars"></i>
                            <span>Danh mục</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-tasks"></i>
                            <span>Admin</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/users">
                                    <i class="fa fa-users"></i>
                                    <span>Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/roles">
                                    <i class="fa fa-user"></i>
                                    <span>Roles</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/permissions">
                                    <i class="fa fa-ban"></i>
                                    <span>Permission</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/menu">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </li>
                            <li>
                                <a href="http://127.0.0.1:8000/admin/auth/logs">
                                    <i class="fa fa-history"></i>
                                    <span>Operation log</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <div class="content-wrapper" id="pjax-container">
            <style type="text/css"></style>
            <div id="app">
                <section class="content-header">
                    <h1>
                        FoodKTH
                        <small>Danh mục</small>
                    </h1>
                    <!-- breadcrumb start -->
                    <ol class="breadcrumb" style="margin-right: 30px;">
                        <li><a href="http://127.0.0.1:8000/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li>
                            Danh mục
                        </li>
                    </ol>
                    <!-- breadcrumb end -->
                </section>
            </div>

            <div class="category-content-wrapper">
                <div class="category-content">
                    <div class="modal-update-cate">
                        <div class="modal-update-cate-content">
                            <div class="close-modal-cate-update">
                                &times;
                            </div>
                            <h5>*Sửa đổi để phù hợp với nội dung của trang web</h5>
                            <form action="{{route('category.update')}}" method="post">
                                @csrf
                                <div class="update-cate">
                                    <label for="category-update">Tên danh mục</label>
                                    <input type="text" name="categoryUpdate" id="category-update">
                                </div>
                                <div class="update-cate">
                                    <label for="slug-update">Slug</label>
                                    <input type="text" name="slugUpdate" id="slug-update">
                                </div>
                                <input type="hidden" name="idCateUpdate" id="id-update-cate">
                                <div class="update-cate">
                                    <label></label>
                                    <input class="update-cate-submit" type="submit" value="Sửa">
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" style="width:10%; text-align:center;">STT</th>
                                <th scope="col" style="width:20%; text-align:center;">Slug</th>
                                <th scope="col" style="width:50%; text-align:left; padding-left: 100px;">Danh mục</th>
                                <th scope="col" style="width:20%;">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $value)
                            <tr>
                                <td style="text-align: center;"></td>
                                <td class="action">{{$value->slug}}</td>
                                <td style="text-align:left; padding-left: 100px;">{{$value->cate_name}}</td>
                                <td class="action">
                                    <div class="action-icon pencil-pencil">
                                        <a href="#"><i class="fas fa-pencil-alt"></i></a>
                                    </div>
                                    <div class="action-icon trash-trash">
                                        <a href="{{route('category.delete', ['id' => $value->id])}}"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                </td>
                                <input class="class-cua-toi"type="hidden" value="{{$value->id}}" />
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="category-description">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Thêm mới</th>
                                </tr>
                            </thead>
                        </table>
                        <div class="category-input">
                            <form action="{{ route('category.add') }}" method="post">
                                @csrf
                                <label for="category">Thêm danh mục mới:</label>
                                <div class="input-group mb-12">
                                    <input name="category" type="text" class="form-control">
                                </div>
                                <label for="category">Slug:</label>
                                <p><b>Vd:</b> Tên danh mục là <br /><i>"Đồ Ăn Dạng Sợi"</i> thì slug là
                                    <br /><i>"do-an-dang-soi"</i></p>
                                <div class="input-group mb-12">
                                    <input name="slug" type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Thêm mới</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script data-exec-on-popstate>
                $(function () {
                    ;
                    (function () {
                        $('.container-refresh').off('click').on('click', function () {
                            $.admin.reload();
                            $.admin.toastr.success('Refresh succeeded !', '', {
                                positionClass: "toast-top-center"
                            });
                        });
                    })();
                });

            </script>
        </div>


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                <strong>Env</strong>&nbsp;&nbsp; local

                &nbsp;&nbsp;&nbsp;&nbsp;

                <strong>Version</strong>&nbsp;&nbsp; 1.8.14

            </div>
            <!-- Default to the left -->
            <strong>Powered by <a href="https://github.com/z-song/laravel-admin"
                    target="_blank">laravel-admin</a></strong>
        </footer>
    </div>

    <button id="totop" title="Go to top" style="display: none;"><i class="fa fa-chevron-up"></i></button>

    <script>
        function LA() {}
        LA.token = "fRQyDNrrmaG2Kx3tLuNxKDu7sAGnxFn29kVGrtwL";
        LA.user = {
            "id": 1,
            "username": "admin",
            "name": "Administrator",
            "avatar": "http:\/\/127.0.0.1:8000\/vendor\/laravel-admin\/AdminLTE\/dist\/img\/user2-160x160.jpg"
        };

        const pencilPencil = [...document.querySelectorAll(".pencil-pencil")];
        const modalUpdateCate  = document.getElementsByClassName("modal-update-cate")[0];
        let closeModalCate = document.getElementsByClassName("close-modal-cate-update")[0];
        const classCuaToi = document.querySelectorAll(".class-cua-toi");
        let idUpdateCate = document.querySelector('#id-update-cate');

        pencilPencil.forEach((item, index) => {
            item.onclick = function () {
                modalUpdateCate.style.display = "block";
                idUpdateCate.value = classCuaToi[index].value;
            }
            closeModalCate.onclick = function () {
                modalUpdateCate.style.display = "none";
            }
        });

    </script>

    <!-- REQUIRED JS SCRIPTS -->
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js">
    </script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/dist/js/app.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/jquery-pjax/jquery.pjax.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/nprogress/nprogress.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/nestable/jquery.nestable.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/toastr/build/toastr.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/sweetalert2/dist/sweetalert2.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/laravel-admin/laravel-admin.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/colorpicker/bootstrap-colorpicker.min.js">
    </script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/input-mask/jquery.inputmask.bundle.min.js">
    </script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/moment/min/moment-with-locales.min.js"></script>
    <script
        src="http://127.0.0.1:8000/vendor/laravel-admin/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/shortcut-buttons-flatpickr@0.1.0/dist/shortcut-buttons-flatpickr.min.js">
    </script>
    <script src="https://npmcdn.com/flatpickr@4.6.6/dist/l10n/zh.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap-fileinput/js/plugins/canvas-to-blob.min.js">
    </script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap-fileinput/js/fileinput.min.js?v=4.5.2"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/select2/select2.full.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/number-input/bootstrap-number-input.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/AdminLTE/plugins/ionslider/ion.rangeSlider.min.js"></script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap-switch/dist/js/bootstrap-switch.min.js"></script>
    <script
        src="http://127.0.0.1:8000/vendor/laravel-admin/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.min.js">
    </script>
    <script src="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap-fileinput/js/plugins/sortable.min.js?v=4.5.2">
    </script>
    <script
        src="http://127.0.0.1:8000/vendor/laravel-admin/bootstrap-duallistbox/dist/jquery.bootstrap-duallistbox.min.js">
    </script>


</body>

</html>
