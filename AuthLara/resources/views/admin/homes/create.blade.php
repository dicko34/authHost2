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
                            <h3 class="m-2 m-auto"><i class="mdi mdi-car-side mr-2"></i> إعلان منزل او شقة جديدة</h3>
                        </div>
                        <form method="POST" action="{{route('admin.homes.store')}}" enctype="multipart/form-data">
                        @csrf
                                                    @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{$error}}</div>
                                @endforeach
                            @endif
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
                                                <input type="radio" value="للبيع" id="switch1" name="show" />
                                                <label for="switch1">للبيع</label>

                                                <input type="radio" value="للإيجار" id="switch2" name="show" />
                                                <label for="switch2">للإيجار</label>
                                                @error('show')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">نوع المنزل</td>
                                            <td class="">
                                                <select name="home_type">
                                                    <option>شقة</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                @error('home_type')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">الحالة</td>
                                            <td class="">
                                                <select name="status">
                                                    <option>اسود</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                @error('status')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">عدد الغرف</td>
                                            <td class="">
                                                <select name="rooms_number">
                                                    <option>2</option>
                                                    <option>Large select</option>
                                                    <option>Small select</option>
                                                </select>
                                                @error('rooms_number')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد الحمامات</td>
                                            <td class="">
                                                <input value="" name="bathrooms_number" type="text" class=""
                                                    placeholder="2" >
                                                    @error('bathrooms_number')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">عدد المطابخ</td>
                                            <td class="">
                                                <input value="" name="kitchen_number" type="text" class=""
                                                    placeholder="1">
                                                    @error('kitchen_number')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">الصالة</td>
                                            <td class="">
                                                <input value="" name="loung" type="text" class="" placeholder="الصالة كبيره">
                                                @error('loung')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">المساحة</td>
                                            <td class="">
                                                <input value="" name="area" type="text" class=""
                                                    placeholder="1200">
                                                    @error('area')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مساحة الارض</td>
                                            <td class="">
                                                <input value="" name="land_area" type="text" class=""
                                                    placeholder="مساحة الارض المقام عليها">
                                                    @error('land_area')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input value="" name="price" type="text" class=""
                                                    placeholder="سعر البيع او الايجار">
                                                    @error('price')
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
                                                </td>
                                        </tr>
                
                                        <tr>
                                            <td class=""> المدن</td>
                                                <td>
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
                                                </td>
                                        </tr>
                
                                        <tr>
                                            <td class=""> الشارع</td>
                                                <td>
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
                                                    <input value="" name="address" type="text"  placeholder="اسم المنطقة أو الشارع">
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
                                        
                                        <tr>
                                            <td class="">إضافات</td>
                                            <td class="">
                                            <input type="hidden" id="extras" name="extras">
                                                <input type="checkbox" id="switch21" value="يوجد مصعد إلكتروني"  onclick="checkedIf(event)"/>
                                                <label for="switch21">يوجد مصعد إلكتروني</label>

                                                <input type="checkbox" id="switch22" value="يوجد موقف سيارات خاص"  onclick="checkedIf(event)"/>
                                                <label for="switch22">يوجد موقف سيارات خاص</label>

                                                <input type="checkbox" id="switch23" value="يوجد تدفئة مركزية"  onclick="checkedIf(event)"/>
                                                <label for="switch23">يوجد تدفئة مركزية</label>
                                                @error('extras')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">معلومات إضافية</td>
                                            <td class="">
                                                <textarea rows="4" type="text" name="description" class=""
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
                                                <input value="" name="img[]" type="file" class="form-control" multiple>
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
                                    <button class="btn btn-primary w-md waves-effect waves-light" onclick="setExetras()" type="submit">أضف
                                        الأعلان</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    <script>
        let checkedEl = [];
        let setExetras =  () => {
            document.getElementById('extras').value = checkedEl;
        }
        let checkedIf  = (e) => {
            if(checkedEl.includes(e.target.value)) {
                checkedEl.splice(checkedEl.indexOf(e.target.value),1)
            } else {
                checkedEl.push(e.target.value)
            }
            
            
        }
    
        
    </script>
@endsection
