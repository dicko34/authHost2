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
                        <h3 class="m-2 m-auto"><i class="mdi mdi-car-side mr-2"></i> تعديل أعلان سيارة </h3>
                    </div>
                    <form method="post" action="{{route('admin.cars.update',['car'=>$car->id])}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
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
                                        <td class="">الشركة</td>
                                        <td class="">
                                        @error('model')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            @error('model')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            <select class="" name="company" id="company">

                                                <option>جميع الشركات</option>
                                                <option>الكل</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            <select class="" name="model" id="model">
                                                <option>موديل</option>
                                                <option>الكل</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            <p style="color: red" class="mt-2">
                                                *في حالة عدم وجود الموديل قم بإدخاله في باقي الموديل
                                            </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">باقي الموديل</td>
                                        <td class="">
                                            <input value="{{$car->reset_model}}" type="text" name="reset_model" id="reset_model">
                                            @error('reset_model')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">موديل سنة</td>
                                        <td class="">
                                            <select name="model_year" id="model_year">
                                                <option>2020</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('model_year')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">لون السياره</td>
                                        <td class="">
                                            <select name="car_color" id="car_color">
                                                <option>اسود</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('car_color')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                               
                                    </tr>
                                    <tr>
                                        <td class="">قوة الماتور</td>
                                        <td class="">
                                            <input value="{{$car->power}}" type="text" name="power" id="power" placeholder="1600 سي سي">
                                            @error('power')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">عدد الركاب</td>
                                        <td class="">
                                            <select name="passengers" id="passengers">
                                                <option>2</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('passengers')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">الدفع</td>
                                        <td class="">
                                            <select  id="drive_type" name="drive_type">
                                                <option>دفع أمامي</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('drive_type')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">عداد السيارة</td>
                                        <td class="">
                                            <input value="{{$car->speedmotors}}" type="text" id="speedmotors" name="speedmotors" placeholder="75000 كيلومتر">
                                            @error('speedmotors')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">أصل السيارة</td>
                                        <td class="">
                                            <select name="origin" id="origin">
                                                <option>خصوصي</option>
                                                <option>Large select</option>
                                                <option>Small select</option>
                                            </select>
                                            @error('origin')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">السعر</td>
                                        <td class="">
                                            <input id="price" value="{{$car->price}}" name="price" type="text" class="" placeholder="75000">
                                            @error('price')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">مدة الاعلان باليوم</td>
                                        <td class="">
                                            <select name="ad_duration_per_day" id="ad_duration_per_day">
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
                                        <td class="">رخصة السيارة</td>
                                        <td class="" id="driving_license">
                                        <input type="radio" id="switch7" value="فلسطينية" name="driving_license" />
                                                <label for="switch7">فلسطينية</label>

                                                <input type="radio" value="نمرة الصفراء" id="switch8" name="driving_license" />
                                                <label for="switch8">نمرة صفراء</label>
                                        </td>
                                        @error('driving_license')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                    </tr>
                                    <tr>
                                        <td class="">نوع الوقود</td>
                                        <td class="" id="fuel_type">
                                        <input type="radio" value="ديزل" id="switch1" name="fuel_type" />
                                                <label for="switch1">ديزل</label>

                                                <input type="radio" value="بنزين" id="switch2" name="fuel_type" />
                                                <label for="switch2">بنزين</label>

                                                <input type="radio" value="هايبرد" id="switch3" name="fuel_type" />
                                                <label for="switch3">هايبرد</label>
                                            @error('fuel_type')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td class="">نوع الجير</td>
                                        <td class="" id="lime_type">
                                        <input type="radio" value="عادي" id="switch11" name=" lime_type" />
                                                <label for="switch11">عادي</label>
                                                <input type="radio" value="اوتوماتيكي" id="switch12" name="lime_type" />
                                                <label for="switch12">اوتوماتيك</label>

                                                <input type="radio" value="نصف اوتوماتيكي" id="switch13" name=" lime_type" />
                                                <label for="switch13">نصف اوتوماتيك</label>
                                            @error('lime_type')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">الزجاج</td>
                                        <td class="" id="glass">
                                        <input type="radio" value="يدوي" id="switch14" name="glass" />
                                                <label for="switch14">يدوي</label>

                                                <input type="radio" value="الكتروني" id="switch15" name="glass" />
                                                <label for="switch15">الكتروني</label>
                                            @error('glass')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">معروضة</td>
                                        <td class="" id="shown">
                                        <input type="radio" value="للبيع فقط" id="switch16" name="shown" />
                                                <label for="switch16">للبيع فقط</label>

                                                <input type="radio" value="للتبديل فقط" id="switch17" name="shown" />
                                                <label for="switch17">للتبديل فقط</label>

                                                <input type="radio" value="للبيع أو التبديل" id="switch18" name="shown" />
                                                <label for="switch18">للبيع أو التبديل</label>
                                            @error('shown')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">وسيلة الدفع</td>
                                        <td class="" id="pay_method">
                                        <input type="radio" value="نقدا فقط" id="switch19" name="pay_method" />
                                                <label for="switch19">نقدا فقط</label>

                                                <input type="radio" value="إمكانية التقسيط" id="switch20" name="pay_method" />
                                                <label for="switch20">إمكانية التقسيط</label>
                                            @error('pay_method')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">إضافات</td>
                                        <td class="" id="extras">
                                        <input type="hidden" id="extras_h" name="extras">
                                                <input type="checkbox" value="جهاز إنذار" id="switch21"   onclick="checkedIf(event)"/>
                                                <label for="switch21">جهاز إنذار</label>

                                                <input type="checkbox" value="مُكيّف" id="switch22"   onclick="checkedIf(event)"/>
                                                <label for="switch22">مُكيّف</label>

                                                <input type="checkbox" value="مسجل CD" id="switch23"   onclick="checkedIf(event)"/>
                                                <label for="switch23">مسجل CD</label>

                                                <input type="checkbox" value="فتحة سقف" id="switch24"   onclick="checkedIf(event)" />
                                                <label for="switch24">فتحة سقف</label>

                                                <input type="checkbox" value="فرش جلد" id="switch25"  onclick="checkedIf(event)" />
                                                <label for="switch25">فرش جلد</label>

                                                <input type="checkbox" value="إغلاق مركزي" id="switch26"   onclick="checkedIf(event)"/>
                                                <label for="switch26">إغلاق مركزي</label>

                                                <input type="checkbox" value="جنطات مغنيسيوم" id="switch27"   onclick="checkedIf(event)"/>
                                                <label for="switch27">جنطات مغنيسيوم</label>

                                                <input type="checkbox" value="وسادة حماية هوائية" id="switch28"  onclick="checkedIf(event)" />
                                                <label for="switch28">وسادة حماية هوائية</label>
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
                                            <textarea name="description"  rows="4" type="text" class="" placeholder="المزيد من المواصفات كل معلومة بسطر">{{$car->description}}</textarea>
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
                                            <input name="img" value="{{$car->img}}" type="file" class="form-control" multiple>
                                            @error('img')
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
                                            <input name="advertiser_name" type="text" value="{{$car->advertiser_name}}" placeholder="الاسم الحقيقي">
                                            @error('advertiser_name')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">رقم الهاتف</td>
                                        <td class="">
                                            <input name="phone_number" value="{{$car->phone_number}}" type="text" class="" placeholder="رقم الهاتف مع المقدمة">
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
                                            <input name="mobile" value="{{$car->mobile}}" type="text" class="" placeholder="رقم الموبايل  ">
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
                                            <input name="email" value="{{$car->email}}" type="text" class="" placeholder="البريد الالكتروني">
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
                                            <select name="city" class="">
                                                <option>اريحا</option>
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
                                        <td class="">العنوان</td>
                                        <td class="">
                                            <input name="address" value="{{$car->address}}" type="text" class="" placeholder="اسم الشارع او المنطقة">
                                            @error('address')
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
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit"  onclick="setExetras()">أضف
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
    var vars = {{Illuminate\Support\Js::from($car)}};
    let selectTarget = (id) => {
        let com = document.querySelectorAll(`#${id} option`);
        for (const el of com) {
            (el.innerHTML == vars[id]) ? el.selected = true: '';
        }
    }
    async function  checkTarget (id)  {
        let com = document.querySelectorAll(`#${id} label`);
        let j = [];
        for (const el of com) {
            j = vars[id].split(',').filter((e) => el.innerHTML == e)
            await  (el.innerHTML == j) ? el.control.checked = true: '';
        }
    }
    let checkedEl = [...vars['extras'].split(',')];
        let setExetras =  () => {
            document.getElementById('extras_h').value = checkedEl;
        }
        let checkedIf  = (e) => {
            if(checkedEl.includes(e.target.value)) {
                checkedEl.splice(checkedEl.indexOf(e.target.value),1)
            } else {
                checkedEl.push(e.target.value)
            }
            
        }
    selectTarget('company')
    selectTarget('model')
    selectTarget('model_year')
    selectTarget('car_color')
    selectTarget('passengers')
    selectTarget('drive_type')
    selectTarget('origin')
    selectTarget('ad_duration_per_day')
    checkTarget('driving_license')
    checkTarget('fuel_type')
    checkTarget('lime_type')
    checkTarget('glass')
    checkTarget('shown')
    checkTarget('pay_method')
    checkTarget('extras')
    selectTarget('city')
</script>
@endsection