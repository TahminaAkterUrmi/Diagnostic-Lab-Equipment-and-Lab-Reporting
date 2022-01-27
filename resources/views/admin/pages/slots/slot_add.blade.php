@extends('master')
@section('content')

<h1>New Slot</h1>

<form action="{{route('admin.slotstore')}}" method="POST">
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
        <label for="exampleInputEmail1" class="form-label">Slot Name </label>
        <input name="name" placeholder="Enter Slot Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >

    </div>



    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Starting Time</label>
        <input name="startingtime" placeholder="Enter starting time"  type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Ending Time Time</label>
        <input name="endingtime" placeholder="Enter ending time"  type="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>




@endsection