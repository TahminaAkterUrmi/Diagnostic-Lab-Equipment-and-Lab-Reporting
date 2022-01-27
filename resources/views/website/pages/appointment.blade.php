@extends('website.master')
@section('content')
<div class="row">

  {{-- @if(session()->has('message'))
  <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if($errors->any())
  @foreach($errors->all() as $er)
      <p class="alert alert-danger">{{$er}}</p>
  @endforeach
@endif --}}
 
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
<h2>Make a Appointment</h2>
<form action="{{route('website.appointmentstore')}}" method="POST" enctype="multipart/form-data">
  @csrf
   <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Appointment Date</label>
    <input name="date"type="date" class="form-control" id="date" aria-describedby="emailHelp" required>

  </div>
  
  <div class="input-group mb-3">
    <label class="input-group-text" for="inputGroupSelect01">Slot Set Up</label>
    
    <select class="form-select" id="inputGroupSelect01" name="slots" required>
      @foreach ($slots as $slot)
          <option value="{{($slot->id)}}">{{$slot->name}} {{$slot->startingtime}}-{{$slot->endingtime}}</option>
      @endforeach
      

      
    </select>    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prescription</label>
    <input name="image" type="file" class="form-control" id="image" aria-describedby="emailHelp">

  </div>
  {{-- //add to cart// --}}
 
   @php 
    $carts = session('cart');
    $total = 0;
   @endphp

<table style="width:100%" class=" table table-bordered">
  <tr>
    <th>Sl No</th>
    <th>Test Name</th>
    <th>Price</th>
    {{-- <th>Total</th> --}}
    <th width="200px">Action</th>
  </tr>

  @if(isset($carts))
  @if(!empty($carts))
  @foreach ($carts as $key=>$cart)   
   
  <tr>
    <th>{{$key+1}}</th>
      <td>{{$cart['name']}}</td>
      <td>{{$cart['price']}}</td>
<td><a  href="{{route('delete.addtocart', $key)}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-11.414L9.172 7.757 7.757 9.172 10.586 12l-2.829 2.828 1.415 1.415L12 13.414l2.828 2.829 1.415-1.415L13.414 12l2.829-2.828-1.415-1.415L12 10.586z"/></svg></td>
      @php 
    $total = $total+$cart['price'];
   @endphp 
    </tr>
    @endforeach
    @else
    no data found
    @endif
    <tr>
      <td colspan="2" class="text-center"><b>Total:</b></td>
      <td>{{$total}}</td>    
    </tr>
    @endif
  </table>


   <input type="hidden"  name="total" value="{{$total}}" >
   
  
  {{-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div> --}}
  <button type="submit" class="btn btn-warning">Submit Request</button>
</form>
<div class="col-md-2">
    
</div>
</body>
</html>

@endsection