@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Edit
      <small>Edit Bangku</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li>Bangku</li>
      <li class="active">Edit Bangku</li>
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
            <form action="{{route('bangkudashboard.update_bangku' ,  ['id' => $bangku->id_bangku])}}" method="post">
            {{csrf_field()}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Product</label>
                        <input class="form-control" name="nama_product" value="{{$bangku->nama_product}}">
                    </div>
                    <div class="form-group">
                        <label>Nomer Bangku</label>
                        <input type="number" class="form-control" name="nomer_bangku" value="{{$bangku->nomor_bangku}}">
                    </div>
                   
                   
                    <button class="btn btn-primary" type="submit" href=>Simpan</button>
                    </form>
                    <a class="btn btn-default" href="{{route('bangku.index')}}">Cancel</a>
                </div>
            </div>
        </div>
   </div>
</section>
@stop