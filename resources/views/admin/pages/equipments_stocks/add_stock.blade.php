@extends('master')
@section('content')
    <h1>Add Stock</h1>
    <form action="{{route('admin.stock.store')}}" method="POST">
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
          
      {{-- for relation --}}
      <select name="equipment_id" class="select form-control" aria-label="Default select example" >
        <option selected>Equipments*</option>
        
        @foreach ($equipments as $eq)
        <option value="{{$eq->id}}">{{$eq->equipment_name}}</option>
        @endforeach
     
        
      </select>
      <br>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Quantity</label>
        <input name="quantity" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      
      </div>
      
      <button type="submit" class="btn btn-success">Add Stock</button>
@endsection