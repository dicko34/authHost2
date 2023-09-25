@extends("layouts.vendor")
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')
<style>
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, .05);
    }

    .table-bordered td,
    .table-bordered th {
        border: 1px solid #bf465c;
        font-size: smaller;
    }

    .table td,
    .table th {
        padding: .2rem;
        vertical-align: middle;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: auto;
        font-size: inherit;
        line-height: inherit;
    }

</style>
<div class="row">
<div class="col-lg-9 col-12">
    <div class="row">
        <div class="card w-100">
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 m-auto"><i class="mdi mdi-view-dashboard  mr-2"></i> اعلانات توظيف  </h3>
                </div>
                <form method="POST" action="{{ route("jobs.search") }}">
                    @csrf
                    <div class="row ">
                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <label class="col-sm-4 col-form-label">مكان العمل</label>
                                    <select name="workplace" class="form-control">
                                        <option value="الكل">الكل</option>
                                        @foreach($jobs->unique('workplace') as $job)
                                                    <option value="{{$job->workplace}}">{{$job->workplace}}</option>
                                        @endforeach
                                            </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <label class="col-sm-4 col-form-label">التخصص</label>
                                    <select name="specialization" class="form-control">
                                        <option value="الكل">الكل</option>
                                        @foreach($jobs->unique('specialization') as $job)
                                                    <option value="{{$job->specialization}}">{{$job->specialization}}</option>
                                        @endforeach
                                            </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group row">
                                <div class="col-12 m-0 p-0">
                                    <label class="col-sm-4 col-form-label">الدوام</label>
                                    <select name="permanence" class="form-control">
                                        <option value="الكل">الكل</option>
                                        @foreach($jobs->unique('permanence') as $job)
                                                    <option value="{{$job->permanence}}">{{$job->permanence}}</option>
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
            <div class="body-card m-5">
                <div class="row">
                    <h3 class="mb-4 col-6 btn btn-primary w-md waves-effect waves-light"><i class="fas fa-address-book mr-2"></i> اعلانات التوظيف </h3>
                    <div class="col-6 text-right">
                        <a class="btn btn-primary w-md waves-effect waves-light w-100" href="{{ route("job.add") }}">أضافة أعلان هنا</a>
                    </div>
                </div>
                <div class="row">

                    <div class="table-responsive m-0">
                        <table class="table table-striped table-bordered mb-0 text-center h5">
                            <thead>
                                <tr>
                                    <th class="btn-primary">الشركة</th>
                                    <th class="btn-primary">الوظيفة</th>
                                    <th class="btn-primary">العنوان</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    <tr>
                                        <td>
                                            <a href="{{ ('job/product/'.$job->id) }}">
                                                <img src="{{ url('assets/site/images/jobs/'.explode(',',$job->img)[0]) }}" alt="img"
                                                class="gallery-thumb-img m-0" style="height: 100px; width:100px">
                                            </a>
                                        </td>
                                        <th>
                                            <a href="{{ ('job/product/'.$job->id) }}">
                                                مطلوب {{$job->specialization}}
                                            </a>
                                        </th>
                                        <td>
                                            {{$job->advertiser_address}}
                                            <br>
                                            {{$job->created_at}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{ $jobs->links('vendor.paginate') }}
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

                    @foreach($jobs as $job)
                    <div class="col-12 p-0 bordertoty">
                        <div class="cardtoty m-sm-1 m-0 p-1">
                            <a href="{{url('assets/site/images/jobs/'.explode(',',$job->img)[0])}}" class="gallery-popup" style="height: 130px; width:100%">
                                <div class="project-item">
                                    <div class="overlay-container">
                                        <img src="{{url('assets/site/images/jobs/'.explode(',',$job->img)[0])}}" alt="img" class="gallery-thumb-img m-0" style="height: 130px; width:100%">
                                        <div class="project-item-overlay text-right">
                                            <h4>وظائف</h4>
                                            <p>
                                                <img src="{{url('assets/site/images/jobs/'.explode(',',$job->img)[0])}}" alt="user" class="avatar-xs rounded-circle">
                                                <span class="ml-2">{{$job->advertiser_name}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="mt-2 mb-2">
                                <h4 class="" style="color:#820120">وظيفة</h4>
                                <p class="card-text">{{$job->city}} {{$job->address}} للبيع في {{$job->model}} وظيفة</p>
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
