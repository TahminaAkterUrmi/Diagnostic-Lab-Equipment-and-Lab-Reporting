@extends('website.master')


@section('content')


{{-- @dd($tests) --}}

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
  <tr>
    <th>Sl No</th>
    <th>Test Name</th>
    <th>Price</th>
    <th width="200px">Action</th>
  </tr>
  @foreach ($tests as $key=>$test)   
   
  <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$test->name}}</td>
      <td>{{$test->price}}</td>
      <td><a class="btn btn-secondary" href="{{route('Addtocart',$test->id)}}">Add To Cart</td>
      
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