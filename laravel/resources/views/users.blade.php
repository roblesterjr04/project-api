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
            <li class="active">Users</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
	        
	      <div class="row">
            <div class="col-xs-12">
            	<div class="box">
               	<div class="box-header">
                  	<h3 class="box-title">Users</h3>
               	</div><!-- /.box-header -->
						<div class="box-body">
                  	<div id="users_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
	                  	<div class="row">
				               <div class="col-sm-12">
					               <table id="users" class="table table-bordered table-hover" role="grid" aria-describedby="users_info">
											<thead>
												<tr role="row">
													<th>User</th>
													<th>Member Since</th>
													<th></th>
												</tr>
	                  				</thead>
											<tbody>
												@foreach ($users as $user)
													<tr role="row">
														<td><a href="/users/{{ $user->id }}">{{ $user->name }}</a></td>
														<td>{{ date('M. Y', strtotime($user->created_at)) }}</td>
														<td>
															@if ($user->id != $app->request->user()->id)
															<form action="/users/{{$user->id}}" method="post">
																{{ csrf_field() }}
																{{ method_field('DELETE') }}
																<button type="submit" class="btn-link-custom text-danger pull-right">Delete</button>
															</form>
															@endif
														</td>
													</tr>
												@endforeach
	                  				</tbody>
	                  			</table>
	                  		</div>
                  		</div>
					   	</div>
               	</div><!-- /.box-body -->
            	</div><!-- /.box -->
         	</div><!-- /.col -->
      	</div>
          
        </section><!-- /.content -->
@endsection

@section('footer')

<script>
		      $(function () {
		        $('#users').DataTable({
		          "paging": true,
		          "lengthChange": false,
		          "searching": false,
		          "ordering": true,
		          "info": true,
		          "autoWidth": false
		        });
		       });
    </script>

@endsection