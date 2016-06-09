@extends('layouts.app')

@section('content')
<div class="container col-md-12">

@include('alerts.errors')

{!!Form::open(['route' => 'venue.store','method'=>'POST'])!!}
<style>
.right {
    position: absolute;
    right: 5%;
    width: 120px;
    border: 1px solid #73AD21;
    padding: 10px;
}
</style>


<div class="right">{!!Form::submit('GUARDAR',['class' => 'btn btn-primary'])!!}
</div>

<br>
<br>
<br>
<br>

@include('venues.form')
{!!Form::close()!!}
</div>
@endsection
