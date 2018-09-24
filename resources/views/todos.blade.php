@extends('layout.master')
@section('data')
	
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="create/todo" method="POST">

				{{ csrf_field() }}
				<input type="text" class="form-control input-lg" name="todo" placeholder="Create a new Todo">	
			</form>
			
			
		</div>
	</div>
   	<br> 
    @forelse($todos as $todo)
    	{{ $todo->todo }} <a href="{{route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger">x</a>
    	<a href="{{route('todo.update',['id' => $todo->id])}}" class="btn btn-info">update</a>
    	
    	@if(!$todo->completed)
    		<a href="{{route('todos.completed',['id' => $todo->id])}}" class="btn btn-success">Mark as Completed</a>
		@else
			<span class="text-success">Completed!</span>
    	@endif

    	<hr>

    @empty
    	<p>Oops! Sorry No Todo created.</p>
    @endforelse
		

@stop