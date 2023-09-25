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
    @php($features = explode(',',$land->features))
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
                                                {{$land->brief}}
                                            </h2>
                                            <h5 class="smallColor mt-3">
                                                {{$land->price}} شيكل 
                                            </h5>
                                            <h5 class="maincolor">{{$land->address}} - {{$land->street}} - {{$land->gov}}  </h5>
                                        </div>
                                        <div>
                                            <div class="apsc-icons-wrapper clearfix apsc-theme-4">

                                                <div class="sharethis-inline-share-buttons"></div>

                                            </div>
                                        </div>

                                        <div class="row m-2">
                                        @foreach(explode(',',$land->img) as $img)
                                            <div class="col-4">
                                                <a href="{{ url('assets/site/images/lands/'.$img) }}"
                                                    class="gallery-popup" style="height: 100px; width:100%">
                                                    <div class="project-item">
                                                        <div class="overlay-container">
                                                            <img src="{{ url('assets/site/images/lands/'.$img) }}"
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
                            <td class="">نبذة</td>
                            <td class=""> {{$land->brief}}</td>
                        </tr>
                        <tr>
                            <td class="">السعر</td>
                            <td class=""> {{$land->price}}</td>
                        </tr>
                        <tr>
                            <td class="">تقع علي</td>
                            <td class="">{{$land->located_on}}</td>
                        </tr>
                        <tr>
                            <td class="">المساحة</td>
                            <td class=""> {{$land->area}}</td>
                        </tr>
                        <tr>
                            <td class="">محاطة ب</td>
                            <td class=""> {{$land->surrounded_by}}</td>
                        </tr>
                        <tr>
                            <td class="">إضافات</td>
                            <td class="">
                            @if(count($features) > 0)
                                <ul class="list-unstyled m-3 text-left">
                                    <li>
                                        @foreach($features as $ext)
                                        <ul>
                                            <li class="m-2">{{$ext}}</li>
                                        </ul>
                                            @endforeach
                                    </li>
                                </ul>
                                @endif
                            </td>
                        </tr> 
                        <tr>
                            <td class="">معلومات إضافية</td>
                            <td class="">
    {{$land->description}}
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
                            <td class=""> {{$land->advertiser_name}}</td>
                        </tr>
                        <tr>
                            <td class="">العنوان</td>
                            <td class="">{{$land->address}}</td>
                        </tr>
                        <tr>
                            <td class="">رقم الهاتف</td>
                            <td class="">{{$land->phone_number}}</td>
                        </tr>
                        <tr>
                            <td class="">موبايل</td>
                            <td class="">{{$land->mobile}}</td>
                        </tr>
                        <tr>
                            <td class="">البريد الالكتروني</td>
                            <td class=""> {{$land->email}}</td>
                        </tr>
                        <tr>
                            <td class=""> تاريخ نشر الاعلان</td>
                            <td class=""> {{$land->created_at}}</td>
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
                <form method="post" action="{{route('admin.lands.change.state',['action'=>$land->state == 'refused' ? 'allowed' : 'refused','land'=>$land->id])}}">
                    @csrf
                    @if($land->state == 'pinned')
                                                                <button type="submit" value="allowed" class="btn btn-primary w-md waves-effect waves-light d-block" >تفعيل</button>
                                                                <button type="submit" value="blocked" class="btn btn-primary w-md waves-effect waves-light d-block" >حظر</button>
                                                                @else 
                                                                <button type="submit" value="{{$land->state == 'blocked'? 'allowed':'blocked' }}" class="btn btn-primary w-md waves-effect waves-light" >{{$land->state == 'blocked' ? 'قبول' : 'رفض'}}</button>


                                                            @endif                                          
                </form>    
                </div>
            </div>
        </div>
        
    </div>
    
    
@endsection
