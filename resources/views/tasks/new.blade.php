@extends('layouts.app')

@section('content')
<div class="container col-md-12">

@include('alerts.errors')


{!!Form::open(['route' => 'task.store','method'=>'POST'])!!}

@include('tasks.form')
{!!Form::submit('almacenar',['class' => 'btn btn-primary'])!!}

{!!Form::close()!!}
</div>
@endsection
