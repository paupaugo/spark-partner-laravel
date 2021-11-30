
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
                  <h4 class="mt-1"><b>PHP 0.00</b></h4>
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
                  <h4 class="mt-1"><b>0</b></h4>
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
                  <h4 class="mt-1"><b>0</b></h4>
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
        <div class="card">
          <table class="parking-activites-table table">
            <thead>
              <tr>
                <th>Name</th>
                <th>Parking Address</th>
                <th>Amount</th>
                <th>Status</th>
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
                  @foreach ($partnerNews as $key => $objectnews)
                  <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                    <img src="{{ 'https://super-admin.sparkph.net/storage/'.$objectnews->content_photo }}" alt="Los Angeles" width="1100" height="500">
                    
                  </div>
                  @endforeach
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
                    <h1 class="mt-1"><b>0</b></h1>
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
                    <h1 class="mt-1"><b>0</b></h1>
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
                    <h1 class="mt-1"><b>0</b></h1>
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
      @foreach ($partnerQRCode as $object)
        <div class="col-lg-12 col-sm-12 col-12">
          <div class="card bg-white pt-1 pl-1 pr-1 pb-2">
            <div class="card-body text-center">
              {!! QrCode::size(140)->generate("{{ 'https://register-partner.sparkph.net/?referral-code='.$object->owner_referral_code }}" ) !!}
            </div>
            <div class="card-text text-center">
              <h5><b>Refer a friend</b></h5>
              <p>Copy your referral link and invite your friends, relatives and give your referral code.</p>

              <input type="text" id="qrcodelink" class="form-control" value="{{ 'https://register-partner.sparkph.net/?referral-code='.$object->owner_referral_code }}" />

              <div class="dt-buttons pt-1"><button class="dt-button btn btn-danger btn-copy-referral"  id="btn-copy"><span>Copy</span></button> </div>
            </div>
          </div>
        </div>
      @endforeach
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


<!--   
  <script src="{{ asset(mix('vendors/js/bootstrap/bootstrap.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/jquery/jquery.min.js')) }}"></script> -->
  <script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.bootstrap4.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  
@endsection
@section('page-script')
  <!-- Page js files -->
  
  <script src="{{ asset(mix('js/scripts/dashboard/dashboard-crud.js')) }}"></script>
  <script>
    $("#btn-copy").click(function(){
      $temp = $("#qrcodelink").select();
      document.execCommand("copy");
      
    });
</script>
@endsection
