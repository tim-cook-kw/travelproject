@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Bangku
      <small>Bangku List</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li>Bangku</li>
      <li class="active">Create Bangku</li>
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
            <form action="{{route('tambahbangku')}}" method="post">
            {{csrf_field()}}
                <div class="col-md-6">
                <div class="form-group">
                        <label>Nama Product</label>
                        <select class="form-control" name="id_product">
                        @foreach($product as $item)
                            <option value="{{$item->id_product}}">{{$item->nama_product}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nomor Bangku</label>
                        <input class="form-control" name="nomor_bangku">
                    </div>
                    
                    <button class="btn btn-primary" type="submit" href=>Simpan</button>
                    </form>
                    <a class="btn btn-default" href="{{route('product.index')}}">Cancel</a>
                </div>
            </div>
        </div>
   </div>
</section>
@stop
