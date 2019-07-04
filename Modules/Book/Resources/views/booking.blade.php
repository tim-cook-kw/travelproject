@extends('apps.layout')
@section('sectionheader')
<div class="container-fluid">

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Email Custommer</th>
            <th>Nomer Bangku</th>
            <th>Nomor Booking</th>
            <th>Nomer Booking</th>
            <th>Total Harga</th>   
            <th>Status</th>
            <th>Tanggal berangkat</th>
            <th>Tanggal Pulang</th>
            <th>Dari</th>
            <th>Ke</th>
            <th>Harga</th>
            <th>Nama Product</th>            
        </tr>
    </thead>
    <tbody>
        <?php $no = 0;?>
        @foreach($booking as $book)
        <?php $no++ ;?>
        <tr>
           <td>{{$no}}</td>
           <td>{{$book->email}}</td>
           <td>{{$book->nomor_bangku}}</td>
           <td>{{$book->status}}</td>
           <td>{{$book->nomor_booking}}</td>
           <td>{{$book->total_harga}}</td>
           <td>{{$book->status}}</td>
           <td>{{$book->tanggal_keberangkatan}}</td>
           <td>{{$book->tanggal_pulang}}</td>
           <td>{{$book->dari}}</td>
           <td>{{$book->ke}}</td>
           <td>{{$book->harga}}</td>
           <td>{{$book->nama_product}}</td>
        </tr>

        @endforeach
    </tbody>
</table>
</div>

@endsection