<head>
    <title>Goya - {{ $title }}</title>
    <link rel="icon" href="{{ asset('clients/assets/images/logos/favicon.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('clients/assets/css_login/style.css') }}">
</head>
<body>
<a href="{{ url('/') }}" style="position: fixed; top: 15px; left: 15px; background: #00D084; color: #fff; padding: 8px 16px; text-decoration: none; z-index: 9999; font-size: 14px; border-radius: 3px; border: 1px solid #fff;">
    <i class="fa fa-chevron-left mr-2"></i>Quay lại
</a>

<div class=" login-page">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 col-lg-5">
                    <div class="wrap">
                        <div class="img" style="background-image: url({{ asset('clients/assets/images/login/bg-1.jpg') }});"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <h3 class="mb-4" style="text-align: center ">Đăng nhập Admin</h3>
                            
                            <form action="{{ route('admin.login-account') }}" method="POST">
                                @csrf
                                @if(session('error'))
                                    <div class="alert alert-danger text-center">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <div class="form-group mt-3">
                                    <input type="text" name="username" class="form-control" required>
                                    <label class="form-control-placeholder">Tên đăng nhập</label>
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control" required>
                                    <label class="form-control-placeholder">Mật khẩu</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .ftco-section { width: 100%; padding: 10px 0 30px; }
    .login-page { display: flex; justify-content: center; align-items: flex-start; padding-top: 70px; }
    .wrap { max-width: 370px; width: 100%; margin: 0 auto; }
    .img { height: 200px !important; background-size: cover; background-repeat: no-repeat; background-position: center center; }
    .login-wrap { padding: 14px !important; position: relative; }
    .form-group { position: relative; margin-bottom: 25px; }
    .form-control-placeholder { position: absolute; top: 0; padding: 7px 0 0 13px; transition: all 0.2s; pointer-events: none; }
    .form-control:focus + .form-control-placeholder, .form-control:valid + .form-control-placeholder { font-size: 95%; transform: translate3d(0, -100%, 0); opacity: 1; }
</style>
</body>