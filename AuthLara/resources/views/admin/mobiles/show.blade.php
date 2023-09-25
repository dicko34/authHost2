@extends("layouts.admin")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <script type="text/javascript"
        src="https://platform-api.sharethis.com/js/sharethis.js#property=6063a4476f7ab900129cec66&product=inline-share-buttons"
        async="async"></script>
@endsection
@section('content')
    <style>
        .nav-link {
            display: block;
            padding: 0.5rem 0.5rem;
        }

        .page-content {
            padding: 20px 20px !important;
            text-align: center;
        }

        .col-4 {
            padding: 1px !important;
            margin: 0px !important;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05);
        }

        .table-bordered td,
        .table-bordered th {
            border: 1px solid #bf465c;
        }
        .table td,
        .table th {
            padding: .2rem;
            vertical-align: middle;
        }

    </style>
    <div class="row mt-4 mb-5">
        <div class="col-lg-12 col-12">
            <div class="card w-100">
                            <div class="row">
                                <div class="col-lg-5 col-md-12">
                                    <div id="carouselExampleCaptions" class="carousel slide m-lg-5" data-ride="carousel">
                                        <ol class="carousel-indicators" style="bottom: -50px;">
                                            <li data-target="#carouselExampleCaptions" data-slide-to="0"
                                                class="active bg-primary" style="border-radius: 100%;
                                                    height: 9px;
                                                    width: 9px;
                                                    "></li>
                                            <li data-target="#carouselExampleCaptions" data-slide-to="1" class="bg-primary"
                                                style="border-radius: 100%;
                                                    height: 9px;
                                                    width: 9px;"></li>
                                        </ol>
                                        <div class="carousel-inner w-100 m-auto">
                                        @foreach(explode(',',$mobile->img) as $key => $img)
                                            <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                                                <img src="{{ url('assets/site/images/mobiles/'.$img) }}" height="350"
                                                    class="d-block w-100" alt="...">
                                            </div>
                                            @endforeach
                                            
                                        </div>
                                    </div>
                                </div>
    
                                <div class="col-lg-7 col-md-12">
                                    <div class="m-5">
                                        <div class="mb-3">
                                            <h2>
                                               {{$mobile->name}} - {{$mobile->device_status}}
                                            </h2>
                                            <h5 class="maincolor">{{$mobile->price}} شيكل
                                            </h5>
                                            <h5 class="smallColor mt-3">
                                                موديل سنة {{$mobile->model_year}}
                                            </h5>
                                        </div>
    
                                        <h3 class="mt-5 mb-4">
                                            شارك علي
                                        </h3>
                                        <div>
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">
    
                                                <div class="sharethis-inline-share-buttons"></div>
    
                                            </div>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
     
                        <div class="row m-4 ">
                            <div class="col-12 mt-4">
                                <ul class="nav nav-tabs " id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active maincolor" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">الوصف</a>
                                    </li> 
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link maincolor" id="contact-tab" data-toggle="tab" href="#contact"
                                            role="tab" aria-controls="contact" aria-selected="false">معلومات أضافية</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link maincolor" id="seller-tab" data-toggle="tab" href="#seller"
                                            role="tab" aria-controls="seller" aria-selected="false">المُعلن</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="m-lg-4 row">
                                            <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                                <div class="smallColor">اسم الشركة : {{$mobile->company}}</div>
                                            </div>
                                            <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                                <div class="smallColor">{{$mobile->model}} : ايباد 2</div>
                                            </div>
                                            <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                                <div class="smallColor">حالة الجهاز : {{$mobile->device_status}}</div>
                                            </div>
                                            <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                                <div class="smallColor">عدد الشرائح : {{$mobile->slides_number}}</div>
                                            </div>
                                            <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                                <div class="smallColor">حجم الشاشة : {{$mobile->screen_size}}</div>
                                            </div>
                                            <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                                <div class="smallColor">الكاميرات : {{$mobile->screen_size}}</div>
                                            </div>
    
                                            <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                                <div class="smallColor">الذاكرة : {{$mobile->screen_size}}</div>
                                            </div>
                                            <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                                <div class="smallColor">سعة التخزين : {{$mobile->screen_size}}</div>
                                            </div>
                                            <div class="col-sm-4 col-lg-2 col-md-3 m-2">
                                                <div class="smallColor">السعر : {{$mobile->price}}</div>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                        <div class="m-4">
                                            <ul class="list-unstyled m-3">
                                            {{$mobile->description}}
                                            </ul>
                                        </div>
                                    </div>
    
                                    <div class="tab-pane fade" id="seller" role="tabpanel" aria-labelledby="seller-tab">
                                        <div class="m-lg-4 row">
                                            <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                                <div class="smallColor"> اسم المُعلن : {{$mobile->advertiser_name}}</div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                                <div class="smallColor"> العنوان : {{$mobile->advertiser_address}}</div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                                <div class="smallColor"> رقم الهاتف	 : {{$mobile->phone_number}}</div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                                <div class="smallColor"> تاريخ نشر الإعلان : {{$mobile->created_at}}
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-lg-4 col-md-3 m-2">
                                                <div class="smallColor"> تاريخ إنتهاء الإعلان : 2021-11-22
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                <form method="post" action="{{route('admin.mobiles.change.state',['action'=>$mobile->state == 'refused' ? 'allowed' : 'refused','mobile'=>$mobile->id])}}">
                    @csrf
                    @if($mobile->state == 'pinned')
                                                                <button type="submit" value="allowed" class="btn btn-primary w-md waves-effect waves-light d-block" >تفعيل</button>
                                                                <button type="submit" value="blocked" class="btn btn-primary w-md waves-effect waves-light d-block" >حظر</button>
                                                                @else 
                                                                <button type="submit" value="{{$mobile->state == 'blocked'? 'allowed':'blocked' }}" class="btn btn-primary w-md waves-effect waves-light" >{{$mobile->state == 'blocked' ? 'قبول' : 'رفض'}}</button>


                                                            @endif
                </form>    
                </div>
            </div>
        </div>
        
    </div>
    
    
@endsection
