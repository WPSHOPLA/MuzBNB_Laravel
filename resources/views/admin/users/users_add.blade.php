@extends('admin.layout.master')

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
        <span>Add User</span>
    </li>
</ul>
<div class="page-toolbar">
    <div class="form-actions">
	    <div class="btn-set pull-left">
	        <a href="{{url('admin/users')}}" class="btn btn-primary">Users List</a>
	    </div>
	</div>
</div>
@endsection

@section('title')
<h1 class="page-title"> Users
    <small>Recent Added Users</small>
</h1>
@endsection

@section('content')


<div class="row">
    <div class="col-md-12">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i>Add User </div>
            </div>
            <div class="portlet-body form">
                <!-- BEGIN FORM-->
                <form method="POST" id="users_add" action="{{route('admin.users.store')}}" class="form-horizontal">
                    {{csrf_field()}}
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Name</label>
                            <div class="col-md-4">
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Email</label>
                            <div class="col-md-4">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                    <input type="email" name="email" class="form-control" value="{{old('email')}}" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group last password-strength">
                            <label class="col-md-3 control-label">Password</label>
                            <div class="col-md-4">
                                
                                    <input type="text" class="form-control" name="password" id="password_strength">
                                    <span class="help-block">
                                        Please type to see password strength
                                    </span>
                                
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
@endsection

@section('footer_scripts')
<script src="{{url('')}}/assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/autosize/autosize.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/pages/scripts/components-form-tools.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="{{url('')}}/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="{{url('')}}/js/validation/users-validation.js" type="text/javascript"></script>
@endsection