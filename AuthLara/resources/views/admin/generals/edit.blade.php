

@extends("layouts.admin")
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
        <div class="col-lg-12 col-12">
            <div class="row">
                <div class="card w-100">
                    <div class="body-card m-1">
                        <div class="row m-5">
                            <h3 class="m-5 m-auto"><i class="fab fa-telegram-plane mr-2"></i> أضافة إعلان عام </h3>
                        </div>
                        <form method="post" action="{{route('admin.generals.update',['general'=>$general->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
 <div class="row m-3">
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">العنوان</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" value="{{$general->address}}" name="address" type="text" placeholder="تلفاز ملون 20 بوصة">
                                            @error('address')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الصنف</label>
                                        <div class="col-sm-8">
                                            <select name="category" class="form-control">
                                                <option>اختر الصنف</option>
                                                <option>الكل</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('category')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div> 
                                    </div>
                                </div>    
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">السعر</label>
                                        <div class="col-sm-8">
                                            <input name="price" type="text" class="form-control" placeholder="75000" value="{{$general->price}}">
                                            @error('price')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">مدة الاعلان باليوم</label>
                                        <div class="col-sm-8">
                                            <select name="ad_duration_per_day" class="form-control">
                                                <option>30</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('ad_duration_per_day')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>       
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">معلومات إضافية</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" rows="8" type="text" class="form-control" placeholder="المزيد من المواصفات كل معلومة بسطر">
                                                {{$general->description}}
                                            </textarea>
                                            @error('description')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">الصور</label>
                                        <div class="col-sm-10">
                                            <input name="img[]" type="file" class="form-control" multiple >
                                            @error('img')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <hr>
        
                                <h3 class="m-5">بيانات المُعلن</h3>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الاسم</label>
                                        <div class="col-sm-8">
                                            <input name="advertiser_name" type="text" class="form-control" placeholder="الاسم الحقيقي" value="{{$general->advertiser_name}}">
                                            @error('advertiser_name')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">رقم الهاتف</label>
                                        <div class="col-sm-8">
                                            <input name="phone_number" type="text" class="form-control" placeholder="رقم الهاتف مع المقدمة" value="{{$general->phone_number}}">
                                            @error('phone_number')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">رقم الموبايل</label>
                                        <div class="col-sm-8">
                                            <input name="mobile" type="text" class="form-control" placeholder="رقم الموبايل  " value="{{$general->mobile}}">
                                            @error('mobile')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">العنوان</label>
                                        <div class="col-sm-8">
                                            <input name="email" value="{{$general->email}}" type="text" class="form-control" placeholder="البريد الالكتروني">
                                            @error('email')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">المدينة</label>
                                        <div class="col-sm-8">
                                            <select name="advertiser_city" class="form-control">
                                                <option>خصوصي</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('advertiser_city')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                               
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">العنوان</label>
                                        <div class="col-sm-8">
                                            <input name="advertiser_address" type="text" class="form-control" placeholder="اسم الشارع او المنطقة" value="{{$general->advertiser_address}}">
                                            @error('advertiser_address')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">أضف الأعلان</button>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    <script>

var vars = {{Illuminate\Support\Js::from($general)}};
    let selectTarget = (id) => {
        let com = document.querySelectorAll(`select[name="${id}"] option`);

        for (const el of com) {
            (el.innerHTML == vars[id]) ? el.selected = true: '';
        }
    }
    selectTarget('ad_duration_per_day')
    selectTarget('category')
    selectTarget('advertiser_city')
    </script>
@endsection
