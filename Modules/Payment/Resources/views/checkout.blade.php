@extends('apps.layouthomepage')
@section('content')
<div class="container">
        <div class="headingWrap">
            <h3 class="headingTop text-center">Pembayaran</h3>
            <h4 class="headingTop text-center">Silahkan Melakukan Pembayaran Melalui Rekening:</h4>
        </div>
        <div class="row">
                <div class="col-md-4"><p class="text-right"><img src="{{ asset('images/Bca.png') }}" alt="Logo bank"></p></div>
                <div class="col-md-8"><h3 class="text-left" style="margin-top:23px;">1234567890 A/N Travel Pantek</h3></div>
        </div>
        <h4 class="text-center">Senilai:</h4>
        <h5 class="text-center">Rp.{{ $checkOut->total_harga }}</h5>
</div>
@endsection
