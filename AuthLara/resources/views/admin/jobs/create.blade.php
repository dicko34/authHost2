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
                        <div class="row m-2">
                            <h3 class="m-2 m-auto"><i class="fas fa-address-book mr-2"></i> إعلان وظيفة جديدة </h3>
                        </div>
                        <form method="POST" action="{{route('admin.jobs.store')}}" enctype="multipart/form-data">
                        @if ($errors->any())
     @foreach ($errors->all() as $error)
         <div>{{$error}}</div>
     @endforeach
 @endif
                        @csrf
                            <div class="row m-0 ">
                                <table class="table table-striped table-bordered mb-0 text-center h5">
                                    <thead>
                                        <tr>
                                            <th class="btn-primary" style="width: 30%">الصفة</th>
                                            <th class="btn-primary"> الوصف</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-left">
                                        <tr>
                                            <td class="">التخصص</td>
                                            <td class="">
                                                <select name="specialization">
                                                    <option>برمجة</option>
                                                    <option>الكل</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select> 
                                                @error('specialization')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">مكان العمل</td>
                                            <td class="">
                                                <select name="workplace">
                                                    <option>اريحا</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                @error('workplace')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">عمل ليلي</td>
                                            <td class="">
                                                <input name="night_work" type="text" class="form-control" placeholder=" معلومات عن العمل بالليل او المناوبة">
                                                @error('night_work')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>  
                                        <tr>
                                            <td class="">الدوام</td>
                                            <td class="">
                                                <input type="radio" id="switch1" name="permanence" value="دوام كامل" />
                                                <label for="switch1">دوام كامل</label>

                                                <input type="radio" id="switch2" name="permanence" value="دوام جزئي"/>
                                                <label for="switch2">دوام جزئي</label>

                                                <input type="radio" id="switch3" name="permanence" value="العمل من المنزل"/>
                                                <label for="switch3">العمل من المنزل</label>
                                                @error('permanence')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr> 
                                       
                                        <tr>
                                            <td class="">معلومات إضافية</td>
                                            <td class="">
                                                <textarea  rows="4" type="text" name="description"
                                                    placeholder="المزيد من المواصفات كل معلومة بسطر"></textarea>
                                                    @error('description')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الصور</td>
                                            <td class="">
                                                <input name="img[]" type="file" class="form-control" multiple>.
                                                @error('img')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مدة الاعلان باليوم</td>
                                            <td class="">
                                                <select name="ad_duration_per_day">
                                                    <option>30</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                @error('ad_duration_per_day')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
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
                                    <tbody class="text-left">
                                        <tr>
                                            <td class="">إسم المعلن</td>
                                            <td class="">
                                                <input value="" name="advertiser_name" type="text" class=""
                                                    placeholder="الاسم الحقيقي">
                                                    @error('advertisr_name')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">رقم الهاتف</td>
                                            <td class="">
                                                <input value="" name="phone_number" type="text" class=""
                                                    placeholder="رقم الهاتف مع المقدمة">
                                                    @error('phone_number')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">موبايل</td>
                                            <td class="">
                                                <input value="" name="mobile" type="text" class=""
                                                    placeholder="رقم الموبايل  ">
                                                    @error('mobile')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">البريد الالكتروني</td>
                                            <td class="">
                                                <input value="" type="text" name="email" class=""
                                                    placeholder="البريد الالكتروني">
                                                    @error('email')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=""> المدينة</td>
                                            <td class="">
                                                <select name="advertiser_city">
                                                    <option>اريحا</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                    @error('advertiser_city')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">العنوان</td>
                                            <td class="">
                                                <input value="" name="advertiser_address" type="text" class=""
                                                    placeholder="اسم الشارع او المنطقة">
                                                    @error('advertiser_address')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">أضف
                                        الأعلان</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
@endsection
