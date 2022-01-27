@extends('master')
@section('content')
<h1>View Appointment Request</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Patient Id</th>
        {{-- <th scope="col">Test Details</th> --}}
        <th scope="col">Appointment Date</th>
        {{-- <th scope="col">Status</th> --}}
        <th scope="col">Action</th>
      </tr>
      
    </thead>
@if (!empty($request_appointments))
@foreach ($request_appointments as $key=>$request_appointment)   
   
<tr>
  <th scope="row">{{$key+1}}</th>
    <td>{{$request_appointment->user->name}}</td>
    <td>{{$request_appointment->user->id}}</td>
    {{-- <td>#</td> --}}
    <td>{{$request_appointment->date}}</td>
    {{-- <td>{{$request_appointment->slot->name}} : {{$request_appointment->slot->startingtime}} - {{$request_appointment->slot->endingtime}}</td>
    --}}
    
      <td><a href="{{route('appointment_details', $request_appointment->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></a>
</tr>
  @endforeach
@else
{{-- @foreach ($request_appointments as $key=>$request_appointment)   
   
<tr>
  <th scope="row">{{$key+1}}</th>
    <td>{{$request_appointment->user->name}}</td>
    <td>{{$request_appointment->user->id}}</td>
    <td>#</td>
    <td>{{$request_appointment->date}}</td>
    <td>{{$request_appointment->slot->name}} : {{$request_appointment->slot->startingtime}} - {{$request_appointment->slot->endingtime}}</td>
   
    <td>

          <a class="btn btn-success text-light"
              href="{{route('admin.appointment.accept', $request_appointment->id)}}" onclick="return confirm('Are you sure you want to accept this appointment?')">Accept</a>
          <a class="btn btn-danger text-light"
              href="{{route('admin.appointment.decline.reason', $request_appointment->id)}}" onclick="return confirm('Are you sure you want to decline this appointment?')">Decline</a>
      
  </td>        </tr>
  @endforeach --}}
@endif
    
      <tbody>

       
</table>
  
    <tbody>




@endsection