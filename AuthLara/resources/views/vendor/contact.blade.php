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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="text-center mt-2">
                                            <h5>تواصل معنا</h5>
                                            <p class="text-muted">هل تملك اي استفسار تراسل معنا الان</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-5">
                                    <div class="col-md-4">
                                        <div>
                                            <h6 class="font-size-14">البريد الالكتروني</h6>
                                            <p class="text-muted">supportemail@admiria.com</p>
                                        </div>
                                        <div class="pt-3">
                                            <h6 class="font-size-14">رقم الهاتف</h6>
                                            <p class="text-muted">+123 45 56 879</p>
                                        </div>
                                        <div class="pt-3">
                                            <h6 class="font-size-14">العنوان</h6>
                                            <p class="text-muted">09 Design Street, Downtown Victoria, Australia</p>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <form class="form-custom">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="username">الاسم</label>
                                                        <input type="text" class="form-control" id="username" placeholder="قم بادخال اسمك" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="useremail">البريد الالكتروني</label>
                                                        <input type="email" class="form-control" id="useremail" placeholder="قم بادخال البريد الالكتروني" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="usersubject">الموضوع</label>
                                                        <input type="text" class="form-control" id="usersubject" placeholder="الموضوع" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea class="form-control" rows="5" placeholder="الرسالة ......"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light">ارسل الان</button>
                                                </div>
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
