<div class="topnav" style="margin-top: 60px;">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("home") }}">
                            <i class="mdi mdi-home "></i> الرئيسية
                        </a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("general.index") }}">
                            <i class="mdi mdi-view-module"></i> الإعلانات العامة
                        </a> 
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("car.index") }}">
                            <i class="mdi mdi-car-side mr-2"></i> سيارات
                        </a> 
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("home.index") }}">
                            <i class="mdi mdi-home mr-2"></i> شقق
                        </a> 
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("shop.index") }}">
                            <i class=" mdi mdi-shopping-search mr-2"></i> محلات و مكاتب 
                        </a> 
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("land.index") }}">
                            <i class="mdi mdi-view-dashboard mr-2"></i> اراضي
                        </a> 
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("job.index") }}">
                            <i class=" fas fa-address-book mr-2"></i> توظيف
                        </a> 
                    </li> 

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route("mobile.index") }}">
                            <i class="mbri-mobile2 mr-2"></i>الاجهزة الذكية
                        </a> 
                    </li>
                    

                </ul>
            </div>
        </nav>
    </div>
</div>

<style>
    @media (max-width:560px) {
        .nav-link {
            font-weight:bold;
            color: #820120;
            border-bottom:1px solid #820120;
        }
        .nav-link:hover , .nav-item .active {
            background-color:#820120 !important;
            color:#fff !important;
        }

    }

    .nav-link:hover {
        background-color:white;
        color:black !important;
    }
</style>


