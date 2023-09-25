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
                            <h3 class="m-2 m-auto"><i class="mdi mdi-view-dashboard mr-2"></i> إعلان محل جديدة </h3>
                        </div>
                        <form method="POST" action="{{route('admin.shops.store')}}" enctype="multipart/form-data">
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
                                            <td class="">العرض</td>
                                            <td class="">
                                                <input value="للبيع" type="radio" id="switch21" name="offre" />
                                                <label for="switch21">للبيع</label>
                                               
                                                <input  value="للإيجار" type="radio" id="switch22" name="offre" />
                                                <label for="switch22">للإيجار</label>

                                                <input value="ضمان أو خلو" type="radio" id="switch23" name="offre" />
                                                <label for="switch23">ضمان أو خلو</label>
                                                @error('offre')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="">المعروض</td>
                                            <td class="">
                                                <input value="محل" type="radio" id="switch24" name="displayed" />
                                                <label for="switch24">محل</label>
                                                <input value="مخزن" type="radio" id="switch25" name="displayed" />
                                                <label for="switch25">مخزن</label>
                                                <input value="مكتب" type="radio" id="switch26" name="displayed" />
                                                <label for="switch26">مكتب</label>
                                                @error('displayed')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="">نبذة</td>
                                            <td class="">
                                                <input name="brief" type="text"  placeholder="نبذة عن المكتب او المحل او المخزن">
                                                @error('brief')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">المساحة</td>
                                            <td class="">
                                                <input name="loung" type="text"  placeholder="مساحة المحل او المكتب او المخزن">
                                                @error('loung')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input name="price" type="text" placeholder="سعر البيع او الايجار">
                                                @error('price')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr> 
                                        
                                        <tr>
                                            <td class="">معلومات إضافية</td>
                                            <td class="">
                                                <textarea name="description" rows="4" type="text" class=""
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
                                                <input name="img[]" type="file" class="form-control" multiple>
                                                @error('img')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=""> المحافظة</td>
                                                <td>
                                                    <select name="gov">
                                                        <option>اريحا</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                    @error('gov')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                                    <select name="city">
                                                        <option> المدينة</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                    @error('city')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                                    <select name="street">
                                                        <option> الشارع</option>
                                                        <option>Large select</option>
                                                        <option>Small select</option>
                                                    </select>
                                                    @error('street')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                                </td>
                                        </tr> 
                                        <tr>
                                            <td class=""> العنوان</td>
                                                <td>
                                                    <input name="address" type="text"  placeholder="اسم المنطقة أو الشارع">
                                                    @error('address')
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
                                                <input " name="advertiser_name" type="text" class=""
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
                                                <input name="phone_number" type="text" class=""
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
                                                <input  name="mobile" type="text" class=""
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
                                                <input type="text" name="email" class=""
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
                                                <input  name="advertiser_address" type="text" class=""
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
