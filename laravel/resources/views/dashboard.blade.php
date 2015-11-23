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
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
        </section><!-- /.content -->
@endsection