@extends('master')


@section('content')


<div class="container">
  <h2>Patients List</h2>
          
  <style>
    #patients {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #patients td, #patients th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #patients tr:nth-child(even){background-color: #f2f2f2;}
    
    #patients tr:hover {background-color: #ddd;}
    
    #patients th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #020202;
      color: white;
    }
    </style>


  <table id="patients">
    <thead>
      <tr>
        <th>#</th>
        <th>User Name</th>
        <th> User Email</th>
        <th>User Mobile</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($patients as $key=>$patient)   
   
        <tr>
          <th scope="row">{{$key+1}}</th>
           
            <td>{{$patient->name}}</td>
            <td>{{$patient->email}}</td>
            <td>{{$patient->mobile}}</td>
          </tr>
          @endforeach
    
    </tbody>
  </table>
</div>

@endsection