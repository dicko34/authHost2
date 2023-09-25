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
                            <h3 class="m-2 m-auto"><i class="mdi mdi-view-dashboard mr-2"></i> إعلان ارض جديدة </h3>
                        </div>
                        <form method="post" action="{{route('admin.lands.update',['land'=>$land->id])}}" enctype="multipart/form-data">
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
                                            <td class="">نبذة</td>
                                            <td class="">
                                                <input name="brief" value="{{$land->brief}}" type="text"  placeholder="نبذة عن الارض">
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
                                                <input name="area"  value="{{$land->area}}" type="text"  placeholder="مساحة المنزل او الشقة">
                                                @error('area')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">السعر</td>
                                            <td class="">
                                                <input name="price"  value="{{$land->price}}" type="text" placeholder="سعر البيع او الايجار">
                                                @error('price')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td class="">تقع على</td>
                                            <td class="">
                                            <input type="radio" value="شارع رئيسي" id="switch21" name="located_on" />
                                                <label for="switch21">شارع رئيسي</label>

                                                <input type="radio" value="شارع فرعي" id="switch22" name="located_on" />
                                                <label for="switch22">شارع فرعي</label>

                                                <input type="radio" value="شارع رئيسي وفرعي" id="switch23" name="located_on" />
                                                <label for="switch23">شارع رئيسي وفرعي</label>
                                                @error('located_on')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">محاطة ب</td>
                                            <td class="">
                                                <input type="radio" value="غير محاطة" id="switch24" name="surrounded_by" />
                                                <label for="switch24">غير محاطة</label>

                                                <input type="radio" value="سور حجر " id="switch25" name="surrounded_by" />
                                                <label for="switch25">سور حجر </label>

                                                <input type="radio" value="سور إسمنت" id="switch26" name="surrounded_by" />
                                                <label for="switch26">سور إسمنت</label>

                                                <input type="radio" value="سياج" id="switch27" name="surrounded_by" />
                                                <label for="switch27">سياج</label>
                                                @error('surrounded_by')
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                            {{$message}}
                                            </span>
                                            @enderror
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">مميزات</td>
                                            <td class="">
                                                <input type="checkbox" value="تصلها الكهرباء" id="switch210" name="features" onclick="checkedIf(event)"/>
                                                <label for="switch210">تصلها الكهرباء</label>

                                                <input type="checkbox" value="تصلها المياه" id="switch220" name="features" onclick="checkedIf(event)"/>
                                                <label for="switch220">تصلها المياه</label>

                                                <input type="checkbox" value="صالحة للزراعة" id="switch230" name="features" onclick="checkedIf(event)"/>
                                                <label for="switch230">صالحة للزراعة</label>

                                                <input type="checkbox" value="صالحة للبناء التجاري" id="switch240" name="features" onclick="checkedIf(event)"/>
                                                <label for="switch240">صالحة للبناء التجاري</label>

                                                <input type="checkbox" value="صالحة لبناء سكن" id="switch250" name="features" onclick="checkedIf(event)"/>
                                                <label for="switch250">صالحة لبناء سكن</label>
                                                @error('features')
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
                                                    placeholder="المزيد من المواصفات كل معلومة بسطر"> {{$land->description}}</textarea>
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
                                                    <input name="address"  value="{{$land->address}}" type="text"  placeholder="اسم المنطقة أو الشارع">
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
                                            <input value="{{$land->advertiser_name}}" name="advertiser_name" type="text" class="" placeholder="الاسم الحقيقي">
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
                                            <input value="{{$land->phone_number}}" name="phone_number" type="text" class="" placeholder="رقم الهاتف مع المقدمة">
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
                                            <input value="{{$land->mobile}}" name="mobile" type="text" class="" placeholder="رقم الموبايل  ">
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
                                            <input value="{{$land->email}}" type="text" name="email" class="" placeholder="البريد الالكتروني">
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
                                            <input value="{{$land->advertiser_address}}" name="advertiser_address" type="text" class="" placeholder="اسم الشارع او المنطقة">
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
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit" onclick="setExtras()">أضف
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
    var vars = {{Illuminate\Support\Js::from($land)}}
    console.log(vars);
    let selectTarget = (id) => {
        let com = document.querySelectorAll(`select[name="${id}"] option`);
        for (const el of com) {
            (el.innerHTML == vars[id]) ? el.selected = true: '';
        }
    }
    async function checkTarget(id) {
        let com = document.getElementsByName(`${id}`);
        // console.log(com);
        let j = [];
        for (const el of com) {
            j = vars[id].split(',').filter((e) => el.value == e)
            console.log(j);
            await (el.value == j) ? el.checked = true: '';
        }
    }
    let checkedEl = [];
    let setExetras = () => {
        document.getElementById('extras_h').value = checkedEl;
    }
    let checkedIf = (e) => {
        if (checkedEl.includes(e.target.value)) {
            checkedEl.splice(checkedEl.indexOf(e.target.value), 1)
        } else {
            checkedEl.push(e.target.value)
        }

    }
    checkTarget('features')
    checkTarget('located_on')
    checkTarget('surrounded_by')
    selectTarget('gov')
    selectTarget('city')
    selectTarget('street')
    selectTarget('ad_duration_per_day')
    selectTarget('advretiser_city')
</script>
@endsection
