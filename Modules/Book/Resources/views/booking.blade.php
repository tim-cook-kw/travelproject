@extends('apps.layout')
@section('sectionheader')
<div class="content">

<section class="content-header">
<h1>
View Booking
<small>Control panel</small>
</h1>
<ol class="breadcrumb">
<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
<li class="active">View Booking</li>
</ol>
</section>
</section>
<div class="box box-primary">
    <div class="box-header">
    
    </div>
    <div class="box-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                 
                    <th>Email Custommer</th>
                    <th>Nomer Bangku</th>
                    <th>Status Booking</th>
                    <th>Nomer Booking</th>
                    <th>Total Harga</th>
                    <th>Status</th>
                    <th>Tanggal berangkat</th>
                    <th>Tanggal Pulang</th>
                    <th>Dari</th>
                    <th>Ke</th>
                    <th>Harga</th>
                    <th>Nama Product</th>
                    <th>Qr Code</th>
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
                    <td>{{$book->qrcode}}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>



@endsection
