@extends('layout.master')
@section('data')
	
	<h2>Update Todo</h2>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
			<form action="{{route('todo.save',['id'=>$todo->id])}}" method="POST">

				{{ csrf_field() }}
				<input type="text" class="form-control input-lg" name="todo" value="{{$todo->todo}}" placeholder="Create a new Todo">	
			</form>
			
			
		</div>
	</div>
   	
		

@stop