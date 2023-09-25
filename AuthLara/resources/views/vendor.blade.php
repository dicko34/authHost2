<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8"/>
    <title>@yield("title", "Ejada")</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
@yield('styleChart')
<!-- App favicon -->
    <link rel="shortcut icon" href="{{url("assets/admin/images/icon.png")}}">
    <!-- Bootstrap Css -->
    <link href="{{url("assets/admin/libs/magnific-popup/magnific-popup.css")}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/admin/css/bootstrap.min.css")}}" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="{{url("assets/admin/css/icons.min.css")}}" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    @yield("style")
    <link href="{{url("assets/admin/css/app-rtl.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{ url('assets/css/app.scss') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">


    <style>
        @media (max-width: 560px) {
            body[data-topbar="dark"] .header-item {
                font-size: smaller;
                padding-top: 10px;
            }
            .card-body {
                padding:15px 5px 15px 5px!important;
            }

            .card-body h4 {
                font-size:large !important;
            }

            .card-body p {
                line-height:20px;
            }
        }
        .table td.fit,
        .table th.fit {
            white-space: nowrap;
            width: 1%;
        }

        body {
            font-family:'Tajawal';
        }
    </style>
</head>

<body data-topbar="dark" data-layout="horizontal">

<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar" style="height: 60px !important;">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ url("assets/admin/images/martina.jpeg") }}" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ url("assets/admin/images/martina.jpeg") }}" alt="" height="22">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm mr-2 font-size-24 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                    <i class="mdi mdi-menu"></i>
                </button>

            </div>

            <!-- Search input -->
            <div class="search-wrap" id="search-wrap">
                <div class="search-bar">
                    <input class="search-input form-control" placeholder="Search" />
                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                        <i class="mdi mdi-close-circle"></i>
                    </a>
                </div>
            </div>

            <div class="d-flex  pt-1">

                <div class="dropdown d-none d-lg-inline-block">
                    <button type="button" class="btn header-item toggle-search  waves-effect" data-target="#search-wrap">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                </div>

                <div class="dropdown d-none d-lg-inline-block ">
                    <button type="button" class="btn header-item waves-effect" data-toggle="fullscreen">
                        <i class="mdi mdi-fullscreen"></i>
                    </button>
                </div>


                <div class="dropdown d-inline-block ">
                    <a href="{{ route('choseAdd') }}" class="btn header-item waves-effect mt-3" >
                        <i class="fa fa-plus-circle "></i>
                        أضف اعلانك
                    </a>
                </div>

                <div class="dropdown d-inline-block ">
                    <a  class="btn header-item waves-effect mt-3">
                        <i class="fa fa-info-circle "></i>
                        من نحن
                    </a>
                </div>

                <div class="dropdown d-inline-block ">
                    <a href="{{ route('contact') }}" class="btn header-item waves-effect mt-3">
                        <i class="fa fa-envelope"></i>
                        اتصل بنا
                    </a>
                </div>

                <div class="dropdown d-inline-block ">
                    <a href="{{ route('login') }}" class="btn header-item  waves-effect mt-3">
                        <i class="fa fa-sign-in-alt"></i>
                        دخول
                    </a>
                </div>



            </div>
        </div>

    </header>

    <!-- ========== Left Sidebar Start ========== -->
{{-- <div class="vertical-menu">

    <div data-simplebar class="h-100"> --}}
@include('vendor.sections')


