@extends('apps.layouthomepage')
@section('content')
<div class="container">

        <div class="paymentCont">
            <div class="headingWrap">
                <h3 class="headingTop text-center">Select Your Payment Method</h3>
            </div>
            <div class="paymentWrap text-center">
                <div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
                    <label class="btn paymentMethod">
                        <div class="method ez-cash"></div>
                        <input type="radio" name="options">
                    </label>

                </div>
            </div>
            <div class="row">
                <div class="col">
                <div class="btn btn-success pull-left btn-fyi"><span class="glyphicon glyphicon-chevron-left"></span>
                    CONTINUE SHOPPING</div>
                </div>
                <div class="col">
                    <form action="{{ route('checkout') }}" method="post">
                        @csrf
                <button class="btn btn-success pull-right btn-fyi" style="margin-left: 50%;">CHECKOUT<span
                        class="glyphicon glyphicon-chevron-right"></span></button>
                        </form>
                </div>
            </div>
        </div>
</div>
<br>
<br>
@endsection
