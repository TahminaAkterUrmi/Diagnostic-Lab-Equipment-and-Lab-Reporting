@extends('master')
@section('content')
<h1>Add Equipment</h1>

<form action="{{route('equipment.store')}}" method="POST">
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
        <label for="exampleInputEmail1" class="form-label">Equipment Name</label>
        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter Equipment Name">
      
      </div>

      {{-- <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Picture</label>
        <input name="equipment_image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   placeholder="Enter Quantity">
      
      </div> --}}

      <button type="submit" class="btn btn-success">Add</button>

@endsection