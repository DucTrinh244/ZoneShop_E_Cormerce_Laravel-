<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <!-- Title Meta -->
    <meta charset="utf-8" />
    <title>Sign In | Larkon - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully responsive premium admin dashboard template" />
    <meta name="author" content="Techzaa" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('public/BackEnd/images/favicon.ico')}}">

    <!-- Vendor css (Require in all Page) -->
    <link href="{{asset('public/BackEnd/css/vendor.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Icons css (Require in all Page) -->
    <link href="{{asset('public/BackEnd/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- App css (Require in all Page) -->
    <link href="{{asset('public/BackEnd/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Theme Config js (Require in all Page) -->
    <script src="{{asset('public/BackEnd/js/config.js')}}"></script>
</head>

<body class="h-100">
    <div class="d-flex flex-column h-100 p-3">
        <div class="d-flex flex-column flex-grow-1">
            <div class="row h-100">
                <div class="col-xxl-12">
                    <div class="row justify-content-center h-100">
                        <div class="col-lg-6 py-lg-5">
                            <div class="d-flex flex-column h-100 justify-content-center">
                                <div class="auth-logo mb-4">
                                    <a href="{{URL::to('/trang-chu')}}" class="logo-dark">
                                        <img src="{{asset('public/BackEnd/images/logo-dark.png')}}" height="24" alt="logo dark">
                                    </a>

                                    <a href="{{URL::to('/trang-chu')}}" class="logo-light">
                                        <img src="{{asset('public/BackEnd/images/logo-light.png')}}" height="24" alt="logo light">
                                    </a>
                                </div>
                                <h2 class="fw-bold fs-24 text-center">Admintrators</h2>
                                <?php

                                use Illuminate\Support\Facades\Session;

                                $message = Session::get('message');
                                if ($message) {
                                    echo '<div class="alert alert-secondary alert-icon" role="alert">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm rounded bg-secondary d-flex justify-content-center align-items-center fs-18 me-2 flex-shrink-0">
                                                <i class="bx bx-x-circle text-white"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                ' . $message . '
                                            </div>
                                        </div>
                                    </div>';
                                    Session::put('message', null);
                                }
                                ?>

                                <div class="mb-5">
                                    <form action="{{URL::to('/admin-dashboard')}}" class="authentication-form" method="post">
                                        {{csrf_field()}}
                                        <div class="mb-3">
                                            <label class="form-label" for="example-email" style="margin-left: 15px; font-size: 16px;">Email</label>
                                            <input type="email" id="example-email" name="admin_email" class="form-control custom-input" placeholder="Enter your email" style="padding: 15px; font-size: 16px; height: 60px;">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="example-password" style=" margin-left: 15px; font-size: 16px;">Password</label>
                                            <input type="password" id="example-password" name="admin_password" class="form-control custom-input" placeholder="Enter your password" style="padding: 15px; font-size: 16px; height: 60px;">
                                        </div>
                                        <div class="mb-1 text-center d-grid">
                                            <button class="btn btn-soft-primary" name="login" type="submit" style="padding: 15px; font-size: 16px; height: 60px;">Sign In</button>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/vendor.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>

</body>

</html>