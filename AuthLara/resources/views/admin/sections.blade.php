<!--- Sidemenu -->
<div id="sidebar-menu">
    <!-- Left Menu Start -->
    <ul class="metismenu list-unstyled" id="side-menu">
        <li>
            <a href="">
                <i class="fas fa-users"></i>
                <span> لوحة التحكم </span>
            </a>
        </li> 

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-users"></i>
                <span> المستخدمين </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ Route('admin.users.index') }}">عرض الكل</a></li>
                <li><a href="{{ Route('admin.users.create') }}">اضافة مستخدم جديد</a></li>
            </ul>
        </li>

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="mdi mdi-car-side"></i>
                <span> سيارات </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ Route('admin.cars.index') }}">عرض الكل</a></li>
                <li><a href="{{ Route('admin.cars.new') }}">الاعلاناات الجديدة</a></li>
                <li><a href="{{ Route('admin.cars.create') }}">أضافة اعلان</a></li>
            </ul>
        </li> 

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="mdi mdi-home"></i>
                <span> شقق </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ Route('admin.homes.index') }}">عرض الكل</a></li>
                <li><a href="{{ Route('admin.homes.new') }}">الاعلاناات الجديدة</a></li>
                <li><a href="{{ Route('admin.homes.create') }}">أضافة اعلان</a></li>
            </ul>
        </li> 

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="mdi mdi-shopping-search"></i>
                <span> محلات و مكاتب </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ Route('admin.shops.index') }}">عرض الكل</a></li>
                <li><a href="{{ Route('admin.shops.new') }}">الاعلاناات الجديدة</a></li>
                <li><a href="{{ Route('admin.shops.create') }}">أضافة اعلان</a></li>
            </ul>
        </li> 

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="mdi mdi-view-dashboard"></i>
                <span> اراضي </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ Route('admin.lands.index') }}">عرض الكل</a></li>
                <li><a href="{{ Route('admin.lands.new') }}">الاعلاناات الجديدة</a></li>
                <li><a href="{{ Route('admin.lands.create') }}">أضافة اعلان</a></li>
            </ul>
        </li> 

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fas fa-user-friends"></i>
                <span> توظيف </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ Route('admin.jobs.index') }}">عرض الكل</a></li>
                <li><a href="{{ Route('admin.jobs.new') }}">الاعلاناات الجديدة</a></li>
                <li><a href="{{ Route('admin.jobs.create') }}">أضافة اعلان</a></li>
            </ul>
        </li> 

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="mbri-mobile2"></i>
                <span> الاجهزه الذكيه </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ Route('admin.mobiles.index') }}">عرض الكل</a></li>
                <li><a href="{{ Route('admin.mobiles.new') }}">الاعلاناات الجديدة</a></li>
                <li><a href="{{ Route('admin.mobiles.create') }}">أضافة اعلان</a></li>
            </ul>
        </li> 

        <li>
            <a href="javascript: void(0);" class="has-arrow">
                <i class="fab fa-telegram-plane"></i>
                <span> الاعلانات العامه </span>
            </a>
            <ul class="sub-menu" aria-expanded="false">
                <li><a href="{{ Route('admin.generals.index') }}">عرض الكل</a></li>
                <li><a href="{{ Route('admin.generals.new') }}">الاعلاناات الجديدة</a></li>
                <li><a href="{{ Route('admin.generals.create') }}">أضافة اعلان</a></li>
            </ul>
        </li> 

        <li>
            <a href="{{ Route('admin.contacts.index') }}">
                <i class="fa fa-envelope"></i>
                <span> رسائل التواصل </span>
            </a>
        </li> 



    </ul>

</div>
<!-- Sidebar -->
