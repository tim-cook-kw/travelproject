@extends('apps.layout')

@section('sectionheader')
<section class="content-header">
    <h1>
      Transaksi
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Transaksi</li>
    </ol>
  </section>
  @endsection

  @section('content')
  <div class="container-fluid" style="padding-top:1%;">
    <table class="table table-striped table-bordered">
    <thead>
        <tr class="bg-primary">
            <th class="text-center">No</th>
            <th class="text-center">Quantyty</th>
            <th class="text-center">Total Harga</th>
            <th class="text-center">Bukti Transaksi</th>
            <th class="text-center">Status</th>
            <th class="text-center">Tanggal Keberangkatan</th>
            <th class="text-center">Tanggal Pulang</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($a as $a)

            <tr>
                <td class="text-center">1</td>
                <td class="text-center">2</td>
                <td class="text-center">Total Harga</td>
                <td class="text-center">Bukti Transaksi</td>
                <td class="text-center">Pending</td>
                <td class="text-center">2019-07-03</td>
                <td class="text-center">2019-07-10</td>
                <td class="text-center"><a class='btn btn-success btn-xs edit-item' value='' href="#"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
<script>
    $(document).ready(function () {
        $(document).on('click','.edit-item',function () {
                        var a = $(this).val();
                        $(".bayar").attr('action', "/penerimaan_versekot/"+a+"/bayar");
                        $("#bayar").modal();
                   });
       });
</script>
@include('transaksi::update_transaksi')
