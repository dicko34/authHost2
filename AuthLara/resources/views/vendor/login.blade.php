@extends('layouts.vendor')
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <div class="row">
        <div class="card w-100">
            <div class="card-body">
                <div class="text-center mt-4">
                    <div class="mb-3">
                        <a href="index.html"><img src="{{ url('assets/admin/images/martina.jpeg') }}" height="70"
                                alt="logo"></a>
                    </div>
                </div>
                <div class="p-3">
                    <h4 class="font-size-18 m-1 text-center">تسجيل دخول</h4>
                    @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert" style="display:inline">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    <form class="form-horizontal w-sm-50 m-auto" method="POST" action="{{ route('login') }}">
                        @csrf
                        @php
                            $k = explode('/', Request::path());
                            $t = in_array('vendor', $k);
                        @endphp
                        <div class="form-group">
                            <label for="username">البريد الالكتروني</label>
                            <input type="text" class="form-control" id="username" name="email"
                                placeholder="البريد الالكتروني">
                            
                        </div>

                        <div class="form-group">
                            <label for="userpassword">كلمة المرور</label>
                            <input type="password" name="password" class="form-control" id="userpassword"
                                placeholder="كلمة المرور">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert" style="display:inline">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-4">
                                <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-account-check"></i>
                                    انشاء حساب جديد </a>
                            </div>
                        </div>

                        <div class="form-group row mt-4">
                            <div class="col-sm-12 text-center">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">دخول</button>
                            </div>
                        </div>

                        <div class="form-group mb-0 row">
                            <div class="col-12 mt-4">
                                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i>هل نسيت كلمو
                                    المرور</a>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
        </div>

    </div>

    {{-- <div class="row">
        <div class="card w-100">
            <div class="body-card">
                <div class="row m-5">
                    <h3 class="mb-4 col-6"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                    <div class="col-6 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">أضافة أعلان هنا</button>
                    </div>
                </div>
                <div class="row ">

                    @for ($i = 0; $i < 8; $i++)
                        <div class="col-sm-6 col-6 col-xl-3">
                            <div class="card">
                                <a href="{{ url('assets/admin/images/martina.jpg') }}" class="gallery-popup"
                                    style="height: 230px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ url('assets/admin/images/martina.jpg') }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 230px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>عقارات</h4>
                                                <p>
                                                    <img src="{{ url('assets/admin/images/martina.jpg') }}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">مارتينا جرجس</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">شقق</h4>
                                    <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م - فيصل بريك 0562700836
                                        وسط الخليل على بعد 570 متر من مستشفى الأهلي</p>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </div>
    </div> --}}


@endsection
