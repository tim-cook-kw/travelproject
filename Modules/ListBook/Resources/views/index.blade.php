@extends('apps.layouthomepage')
@section('content')

<div class="main-wrapper" style="padding-top:10%">
   <div class="sidebar-wrapper">
      <div class="sidebar">
         <div class="welcome">
            <div class="avatar">
            </div>
            <div class="detail-avatar">
               <div class="greeting">
                  Selamat Datang
               </div>
               <div class="username">
                  Audy
               </div>
            </div>
            <div class="clear"></div>
         </div>
         <div class="contentSide">
            <ul>
               <li class="">
                  <a href="">Profil</a>
               </li>
               <li class="hasSideMenu">
                  <ul class="submenu">
                     <li class="active">
                     Pemesanan Saya
                     </li>
                     
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="content-wrapper">
      <div class="content">
         <div class="booking">
            <div class="title-profile">
               <div class="title">Pemesanan Saya</div>
               <div class="clear"></div>
            </div>
            <div class="row">
                @foreach($booking as $view_book)
               <div class="booking-status-number">
                  <div class="col-md-7 booking-status paid">
                  <div class="label">Status Pemesaanan:</div>
                     <div class="content">{{$view_book->status}}</div>
                  </div>
                  <div class="col-md-5 booking-number">
                     <span class="label">No. Booking</span>
                     <span class="content">{{$view_book->nomor_booking}}</span>
                  </div>
                  <div class="clear"></div>
               </div>
               <div class="booking-info" style="margin-right:-20% !important;">
                  <div class="col-md-8 product-name">
                     <div class="label">Nama Custommer:</div>
                     <div class="content">Audy Afiary</div>
                  </div>
                  <div class="col-md-2 product-date">
                     <div class="label">Qty:</div>
                     <div class="content">{{$view_book->qty}}</div>
                  </div>
                  <div class="col-md-2 product-date">
                     <div class="label">Harga:</div>
                     <div class="content">{{$view_book->total_harga}}</div>
                  </div>
                  <div class="col-md-2 order-detail">
                     <div class="label">&nbsp;</div>
                     <div class="content"><a href="/account/booking/hotel-detail/D0066AHX9M0"></a></div>
                  </div>
                  <div class="clear"></div>
               </div>
           @endforeach
         </div>
            <div class="clear h15"></div>
        
        </div>
         <div class="clear h15"></div>
      </div>
   </div>
   <div class="clear"></div>
</div>
@stop
