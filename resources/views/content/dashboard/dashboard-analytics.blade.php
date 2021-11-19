
@extends('layouts/contentLayoutMaster')

@section('title', 'Dashboard Analytics')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/charts/apexcharts.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/datatables.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/charts/chart-apex.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/extensions/ext-component-toastr.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-invoice-list.css')) }}">
  @endsection

@section('content')
<!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row ">
    <!-- Spark Revenue starts -->
    <div class="col-lg-9">
    <div class="row match-height">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card card-congratulations">
          <div class="card-body text-center pt-1 pl-1 pr-0">
            <div class="row">
              <div class="col-lg-2">
                <img  src="{{asset('images/logo/logo_spark.svg')}}" alt="avatar" height="50" width="50">
              </div>
              <div class="col-lg-10">
                <div class="pt-0 mr-1 text-right">
                  <h5><b>Spark Revenue</b></h5>
                  <h4 class="mt-1"><b>PHP 3450.00</b></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Spark Revenue ends -->

      <!-- Total Parking Slots Card starts -->
      <div class="col-lg-4 col-sm-6 col-12">
        <div class="card card-parking-lot">
          <div class="card-body text-center pt-1 pl-1 pr-0">
            <div class="row">
              <div class="col-lg-2">
                <img  src="{{asset('images/svg/parking_lot.svg')}}" alt="avatar" height="50" width="50">
              </div>
              <div class="col-lg-10">
                <div class="pt-0 mr-1 text-right">
                  <h5><b>Total Parking Slots</b></h5>
                  <h4 class="mt-1"><b>43</b></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Total Parking Slots Card ends -->

      <!-- QRCODE Card starts -->
      <div class="col-lg-4 col-sm-6 col-12">
        <div class="card card-profits">
          <div class="card-body text-center pt-1 pl-1 pr-0">
            <div class="row">
              <div class="col-lg-2">
                <img  src="{{asset('images/svg/profits.svg')}}" alt="avatar" height="50" width="50">
              </div>
              <div class="col-lg-10">
                <div class="pt-0 mr-1 text-right">
                  <h5><b>Total Parking Slots</b></h5>
                  <h4 class="mt-1"><b>43</b></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- QRCODE Card ends -->
    </div>
    <!-- List DataTable -->
  <div class="row">
    <div class="col-12">
      <div class="card invoice-list-wrapper">
        <div class="card-datatable table-responsive">
          <table class="invoice-list-table table">
            <thead>
              <tr>
                <th></th>
                <th>#</th>
                <th><i data-feather="trending-up"></i></th>
                <th>Client</th>
                <th>Total</th>
                <th class="text-truncate">Issued Date</th>
                <th>Balance</th>
                <th>Invoice Status</th>
                <th class="cell-fit">Actions</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--/ List DataTable -->
    </div>

    <div class="col-lg-3">
    <!-- QRCODE Card starts -->
    <div class="col-lg-12 col-sm-12 col-12">
      <div class="card bg-white">
        <div class="card-body text-center pt-2 pl-1 pr-1">
          {!! QrCode::size(150)->generate('RemoteStack') !!}
        </div>
      </div>
    </div>
    <!-- QRCODE Card ends -->
  </div>
    
  </div>
  
    



    

  

    

    

  
</section>
<!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>

  <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-invoice-list.js')) }}"></script>
@endsection