{{-- </div>
</div> --}}
<!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    @if($errors->any())
        <center><div class="col-sm-12 btn btn-success">{{ implode('', $errors->all()) }}</div></center>
    @endif
    <div class="main-content" style="margin-right: 240px; margin-left: 0%">

        <div class="page-content">
            <div class="">

                @yield("content")

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        {{-- <footer class="footer" style="left: 0; right: 240px;">
            <div class="container-fluid">
                <div class="row">

                </div>
            </div>
        </footer> --}}
        <footer class=" mt-5 pt-5" style="background: #212529; color:white !important">
            <div class="container " style="background: #212529; color:white !important">
                <div class="row m-100 text-center" >
                    <div class="col-6 col-md-4 col-lg-4 mb-4 mb-lg-1 linkColor text-left">
                        <h6 class="text-light font-weight-bold">اسم الموقع</h6>
                        <a href="#" class="link h6 d-block text-light mt-5">الخصوصية</a>
                        <a href="/terms" class="link h6 d-block text-light mt-3">الشروط &amp; الاحكام</a>
                        <a href="/aboutus" class="link h6 d-block text-light mt-3">من نحن</a>
                        <a href="/contact-us" class="link h6 d-block text-light mt-3">تواصل معنا</a>
                    </div>
                    <div class="col-6 col-md-4 col-lg-4 mb-4 mb-lg-1 linkColor">
                        <h6 class="text-light font-weight-bold">خريطة الموقع</h6>
                        <div class="row">
                            <div class="col-sm-6 text-left">
                                <a href="/" class="link h6 d-block text-light mt-5">الرئسية</a>
                                <a href="/" class="link h6 d-block text-light ">السيارات</a>
                                <a href="/" class="link h6 d-block text-light ">اعلانات الشقق</a>
                                <a href="/" class="link h6 d-block text-light ">اعلانات المحلات و المكاتب </a>
                                <a href="/" class="link h6 d-block text-light ">اعلانات الأراضي</a>
                            </div>
                            <div class="col-sm-6 text-left">
                                <a href="/" class="link h6 d-block text-light mt-5">اعلانات توظيف</a>
                                <a href="/" class="link h6 d-block text-light ">اعلانات الوظائف الشاغرة</a>
                                <a href="/" class="link h6 d-block text-light ">اعلانات الاجهزة الذكية</a>
                                <a href="/" class="link h6 d-block text-light ">اعلانات عامة</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 col-lg-4">

                        <h6 class="text-light font-weight-bold">تابعنا علي مواقع التواصل</h6>
                        <div class="Download-Icons">
                            <a href="https://vm.tiktok.com/ZMR5jhvbA/" class="h3 text-primary mr-1"><img src="https://autobazar.souqeljuma.com/assets/site/images/tiktok.png" height="28" width="28" alt=""></a>
                            <a href="https://twitter.com/ownk11?s=11" class="h3 text-success mr-1"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.snapchat.com/add/ownk11" class="h3 text-danger mr-1"><i class="fab fa-snapchat"></i></a>
                            <a href="https://instagram.com/ownk11?utm_medium=copy_link" class="h1"><img src="https://autobazar.souqeljuma.com/assets/site/images/instagram.png" height="28" width="28" alt=""></a>
                        </div>
                    </div>
                    {{--
                                            <div class="col-6 col-md-4 col-lg-3 ">
                                                <h6 class="text-dark font-weight-bold ">PAYMENT METHODS</h6>
                                                <div class="Download-Icons">
                                                    <a href="" class="h3 text-primary mr-1"><i class="fab fa-cc-visa"></i></a>
                                                    <a href="" class="h3 text-primary "><i class="fab fa-cc-paypal"></i></a>
                                                </div>
                                            </div> --}}

                </div>

            </div>
            <hr class="p-1 mt-5">
            <div class="container-fluid row" style="background: #212529; color:white !important">
                <p class="col-6 text-light mt-1 mb-4">© كل الحقوق محفوظة</p>
                <p class="col-4 text-left text-light">
                    تم برمجتة بواسطة <a href="https://we-work.pro" target="_blank"> </a>
                </p>
            </div>
        </footer>
    </div>


    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{url("assets/admin/libs/jquery/jquery.min.js")}}"></script>
<script src="{{url("assets/admin/libs/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{url("assets/admin/libs/metismenu/metisMenu.min.js")}}"></script>
<script src="{{url("assets/admin/libs/simplebar/simplebar.min.js")}}"></script>
<script src="{{url("assets/admin/libs/node-waves/waves.min.js")}}"></script>

@yield("script")
<script src="{{url("assets/admin/libs/magnific-popup/jquery.magnific-popup.min.js")}}"></script>
<script src="{{url("assets/admin/js/pages/gallery.init.js")}}"></script>

<script src="{{url("assets/admin/js/app.js")}}"></script>

</body>
</html>