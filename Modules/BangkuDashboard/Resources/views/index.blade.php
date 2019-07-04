@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Create
      <small>Bangku List</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-database"></i> Master Data</a></li>
      <li class="active">Bangku</li>
    </ol>
  </section>
  @endsection
@section('content') 
<section class="content">
        <div class="box box-primary">
            <div class="box-header">
            <a class="btn btn-primary" href="{{route('tambah_bangku')}}"> Tambah Data</a>
            </div>
            <div class="box-body">
                <table class="table">
                    <thead>
                      <th>Nama Product</th>
                      <th>Nomor Bangku</th>
                      <th>Action</th>
                    </thead>
                    <tbody>
                        {{-- variabel dari controller ( index)  --}}
                        @foreach($bangku as $b) 
                            <tr>
                            <td>{{$b -> nama_product}}</td>
                            <td>{{$b -> nomor_bangku}}</td>
                            <td>
                             <a class="btn btn-success" href="{{route('bangkudashboard.edit' ,  ['id' => $b->id_bangku])}}">Update</a>  
                             <a class="btn btn-danger" href="{{route('hapus',['id' => $b->id_bangku])}}">Delete</a>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
   </section>
@stop

