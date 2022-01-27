@extends('website.master')


@section('content')

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>

  <div class="row">
 
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
    <h2>Payment History</h2>

<table style="width:100%">
  <tr>
    <th>Sl No</th>
    <th>Total Price</th>
    <th>Current_Payment</th>
    <th>Due_Amount</th>
    <th>Transcation Id</th>
    <th>Transcation Date</th>
    <th>Payment Status</th>
  
  </tr>
  @foreach ($payment_history as $key=>$pay)   
   
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$pay->total_price}}</td>
      <td>{{$pay->current_payment}}</td>
      <td>{{$pay->total_price}} - {{$pay->current_payment}} </td>
      <td>{{$pay->transcation_id}}</td>
      <td>{{$pay->transcation_date}}</td>

       <td>{{$pay->payment_status}}</td>
     
      
    </tr>
    @endforeach 
</table>
  </div>

  <div class="col-md-2">
    
  </div>
  </div>
  


</body>

</html>
@endsection