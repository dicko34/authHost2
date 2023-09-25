@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 m-auto"><i class="mbri-mobile2 mr-2"></i> اعلانات الأجهزة الذكية - موبايل </h3>
                </div>
                <form method="POST" action="{{ route("mobiles.search") }}">
                        @csrf
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                        @endforeach
                        @endif
                        <div class="row m-1">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">جميع الشركات</label>
                                    <div class="col-12 m-0 p-0">
                                        <select name="company" class="form-control">
                                            <option value="الكل">الكل</option>
                                            @foreach($mobiles->unique('company') as $mobile)
                                            <option value="{{$mobile->company}}">{{$mobile->company}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">الحالة</label>
                                    <div class="col-12 m-0 p-0">
                                        <select name="device_status" class="form-control">
                                            <option value="الكل">الكل</option>
                                            @foreach($mobiles->unique('device_status') as $mobile)
                                            <option value="{{$mobile->device_status}}">{{$mobile->device_status}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">المحافظة</label>
                                    <div class="col-12 m-0 p-0">
                                        <select name="advertiser_city" class="form-control">
                                            <option value="الكل">الكل</option>
                                            @foreach($mobiles->unique('advertiser_city') as $mobile)
                                            <option value="{{$mobile->advertiser_city}}">{{$mobile->advertiser_city}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">السعر من</label>
                                    <div class="col-12 m-0 p-0">
                                        <select name="price_max" class="form-control">

                                            @php
                                            $price_max = '';
                                            $ar = [];
                                            @endphp
                                            @foreach($mobiles->unique('price') as $mobile)
                                            @php
                                            array_push($ar,$mobile->price);
                                            rsort($ar);
                                            @endphp
                                            @endforeach
                                            <option value="{{$ar[0]}}">{{$ar[0]}}</option>
                                            @for($i = 1; $i < count($ar)-1; $i++) @php($price=$ar[$i]) <option value="{{$price}}">{{$price}}</option>
                                                @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">السعر الي</label>
                                    <div class="col-12 m-0 p-0">
                                        <select name="price_min" class="form-control">

                                            @php(sort($ar))
                                            <option value="{{$ar[0]}}">{{$ar[0]}}</option>
                                            @for($i = 1 ; $i < count($ar)-1; $i++) @php($price=$ar[$i]) <option value="{{$price}}">{{$price}}</option>
                                                @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">بحث الان</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6"><i class="fas fa-star mr-2"></i> الاعلانات المميزة </h3>
                    <div class="col-6 text-right">
                        <a href="{{ route('choseAdd') }}"  class="btn btn-primary w-md waves-effect waves-light" >أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row">

                    @for ($i = 0; $i < 4; $i++)
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
    </div>

    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6"><i class="mdi mdi-car-side mr-2"></i> أعلانات السيارات </h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light" href="{{ route("mobile.add") }}">أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row">

                @foreach(isset($mobiles_show) ? $mobiles_show : $mobiles as $mobile)
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="card">
                                <a href="{{ url('assets/site/images/mobiles/'.explode(',',$mobile->img)[0]) }}" class="gallery-popup"
                                    style="height: 230px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ url('assets/site/images/mobiles/'.explode(',',$mobile->img)[0]) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 230px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>موبايل</h4>
                                                <p>
                                                    <img src="{{ url('assets/site/images/mobiles/'.explode(',',$mobile->img)[0]) }}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">{{$mobile->advertiser_name}}</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <a href="{{ ('mobile/product/'.$mobile->id) }}">
                                        موبايل
                                        </a>
                                    </h4>
                                    <p class="card-text">
                                        {{$mobile->company}}  - {{$mobile->device_status}} - {{$mobile->reset_model}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <nav aria-label="..." class="w-25 m-auto">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
