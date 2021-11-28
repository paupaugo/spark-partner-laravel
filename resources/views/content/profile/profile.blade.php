
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
<!-- Profile Start -->
<section id="dashboard-analytics">
  <div class="row ">
    <!-- Profile Header starts -->
    <div class="col-lg-12">
        <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card ">
                    <div class="card-body text-center pt-2 pl-1 pr-0">
                    
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-6">
                                    <img  src="{{asset('images/avatars/spark-avatar.jpg')}}" alt="avatar" height="100" width="100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       

    </div>
        <!-- Profile Header -->
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

    <!-- List DataTable -->
    <div class="row">
      <div class="col-7">
        <div class="card sparknews_container pt-2 pl-1">
          <h5><b>Spark News</b></h5>

          <div class="card">
            <div class="card-body">
              <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="la.jpg" alt="Los Angeles" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Los Angeles</h3>
                      <p>We had such a great time in LA!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="chicago.jpg" alt="Chicago" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>Chicago</h3>
                      <p>Thank you, Chicago!</p>
                    </div>   
                  </div>
                  <div class="carousel-item">
                    <img src="ny.jpg" alt="New York" width="1100" height="500">
                    <div class="carousel-caption">
                      <h3>New York</h3>
                      <p>We love the Big Apple!</p>
                    </div>   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-5">
        <div class="card sparknews_container pt-2 pl-1 pr-1">
          <h5><b>Spark Status</b></h5>
          <div class="card card-profits">
            <div class="card-body pr-0 p-0">
              <div class="row">
                <div class="col-lg-6">
                  <h5 class="m-1"><b>Parking Total</b></h5>
                </div>
                <div class="col-lg-6">
                  <div class="pt-0 mr-1 text-right">
                    <h1 class="mt-1"><b>54</b></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-available-parking">
            <div class="card-body pr-0 p-0">
              <div class="row">
                <div class="col-lg-6">
                  <h5 class="m-1"><b>Available Parking</b></h5>
                </div>
                <div class="col-lg-6">
                  <div class="pt-0 mr-1 text-right">
                    <h1 class="mt-1"><b>20</b></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card card-parking-lot">
            <div class="card-body pr-0 p-0">
              <div class="row">
                <div class="col-lg-6">
                  <h5 class="m-1"><b>Occupied Parking</b></h5>
                </div>
                <div class="col-lg-6">
                  <div class="pt-0 mr-1 text-right">
                    <h1 class="mt-1"><b>05</b></h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ List DataTable -->
  </div>

    <div class="col-lg-3 advertisement_slot">
      <!-- QRCODE Card starts -->
        <div class="col-lg-12 col-sm-12 col-12">
          <div class="card bg-white pt-1 pl-1 pr-1 pb-2">
            <div class="card-body text-center">
              {!! QrCode::size(140)->generate('RemoteStack') !!}
            </div>
            <div class="card-text text-center">
              <h5><b>Refer a friend</b></h5>
              <p>Copy your referral link and invite your friends, relatives and give your referral code.</p>

              <input type="text" class="form-control">

              <div class="dt-buttons pt-1"><button class="dt-button btn btn-danger btn-copy-referral" type="button"><span>Copy</span></button> </div>
            </div>
          </div>
        </div>
      <!-- QRCODE Card ends -->

      <!-- ADS Card starts -->
      <div class="col-lg-12 col-sm-12 col-12">
          <div class="card bg-white ads_container pt-1 pl-1 pr-1 pb-2">
            <div class="card-body text-center">
            </div>
          </div>
        </div>
      <!-- ADS Card ends -->
    </div>
    
  </div>
  
    



    

  

    

    

  
</section>
<!-- Dashboard Analytics end -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/charts/apexcharts.min.js')) }}"></script>

<!--   
  <script src="{{ asset(mix('vendors/js/bootstrap/bootstrap.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/jquery/jquery.min.js')) }}"></script> -->
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
