<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>e-wallet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{url('assets/admin/images/logo.png')}}">

    <link href="{{url('assets/admin/libs/dropzone/min/dropzone.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{url('assets/admin/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{url('assets/admin/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    @yield("style")
    <link href="{{url('assets/admin/css/app-rtl.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{url('assets/admin/css/redo.css')}}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{url('assets/site/css/teacher.css')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <!-- Loader -->
    <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

     <!-- Begin page -->
     <div class="accountbg" style="background: url('assets/admin/images/bg.jpg');background-size: cover;background-position: center;"></div>

    <div class="account-pages mt-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>    
                                <strong>{{ $message }}</strong>
                            </div>
                            @endif
                            <div class="text-center mt-4">
                                <div class="mb-3">
                                    <h2 class="mb-3">
                                        SMLE SECRETS
                                        {{-- <a href="index.html"><img src="{{url('assets/admin/images/logo.png')}}" height="40" alt="logo"></a> --}}
                                    </h2>
                                </div>
                            </div>
                            <div class="p-3">
                                <h4 class="font-size-18 mt-2 text-center">تسجيل دخول</h4>

                                <form class="form-horizontal" method="post"  action="{{route('login')}}">
                                
                                    @csrf 
                                    <div class="form-group">
                                        <label for="username">البريد الالكتروني  999999</label>
                                        <input type="mail" class="form-control" name="email" id="email" placeholder="ادخل البريد الالكتروني" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="userpassword">كلمة المرور</label>
                                        <input type="password" class="form-control" name="password" id="userpassword" placeholder="ادخل كلمة المرور" required>
                                    </div>

                                    <div class="form-group row mt-4">
                                        <div class="col-sm-12 text-center">
                                            <button class="btn btn-primary w-md waves-effect waves-light" type="submit">تسجيل دخول</button>
                                        </div>
                                    </div> 
                                </form>

                            </div>

                        </div>
                    </div>
                    {{-- <div class="mt-5 text-center">
                        <p class="text-white"> <a href="pages-register.html" class="font-weight-bold text-primary"> Signup Now </a> </p>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="{{url('assets/admin/libs/jquery/jquery.min.js')}}"></script>
    <script src="{{url('assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('assets/admin/libs/metismenu/metisMenu.min.js')}}"></script>
    <script src="{{url('assets/admin/libs/simplebar/simplebar.min.js')}}"></script>
    <script src="{{url('assets/admin/libs/node-waves/waves.min.js')}}"></script>
    <script src="{{url('assets/admin/js/app.js')}}"></script>

</body>
</html>