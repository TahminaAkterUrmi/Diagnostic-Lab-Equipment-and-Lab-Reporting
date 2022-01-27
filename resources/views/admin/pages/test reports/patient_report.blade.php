@extends('master')
@section('content')

<h1>Patient Report</h1>

<form  action="{{route('admin.report.update', $report->id)}}" method="POST" enctype="multipart/form-data">
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
    <label for="exampleInputEmail1" class="form-label">Upload Report</label>
    <input name="report" type="file" class="form-control" id="image" aria-describedby="emailHelp">

  </div>
   <br>
   <button type="submit" class="btn btn-info">Upload</button>





</form>






    
@endsection