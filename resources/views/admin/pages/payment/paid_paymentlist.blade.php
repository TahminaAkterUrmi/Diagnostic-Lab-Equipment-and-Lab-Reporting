@extends('master')
@section('content')

<h1>Paid Payment List</h1>
<style>
#payments {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#payments td, #payments th {
  border: 1px solid #ddd;
  padding: 8px;
}

#payments tr:nth-child(even){background-color: #f2f2f2;}

#payments tr:hover {background-color: #ddd;}

#payments th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #047baa;
  color: white;
}
</style>
<body>

<table id="payments">
  <tr>
    <th>Patient Name</th>
    <th>Appointment Date</th>
    <th>Total Amount</th>
    <th>Transcation Id</th>
    <th>Transcation Date</th>
    <th>Payment Status</th>
  
  </tr>
  @foreach ($payments as $key=>$pay)   
     
          <tr>
            {{-- <th scope="row">{{$key+1}}</th> --}}
              <td>{{$pay->patient_name}} </td>
               <td>{{$pay->appointment->date}}</td> 
              <td>{{$pay->total_price}}</td>
              <td>{{$pay->transcation_id}}</td>
              <td>{{$pay->transcation_date}}</td>
              <td>{{$pay->payment_status}}</td>
              {{-- <td><a href="{{route('money.receipt', $pay->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></a></td> --}}

            </tr>
            @endforeach
 
</table>

</body>
</html>
@endsection