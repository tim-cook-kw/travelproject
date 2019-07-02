@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Product
      <small>Product List</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li>Product</li>
      <li class="active">Create Product</li>
    </ol>
  </section>
@endsection
@section('content')
<section class="content">
   <div class="box box-primary">
        <div class="box-header">
            
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Product</label>
                        <input class="form-control" name="">
                    </div>
                    <div class="form-group">
                        <label>Nama Product</label>
                        <input class="form-control" name="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Product</label>
                        <input class="form-control" name="">
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>
@stop
