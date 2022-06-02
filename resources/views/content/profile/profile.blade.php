
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
@foreach ($partnerDetails as $object)
    <div class="row ">
        <!-- Profile Header starts -->
        <div class="col-lg-12">
            <div class="row ">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card ">
                        <div class="card-body pt-2 pl-1 pr-1 pr-0">
                            <div class="row">
                                <div class="col-lg-2 text-center col-md-2 col-sm-6 pt-1">
                                    <img  src="{{asset('images/avatars/spark-avatar.jpg')}}" alt="avatar" height="100" width="100">
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 pt-1">
                               
                                    <h3 class="text-bold"><b>{{ $object->owner_firstname.' '.$object->owner_middlename.' '.$object->owner_lastname }}</b></h3>
                                    <p>{{ $object->owner_email }}</p>
                                    <p>{{ '+63'.$object->owner_contact_no }}</p>
                                
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 pt-1 text-center ">
                                    <input type="hidden" value="{{ $object->owner_id }}" id="owner_id"/>
                                    <button type="button" class="btn btn-danger" disabled>Delete my account</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Header -->
    </div>
    <!-- Profile Details -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4>Personal Information</h4>
                    <div class="row mt-2">
                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" name="first_name" class="form-control" id="first_name" value="{{ $object->owner_firstname}} " readonly />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                            <div class="form-group">
                                <label for="middle_name">Middle Name</label>
                                <input type="text" name="middle_name" class="form-control" id="middle_name" value="{{ $object->owner_middlename}}" readonly />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" name="last_name" class="form-control" id="last_name" value="{{ $object->owner_lastname}} "  readonly />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="text" name="email" class="form-control" id="email" value="{{ $object->owner_email}} "  readonly />
                                <div class="badge badge-light-success mt-1">
                                    <i data-feather="check-circle" class="mr-25"></i>
                                    <span>Email verified</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12 mb-1">
                            <div class="form-group">
                                <label for="contact_no">Contact No.</label>
                                <input type="text" name="contact_no" class="form-control " id="contact_no" value="{{ '+63'.$object->owner_contact_no }}" readonly />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Details -->

    <!-- Documents -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4>Documents</h4>
                    <p>Please add documents needed for your parking space to be validated as a spark parking partner. Refer to infographics for the specifications needed to be approved.</p>
                    <p> Samples are:<b> land title, proof of ownership of land, certification from barangay</b></p>
                    <div class="container lst">
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif


                        @if(session('success'))
                        <div class="alert alert-success">
                        {{ session('success') }}
                        </div> 
                        @endif
                        <form method="post" action="{{url('file')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div id="files-container">
                            <div class="hdtuto  input-group control-group lst increment" >
                                <input type="file" name="filenames[]" class="myfrm form-control">
                                <div class="input-group-btn"> 
                                    <button class="btn btn-success" type="button"><i data-feather="plus-circle" class="mr-1"></i>ADD</button>
                                </div>
                            </div>
                        </div>  
                            <button type="submit" class="btn btn-primary float-right mt-2" >Submit</button>
                        </form>        
                    </div>
                                            
                </div>
            </div>
        </div>
    </div>
    <!-- Profile Details -->
@endforeach
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
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
  
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/pages/dashboard-analytics.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/pages/app-invoice-list.js')) }}"></script>
  <script src="{{ asset(mix('js/scripts/forms/form-input-mask.js')) }}"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){
        var newNodeContainer = "<div class='hdtuto  input-group control-group lst increment' style='margin-top:10px'>";
      var divContent = "<input type='file' name='filenames[]' class='myfrm form-control'><div class='input-group-btn'><button class='btn btn-danger' type='button'><i class='fldemo glyphicon glyphicon-remove'></i> Remove</button></div>";
      var divClose = "</div>"; 
      $('#files-container').append(newNodeContainer+divContent+divClose);
      });
      $('#files-container').on('click','.btn-danger', function () {

$(this).closest('.increment').remove();
});
    });
</script>
@endsection
