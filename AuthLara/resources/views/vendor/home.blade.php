@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
<link href="{{ url('assets/admin/libs/c3/c3.min.css') }}"id="bootstrap-style"rel="stylesheet" type="text/css" />
@endsection

@section('content')

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="{{route('general.index')}}" class="text-white">
                    <h3 class="mb-4"><i class="mdi mdi-view-module mr-2"></i> الإعلانات العامة </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </button>
            </div>
        </div>

        <div class="body-card m-3">
            <div class="row">

                @foreach($generals as $general)
                <div class="col-6 col-xl-2 p-1">
                    <div class="card annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;"">
                            <a href=" {{url('assets/site/images/generals/'.$general->img)}}" class="gallery-popup"
                        style="height: 160px; width:100%">
                        <div class="project-item">
                            <div class="overlay-container">
                                <img src="{{url('assets/site/images/generals/'.$general->img)}}" alt="img" class=""
                                    style="height: 160px; width:100%">
                                <div class="project-item-overlay text-right">
                                    <h4>{{$general->address}}</h4>
                                    <p>
                                        <img src="{{url('assets/site/images/generals/'.$general->img)}}" alt="user"
                                            class="avatar-xs rounded-circle">
                                        <span class="ml-2">advertiser_name</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title"> {{$general->address}}</h4>
                            <p class="card-text">{{$general->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @if(count($generals) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/general" class="text-white">
                    <h3><i class="mdi mdi-car-side mr-2"></i> سيارات </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </button>
            </div>
        </div>
        <div class="body-card m-3">



            <div class="row">

                @foreach ($cars as $car)
                <div class="col-6 col-xl-2 p-1 ">
                    <div class="annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                        <a href="{{url('assets/admin/images/'.$car->img)  }}" class="gallery-popup"
                            style="height: 160px; width:100%">
                            <div class="project-item">
                                <div class="overlay-container">
                                    <img src="{{ url('assets/admin/images/car.jpeg55') }}" alt="img"
                                        style="height: 160px; width:100%">
                                    <div class="project-item-overlay text-right">
                                        <h2>{{$car->company. $car->model}}</h2>
                                        <p>
                                            <img src="{{ url('assets/admin/images/car.jpeg11') }}" alt="user"
                                                class="avatar-xs rounded-circle">
                                            <span class="ml-2">advertiser_name</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">{{ $car->company . ' ' . ($car->model ? $car->model : 'reset_model') }}</h4>
                            <p class="card-text">
                                {{$car->description}}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
            @if(count($cars) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
                    <h3><i class="mdi mdi-home mr-2"></i> شقق </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </button>
            </div>
        </div>
        <div class="body-card m-3">
            <div class="row">



                <table class="table table-striped table-bordered">

                    <tbody>
                        @foreach ($homes as $home)
                        <tr>
                            <td>{{$home->home_type}}</td>
                            <td><a style="color:#000;" href="https://www.example.com/job/1.html"> {{$home->show}}</a>
                            </td>
                            <td>{{$home->city}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @if(count($homes) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
                    <h3><i class=" mdi mdi-shopping-search mr-2"></i> محلات و مكاتب </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </button>
            </div>
        </div>
        <div class="body-card m-3">

            <h3 class="mb-4"></h3>
            <div class="row">
                <table class="table table-striped table-bordered">

                    <tbody>
                        @foreach ($shops as $shop)
                        <tr>
                            <td>{{$shop->brief}}</td>
                            <td>{{$shop->offer}}</td>
                            <td>{{$shop->city}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                @if(count($shops) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
                    <h3><i class="mdi mdi-view-dashboard mr-2"></i> اراضي </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </button>
            </div>
        </div>
        <div class="body-card m-3">

            <h3 class="mb-4"></h3>
            <div class="row">
                <table class="table table-striped table-bordered">
                    <tbody>
                        @foreach ($lands as $land) 
                        <div class="col-6 col-xl-2 p-1">
                            <tr>
                                <td>{{$land->brief}}</td>
                                <td>{{$land->area}}</td>
                                <td>{{$land->city}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(count($lands) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
                    <h3><i class=" fas fa-user-friends mr-2"></i> توظيف </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </button>
            </div>
        </div>
        <div class="body-card m-3">


            <div class="row">


                <table class="table table-striped table-bordered">
                    <tbody>
                        @foreach ($jobs as $job) 
                        <div class="col-6 col-xl-2 p-1">
                            <tr>
                                <td>SonaTrack</td>
                                <td style="vertical-align: middle;"><a style="color:#000;"
                                        href="https://www.wenak.ps/job/46388.html">محاضر</a></td>
                                <td style="vertical-align: middle;">قطاع غزة</td>
                            </tr>
                            <tr>
                                <td>SonaTrack</td>
                                <td style="vertical-align: middle;"><a style="color:#000;"
                                        href="https://www.wenak.ps/job/46387.html">مساعد شوفير</a>
                                </td>
                                <td style="vertical-align: middle;">الخليل</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(count($jobs) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row main-section">
    <div class="w-100">
        <div class="card-header m-0 p-0 w-100 d-inline-flex" style="height:60px;background:#262726 ;">

            <div class="h-100 text-white px-2" style="width:65%">
                <a href="/homes" class="text-white">
                    <h3><i class="mbri-mobile2 mr-2"></i> الاجهزة الذكية </h3>
                </a>
            </div>


            <div class="h-100 mr-1 pt-1" style="width:34%;">
                <button class="w-100 mx-auto btn mt-2 pt-1 px-1 btn-primary text-white"
                    style="height:33px;font-size: 11px;line-height:28px;max-width:100px;float:left !important;">

                    <i class="fa fa-plus-circle "></i>اضف اعلان جديد

                </button>
            </div>
        </div>
        <div class="body-card m-3">

            <div class="row">

                @foreach ($mobiles as $mobile) 
                <div class="col-6 col-xl-2 p-1">
                    <div class="annonce-item" style="border: 1px solid;border-color: #0000002b;border-radius: 5px;">
                        <a href="{{ url('assets/admin/images/'.$mobile->img) }}" class="gallery-popup"
                            style="height: 160px; width:100%">
                            <div class="project-item">
                                <div class="overlay-container">
                                    <img src="{{ url('assets/admin/images/'.$mobile->img) }}" alt="img" class=""
                                        style="height: 160px; width:100%">
                                    <div class="project-item-overlay text-right">
                                        <h4>الاجهزة الذكية</h4>
                                        <p>
                                            <img src="{{ url('assets/admin/images/'.$mobile->img) }}" alt="user"
                                                class="avatar-xs rounded-circle">
                                            <span class="ml-2">{{$mobile->advertiser_name}}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="card-body">
                            <h4 class="card-title">{{$car->model ? $car->model : 'reset_model'}}</h4>
                            <p class="card-text">{{$mobile->description}}</p>
                        </div>
                    </div>
            </div>
            @endforeach
            @if(count($mobiles) > 6)
                <div class="mx-auto" style="width:150px;">
                    <button class="w-100 mx-auto btn mt-2 p-0 px-1 btn-primary text-white"
                        style="height:33px;font-size: 11px;line-height:33px;">
                        تصفح المزيد
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>
</div>




<style>
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Tajawal';
}

h3 {
    font-size: large !important;
    font-weight: bolder;
    line-height: 60px;
}

h4 {
    font-family: 'Tajawal';
    color: #000 !important;
    font-size: large !important;
    font-weight: bold;
}

.annonce-item:hover {
    box-shadow: 1px 3px 8px 0px;
}

.main-section {
    margin: 10px 0px 10px 0px;
    box-shadow: 0px 0px 1px 0px;
    background: #fff;
}

p {
    font-weight: normal !important;
}

table tr {
    height: 48px !important;
    font-size: 15px;
}

@media (max-width:560px) {
    .dropdown a {
        font-size: 12px !important;
    }

    .card-body p {
        display: none;
    }

    form .form-control option,
    form .form-control,
    form select,
    form input,
        {
        height: 33px !important;
        font-size: 13px;
        box-sizing: border-box;
        margin: 0 !important;
    }


}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function () {
              $('#carCompany').change(function () {
                  
                  var carCompany = encodeURIComponent($(this).val());
                  console.log($(this).val());
                  if (carCompany) {
                      $.ajax({
                          type: "GET",
                          url: "{{route('home')}}/get-car-models/" + carCompany,
                          success: function (data) {
                              $('#carModel').empty();
                              $.each(data, function (id, model) {
                                  $('#carModel').append(new Option(model, id));
                              });
                          }
                      });
                  } else {
                      $('#carModel').empty();
                  }
              });
          });
      </script>
@endsection