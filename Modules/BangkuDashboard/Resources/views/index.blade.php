@extends('apps.layout')
@section('sectionheader')
<section class="content-header">
    <h1>
      Bangku
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
      <li class="active">Bangku</li>
    </ol>
  </section>
  @endsection

@section('content') 

<div class="container-fluid mt-5" style="padding-top:3%;">
<button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#tambahbangku">Tambah Bangku</button>
<table class="table table-bordered table-striped table-rensponsive-sm my-sm-5">
<thead class="bg-primary">
  <tr>
    <th class="text-center">No</th>
    <th class="text-center">Nama Product</th>
    <th class="text-center">Nomor Bangku</th>
    <th class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($bangku as $b)
  <tr class="text-center">
    <td>1</td>
    <td>{{$b -> id_product}}</td>
    <td>{{$b -> nomor_bangku}}</td>
    <td>
    <button type="button"  data-toogle="modal" class=" btn btn-success btn-xs edit-item" value="{{$b -> id_bangku}}"><i class="glyphicon glyphicon-edit">Edit</i></button>
    <a href="/bangkudashboard/delete/{{$b->id_bangku}}" type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">Hapus</i></a>
    </td>
  </tr>
  @endforeach
  </tbody>
</table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(document).on('click','.edit-item',function () {
                        var i = $(this).val();
                        $(".edit").attr('action', "/bangkudashboard/update/"+i);   
                       $("#modaledit").modal();
                   });
       });
</script>
@include('bangkudashboard::modaledit')
@include('bangkudashboard::modal')

@stop

