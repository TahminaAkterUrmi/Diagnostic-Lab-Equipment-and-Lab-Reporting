@extends('website.master')
@section('content')

<h1>  Appointment History</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Appointment Date</th>
       
        {{-- <th scope="col">Test Details</th> --}}
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr> 
    </thead>
    
    @foreach ($appointment as $key=>$user_appointment)  
    
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$user_appointment->date}}</td>
    
      <td>
          <button type="button" class="btn btn-success">{{$user_appointment->status}}</button>
    
      </td>
      <td><a  class="btn btn-primary" href="{{route('appointment.history.view', $user_appointment->id)}}">View</a>
     <a class="btn btn-danger text-light"
        href="{{route('user.appointment.cancel', $user_appointment->id)}}" onclick="return confirm('Are you sure you want to cancel this appointment?')">Cancel</a></td>
    </tr>
 @endforeach
</table>
   


{{-- //appointment view modal form// --}}


{{-- <div class="modal" tabindex="-1" role="dialog" id="view">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Patient Appointment View</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Appointment Date: </p>
        <p>Slot:</p>
        <p>Test Details:</p>
        <p>Total Amount:</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div> --}}

@endsection