@extends("layouts.admin")
@section("pageTitle", "Koala Web Libraries")
@section('styleChart')
    <link href="{{url("assets/admin/libs/select2/css/select2.min.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{url("assets/admin/libs/summernote/summernote-bs4.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection
@section("content")

<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    <h5 class="mb-5 mt-3">اضافة مستخدم جديدة</h5>
                    <form method="post" action="{{route('admin.users.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">الاسم او الشركة</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" value="" name="name" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> البريد الالكتروني </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" id="example-text-input" name="email" required>
                                @error('email')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> كلمة المرور</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" id="example-text-input" name="password" required>
                                @error('password')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> المدينه </label>
                            <div class="col-sm-10">
                                <select class="form-control" name="city">
                                    <option>اريحا</option>
                                    <option>اريحا</option>
                                </select>
                                @error('city')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> العنوان </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="address" required>
                                @error('address')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> رقم الهاتف </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" id="example-text-input" name="phone" required>
                                @error('phone')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label"> صورة </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" id="example-text-input" name="img" multiple>
                                @error('img')
                                <span class="" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-dark w-25">اضافة</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section("script")
<script src="{{url("assets/admin/libs/select2/js/select2.min.js")}}"></script>
<script src="{{url("assets/admin/libs/summernote/summernote-bs4.min.js")}}"></script>
<script src="{{url("assets/admin/js/pages/email-summernote.init.js")}}"></script>
<script src="{{url("assets/admin/js/app.js")}}"></script>
@endsection 