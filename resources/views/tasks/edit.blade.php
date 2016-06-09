@extends('layouts.app')

@section('content')
<div class="container col-md-12">

@include('alerts.errors')


{!!Form::model($task,['route' => ['task.update',$task],'method' => 'PUT'])!!}

@include('tasks.form')
{!!Form::submit('almacenar',['class' => 'btn btn-primary'])!!}

{!!Form::close()!!}
</div>
@endsection