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
                            <h4 class="">رسائل التواصل معنا</h4>

                        <hr>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>المستخدم</th> 
                            <th>الرقم</th> 
                            <th>الرسالة</th> 
                        </tr>
                        </thead>
                        <?php $counter =1; ?>
                        <tbody>
                            {{-- @foreach($admins as $admin) --}}
                                <tr> 
                                    <td>
                                        محمد
                                    </td>
                                    <td>
                                        9999999
                                    </td>
                                    <td>
                                        رسالة
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
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
