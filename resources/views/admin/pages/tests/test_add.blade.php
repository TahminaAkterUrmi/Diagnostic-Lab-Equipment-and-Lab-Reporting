@extends('master')
@section('content')
<form action="{{route('admin.test.store')}}" method="POST">
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
      <label for="exampleInputEmail1" class="form-label">Test Name</label>
      <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Test Details</label>
      <input name="details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
    </div>
{{-- for relation --}}
<select name="category" class="form-select" aria-label="Default select example" >
  <option selected>Open category type*</option>
  @foreach ($data as $item)
  <option value="{{$item->id}}">{{$item->name}}</option>
  @endforeach
</select>


<div class="form-group">
  {{-- for relation --}}
  <label for="">Assign Machine</label>
<select name="machine_id" class="form-control" aria-label="Default select example" >
  
  @foreach ($machines as $data)
  <option value="{{$data->id}}">{{$data->machine_name}}</option>
  @endforeach
  </select>
</div>

<div class="form-group">
  {{-- for relation --}}
  <label for="">Assign Equipements</label>
<select multiple name="equipement[]" class="form-control" aria-label="Default select example" >
  
  @foreach ($equipements as $eq)
  <option value="{{$eq->id}}">{{$eq->equipment_name}}</option>
  @endforeach
  </select>
</div>
   
    <div class="mb-3">
      <br>
        <label for="exampleInputPassword1" class="form-label"> Price </label>
        <input name="price"type="text" class="form-control" id="exampleInputPassword1">
      </div>
     
    <button type="submit" class="btn btn-primary">Add</button>
  </form>











@endsection