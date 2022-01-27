@extends('master')
@section('content')
    <h1> Equipment Stock </h1>
    <a href="{{route('admin.stock.add')}}" class="btn btn-primary" type="button">Add Stock</a>
    <table class="table">
        <tr>
          <th>SL No</th>
          
          <th>Equipment Name</th>
          <th>Stock In</th>
          <th>Stock Out</th>
        
         
          
          
        </tr>
        @foreach ($stocks as $key=>$st)   
  
        <tr>
          <th scope="row">{{$key+1}}</th>
        
            <td>{{$st->equipment->equipment_name}}</td>
            <td>{{$st->in}}</td>
            <td>{{$st->out}}</td>
        
     </tr>
    @endforeach
    
  
       
   </table>
@endsection