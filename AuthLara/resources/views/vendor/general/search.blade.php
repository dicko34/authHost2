@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/./admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 m-auto"><i class="fab fa-telegram-plane mr-2"></i> الإعلانات العامة </h3>
                </div>
                <form method="POST" action="{{ route("generals.search") }}">
                        @method('put')
                        @csrf
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div>{{$error}}</div>
                        @endforeach
                        @endif
                    <div class="row m-3"> 
                       

                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"> الأصناف</label>
                                <div class="col-sm-8">
                                    <select name="category" class="form-control">
                                        <option>الكل</option>
                                        @foreach($generals->unique('category') as $general)
                                            <option value="{{$general->category}}">{{$general->category}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label class="col-sm-4 col-form-label"> عنوان</label>
                                <div class="col-sm-8">
                                    <input class="form-control" name="address" type="text" placeholder="مثال: التلفزيون">
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
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-6"><i class="fas fa-address-book mr-2"></i> اعلانات عامة </h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light" href="{{ route("general.add") }}">أضافة أعلان هنا</a>
                    </div> 
                </div>
                <div class="row">

                @foreach(isset($generals_show) ? $generals_show : $generals as $general)
                    <div class="col-6 col-xl-2 p-1">
                        <div class="card">
                            <a href="{{ url('assets/site/images/general/'.explode(',',$general->img)[0]) }}" class="gallery-popup" style="height: 160px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{ url('assets/site/images/general/'.explode(',',$general->img)[0]) }}" alt="img" class="gallery-thumb-img m-0" style="height: 160px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>الإعلانات العامة</h4>
                                            <p>
                                                <img src="{{ url('assets/site/images/general/'.explode(',',$general->img)[0]) }}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">{{$general->advertiser_name}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="card-body">
                                <h4 class="card-title">الإعلانات العامة</h4>
                                <p class="card-text">{{$general->city}} {{$general->address}} للبيع في {{$general->model}} اعلان</p>
                            </div>
                        </div> 
                    </div>
                    @endforeach
                
                </div>
                {{ $generals_show->links('vendor.paginate') }}
            </div>
        </div>
    </div>

@endsection
