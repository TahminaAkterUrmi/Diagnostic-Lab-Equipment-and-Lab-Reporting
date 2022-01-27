@extends('master')

@section('content')



{{-- <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> --}}
    <div class="container-fluid  d-flex justify-content-center" >
        <div class="row">
            <div class="row">
                <div class="col-xl-6 col-sm-6 col-12 mt-5 me-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-primary border-primary">
                                    <i class="fe fe-users"></i>
                                </span>
                                <div class="dash-count">
                                    <h3>{{ $patients}}</h3>
                                    {{-- {{$doctor_count}} --}}
                                </div>
                            </div>
                            <div class="dash-widget-info">
                                <h6 class="text-muted">Patients</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-info">
                                    <i class="fe fe-credit-card"></i>
                                </span>
                                <div class="dash-count">
                                     <h3>{{$requested_appointments}}</h3> 
                                    {{-- {{$patient_count}} --}}
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Requested Appointments</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @dd($totalAttendance) --}}
                {{-- <div class="col-xl-4 col-sm-6 col-12 mt-5 me-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-success">
                                    <i class="fe fe-credit-card"></i>
                                </span>
                                <div class="dash-count">
                                    {{-- <h3> {{$totalAttendance}}</h3> --}}
                                    {{-- {{$patient_count}} --}}
                                {{-- </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Attend Employees</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}} 
                <div class="col-xl-6 col-sm-6 col-12 mt-5 me-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-danger">
                                    <i class="fe fe-credit-card"></i>
                                </span>
                                <div class="dash-count">
                                  
                                    <h3> {{$appointments}}</h3>
                                    {{-- {{$patient_count}} --}}
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Appointments</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped bg-danger w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6 col-12 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon text-warning">
                                    <i class="fe fe-credit-card"></i>
                                </span>
                                <div class="dash-count">
                                     <h3> {{$payments}}</h3>
                                    {{-- {{$patient_count}} --}}
                                </div>
                            </div>
                            <div class="dash-widget-info">

                                <h6 class="text-muted">Payments</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar progress-bar-animated progress-bar-striped bg-warning w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
     @endsection