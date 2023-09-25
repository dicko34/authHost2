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
                            <h3 class="m-5 m-auto"><i class="mdi mdi-car-side mr-2"></i>  أضافة إعلان جهاز ذكي جديد </h3>
                        </div>
                        <form method="post" action="{{route('admin.mobiles.update',['mobile'=>$mobile->id])}}" enctype="multipart/form-data">
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
                                        <label class="col-sm-4 col-form-label">حالة الجهاز</label>
                                        <div class="col-sm-8">
                                            <select name="device_status" class="form-control">
                                                <option>جديد</option>
                                                <option>الكل</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('device_status')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">الشركة </label>
                                        <div class="col-sm-8">
                                            <select name="company" class="form-control">
                                                <option>جديد</option>
                                                <option>الكل</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('company')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">موديل</label>
                                        <div class="col-sm-8">
                                            <select name="model" class="form-control">
                                                <option>موديل</option>
                                                <option>الكل</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('model')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                        <p style="color: red" class="ml-4 mt-2">
                                            *في حالة عدم وجود الموديل قم بإدخاله في باقي الموديل
                                        </p>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">باقي الموديل</label>
                                        <div class="col-sm-8">
                                            <input name="reset_model"   value="{{$mobile->reset_model}}" type="text" class="form-control">
                                            @error('reset_model')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">موديل سنة</label>
                                        <div class="col-sm-8">
                                            <select name="model_year" class="form-control">
                                                <option>2020</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('model_year')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">عدد الشرائح</label>
                                        <div class="col-sm-8">
                                            <select name="slides_number" class="form-control">
                                                <option>اسود</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('slides_number')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">حجم الشاشة</label>
                                        <div class="col-sm-8">
                                            <input name="screen_size"  value="{{$mobile->screen_size}}" type="text" class="form-control" placeholder="مثال 5 بوصة">
                                            @error('screen_size')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> الكاميرات</label>
                                        <div class="col-sm-8">
                                            <input name="cameras"  value="{{$mobile->cameras}}" type="text" class="form-control" placeholder="مثال 18 ميجا خلفية">
                                            @error('cameras')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> الذاكرة</label>
                                        <div class="col-sm-8">
                                            <input name="memory"  value="{{$mobile->memory}}" type="text" class="form-control" placeholder="مثال 8">
                                            @error('memory')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-4">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label"> سعة التخزين</label>
                                        <div class="col-sm-8">
                                            <input name="storage"  value="{{$mobile->storage}}" type="text" class="form-control" placeholder="مثال 16">
                                            @error('storage')
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
                                            <input name="price"  value="{{$mobile->price}}" type="text" class="form-control" placeholder="75000">
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
                                            <textarea rows="8" name="description" type="text" class="form-control" placeholder="المزيد من المواصفات كل معلومة بسطر">{{$mobile->description}}</textarea>
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
                                            <input name="img[]" type="file" class="form-control" multiple>
                                            @error('phone_number')
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
                                        <input name="advertiser_name"  value="{{$mobile->advertiser_name}}" type="text" class="form-control" placeholder="الاسم الحقيقي">
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
                                        <input name="phone_number"  value="{{$mobile->phone_number}}" type="text" class="form-control" placeholder="رقم الهاتف مع المقدمة">
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
                                        <label class="col-sm-4 col-form-label">العنوان</label>
                                        <div class="col-sm-8">
                                        <input name="email"  value="{{$mobile->email}}" type="text" class="form-control" placeholder="رقم الموبايل  ">
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
                                            
                                        </div>
                                    </div>
                                </div>
        
                                <div class="col-sm-12">
                                    <div class="form-group row">
                                        <label class="col-sm-4 col-form-label">العنوان</label>
                                        <div class="col-sm-8">
                                        <input name="advertiser_address" value="{{$mobile->advertiser_address}}" type="text" class="form-control" placeholder="اسم الشارع او المنطقة">
                                            @error('advertiser_address')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
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

var vars = {{Illuminate\Support\Js::from($mobile)}};
    let selectTarget = (id) => {
        let com = document.querySelectorAll(`select[name="${id}"] option`);

        for (const el of com) {
            (el.innerHTML == vars[id]) ? el.selected = true: '';
        }
    }
    selectTarget('device_status')
    selectTarget('company')
    selectTarget('model')
    selectTarget('model_year')
    selectTarget('slides_number')
    selectTarget('ad_duration_per_day')
    selectTarget('advertiser_city')
    </script>
@endsection
