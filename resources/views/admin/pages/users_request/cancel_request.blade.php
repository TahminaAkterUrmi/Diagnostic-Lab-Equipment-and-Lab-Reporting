@extends('master')
@section('content')
    
<h1> Cancel Appointment List</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Patient Name</th>
        <th scope="col">Patient Id</th>
        <th scope="col">Decline Reason</th>
       
      </tr>
      
    </thead>
    <tbody>

        @foreach ($appointments as $key=>$appointment )   
   
        <tr>
          <th scope="row">{{$key+1}}</th>
            <td>{{$appointment->user->name}}</td>
            <td>{{$appointment->user->id}}</td>
            <td>{{$appointment->details->reason}}</td>
          </tr>
          @endforeach
        
       
</table>



@endsection