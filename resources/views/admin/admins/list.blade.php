@extends('admin.layout.master')

@section('header_scripts')

    <link href="{{url('')}}/assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumbs')
    <ul class="page-breadcrumb">
        <li>
            <a href="#">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="{{url('')}}/admin/users">Admins</a>
        </li>
    </ul>
    <div class="page-toolbar">
        <div class="form-actions">
            <div class="btn-set pull-left">
                <a href="{{route('admin.create')}}" class="btn btn-primary">Add Admin</a>
            </div>
        </div>
    </div>
@endsection

@section('title')
    <h1 class="page-title"> Admins
        <small>Recent Admins</small>
    </h1>
@endsection

@section('content')
    <!-- BEGIN EXAMPLE TABLE PORTLET-->
    <div class="portlet box green">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-globe"></i>Admins </div>
            <div class="tools"> </div>
        </div>
        <div class="portlet-body">
            <table class="table table-striped table-bordered table-hover" id="sample_2">
                <thead>
                <tr>
                    <th> # </th>
                    <th> Name </th>
                    <th> Email </th>
                    <th> Role </th>
                    <th> Status </th>
                    <th> Created By </th>
                    <th> Actions </th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
                @foreach($admins as $admin)
                    <tr>
                        <td> {{$i++}} </td>
                        <td><a href="{{ route('admin.show',$admin->id) }}">{{$admin->first_name}} {{$admin->last_name}}</a></td>
                        <td> {{$admin->email}} </td>
                        <td> {{$admin->role}} </td>
                        <td>
                            {!!$admin->status ? '<span class="label label-sm label-info"> Active </span>' : '<span class="label label-sm label-danger"> Banned </span>'!!}
                        </td>
                        <td> {{$admin->creator->first_name}} {{$admin->creator->last_name}}</td>
                        <td>
                            @if($admin->role!='Super' || $admin->creator_id == auth()->guard('admin')->id() || $admin->id == auth()->guard('admin')->id())
                            <div class="btn-group">
                                <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                    <i class="fa fa-angle-down"></i>
                                </button>

                                <ul class="dropdown-menu pull-left" role="menu">
                                    <li>

                                        <a href="{{route('admin.edit', $admin->id)}}">
                                            <i class="glyphicon glyphicon-edit"></i> Edit </a>
                                    </li>

                                    <li>
                                        <a href="javascript:;" class="row-ban" id="{{$admin->id.'B'}}">
                                            <i class="glyphicon glyphicon-ban-circle"></i> Ban </a>
                                    </li>

                                    <li>
                                        <a href="javascript:;" class="row-delete" id="{{$admin->id}}">
                                            <i class="glyphicon glyphicon-remove"></i> Delete </a>
                                    </li>
                                </ul>

                            </div>
                        @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
@endsection

@section('footer_scripts')
    <script src="{{url('')}}/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <script src="{{url('')}}/assets/pages/scripts/ui-sweetalert.min.js" type="text/javascript"></script>
    <script src="{{url('')}}/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="{{url('')}}/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
    <script src="{{url('')}}/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>

    <script type="text/javascript">

        $('.row-delete').click(function () {
            var id = $(this).attr('id')

            swal({
                    title: "Do you want to delete this entry?",
                    text: "Are you sure?",
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: true,
                    showLoaderOnConfirm: true, },
                function(){
                    setTimeout(function(){
                        ajax_delete(id);
                    }, 2000);
                });
        });

        function ajax_delete(id){
            $.ajax({
                method: 'DELETE',
                url   : "{{url('admin/delete')}}/"+id,
                data  : {
                    _token : "{{csrf_token()}}"
                },
                success: function(response){
                    // console.log(response)
                    if(response == 'success'){
                        swal("Deleted!", "Entry Deleted.", "success");
                        location.reload();
                    }else{
                        swal("Cancelled", "Please try again.", "error");
                    }
                }
            })
        }

        //Ban user by ajax
        $('.row-ban').click(function (e) {
            e.preventDefault();
            var id = $(this).attr('id').replace('B','')

            swal({
                    title: "Do you want to ban this user?",
                    text: "Are you sure?",
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: true,
                    showLoaderOnConfirm: true, },
                function(){
                    setTimeout(function(){
                        ajax_ban(id);
                    }, 2000);
                });
        });

        function ajax_ban(id){
            $.ajax({
                method: 'POST',
                url   : "{{url('admin/ban')}}/"+id,
                data  : {
                    _token : "{{csrf_token()}}"
                },
                success: function(response){
                    // console.log(response)
                    if(response == 'success'){
                        swal("Banned!", "User Baned.", "success");
                        location.reload();
                    }
                }
            })
        }


    </script>

@endsection
