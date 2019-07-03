@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Create
      <small>Satuan List</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li class="active">Satuan</li>
    </ol>
  </section>
@endsection
@section('content')
   <section class="content">
        <div class="box box-primary">
            <div class="box-header">
            <a class="btn btn-primary" href="{{route('satuan.create')}}"> Tambah Data</a>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                        <th>Nama Satuan</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        {{-- variabel dari controller ( index)  --}}
                        @foreach($satuan as $key) 
                            <tr>
                            <td>{{$key->nama_satuan}}</td>
                            {{-- ini  berasal dari table --}}
                            <td>
                                <a class="btn btn-success" href="{{route('satuan.edit',['id' => $key->id_satuan])}}"> Update</a>
                                <a class="btn btn-danger" href="{{route('satuan.destroy',['id' => $key->id_satuan])}}"> Delete</a>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
   </section>
@stop
