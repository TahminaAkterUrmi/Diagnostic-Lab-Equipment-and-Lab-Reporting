@extends('website.master')


@section('content')


<!DOCTYPE html>
<html>
<head>
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
    <h2>Test List</h2>



<table style="width:100%">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th width="500px">Category Details</th>
       
        </tr>
      </thead>
      <tbody>

        @foreach ($categories as $key=>$category)   
   
        <tr>
          <th scope="row">{{$key+1}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->details}}</td>
          
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