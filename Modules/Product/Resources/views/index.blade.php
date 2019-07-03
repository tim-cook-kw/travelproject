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
            <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama Product</th>
                    <th scope="col">Nama Brand</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Total Seat</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($product as $item)
                <tr>
                    <th>{{$item->nama_product}}</th>
                    <td>{{$item->nama_brand}}</td>
                    <td>{{$item->nama_kategori}}</td>
                    <td>{{$item->total_seat}}</td>
                    <td>{{$item->nama_satuan}}</td>
                    <td>{{$item->harga}}</td>
                    <td>
                        <a class="btn btn-success" href="{{route('product.edit' ,  ['id' => $item->id_product])}}">Update</a>
                        <a class="btn btn-danger" href="{{route('product.delete',['id' => $item->id_product])}}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
   </div>
</section>
@stop
