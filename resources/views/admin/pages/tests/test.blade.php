@extends('master')
@section('content')
@if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
<!DOCTYPE html>
<html>
<head>
<style>
#tests {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tests td, #tests th {
  border: 1px solid rgb(255, 249, 249);
  padding: 8px;
}

#tests tr:nth-child(even){background-color: #f2f2f2;}

#tests tr:hover {background-color: #ddd;}

#tests th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #0881f3;
  color: white;
}
.delete-btn{

}
</style>
</head>
<body>
{{-- //search// --}}

<form action="{{route('admin.test')}}" method="GET">
  <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
          <input value="{{$key}}" type="text" placeholder="Search" name="search" class="form-control">
      </div>
      <div class="col-md-4">
          <button type="submit" class="btn btn-success">Search</button>
      </div>
  </div>
  </form>
  @if($key)
  <h4>
      Your are searching for: {{$key}}. found: {{$tests->count()}}
  </h4>
@endif 





<h1>Test Details</h1>

<table id="tests">
  <tr>
    <th>SL No</th>
    <th width="300px">Test Name</th>
    <th width="300px">Details</th>
    <th>Price</th>
    <th>Category</th>
    <th>Machine Name</th>
    <th>Equipment Name</th>
    <th width="300px">Action</th>
    
    
  </tr>
  @foreach ($tests as $key=>$test)   
        {{-- @dd($test) --}}
          <tr>
            <th scope="row">{{$key+1}}</th>
              <td>{{$test->name}} "---" {{$test->id}}</td>
              <td>{{$test->details}}</td>
              <td>{{$test->price}}</td>
              <td>{{$test->category->name}}</td> 
              <td>{{optional($test->machine)->machine_name}}</td> 
              <td>
               
                @foreach ($test->test_equipment as $data)

      
                    <span class="badge badge-success">{{$data->equipment->equipment_name}}</span>
                @endforeach

              </td>
              


              <td><a href="{{route('admin.test.view', $test->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M1.181 12C2.121 6.88 6.608 3 12 3c5.392 0 9.878 3.88 10.819 9-.94 5.12-5.427 9-10.819 9-5.392 0-9.878-3.88-10.819-9zM12 17a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-2a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/></svg></a>
               
                <a  href="{{route('admin.test.edit',$test->id)}}">  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm4.82-4.924A7 7 0 0 0 9.032 5.658l.975 1.755A5 5 0 0 1 17 12h-3l2.82 5.076zm-1.852 1.266l-.975-1.755A5 5 0 0 1 7 12h3L7.18 6.924a7 7 0 0 0 7.788 11.418z"/></svg>
                  <a  href="{{route('admin.test.delete', $test->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 4h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5V2h10v2zM9 9v8h2V9H9zm4 0v8h2V9h-2z"/></svg></a>
              </td>
              
              
            </tr>
            @endforeach
  
 
</table>

</body>
</html>


  <a href="{{ route('admin.test.add')}}" class="btn btn-secondary" type="button">Create New Test</a>

  @endsection