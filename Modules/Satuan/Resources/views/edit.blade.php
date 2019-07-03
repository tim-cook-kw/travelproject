@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
        Satuan
      <small>Satuan Edit</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li>Satuan</li>
      <li class="active">Satuan</li>
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
                        <form action="{{route('satuan.update',['id' => $satuan->id_satuan])}}" method="POST">
                            <div class="form-group">
                                <label>Nama Satuan</label>
                                {{csrf_field()}}
                                <input class="form-control" name="nama_satuan" value="{{$satuan->nama_satuan}}">
                            </div>
                            <button class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
   </section>
@stop
