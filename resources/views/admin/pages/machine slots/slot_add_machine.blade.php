@extends('master')
@section('content')
    <h1>Add More Machine Slot</h1>


    <form action="{{route('machine.slot.store')}}" method="POST">
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
            <label for="exampleInputEmail1" class="form-label">Machine Name:</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Daily Use:</label>
            <input name="daily_use" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Slot:</label>
            <input name="slot" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
          </div>
          {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Photo:</label>
            <input name="photo" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          
          </div> --}}
          
          <button type="submit" class="btn btn-primary">Add</button>
    


@endsection