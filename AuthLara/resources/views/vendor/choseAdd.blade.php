@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-12 text-center"> خدمات موقع شو بدك من فلسطين؟ </h3> 
                </div>
                <div class="row">

                    <div class="col-sm-12 text-center m-3">
                        <a href="{{ route('car.add') }}" class="btn btn-outline-primary waves-effect waves-light w-50 m-auto"> أضف اعلان سيارة</a>
                    </div>

                    <div class="col-sm-12 text-center m-3">
                        <a href="{{ route('home.add') }}" class="btn btn-outline-primary waves-effect waves-light w-50 m-auto"> أضف اعلان شقة</a>
                    </div>

                    <div class="col-sm-12 text-center m-3">
                        <a href="{{ route('shop.add') }}" class="btn btn-outline-primary waves-effect waves-light w-50 m-auto"> أضف اعلان محل او مكتب او مخزن</a>
                    </div>

                    <div class="col-sm-12 text-center m-3">
                        <a href="{{ route('land.add') }}" class="btn btn-outline-primary waves-effect waves-light w-50 m-auto"> أضف اعلان ارض</a>
                    </div>

                    <div class="col-sm-12 text-center m-3">
                        <a href="{{ route('job.add') }}" class="btn btn-outline-primary waves-effect waves-light w-50 m-auto"> أضف اعلان وظيفة</a>
                    </div>

                    <div class="col-sm-12 text-center m-3">
                        <a href="{{ route('mobile.add') }}" class="btn btn-outline-primary waves-effect waves-light w-50 m-auto"> أضف اعلان جهاز ذكي</a>
                    </div>

                    <div class="col-sm-12 text-center m-3">
                        <a href="{{ route('general.add') }}" class="btn btn-outline-primary waves-effect waves-light w-50 m-auto"> أضف اعلان عام</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                    <div class="col-6 text-right">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">أضافة أعلان هنا</button>
                    </div>
                </div>
                <div class="row">

                    @for ($i = 0; $i < 8; $i++)
                        <div class="col-md-6 col-lg-6 col-xl-3">
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
