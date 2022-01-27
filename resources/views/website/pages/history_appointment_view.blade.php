@extends('website.master')


@section('content')
<h1>View Appointment</h1>


<p>Appointment Date: {{$appointments->date}} </p>
<p>Test Details: @foreach ($appointment_details as $detail)
    {{$detail->test->name}}
    
@endforeach</p>
<p>Total Amount:{{$appointments->total_price}}</p>
<p>Slot:{{$appointments->details->slots->name}}: {{$appointments->details->slots->startingtime}} - {{$appointments->details->slots->endingtime}}</p>

<p>View Report</p>


<input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">
<div class="row" id="divToPrint">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <img src="{{url('/uploads/report/',$appointments->upload_report)}}" alt="">
    </div>
    <div class="col-md-1"></div>

</div>


<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>

@endsection
