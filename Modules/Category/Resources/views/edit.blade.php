@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Category
      <small>Edit Category</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li>Category</li>
      <li class="active">Edit Category</li>
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
                    <form action="{{route('category.update', ['id' => $kategori->id_kategori])}}" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label>Nama Category</label>
                            <input type="hidden" name="_method" value="put" />
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input class="form-control" name="nama_kategori" value="{{$kategori->nama_kategori}}">
                        </div>
                        <div class="box-header">
                            <button type="submit" class="btn btn-primary" href="{{route('category.store')}}">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
   </div>
</section>
@stop
