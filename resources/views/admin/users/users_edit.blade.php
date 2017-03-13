@extends('admin.layout.master')

@section('header_scripts')
<link href="{{url('')}}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css" />
<link href="{{url('')}}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumbs')
<ul class="page-breadcrumb">
    <li>
        <a href="#">Home</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <a href="{{url('')}}/admin/users">Users</a>
        <i class="fa fa-circle"></i>
    </li>
    <li>
        <span>Edit User</span>
    </li>
</ul>
<div class="page-toolbar">
    <div class="form-actions">
	    <div class="btn-set pull-left">
	        <a href="{{url('admin/users')}}" class="btn btn-primary">Users List</a>
            <a class="btn btn-danger" data-target="#stack1" data-toggle="modal">Change Password</a>
	    </div>
	</div>
</div>
@endsection

@section('title')
<h1 class="page-title"> Users
    <small>Recent Update Users</small>
</h1>
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Edit User </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form method="post" id="users_edit" action="{{route('admin.users.update', $user->id)}}" class="form-horizontal">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Name</label>
                            <div class="col-md-4">
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{!empty(old('name')) ? old('name') : $user->name }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" name="email" class="form-control" value="{{!empty(old('email')) ? old('email') : $user->email }}" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-3 control-label">Status</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <div class="icheck-inline">
                                        <input type="checkbox" name="status" class="make-switch" data-on-color="info" value="1" data-off-color="success"
                                        @if(old('status') == '1')
                                            checked
                                        @elseif($user->verified == '1')
                                            checked
                                        @endif
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="form-actions fluid">
                        <div class="row">
                            <div class="col-md-offset-3 col-md-9">
                                <button type="submit" class="btn green">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>


<div id="stack1" class="modal fade" tabindex="-1" data-focus-on="input:first">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Change Password</h4>
    </div>
    <form method="POST" id="change_password" action="{{route('admin.users.changePassword')}}">
        <div class="modal-body">            
            <div class="form-group last password-strength">
                <label class="col-md-3 control-label">Password</label>
                <div class="col-md-9">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="password" id="password_strength">
                    <span class="help-block">
                        Please type to see password strength
                    </span>
                    
                    <input type="hidden" name="user_id" class="form-control" value="{{$user->id}}">
                    
                </div>
            </div>
        </div>
        
        <div class="clearfix">
        
        </div>

        <div class="modal-footer">
            <button class="btn blue" type="submit">Submit</button>
            <button type="button" data-dismiss="modal" class="btn btn-outline dark">Close</button>
        </div>
    </form>
    
</div>
@endsection

@section('footer_scripts')
<script src="{{url('')}}/assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/autosize/autosize.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/pages/scripts/components-form-tools.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/pages/scripts/ui-extended-modals.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="{{url('')}}/js/validation/users-validation.js" type="text/javascript"></script>
@endsection