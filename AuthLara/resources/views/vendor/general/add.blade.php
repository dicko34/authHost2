@extends('layouts.vendor')
@section('pageTitle', 'Koala Web Libraries')
@section('styleChart')
    <link href="{{ url('assets/admin/libs/c3/c3.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    <form method="POST" action="{{ route('vendor.generals.store') }}" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        @endif


        <div class="add-section w-75 mx-auto bg-white">
            <div class="add-section-title btn w-100 bg-primary p-1 px-3 mb-3">
                <h4 class="text-white ml-2 font-weight-bold text-left">إعلان عام جديد</h4>
            </div>
            <table class="table table-bordered table-striped mb-0">
                <tbody>
                    <tr>
                        <td>العنوان<span class="text-danger" style="">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" name="address" class="form-control form-control-sm">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>التصنيف <span class="text-danger" style="font-weight: 700;">*</span></td>
                        <td>
                            <div class="input-group input-group-sm">
                                <select name="category" class="form-select ">
                                    <option value="1">اثاث منزلي و مكتبي</option>
                                    <option value="2">اجهزة الكترونية</option>
                                    <option value="3">اجهزة انذار ومراقبة</option>
                                    <option value="4">اجهزة طبية</option>
                                    <option value="5">اجهزة كهربائية</option>
                                    <option value="6">احذية</option>
                                    <option value="7">ادوات رياضية</option>
                                    <option value="8">ادوات صحية</option>
                                    <option value="9">ادوات منزلية</option>
                                    <option value="10">ازهار واشتال ونباتات</option>
                                    <option value="11">الات ومعدات</option>
                                    <option value="12">العاب</option>
                                    <option value="13">برامج كمبيوتر</option>
                                    <option value="14">تجهيزات مكتبية</option>
                                    <option value="15">تحف وهدايا</option>
                                    <option value="16">تكييف وتبريد</option>
                                    <option value="21">خلويات ولوازمها</option>
                                    <option value="25">ديكور</option>
                                    <option value="26">سجاد وموكيت</option>
                                    <option value="29">شحن وتخليص جمركي</option>
                                    <option value="30">شروات وصفقات تجارية</option>
                                    <option value="31">عطور</option>
                                    <option value="32">قرطاسية</option>
                                    <option value="34">كمبيوتر ومستلزماته</option>
                                    <option value="35">قطع سيارات</option>
                                    <option value="36">مجوهرات</option>
                                    <option value="37">معدات ثقيلة</option>
                                    <option value="38">مفروشات</option>
                                    <option value="39">ملابس</option>
                                    <option value="40">مواد تجميل</option>
                                    <option value="41">مواد غذائية</option>
                                    <option value="42">نظارات</option>
                                    <option value="43">آلات موسيقية</option>
                                    <option value="44">اتصالات</option>
                                    <option value="45">اكسسوارات ونثريات</option>
                                    <option value="46">دورات تعليمية</option>
                                    <option value="47">سيارات وتوابعها</option>
                                    <option value="49">حيوانات</option>
                                    <option value="48">خدمات عامة</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>السعر</td>
                        <td>
                            <div class="input-group input-group-sm">
                                <input type="text" name="price" class="form-control form-control-sm">
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>معلومات اضافية</td>
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
                                    <input type="file" name="img[]" class="custom-file-input" id="inputGroupFile05"
                                        aria-describedby="inputGroupFileAddon05" multiples>
                                    <label class="custom-file-label" for="inputGroupFile05">اختر صورة</label>
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
                </tbody>
            </table>
        </div>
        @if (!auth()->user())
        <div class="add-section w-75 mx-auto bg-white">
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
                            موبايل <span class="text-danger" style="font-weight: 700;">*</span>
                        </td>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-sm" required="" name="mobile"
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
        </div>
        @endif
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
