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
                            <h4 class="">المستخدمين</h4>

                        <hr>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                        <thead>
                        <tr>
                            <th>الاسم</th> 
                            <th>الصورة</th> 
                            <th>المدينة</th> 
                            <th>العنوان</th> 
                            <th>رقم الهاتف</th> 
                            <th>البريد الالكتروني</th> 
                            <th>التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                      
                            @foreach($users as $user) 
                                <tr> 

                                    <td>
                                    {{$user->fname}} {{$user->lname}}
                                    </td> 
                                    <th>
                                        <a class="btn btn-dark col-sm-12" onclick="modelDes('{{$user->id}}','{{$user->img}}')" data-toggle="modal" data-target="#image{{$user->id}}">عرض</a><br>
                                    </th>
                                    <td>
                                    {{$user->city}}
                                    </td> 
                                    <td>
                                    {{$user->address}}
                                    </td> 
                                    <td>
                                    {{$user->phone}}
                                    </td> 
                                    <td>
                                    {{$user->email}}
                                    </td> 

                                    <td>
                                        <center>
                                            <div class="btn-group" role="group" aria-label="Button group with nested dropdown">

                                                <div class="btn-group" role="group">
                                                    <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        التحكم
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                        <a class="btn btn-dark col-sm-12"  href="{{route('admin.users.edit',['user'=>$user->id])}}">تعديل </a>
                                                        <form method="post" action="{{route('admin.users.change.state',['action'=>$user->state == 'blocked' ? 'allowed' : 'blocked','user'=>$user->id])}}">
                                                            @csrf
                                                            @if($user->state == 'pinned')
                                                                <button type="submit" value="allowed" class="btn btn-dark col-sm-12 d-block" >تفعيل</button>
                                                                <button type="submit" value="blocked" class="btn btn-dark col-sm-12 d-block" >حظر</button>
                                                                @else 
                                                                <button type="submit" value="{{$user->state == 'blocked'? 'allowed':'blocked' }}" class="btn btn-dark col-sm-12" >{{$user->state == 'blocked' ? 'تفعيل' : 'حظر'}}</button>


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
<script>
    function modelDes(x,y){
        document.getElementById('modelImagee').innerHTML =`
            <div class="modal " id="image`+x+`" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">  {{__('admin/User.Image')}}  </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="group-img-container text-center post-modal">
                                <img  src="{{url('assets/site/images/users/`+ y +`')}}" alt="" class="group-img img-fluid" style="width:400px; hieght:400px" ><br>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">غلق</button>
                        </div>
                    </div>
                </div>
            </div>
        `
    }
</script>
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
