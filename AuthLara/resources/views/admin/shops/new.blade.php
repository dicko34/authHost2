@extends("layouts.admin")
@section("pageTitle", "Ejada")
@section("style")
    <link href="{{url("assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css")}}" rel="stylesheet" type="text/css"/>
    <style>
        .star-fill{
            color:gold
        }
    </style>
@endsection
@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                                        <div class="card-body">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                    @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                    @endif
                            <h4 class="">كل اعلانات الشقق الجديدة</h4>

                        <hr>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>الاعلان</th> 
                            <th>المستخدم</th> 
                            <th>رقم صاحب الاعلان</th> 
                            <th>التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($shops as $shop) 
                                <tr> 
                                    <td>
                                        محلات و مكاتب للبيع
                                    </td>
                                    <td>
                                        {{$shop->advertiser_name}}
                                    </td>
                                    <td>
                                        {{$shop->phone_number}}
                                    </td>
                                    <td>
                                        <center>
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        التحكم
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <a class="btn btn-dark col-sm-12"  href="{{route('admin.shops.show',['shop'=>$shop->id])}}">عرض</a><br>
                                                        <a class="btn btn-dark col-sm-12"  href="{{route('admin.shops.edit',['shop'=>$shop->id])}}">تعديل</a><br>
                                                        <form method="post" action="{{route('admin.shops.change.state',['action'=>$shop->state == 'refused' ? 'allowed' : 'refused','shop'=>$shop->id])}}">
                                                            @csrf
                                                            @if($shop->state == 'pinned')
                                                                <button type="submit" value="allowed" class="btn btn-dark col-sm-12 d-block" >تفعيل</button>
                                                                <button type="submit" value="blocked" class="btn btn-dark col-sm-12 d-block" >حظر</button>
                                                                @else 
                                                                <button type="submit" value="{{$shop->state == 'blocked'? 'allowed':'refused' }}" class="btn btn-dark col-sm-12" >{{$shop->state == 'refused' ? 'قبول' : 'رفض'}}</button>


                                                            @endif
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </center>
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
    <div id="modelImagee">

    </div>
@endsection

@section("script")
<script src="{{url("assets/admin/libs/datatables.net/js/jquery.dataTables.min.js")}}"></script>
<script src="{{url("assets/admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{url("assets/admin/libs/datatables.net-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{url("assets/admin/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js")}}"></script>
<script src="{{url("assets/admin/libs/jszip/jszip.min.js")}}"></script>
<script src="{{url("assets/admin/libs/pdfmake/build/pdfmake.min.js")}}"></script>
<script src="{{url("assets/admin/libs/pdfmake/build/vfs_fonts.js")}}"></script>
<script src="{{url("assets/admin/libs/datatables.net-buttons/js/buttons.html5.min.js")}}"></script>
<script src="{{url("assets/admin/libs/datatables.net-buttons/js/buttons.print.min.js")}}"></script>
<script src="{{url("assets/admin/libs/datatables.net-buttons/js/buttons.colVis.min.j")}}"></script>
<script src="{{url("assets/admin/libs/datatables.net-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{url("assets/admin/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{url("assets/admin/js/pages/datatables.init.js")}}"></script>
@endsection
