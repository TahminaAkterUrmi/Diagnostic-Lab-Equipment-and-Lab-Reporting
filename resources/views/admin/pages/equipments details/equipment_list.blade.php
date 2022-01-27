@extends('master')
@section('content')
@if(session()->has ('success'))
<p class="alert alert-success">
  {{session()->get ('success')}}
</p>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<h1>Equipment List</h1>
<style>
#equipments {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#equipments td, #equipments th {
  border: 1px solid #ddd;
  padding: 8px;
}

#equipments tr:nth-child(even){background-color: #f2f2f2;}

#equipments tr:hover {background-color: #ddd;}

#equipments th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<body>

<table id="equipments">
  <tr>
    <th>SL No</th>
    <th>Equipment Name</th>
     <th>Stock</th>
    <th>Action</th>
  </tr>
  @foreach ($equipments as $key=>$equip)   
  
     <tr>
       <th scope="row">{{$key+1}}</th>
     
         <td>{{$equip->equipment_name}}</td>
         <td>{{$equip->stock}}</td>
      
       
    <td>
      <a href="{{route('equipment.delete',$equip->id)}}" button type="button" class="btn btn-danger">Delete</a></td>
  </tr>
 @endforeach
</table>

</body>
</html>


<a href="{{route('equipment.add')}}" class="btn btn-dark" type="button">Add Equipment</a>



    
@endsection