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
            <div class="row text-center w-100">
                <div class=" w-100">
                    <div class="body-card">
                        <div class="c0l-12">
                            <div class="row">
                                <div class=" col-12">
                                    <div class="mt-5 m-1">
                                        <div class="mb-3">
                                            <h2>
                                                للايجار - محل علشارع
                                            </h2>
                                            <h5 class="smallColor mt-3">
                                                200 شيكل 
                                            </h5>
                                            <h5 class="maincolor">رام الله والبيرة - مدينة رام الله - بير نبالا</h5>
                                        </div>
                                        <div>
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">

                                                <div class="sharethis-inline-share-buttons"></div>

                                            </div>
                                        </div>

                                        <div class="row m-2">
                                        @foreach(explode(',',$shop->img) as $img)
                                            <div class="col-4">
                                                <a href="{{ url('assets/site/images/shops/'.$img) }}"
                                                    class="gallery-popup" style="height: 100px; width:100%">
                                                    <div class="project-item">
                                                        <div class="overlay-container">
                                                            <img src="{{ url('assets/site/images/shops/'.$img) }}"
                                                                alt="img" class="gallery-thumb-img m-0"
                                                                style="height: 100px; width:100%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div> 
                </div>
            </div>
            <div class="row m-0 ">
                <table class="table table-striped  table-bordered mb-0 text-center h5">
                    <thead>
                        <tr>
                            <th class="btn-primary">الصفة</th>
                            <th class="btn-primary"> الوصف</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td class="">العرض</td>
                            <td class="">{{$shop->offre}}</td>
                        </tr>
                        <tr>
                            <td class="">المعروض</td>
                            <td class="">  {{$shop->displayed}}</td>
                        </tr>
                        <tr>
                            <td class="">السعر</td>
                            <td class=""> {{$shop->price}}</td>
                        </tr>
                        <tr>
                            <td class="">المساحة</td>
                            <td class="">{{$shop->loung}}</td>
                        </tr> 
                        <tr>
                            <td class="">نبذة</td>
                            <td class="">{{$shop->brief}}</td>
                        </tr>
                        <tr>
                            <td class="">المدينة</td>
                            <td class=""> {{$shop->city}}</td>
                        </tr>
                        <tr>
                            <td class="">العنوان</td>
                            <td class="">{{$shop->address}}</td>
                        </tr>   
                        <tr>
                            <td class="">معلومات إضافية</td>
                            <td class="">
                                {{$shop->description}}
                            </td>
                        </tr> 

                    </tbody>
                </table>
            </div>
            <div class="row m-0 ">
                <table class="table table-striped  table-bordered mb-0 text-center h5">
                    <thead>
                        <tr>
                            <th class="btn-primary" colspan="2">معلومات المعلن</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="">إسم المعلن</td>
                            <td class=""> {{$shop->advertiser_name}}</td>
                        </tr>
                        <tr>
                            <td class="">العنوان</td>
                            <td class="">{{$shop->address}}</td>
                        </tr>
                        <tr>
                            <td class="">رقم الهاتف</td>
                            <td class="">{{$shop->phone_number}}</td>
                        </tr>
                        <tr>
                            <td class="">موبايل</td>
                            <td class="">{{$shop->mobile}}</td>
                        </tr>
                        <tr>
                            <td class="">البريد الالكتروني</td>
                            <td class=""> {{$shop->email}}</td>
                        </tr>
                        <tr>
                            <td class=""> تاريخ نشر الاعلان</td>
                            <td class=""> {{$shop->created_at}}</td>
                        </tr>
                        <tr>
                            <td class="">تاريخ انتهاء الاعلان</td>
                            <td class=""> 11-12-2024 </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row mt-3">
                <div class="col-12 text-center">
                <form method="post" action="{{route('admin.shops.change.state',['action'=>$shop->state == 'refused' ? 'allowed' : 'refused','shop'=>$shop->id])}}">
                    @csrf
                    @if($shop->state == 'pinned')
                                                                <button type="submit" value="allowed" class="btn btn-primary w-md waves-effect waves-light d-block" >تفعيل</button>
                                                                <button type="submit" value="blocked" class="btn btn-primary w-md waves-effect waves-light d-block" >حظر</button>
                                                                @else 
                                                                <button type="submit" value="{{$shop->state == 'blocked'? 'allowed':'blocked' }}" class="btn btn-primary w-md waves-effect waves-light" >{{$shop->state == 'blocked' ? 'قبول' : 'رفض'}}</button>


                                                            @endif                            
                </form>    
                </div>
            </div>
        </div>
        
    </div>
    
    
@endsection
