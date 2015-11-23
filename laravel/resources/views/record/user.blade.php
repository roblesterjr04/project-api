@extends('index')

@section('content')

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            {{ $title or '&nbsp;' }}
            <small>{{ $subtitle or '&nbsp;' }}</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="/users">Users</a></li>
            <li class="active">{{ $subtitle or '&nbsp;' }}</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
	      <div class="row">
		      <div class="col-md-6">
	      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ isset($user) ? 'Edit' : 'Add' }} User</h3>
                </div><!-- /.box-header -->
                @include('errors.app')
                <!-- form start -->
                <form class="form-horizontal" method="POST">
	                {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="u_email" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input value="{{ isset($user) ? $user->email : old('email') }}" type="email" class="form-control" name="u_email" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="u_name" class="col-sm-2 control-label">Name</label>
                      <div class="col-sm-10">
                        <input value="{{ isset($user) ? $user->name : old('name') }}" type="text" class="form-control" name="u_name" placeholder="Full Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="u_password" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input value="{{ isset($user) ? '' : old('password') }}" type="password" class="form-control" name="u_password" placeholder="New Password">
                      </div>
                    </div>
                    <!--<div class="form-group">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>-->
                    <!--<div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Remember me
                          </label>
                        </div>
                      </div>
                    </div>-->
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                  </div><!-- /.box-footer -->
                </form>
              </div>
		      </div>
	      </div>
        </section><!-- /.content -->
@endsection