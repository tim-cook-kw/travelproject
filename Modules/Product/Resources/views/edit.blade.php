@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Edit
      <small>Edit Product</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li>Product</li>
      <li class="active">Edit Product</li>
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
            <form action="{{route('product.update' ,['id' => $products->id_product])}}" method="post">
            {{csrf_field()}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama Product</label>
                        <input class="form-control" name="nama_product" value="{{$products->nama_product}}">
                    </div>
                    <div class="form-group">
                        <label>Satuan Product</label>
                        <select class="form-control" name="id_satuan">
                        @foreach($satuan as $item)
                            <option value="{{$item->id_satuan}}">{{$item->nama_satuan}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Total Seat</label>
                        <input class="form-control" name="total_seat" value="{{$products->total_seat}}">
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input class="form-control" name="harga" value="{{$products->harga}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kategori Product</label>
                        <select class="form-control" name="id_kategori">
                        @foreach($kategori as $item)
                            <option value="{{$item->id_kategori}}">{{$item->nama_kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Brand</label>
                        <input class="form-control" name="nama_brand" value="{{$products->nama_brand}}">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                        <option value="ready">Ready</option>
                        <option value="kosong"></option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi">{{$products->deskripsi}}</textarea>
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
