@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Product
      <small>Product List</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li class="active">Product</li>
    </ol>
  </section>
@endsection
@section('content')
<section class="content">
   <div class="box box-primary">
        <div class="box-header">
            <a class="btn btn-primary" href="{{route('product.create')}}">Tambah Data</a>
        </div>
        <div class="box-body">
        </div>
   </div>
</section>
@stop
