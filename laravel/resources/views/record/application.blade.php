@extends('blocks.form')

@section('form')

        <div class="row">
		      <div class="col-md-8">
	      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ isset($application) ? 'Edit' : 'Add' }} App</h3>
                </div><!-- /.box-header -->
                @include('errors.app')
                <!-- form start -->
                <form class="form-horizontal" method="POST">
	                {{ csrf_field() }}
                  <div class="box-body">
                    <div class="form-group">
                      <label for="a_name" class="col-sm-2 control-label">App Name</label>
                      <div class="col-sm-10">
                        <input value="{{ isset($application) ? $application->name : old('a_name') }}" type="text" class="form-control" name="a_name" placeholder="Application Name">
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
	      
@endsection