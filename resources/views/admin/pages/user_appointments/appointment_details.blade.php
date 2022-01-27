@extends('master')
@section('content')
    
<style>
  body{
    margin-top:20px;
    color: #484b51;
}
.text-secondary-d1 {
    color: #728299!important;
}
.page-header {
    margin: 0 0 1rem;
    padding-bottom: 1rem;
    padding-top: .5rem;
    border-bottom: 1px dotted #e2e2e2;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -ms-flex-align: center;
    align-items: center;
}
.page-title {
    padding: 0;
    margin: 0;
    font-size: 1.75rem;
    font-weight: 300;
}
.brc-default-l1 {
    border-color: #dce9f0!important;
}

.ml-n1, .mx-n1 {
    margin-left: -.25rem!important;
}
.mr-n1, .mx-n1 {
    margin-right: -.25rem!important;
}
.mb-4, .my-4 {
    margin-bottom: 1.5rem!important;
}

hr {
    margin-top: 1rem;
    margin-bottom: 1rem;
    border: 0;
    border-top: 1px solid rgba(0,0,0,.1);
}

.text-grey-m2 {
    color: #888a8d!important;
}

.text-success-m2 {
    color: #86bd68!important;
}

.font-bolder, .text-600 {
    font-weight: 600!important;
}

.text-110 {
    font-size: 110%!important;
}
.text-blue {
    color: #478fcc!important;
}
.pb-25, .py-25 {
    padding-bottom: .75rem!important;
}

.pt-25, .py-25 {
    padding-top: .75rem!important;
}
.bgc-default-tp1 {
    background-color: rgba(121,169,197,.92)!important;
}
.bgc-default-l4, .bgc-h-default-l4:hover {
    background-color: #f3f8fa!important;
}
.page-header .page-tools {
    -ms-flex-item-align: end;
    align-self: flex-end;
}

.btn-light {
    color: #757984;
    background-color: #f5f6f9;
    border-color: #dddfe4;
}
.w-2 {
    width: 1rem;
}

.text-120 {
    font-size: 120%!important;
}
.text-primary-m1 {
    color: #4087d4!important;
}

.text-danger-m1 {
    color: #dd4949!important;
}
.text-blue-m2 {
    color: #68a3d5!important;
}
.text-150 {
    font-size: 150%!important;
}
.text-60 {
    font-size: 60%!important;
}
.text-grey-m1 {
    color: #7b7d81!important;
}
.align-bottom {
    vertical-align: bottom!important;
}

.table th
{
  background-color: #4087d4!important;
}

</style>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="page-content container">
    <div class="page-header text-blue-d2">
        {{-- <h1 class="page-title text-secondary-d1">
            Invoice
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                ID: #111-222
            </small>
        </h1> --}}

        <div class="page-tools">
            <div class="action-buttons">
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="Print">
                    <i class="mr-1 fa fa-print text-primary-m1 text-120 w-2"></i>
                    Print
                </a>
                <a class="btn bg-white btn-light mx-1px text-95" href="#" data-title="PDF">
                    <i class="mr-1 fa fa-file-pdf-o text-danger-m1 text-120 w-2"></i>
                    Export
                </a>
            </div>
        </div>
    </div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            {{-- <i class="fa fa-book fa-2x text-success-m2 mr-1"></i> --}}
                            <span class="text-default-d3">User Appointment Details</span>
                        </div>
                    </div>
                </div>
                <!-- .row -->

                <hr class="row brc-default-l1 mx-n1 mb-4" />

                 <div class="row">
                    <div class="col-sm-6">
                        {{-- <div>
                            <span class="text-sm text-grey-m2 align-middle">To:</span>
                            <span class="text-600 text-110 text-blue align-middle"></span>
                        </div> --}}
                       
                    </div> 
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID: {{$appointment->user->id}}</span> </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Appoinment Date: {{$appointment->date}}</span> </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status: {{$appointment->status}}</span> <span class="badge badge-warning badge-pill px-25"></span></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
               
                <div class="mt-4">
<table class="table">
  <tr>
    <th width="10%">SL No</th>
    <th width="15%">Appointment_Id</th>
    <th width="15%">Test_Id</th>
    <th width="15%">Test_Name</th>
    <th width="15%">Test_Quantity</th>
    <th width="15%">Unit_Price</th>
    <th width="15%">Status</th>
    <th width="15%">Total_price</th>
    <th width="15%">Slot</th>
    <th>Action</th>
   
  </tr>
@foreach($appointment_details as $key=>$detail)
    

  
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$detail->appointment_id}}</td>
      <td>{{$detail->test_id}}</td>   
      <td>{{$detail->test->name}}</td>
      <td>{{$detail->test_quantity}}</td>
      <td>{{$detail->unit_price}}</td>
      <td>{{$detail->status}}</td>
      <td>{{$detail->appointment->total_price}}</td>
      <td>{{$detail->slot}}</td>

      <td>
          @if($detail->status!='accepted')
        <a class="btn btn-success text-light"
                href="{{route('admin.appointment.accept', $detail->id)}}" onclick="return confirm('Are you sure you want to accept this appointment?')">Accept</a>
            <a class="btn btn-danger text-light"
                href="{{route('admin.appointment.decline.reason', $detail->id)}}" onclick="return confirm('Are you sure you want to decline this appointment?')">Decline</a>
        @endif
            </td>
      
    </tr>
    @endforeach
 </table>
</div>


               
                </div>
            </div>
        </div>
    </div>
</div>





 
@endsection