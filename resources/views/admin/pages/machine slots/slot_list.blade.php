@extends('master')
@section('content')
<h1>Machine Slot List</h1>



<a href="{{route('machine.slot.add')}}" class="btn btn-success" type="button">Add Machine Slot</a>
<style>
    #machines {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #machines td, #machines th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #machines tr:nth-child(even){background-color: #f2f2f2;}
    
    #machines tr:hover {background-color: #ddd;}
    
    #machines th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #1d04aa;
      color: white;
    }
    </style>
    <body>
    
    <table id="machines">
      <tr>
        <th>SL No</th>
        <th>Machine Name</th>
     <th>Daily Use (Maximum)</th>
     <th>Slot</th>
     <th>Picture</th>
        <th>Action</th>
      </tr>
      @foreach ($machines as $key=>$machine)   
  
     <tr>
       <th scope="row">{{$key+1}}</th>
     
         <td>{{$machine->machine_name}}</td>
         <td>{{$machine->daily_use}}</td>
         <td>{{$machine->slot}}</td>
         <td>{{$machine->photo}}</td>
        
        <td><button type="button" class="btn btn-warning">Update</button>
          <button type="button" class="btn btn-danger">Delete</button></td>
     
     
      </tr>
     @endforeach
    </table>
    
    </body>
    </html>
    
    
    
    
    

    
@endsection