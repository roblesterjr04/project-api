@extends('blocks.form')

@section('form')
<form class="form-horizontal" method="POST">
	{{ csrf_field() }}
        <div class="row">
		  <div class="col-md-5">
	      <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">{{ isset($application) ? 'Edit' : 'Add' }} App</h3>
                </div><!-- /.box-header -->
                @include('errors.app')
                <!-- form start -->
                
                  <div class="box-body">
                    <div class="form-group">
                      <label for="a_name" class="col-sm-2 control-label">App Name</label>
                      <div class="col-sm-10">
                        <input value="{{ isset($application) ? $application->name : old('a_name') }}" type="text" class="form-control" name="a_name" placeholder="Application Name">
                      </div>
                    </div>
                     
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                  </div><!-- /.box-footer -->
                
              </div>
		      </div>
		      
				<div class="col-md-7">
					<div class="box box-success">
						<div class="box-header">
							<h3 class="box-title">Resource Objects</h3>
							<p>Select which resource objects this app has access to.</p>
						</div>
						@foreach ($objects as $object)
							@include('blocks.object_tile')
						@endforeach
					</div>
				</div>
	      </div>
	      </form>
@endsection

@section('footer')
<script>
</script>        
@endsection