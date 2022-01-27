@extends('master')
@section('content')
    

<form action="{{route('admin.appointment.decline', $request_appointment->id)}}" method="post" class="container w-50 " style="margin-top:150px">

    @csrf

<div class="modal-body ">
    <div class="form-group">
        <label for="exampleInputName">Decline_Reason</label>
        <textarea type="text" name="reason" class="form-control" id="exampleInputDepartment" aria-describedby="DepartmentHelp" style="margin-right: 500px;"></textarea>
    </div>





</div>
<div class="modal-footer">
  {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
  <button type="submit" class="btn btn-info m-auto text-light" style="margin-right: 385px;">Decline</button>
</div>

</form>
@endsection