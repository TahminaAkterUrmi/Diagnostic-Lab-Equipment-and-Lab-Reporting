@extends('master')
@section('content')
    <h1>Test Details</h1>


    <p>Test_Name: {{$test->name}}</p>
  
<p>price: {{$test->price}}</p>
<p>Machine Name:{{optional($test->machine)->machine_name}}</p>

<h6>Equipment Details</h6>
<p>Name:</p>
<p>Pieces:</p>

@endsection