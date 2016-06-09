@extends('layouts.app')
@section ('content')
	<div class="container col-md-12">
	 <div class="portlet box green">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>Recordatorios y Tareas </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse"> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                                        <a href="javascript:;" class="reload"> </a>
                                        <a href="javascript:;" class="remove"> </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
	@include('alerts.success')
	<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
		<thead>
			<tr>
				<th>
					Tarea
				</th>
				<th align="center"  width="10%"><i class="fa fa-edit"></i></th>
				<th align="center" width="10%"><i class="icon-trash"></i></th>
			</tr>	
		</thead>
		<tbody>
		@foreach($tasks as $task)
		@can('owner', $task)
			<tr>
				<td>{{$task->name}}</td>
				
				<td>{{link_to_route('task.edit', $title ='Editar', $parameters = $task, $attributes = ['class'=>'btn btn-link'])}} 
				
				
				</td>
				<td> @include('tasks.delete')</td>
				
				
			</tr>

		@endcan
		</tbody>
		@endforeach
	</table>
	</div>
	</div>
@endsection


