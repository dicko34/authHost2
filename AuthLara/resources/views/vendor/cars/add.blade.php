@extends('layouts.vendor')
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <form method="POST" action="{{ route('vendor.cars.store') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif
        <div class="add-section w-75 mx-auto bg-white">
            <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
                <h4 class="text-white ml-2 font-weight-bold text-left">إعلان سيارة جديد</h4>
            </div>

            <table class="table table-bordered table-striped mb-0">
                <tbody>
                    <tr>
                        <td>موديل السيارة <span class="text-danger" style="">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select name="company" class="form-select form-select-sm model-type-car" id="carCompany"
                                    required="">
                                    <option value=""selected disabled> الشركات</option>
                                        @foreach ($carCompanies as $carCompany)
                                            <option value="{{ $carCompany->name}}">{{ $carCompany->name }}</option>
                                        @endforeach
                                </select>
                                <select name="model" class="form-select form-select-sm model-type-car" id="carModel"
                                    required="">
                                    <option value=""selected disabled> الموديل</option>
                                </select>
                                <span class="input-group-text d-flex d-lg-none text-center" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title=""
                                    style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                    id="basic-addon2"
                                    data-original-title="في حال عدم توفر موديل السيارة، الرجاء تعبئة خانة &quot;باقي الموديل&quot;"><i
                                        class="fas fa-info-circle"></i></span>
                                <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">في حال عدم
                                    توفر موديل السيارة، الرجاء تعبئة خانة "باقي الموديل"</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>باقي الموديل </td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" name="reset_model" class="form-control form-control-sm"
                                    aria-label="باقي الموديل " aria-describedby="basic-addon2">
                                <span class="input-group-text d-flex d-lg-none text-center" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title=""
                                    style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                    id="basic-addon2" data-original-title="مثال: فولكسفايجن باسات،اوبل استرا"><i
                                        class="fas fa-info-circle"></i></span>
                                <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">مثال:
                                    فولكسفايجن</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>موديل سنة <span class="text-danger" style="">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select name="model_year" id="year" required="" class="form-select">
                                    <option value="2023">2023 </option>
                                    <option value="2022">2022 </option>
                                    <option value="2021">2021 </option>
                                    <option value="2020">2020 </option>
                                    <option value="2019">2019 </option>
                                    <option value="2018">2018 </option>
                                    <option value="2017">2017 </option>
                                    <option value="2016">2016 </option>
                                    <option value="2015">2015 </option>
                                    <option value="2014">2014 </option>
                                    <option value="2013">2013 </option>
                                    <option value="2012">2012 </option>
                                    <option value="2011">2011 </option>
                                    <option value="2010">2010 </option>
                                    <option value="2009">2009 </option>
                                    <option value="2008">2008 </option>
                                    <option value="2007">2007 </option>
                                    <option value="2006">2006 </option>
                                    <option value="2005">2005 </option>
                                    <option value="2004">2004 </option>
                                    <option value="2003">2003 </option>
                                    <option value="2002">2002 </option>
                                    <option value="2001">2001 </option>
                                    <option value="2000">2000 </option>
                                    <option value="1999">1999 </option>
                                    <option value="1998">1998 </option>
                                    <option value="1997">1997 </option>
                                    <option value="1996">1996 </option>
                                    <option value="1995">1995 </option>
                                    <option value="1994">1994 </option>
                                    <option value="1993">1993 </option>
                                    <option value="1992">1992 </option>
                                    <option value="1991">1991 </option>
                                    <option value="1990">1990 </option>
                                    <option value="1989">1989 </option>
                                    <option value="1988">1988 </option>
                                    <option value="1987">1987 </option>
                                    <option value="1986">1986 </option>
                                    <option value="1985">1985 </option>
                                    <option value="1984">1984 </option>
                                    <option value="1983">1983 </option>
                                    <option value="1982">1982 </option>
                                    <option value="1981">1981 </option>
                                    <option value="1980">1980 </option>
                                    <option value="1979">1979 </option>
                                    <option value="1978">1978 </option>
                                    <option value="1977">1977 </option>
                                    <option value="1976">1976 </option>
                                    <option value="1975">1975 </option>
                                    <option value="1974">1974 </option>
                                    <option value="1973">1973 </option>
                                    <option value="1972">1972 </option>
                                    <option value="1971">1971 </option>
                                    <option value="1970">1970 </option>
                                    <option value="1969">1969 </option>
                                    <option value="1968">1968 </option>
                                    <option value="1967">1967 </option>
                                    <option value="1966">1966 </option>
                                    <option value="1965">1965 </option>
                                    <option value="1964">1964 </option>
                                    <option value="1963">1963 </option>
                                    <option value="1962">1962 </option>
                                    <option value="1961">1961 </option>
                                    <option value="1960">1960 </option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>لون السيارة <span class="text-danger" style="">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select required="required" name="car_color" id="car_color" class="form-select">
                                    <option value="">اختر لون المركبه</option>
                                    <option value="أبيض">أبيض</option>
                                    <option value="أبيض عاجي">أبيض عاجي</option>
                                    <option value="أحمر">أحمر</option>
                                    <option value="أخضر">أخضر</option>
                                    <option value="أزرق">أزرق</option>
                                    <option value="أزرق سماوي">أزرق سماوي</option>
                                    <option value="أسود">أسود</option>
                                    <option value="أسود ميتالك">أسود ميتالك</option>
                                    <option value="أصفر">أصفر</option>
                                    <option value="برتقالي">برتقالي</option>
                                    <option value="بنفسجي">بنفسجي</option>
                                    <option value="بني">بني</option>
                                    <option value="بترولي">بترولي</option>
                                    <option value="بيج">بيج</option>
                                    <option value="جيشي">جيشي</option>
                                    <option value="خمري">خمري</option>
                                    <option value="ذهبي">ذهبي</option>
                                    <option value="رصاصي">رصاصي</option>
                                    <option value="رمادي">رمادي</option>
                                    <option value="زيتي">زيتي</option>
                                    <option value="سكني">سكني</option>
                                    <option value="فضي">فضي</option>
                                    <option value="فيراني">فيراني</option>
                                    <option value="كحلي">كحلي</option>
                                    <option value="كرميدي">كرميدي</option>
                                    <option value="عدة الوان">عدة الوان</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>قوة الماتور <span class="text-danger" style="">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input required="" type="number" name="power" dir="rtl"
                                    class="form-control form-control-sm text-end" aria-label="قوه الماتور "
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text  text-center" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title=""
                                    style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                    id="basic-addon2" data-original-title="مثال: 1600 سي سي">CC</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>عدد الركاب </td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select name="passengers" class="form-select" id="car_passengers">
                                    <option value="">حدد عدد الركاب</option>
                                    <option value="1">1</option>
                                    <option value="1+1">1+1</option>
                                    <option value="2+1">2+1</option>
                                    <option value="3+1">3+1</option>
                                    <option value="4+1">4+1</option>
                                    <option value="5+1">5+1</option>
                                    <option value="6+1">6+1</option>
                                    <option value="7+1">7+1</option>
                                    <option value="8+1">8+1</option>
                                    <option value="9+1">9+1</option>
                                    <option value="اكثر من 10">اكثر من 10</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td>عداد السيارة</td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="number" name="speedmotors" dir="rtl"
                                    class="form-control form-control-sm text-start" aria-label="باقي الموديل "
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text d-flex d-lg-none text-center" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title=""
                                    style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                    id="basic-addon2" data-original-title="مثال: 75000 كيلومتر"><i
                                        class="fas fa-info-circle"></i></span>
                                <span class="input-group-text d-none d-lg-block" id="basic-addon2">مثال: 75000
                                    كيلومتر</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>أصحاب سابقون </td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" name="car_usage" class="form-control form-control-sm "
                                    placeholder="يد اولى , يد ثانيه ..." aria-label="يد اولى , يد ثانيه ..."
                                    aria-describedby="basic-addon2">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>أصل المركبه <span class="text-danger">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select name="origin" id="origin" class="form-select" require="">
                                    <option value="خصوصي">خصوصي</option>
                                    <option value="عمومي">عمومي</option>
                                    <option value="تأجير">تأجير</option>
                                    <option value="تدريب سياقة">تدريب سياقة</option>
                                    <option value="تجاري">تجاري</option>
                                    <option value="حكومي">حكومي</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نوع المركبه <span class="text-danger">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select name="drive_type" id="type" class="form-select" aria-invalid="false">
                                    <option value="2">مركبات خاصه </option>
                                    <option value="3">مركبات ايجار </option>
                                    <option value="4">دراجات ناريه </option>
                                    <option value="5">سكوتر </option>
                                    <option value="6">الشاحنات </option>
                                    <option value="7">المعدات الثقيله </option>
                                    <option value="8">تجاريه خفيفه </option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>رخصة المركبه <span class="text-danger">*</span></td>
                        <td>
                            <div class="form-check form-check-inline">
                                <input required="" class="form-check-input" type="radio" name="driving_license"
                                    id="license_1" value="فلسطينية">
                                <label class="form-check-label" for="license_1">فلسطينية</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="driving_license" id="license_2"
                                    value="نمرة صفراء">
                                <label class="form-check-label" for="license_2">نمرة صفراء</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نوع الوقود <span class="text-danger">*</span></td>
                        <td>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input required="" class="form-check-input" type="radio" name="fuel_type"
                                    id="fuel_1" value="بنزين">
                                <label class="form-check-label" for="fuel_1">بنزين</label>
                            </div>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="fuel_type" id="fuel_2"
                                    value="سولار">
                                <label class="form-check-label" for="fuel_2">سولار</label>
                            </div>
                            <div class="form-check form-check-inline " style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="fuel_type" id="fuel_3"
                                    value="هايبرد">
                                <label class="form-check-label" for="fuel_3">هايبرد</label>
                            </div>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="fuel_type" id="fuel_4"
                                    value="كهرباء">
                                <label class="form-check-label" for="fuel_4">كهرباء</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>نوع الجير <span class="text-danger">*</span></td>
                        <td>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input required="" class="form-check-input" type="radio" name="lime_type"
                                    id="gear_1" value="عادي">
                                <label class="form-check-label" for="gear_1">عادي </label>
                            </div>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="lime_type" id="gear_2"
                                    value="اوتوماتيك">
                                <label class="form-check-label" for="gear_2">اوتوماتيك </label>
                            </div>
                            <div class="form-check form-check-inline " style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="lime_type" id="gear_3"
                                    value="نصف اوتوماتيك">
                                <label class="form-check-label" for="gear_3"> نصف اوتوماتيك</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>الزجاج<span class="text-danger">*</span></td>
                        <td>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input required="" class="form-check-input" type="radio" name="glass"
                                    id="electrical_glass_1" value="يدوي">
                                <label class="form-check-label" for="electrical_glass_1">يدوي </label>
                            </div>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="glass" id="electrical_glass_2"
                                    value="الكتروني">
                                <label class="form-check-label" for="electrical_glass_2">الكتروني </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>السعر</td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="number" name="price" placeholder="30000"
                                    class="form-control form-control-sm text-start" aria-label="30000"
                                    aria-describedby="basic-addon2">
                                <select name="currency" readonly="" class="form-select readonly"
                                    style="max-width:120px;">
                                    <option value="شيكل"> شيكل </option>
                                </select>
                                <span class="input-group-text d-flex d-lg-none text-center" data-bs-toggle="tooltip"
                                    data-bs-placement="left" title=""
                                    style="width:50px !important;flex-wrap: nowrap; justify-content: center;"
                                    id="basic-addon2" data-original-title="يجب وضع سعر حقيقي"><i
                                        class="fas fa-info-circle"></i></span>
                                <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">يجب وضع سعر
                                    حقيقي</span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>معروضة <span class="text-danger">*</span></td>
                        <td>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input required="" class="form-check-input" type="radio" name="shown"
                                    id="offer_type_1" value="للبيع">
                                <label class="form-check-label" for="offer_type_1">للبيع</label>
                            </div>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="shown" id="offer_type_2"
                                    value="للايجار">
                                <label class="form-check-label" for="offer_type_2">للايجار</label>
                            </div>
                            <div class="form-check form-check-inline " style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="shown" id="offer_type_3"
                                    value="للبدل">
                                <label class="form-check-label" for="offer_type_3">للبدل</label>
                            </div>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="shown" id="offer_type_4"
                                    value="للبيع و البدل">
                                <label class="form-check-label" for="offer_type_4">للبيع و البدل</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>وسيلة الدفع <span class="text-danger">*</span></td>
                        <td>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input required="" class="form-check-input" type="radio" name="pay_method"
                                    id="payment_type_1" value="نقدا فقط">
                                <label class="form-check-label" for="payment_type_1">نقدا فقط</label>
                            </div>
                            <div class="form-check form-check-inline" style=" min-width: 53px; ">
                                <input class="form-check-input" type="radio" name="pay_method" id="payment_type_2"
                                    value="إمكانيه التقسيط">
                                <label class="form-check-label" for="payment_type_2">إمكانيه التقسيط</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>إضافات </td>
                        <td>
                            <input type="hidden" id="extras" name="extras">
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[1]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[1]" value="جهاز إنذار">
                                    <label class="form-check-label" for="property[1]"> جهاز إنذار</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[2]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[2]" value="مُكيّف">
                                    <label class="form-check-label" for="property[2]"> مُكيّف</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[3]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[3]" value="مسجل CD">
                                    <label class="form-check-label" for="property[3]"> مسجل CD</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[4]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[4]" value="فتحة سقف">
                                    <label class="form-check-label" for="property[4]"> فتحة سقف</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[5]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[5]" value="فرش جلد">
                                    <label class="form-check-label" for="property[5]"> فرش جلد </label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[6]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[6]" value="إغلاق مركزي">
                                    <label class="form-check-label" for="property[6]"> إغلاق مركزي</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[7]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[7]" value="جنطات مغنيسيوم">
                                    <label class="form-check-label" for="property[7]"> جنطات مغنيسيوم</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[8]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[8]" value="وسادة حماية هوائية">
                                    <label class="form-check-label" for="property[8]"> وسادة حماية هوائية</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[9]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[9]" value="كميرا ريفرس">
                                    <label class="form-check-label" for="property[9]"> كميرا ريفرس</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[10]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[10]" value="حساسات">
                                    <label class="form-check-label" for="property[10]"> حساسات</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[11]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[11]" value="انارة لد داخلية">
                                    <label class="form-check-label" for="property[11]"> انارة لد داخلية</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[12]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[12]" value="اضواء زينون وليدات">
                                    <label class="form-check-label" for="property[12]"> اضواء زينون وليدات</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[14]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[14]" value="كاميرا 360 درجة">
                                    <label class="form-check-label" for="property[14]"> كاميرا 360 درجة</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[15]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[15]" value="زجاج معتم">
                                    <label class="form-check-label" for="property[15]"> زجاج معتم</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[16]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[16]" value="نظام ردار">
                                    <label class="form-check-label" for="property[16]"> نظام ردار</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[17]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[17]" value="شاشة">
                                    <label class="form-check-label" for="property[17]"> شاشة</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[18]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[18]" value="مثبت سرعة">
                                    <label class="form-check-label" for="property[18]"> مثبت سرعة</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[19]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[19]"  value="هاند بريك كهرباء">
                                    <label class="form-check-label" for="property[19]"> هاند بريك كهرباء</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[20]" type="checkbox"
                                        onclick="checkedIf(event)" name="property[20]" value="فتحة سقف بانوراما">
                                    <label class="form-check-label" for="property[20]"> فتحة سقف بانوراما</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" id="property[21]" type="checkbox"
                                    onclick="checkedIf(event)" name="property[21]" value="شاحن لاسلكي">
                                    <label class="form-check-label" for="property[21]"> شاحن لاسلكي</label>
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
                            <div class="form-group input-group-sm mb-2">
                                <div class="custom-file">
                                    <input type="file" name="img[]" class="custom-file-input"
                                        id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" multiple>
                                    <label class="custom-file-label" for="inputGroupFile01">اختر صورة</label>
                                </div>
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
                        <td>المدينه <span class="text-danger" style="font-weight: 700;">*</span> </td>
                        <td>
                            <div class="form-group input-group-sm">
                                <select required="" name="city" class="form-select">
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
                            <div class="input-group input-group-sm">
                                <input required="" type="text" class="form-control form-control-sm" name="address"
                                    placeholder="أسم المنطقة او الشارع" aria-label="أسم المنطقة او الشارع"
                                    aria-describedby="basic-addon2">
                                <span class="input-group-text d-flex d-lg-none " data-bs-toggle="tooltip"
                                    data-bs-placement="left" title="" style="width:50px !important;"
                                    id="basic-addon2"
                                    data-original-title="ملاحظة: لن يتم قبول الإعلان بدون العنوان الكامل"><i
                                        class="fas fa-info-circle"></i></span>
                                <span class="input-group-text d-none d-lg-block w-100" id="basic-addon2">ملاحظة: لن
                                    يتم قبول الإعلان بدون العنوان الكامل</span>
                            </div>
                        </td>
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
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script>
          $(document).ready(function () {
              $('#carCompany').change(function () {
                  
                  var carCompany = encodeURIComponent($(this).val());
                  console.log($(this).val());
                  if (carCompany) {
                      $.ajax({
                          type: "GET",
                          url: "{{route('home')}}/get-car-models/" + carCompany,
                          success: function (data) {
                              $('#carModel').empty();
                              $.each(data, function (id, model) {
                                  $('#carModel').append(new Option(model, id));
                              });
                          }
                      });
                  } else {
                      $('#carModel').empty();
                  }
              });
          });
      </script>
@endsection
