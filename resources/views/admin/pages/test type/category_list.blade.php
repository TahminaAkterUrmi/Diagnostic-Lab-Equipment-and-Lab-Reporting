@extends('master')
@section('content')


    <h1>Category List</h1>


    <a href="{{route('admin.category.add')}}" class="btn btn-success">Create new category</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th width="500px">Category Details</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($categories as $key=>$category)   
     
          <tr>
            <th scope="row">{{$key+1}}</th>
              <td>{{$category->name}}</td>
              <td>{{$category->details}}</td>
              <td>{{$category->action}}</td>
              <td><a  href="{{route('admin.category.delete',$category->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 4h5v2h-2v15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V6H2V4h5V2h10v2zM9 9v8h2V9H9zm4 0v8h2V9h-2z"/></svg></a></td>
            </tr>
            @endforeach
          
         
      </table>
      @endsection 