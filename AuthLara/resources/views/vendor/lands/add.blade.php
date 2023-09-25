@extends('layouts.vendor')
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <form method="POST" action="{{ route('vendor.lands.store') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <div class="add-section w-75 mx-auto bg-white">
            <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
                <h4 class="text-white ml-2 font-weight-bold text-left">اضافة أرض جديدة</h4>
            </div>
            <table class="table table-bordered table-striped mb-0">
                <tbody>
                    <tr>
                        <td>نُبذة <span class="text-danger" style="font-weight: 700;">*</span> </td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control " name="brief" placeholder="نبذه عن الارض"
                                    aria-label="نبذه عن الارض" aria-describedby="basic-addon2">
                                <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">مثال : ارض 5 دونم
                                    صالحة
                                    للبناء</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>مساحة <span class="text-danger" style="font-weight: 700;">*</span> </td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control " name="area"
                                    placeholder="مساحة المحل , مثال  : 400 متر" aria-label="مساحة المحل , مثال  : 400 متر"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text" id="basic-addon2">متر مربع</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>السعر </td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control " name="price" placeholder="سعر الارض"
                                    aria-label="سعر الارض " aria-describedby="basic-addon2">
                                <select name="currency" class="form-select" style="max-width:110px;">
                                    <option value="دولار">دولار</option>
                                    <option value="شيكل"> شيكل </option>
                                    <option value="دينار">دينار</option>
                                    <option value="يورو">يورو</option>
                                </select>
                                <span class="input-group-text" id="basic-addon2">يجب وضع سعر حقيقي</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            تقع على
                        </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" required="" type="radio" name="located_on"
                                    id="offer_type_sell" value="شارع رئيسي">
                                <label class="form-check-label" for="offer_type_sell">شارع رئيسي</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="located_on" id="offer_type_rent"
                                    value="شارع فرعي">
                                <label class="form-check-label" for="offer_type_rent">شارع فرعي</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="located_on" id="offer_type_space"
                                    value="شارع رئيسي وفرعي">
                                <label class="form-check-label" for="offer_type_space">شارع رئيسي وفرعي</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="located_on" id="offer_type_other"
                                    value="غير ذلك">
                                <label class="form-check-label" for="offer_type_other">غير ذلك</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>محاطة ب </td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" required="" type="radio" name="surrounded_by"
                                    id="stores_type_sell" value="غير محاطة">
                                <label class="form-check-label" for="stores_type_sell">غير محاطة </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="surrounded_by" id="stores_type_rent"
                                    value="سور حجر">
                                <label class="form-check-label" for="stores_type_rent">سور حجر </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="surrounded_by"
                                    id="stores_type_space" value="سور إسمنت">
                                <label class="form-check-label" for="stores_type_space">سور إسمنت</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="surrounded_by"
                                    id="stores_type_street" value="سياج">
                                <label class="form-check-label" for="stores_type_street">سياج</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="surrounded_by"
                                    id="stores_type_outher" value="غير ذلك">
                                <label class="form-check-label" for="stores_type_outher">غير ذلك</label>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>مميزات <span class="text-danger" style="font-weight: 700;">*</span></td>
                        <td>
                            <input type="hidden" name="features" id="extras">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[It_gets_electricity]" type="checkbox"
                                        name="property[It_gets_electricity]" onclick="checkedIf(event)"
                                        value="تصلها كهرباء">
                                    <label class="form-check-label" for="property[It_gets_electricity]"> تصلها
                                        كهرباء</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[It_gets_water]" type="checkbox"
                                        name="property[It_gets_water]" onclick="checkedIf(event)" value="تصلها مياه">
                                    <label class="form-check-label" for="property[It_gets_water]"> تصلها مياه</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[arable]" type="checkbox"
                                        name="property[arable]" onclick="checkedIf(event)" value="صالحة للزراعة">
                                    <label class="form-check-label" for="property[arable]"> صالحة للزراعة</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[commercial_construction]"
                                        type="checkbox" name="property[commercial_construction]"
                                        onclick="checkedIf(event)" value="صالحة للبناء">
                                    <label class="form-check-label" for="property[commercial_construction]"> صالحة للبناء
                                        التجاري</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[building_housing]" type="checkbox"
                                        name="property[building_housing]" onclick="checkedIf(event)"
                                        value="صالحة للبناء السكن">
                                    <label class="form-check-label" for="property[building_housing]"> صالحة للبناء
                                        السكن</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>التفاصيل </td>
                        <td>
                            <div class="form-group">
                                <textarea name="description" class="form-control form-control-sm" id="description"
                                    placeholder="المزيد من المعلومات، كل معلومة بسطر." cols="30" rows="5"></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>الصور </td>
                        <td>
                            <div class="form-group input-group-sm">
                                <div class="custom-file">
                                    <input type="file" name="img[]" class="custom-file-input" id="inputGroupFile04"
                                        aria-describedby="inputGroupFileAddon04" multiple>
                                    <label class="custom-file-label" for="inputGroupFile04">اختر صورة</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>المدينه <span class="text-danger" style="font-weight: 700;">*</span> </td>
                        <td>
                            <div class="form-group input-group-sm">
                                <select name="city" class="form-select" required="">
                                    <option value="1">رام الله والبيرة </option>
                                    <option value="2">القدس </option>
                                    <option value="14">قطاع غزة </option>
                                    <option value="4">الخليل </option>
                                    <option value="5">بيت لحم </option>
                                    <option value="6">أريحا </option>
                                    <option value="7">سلفيت وبديا </option>
                                    <option value="13">روابي </option>
                                    <option value="12">طوباس </option>
                                    <option value="11">قلقيلية </option>
                                    <option value="10">طولكرم </option>
                                    <option value="9">جنين </option>
                                    <option value="8">نابلس </option>
                                    <option value="15">جميع الاماكن </option>
                                    <option value="16">مناطق الداخل </option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>العنوان <span class="text-danger" style="font-weight: 700;">*</span> </td>
                        <td>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" required="" name="address"
                                    placeholder="أسم المنطقة او الشارع" aria-label="أسم المنطقة او الشارع"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text d-flex d-lg-none " data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="" style="width:50px !important;"
                                    id="basic-addon2"
                                    data-original-title="ملاحظة: لن يتم قبول الإعلان بدون العنوان الكامل"><i
                                        class="fas fa-info-circle"></i></span>
                                <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">ملاحظة: لن يتم
                                    قبول
                                    الإعلان بدون العنوان الكامل</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>مُدة الإعلان</td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select required="" name="ad_duration_per_day" class="form-select">
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                </select>
                                <span class="input-group-text" id="basic-addon2">يوم</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="add-section w-75 mx-auto bg-white">
            @if (!auth()->user())
            <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
                <h5 class="text-white ml-2 font-weight-bold text-left">معلومات المُعلن</h5>
            </div>
            <table class="table table-bordered table-striped mb-0 bg-white">
                <tbody>
                    <tr>
                        <td>
                            اسم المُعلن <span class="text-danger" style="font-weight: 700;">*</span>
                        </td>
                        <td>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" required=""
                                    name="advertiser_name" placeholder="الاسم الحقيقي">
                                <span class="input-group-text d-flex d-lg-none " style="width:50px !important;"><i
                                        class="fas fa-info-circle"></i></span>
                                <span class="input-group-text d-none d-lg-block w-100">ملاحظة: لن يتم قبول الإعلان من غير
                                    اسم
                                    حقيقي</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            البريد الالكتروني
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="email"
                                    placeholder="البريد الالكتروني" aria-label="البريد الالكتروني">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            رقم الهاتف
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="phone_number"
                                    placeholder="رقم الهاتف مع المقدمة" aria-label="رقم الهاتف مع المقدمة">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            موبايل <span class="text-danger" style="font-weight: 700;"></span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" name="mobile"
                                    placeholder="رقم الموبايل" aria-label="رقم الهاتف مع المقدمة">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="100%" class="text-center">
                            <button type="submit" class="btn btn-secondary" id="submit-all">اضف الأعلان</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            @else 

            <table class="table table-bordered table-striped mb-0 bg-white">
                <tbody>
                    <tr>
                        <td colspan="100%" class="text-center">
                            <button type="submit" class="btn btn-secondary" id="submit-all">اضف الأعلان</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            @endif
        </div>
    </form>
    <style>
        .add-section * {
            font-family: 'Tajawal' !important;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #fff !important;
            /* Color for even rows */
        }

        .table-striped tbody tr:nth-of-type(even) {
            background-color: #E8DFDE !important;
            /* Color for even rows */
        }

        @media all and (max-width:950px) {
            .add-section {
                width: 99% !important;
                margin-left: auto;
                margin-right: auto;
            }
        }
    </style>
@endsection
