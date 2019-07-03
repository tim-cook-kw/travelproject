@extends('homepage::layouts.master')

@section('sectionheader')
<section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
@endsection

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Chart</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>User: {{($periodUser['0'])}} - {{$periodUser['1']}}</strong>
                            </p>

                            <div class="chart">
                                {!! $chartUser->container() !!}
                                <!-- Sales Chart Canvas -->
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>User: {{($periodUser['0'])}} - {{$periodUser['1']}}</strong>
                            </p>

                            <div class="chart">
                                {!! $chartMonthUser->container() !!}
                                <!-- Sales Chart Canvas -->
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        
                        <div class="col-md-4">
                            <p class="text-center">
                                <strong>Transaksi: {{$periodTransaction['0']}} - {{$periodTransaction['1']}}</strong>
                            </p>

                            <div class="chart">
                                {!! $chartTransaction->container() !!}
                                <!-- Sales Chart Canvas -->
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->

                        <div class="col-md-8">
                            <p class="text-center">
                                <strong>User: {{$periodTransaction['0']}} - {{$periodTransaction['1']}}</strong>
                            </p>

                            <div class="chart">
                                {!! $chartMonthTransaction->container() !!}
                                <!-- Sales Chart Canvas -->
                            </div>
                            <!-- /.chart-responsive -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-footer">
                    
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
{!! $chartUser->script() !!}
{!! $chartTransaction->script() !!}
{!! $chartMonthUser->script() !!}
{!! $chartMonthTransaction->script() !!}
@endpush