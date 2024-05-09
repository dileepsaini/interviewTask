<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin/img/logo2.png') }} ">

    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css') }} ">

    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/fontawesome.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome/css/all.min.css') }} ">

    <link rel="stylesheet" href="{{ asset('admin/css/style.css') }} ">
</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <form action="{{ Route('login') }}" method="post" enctype="multipart/form-data">
                         @csrf
                            <div class="login-logo logo-normal">
                                <img src="{{ asset('admin/img/logo2.png') }}" alt="img">
                            </div>
                            <a href="index.html" class="login-logo logo-white">
                                <img src="{{ asset('admin/img/logo-white.png') }}" alt>
                            </a>
                            <div class="login-userheading">
                                <h3>Sign In</h3>
                                <h4>Please login to your account</h4>
                            </div>
                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input type="text" placeholder="Enter your email address" name="email">
                                    <img src="{{ asset('admin/img/icons/mail.svg') }}" alt="img">
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input type="password" class="pass-input" placeholder="Enter your password" name="password">
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>
                            @if (session('loginError'))
                                <div class="alert alert-danger">
                                    {{ session('loginError') }}
                                </div>
                            @endif
                            <div class="form-login">

                                <button type="submit" class="btn btn-login">Sing In</button>
                            </div>

                        </form>
                    </div>
                </div>
                <div class="login-img">
                    <img src="{{ asset('admin/img/login.jpg') }}" alt="img">
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('admin/js/feather.min.js') }}"></script>

    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/js/script.js') }}"></script>
</body>

</html>
