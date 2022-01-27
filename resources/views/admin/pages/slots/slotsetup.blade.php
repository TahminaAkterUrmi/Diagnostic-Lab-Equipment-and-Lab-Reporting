@extends('master')
@section('content')
<h1>Appointment Slot List</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Slot Name</th>
        <th scope="col">Starting Time</th>
        <th scope="col">Ending Time</th>
        <th width="300px">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($slots as $key=>$slot)   
     
        <tr>
          <th scope="row">{{$key+1}}</th>
            <td>{{$slot->name}}</td>
            <td>{{$slot->startingtime}}</td>
            <td>{{$slot->endingtime}}</td>
            
            <td> <a  href="{{route('admin.slot.remove', $slot->id)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-11.414L9.172 7.757 7.757 9.172 10.586 12l-2.829 2.828 1.415 1.415L12 13.414l2.828 2.829 1.415-1.415L13.414 12l2.829-2.828-1.415-1.415L12 10.586z"/></svg></td>
          </tr>
          @endforeach
        
      
      <a href="{{route('admin.slotadd')}}" class="btn btn-success">Create new Slot</a>


@endsection