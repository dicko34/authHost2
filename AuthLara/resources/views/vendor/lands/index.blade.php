@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<style>
    .form-group {
     margin-bottom: 0rem; 
}
</style>
<div class="row">
<div class="col-lg-9 col-12"> 
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-1 mt-3 mb-3">
                <div class="row">
                    <h3 class="mb-4 m-auto"><i class="mdi mdi-view-dashboard  mr-2"></i> اعلانات الاراضي  </h3>
                </div>
                <form method="POST" action="{{ route("lands.search") }}">
                    @csrf
                    <div class="row m-3">
                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-sm-12  m-0 p-0">
                                    <label class="col-sm-4 col-form-label">المنطقة</label>
                                    <select name="city" class="form-control">
                                        <option value="الكل">الكل</option>
                                        @foreach($lands->unique('city') as $land)
                                                    <option value="{{$land->city}}">{{$land->city}}</option>
                                        @endforeach
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
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i class="mdi mdi-home mr-2"></i>{{count($lands)}} اعلان ارض</h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light w-100" href="{{ route("land.add") }}">أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row mt-2 mb-2">

                    @foreach ($lands as $land)
                                    <tr>
                                        <td>
                                            <a href="{{ ('land/product/'.$land->id) }}">
                                                <img src="{{ url('assets/site/images/lands/'.explode(',',$land->img)[0]) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 100px; width:100px">
                                            </a>
                                        </td>
                                        <th>
                                            <a href="{{ ('land/product/'.$land->id) }}">
                                                مطلوب عدة تخصصات سكرتيره و مديره مبيعات و محاسبة
                                            </a>
                                        </th>
                                        <td>
                                            {{$land->advertiser_address}}
                                            <br>
                                            {{$land->created_at}}
                                        </td>
                                    </tr>
                                @endforeach

                </div>
                <nav aria-label="..." class="">
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
</div>
<div class="col-00 col-lg-3">
    <div class="row m-1">
        <div class="card w-100">
            <div class="body-card m-3">
                <div class="row">
                    <h3 class="mb-4 col-6 ">اعلانات</h3>
                </div>
                <div class="row m-2 mb-2">

                    @foreach($lands as $land)
                    <div class="col-12 p-0 bordertoty">
                        <div class="cardtoty m-sm-1 m-0 p-1">
                            <a href="{{url('assets/site/images/lands/'.explode(',',$land->img)[0])}}" class="gallery-popup" style="height: 130px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{url('assets/site/images/lands/'.explode(',',$land->img)[0])}}" alt="img" class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>السيارات</h4>
                                            <p>
                                                <img src="{{url('assets/site/images/lands/'.explode(',',$land->img)[0])}}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">{{$land->advertiser_name}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="mt-2 mb-2">
                                <h4 class="" style="color:#820120">ارض</h4>
                                <p class="card-text">{{$land->city}} {{$land->address}} للبيع في {{$land->model}} ارض</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div> 
            </div>
        </div>
    </div>
</div>
</div>
    

@endsection
