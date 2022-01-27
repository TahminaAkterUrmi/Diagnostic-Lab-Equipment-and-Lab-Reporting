@extends('master')
@section('content')
  

    
    <h1>Update Test Details</h1>  
    <form action="{{route('admin.test.update',$test->id)}}" method="POST">
        @csrf

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

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Test Name </label>
            <input name="name" placeholder="" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$test->name}}" >
    
        </div>
    
    
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Test details</label>
            <input name="details" placeholder=""  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$test->details}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input name="price" placeholder=""  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$test->price}}">
        </div>

        <div class="mb-3">
            
            <select name="category" class="form-select" aria-label="Default select example" >
                <option selected>Open category type*</option>
                
                @foreach ($data as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
              </select>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>


@endsection