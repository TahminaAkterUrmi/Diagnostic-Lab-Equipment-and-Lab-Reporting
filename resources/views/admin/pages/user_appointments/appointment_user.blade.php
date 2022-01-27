@extends('master')


@section('content')




    <h2>User Appointment List</h2>
    <style>
      #appointments {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
      
      #appointments td, #patients th {
        border: 1px solid #ddd;
        padding: 8px;
      }
      
      #appointments tr:nth-child(even){background-color: #f2f2f2;}
      
      #appointments tr:hover {background-color: #ddd;}
      
      #appointments th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: hsl(234, 84%, 49%);
        color: white;
      }
      </style>
  

<table id="appointments">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col"> User_id</th>
          <th scope="col"> User_name</th>
          <th scope="col"> Date</th>
          <th scope="col"> Total_price</th>
          <th scope="col"> Total_Paid</th>
          <th scope="col"> Payment</th>
          <th scope="col"> Payment Status</th>
          <th scope="col"> Money Receipt</th>
          <th scope="col"> Upload Report</th>
          <th scope="col"> View</th>
          
           </tr>
      </thead>

      @foreach ($appointments as $key=>$user_appointment)   
   
      <tr>
        <th scope="row">{{$key}}</th>
        <td>{{$user_appointment->user->id}}</td>
          <td>{{$user_appointment->user->name}}</td>
          {{-- <td>{{$user_appointment->user->mobile}}</td> --}}
          
          <td>{{$user_appointment->date}}</td>
          {{-- <td>{{$user_appointment->slot->name}} : {{$user_appointment->slot->startingtime}} - {{$user_appointment->slot->endingtime}}</td>
          <td> --}}
            {{-- <img src="{{url('/uploads/' .$user_appointment->image)}}" height="100px" width="100px" alt=""> --}}
            <td>{{$user_appointment->total_price}}</td>
          
            {{-- <td><a href="{{route('appointment_details')}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></a> --}}
          </td>
          <td>{{$user_appointment->total_paid}}</td>
        <td>         
        
          <a href="{{route('payment.list',$user_appointment->id)}}" class="btn btn-primary">Add Payment</a></td>

          <td>         
        @if($user_appointment->payment_status=='pending')
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#view">
          Pending
        </button>
        
        
        
        @else
        
        <a href="" class="btn btn-success">Paid</a>
      
      @endif
      <td><a href="{{route('money.receipt',$user_appointment->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></a></td>
      </td>

<td>
  <a href="{{route('admin.report.view', $user_appointment->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></td>
    <td><a href="{{route('appointment_details', $user_appointment->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></a></td>



        
        </tr>


        @endforeach
      <tbody>

</table>
  

@endsection