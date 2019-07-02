@extends('apps.layouthomepage')
@section('content')
<div class="container">
    <div class="row">
        <div class="text-center">
            <h1>Receipt</h1>
        </div>
        </span>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>#</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="col-md-9"><em>Baked Rodopa Sheep Feta</em></h4>
                    </td>
                    <td class="col-md-1" style="text-align: center"> 2 </td>
                    <td class="col-md-1 text-center">$13</td>
                    <td class="col-md-1 text-center">$26</td>
                </tr>
                <tr>
                    <td class="col-md-9"><em>Lebanese Cabbage Salad</em></h4>
                    </td>
                    <td class="col-md-1" style="text-align: center"> 1 </td>
                    <td class="col-md-1 text-center">$8</td>
                    <td class="col-md-1 text-center">$8</td>
                </tr>
                <tr>
                    <td class="col-md-9"><em>Baked Tart with Thyme and Garlic</em></h4>
                    </td>
                    <td class="col-md-1" style="text-align: center"> 3 </td>
                    <td class="col-md-1 text-center">$16</td>
                    <td class="col-md-1 text-center">$48</td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td class="text-right">
                        <p>
                            <strong>Subtotal: </strong>
                        </p>
                        <p>
                            <strong>Tax: </strong>
                        </p>
                    </td>
                    <td class="text-center">
                        <p>
                            <strong>$6.94</strong>
                        </p>
                        <p>
                            <strong>$6.94</strong>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td class="text-right">
                        <h4><strong>Total: </strong></h4>
                    </td>
                    <td class="text-center text-danger">
                        <h4><strong>$31.53</strong></h4>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-success btn-lg btn-block">
               <a href="{{ route('select-payment') }}">Pay Now</a><span
                class="glyphicon glyphicon-chevron-right"></span>
        </button></td>

    </div>
</div>
<br>
<br>
@endsection
