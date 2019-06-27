@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
@endsection
@section('content')
    <h1>Hello World</h1>

    <p>
        This view is loaded from module: {!! config('homepage.name') !!}
    </p>
@stop
