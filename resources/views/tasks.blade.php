@extends('layout.app')

@section('content')
	<div class="panel-body">
		<!--mjesto za prikaz grešaka -->
		@include('common.errors')
		
		<!--webobrazac za novi Task -->
		<form action="/task" method="POST" class="form-horizontal">
		{{ csrf_field()  }}
		
		
		<!-- task naziv-->
	<div class="form-group">
			<label for="task" class="col-sm-3 control-label">Task</label>
			
			<div class="col-sm-6">
				<input type="text" name="name" id="task-name" class="form-control">
			</div>
		
		<!-- gumb za dodavanje task-->
		<div class="form-group">
			<div class="col-sm-offset-3 col-sm-6">
				<button type="submit" class="btn btn-default">
					<i class="fa fa-plus"></i> Dodaj task
				</button>
			</div>
		</div>
		</form>
		
	</div>
@endsection