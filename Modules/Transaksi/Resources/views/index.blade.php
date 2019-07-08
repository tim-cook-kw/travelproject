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
            {!! QrCode::size(100)->generate(Request::url()); !!}
            @foreach ($a as $a)

            <tr>
                <td class="text-center">{{ $a->id_transaksi }}</td>
                <td class="text-center">{{ $a->qty }}</td>
                <td class="text-center">{{ $a->total_harga }}</td>
                <td class="text-center">{{ $a->bukti_transaksi}}</td>
                <td class="text-center">{{ $a->status }}</td>
                <td class="text-center">{{ $a->tanggal_keberangkatan }}</td>
                <td class="text-center">{{ $a->tanggal_pulang }}</td>
                <td class="text-center">
               <a href="/transaksi/sendinvoice/{{ $a->id_transaksi }}" class='btn btn-success btn-xs'><span class="glyphicon glyphicon-send"></span>Send invoice</a>
               <a class='btn btn-success btn-xs edit-item' value="{{ $a->id_transaksi }}" href="#" data-toogle="modal"><i class="glyphicon glyphicon-edit"></i> Edit</a>
                <a href="#" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a></td>


            </tr>
            @endforeach
        </body>

    </table>
</div>
@stop
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $(document).on('click','.edit-item',function () {
                        var a = $(this).attr("value");
                        $(".update").attr('action', "/transaksi/update/"+ a);
                        $("#update_transaksi").modal();
                   });
       });
</script>
@include('transaksi::update_transaksi')
