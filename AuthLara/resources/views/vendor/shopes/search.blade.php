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
                    <h3 class="mb-4 m-auto"><i class="fas fa-star mr-2"></i> اعلانات المحلات و المخازن  </h3>
                </div>
                <form method="POST" action="{{ route("lands.search") }}">
                    @csrf 
                    <div class="row m-3">
                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12  m-0 p-0">
                                    <select class="form-control">
                                        <option>المحافظة</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-sm-12  m-0 p-0">
                                    <select class="form-control">
                                        <option>المنطقة</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-sm-12  m-0 p-0">
                                    <select class="form-control">
                                        <option>الفئة</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-sm-12  m-0 p-0">
                                    <select class="form-control">
                                        <option>جميع العروض</option>
                                        <option>Large select</option>
                                        <option>Small select</option>
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
                    <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i class="fas fa-star mr-2"></i>800 اعلان محل و مخزن</h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light w-100" href="{{ route("shop.add") }}">أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row mt-2 mb-2">

                    @for ($i = 0; $i < 12; $i++)
                        <div class="col-6 col-xl-4  p-0 bordertoty">
                            <div class="cardtoty m-sm-1 m-0 p-1">
                                <a href="{{ url('assets/admin/images/shop.jpg') }}" class="gallery-popup"
                                    style="height: 130px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ url('assets/admin/images/shop.jpg') }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>عقارات</h4>
                                                <p>
                                                    <img src="{{ url('assets/admin/images/shop.jpg') }}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">مارتينا جرجس</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mt-2 mb-2">
                                    <h4 class="" style="color:#820120">شقق</h4>
                                    <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م
                                    وسط الخليل على بعد 570 متري</p>
                                </div>
                            </div>
                        </div>
                    @endfor

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

                    @for ($i = 0; $i < 4; $i++)
                        <div class="col-12 p-0 bordertoty">
                            <div class="cardtoty m-sm-1 m-0 p-1">
                                <a href="{{ url('assets/admin/images/car.jpeg') }}" class="gallery-popup"
                                    style="height: 130px; width:100%">
                                    <div class="project-item">
                                        <div class="overlay-container">
                                            <img src="{{ url('assets/admin/images/car.jpeg') }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                            <div class="project-item-overlay text-right">
                                                <h4>عقارات</h4>
                                                <p>
                                                    <img src="{{ url('assets/admin/images/car.jpeg') }}" alt="user"
                                                        class="avatar-xs rounded-circle">
                                                    <span class="ml-2">مارتينا جرجس</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="mt-2 mb-2">
                                    <h4 class="" style="color:#820120">شقق</h4>
                                    <p class="card-text">شقة عظم للبيع في الخليل ١٣٦ م
                                    وسط الخليل على بعد 570 متري</p>
                                </div>
                            </div>
                        </div>
                    @endfor

                </div> 
            </div>
        </div>
    </div>
</div>
</div>
    

@endsection
