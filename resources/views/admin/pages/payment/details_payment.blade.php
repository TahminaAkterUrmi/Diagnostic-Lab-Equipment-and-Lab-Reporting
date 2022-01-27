@extends('master')
@section('content')
    <h1>Payment Details</h1>


<form action="{{route('store.payment', $appointment->id)}}" method="POST">
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
    <div class="form-group">
      {{-- <label for="exampleFormControlInput1">Appointment Id</label> --}}
      <input hidden name="appointment_id" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Patient Name</label>
        <input readonly value="{{$appointment->user->name}}" name="patient_name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Select Payment Method</label>
      <select name="method" class="form-control" id="exampleFormControlSelect1">
        <option>Bkash</option>
        <option>Rocket</option>
        <option>Nogadh</option>
        <option>Bank</option>

      </select>
      <div class="form-group">
        <label for="exampleFormControlInput1">Transcation Id</label>
        <input name="transcation_id" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Transcation Date</label>
        <input name="transcation_date" type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Total_Amount</label>
        <input readonly value="{{$appointment->total_price}}" name="total_amount" type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Current Paid</label>
        <input name="current_payment" required type="number" class="form-control" max="{{$appointment->total_price-$appointment->total_paid}}" id="exampleFormControlInput1" placeholder="{{$appointment->total_price-$appointment->total_paid}}">
      </div>
     
    </div>
    <br>
    <button type="submit" class="btn btn-success"> Submit</button>
  </form>






@endsection