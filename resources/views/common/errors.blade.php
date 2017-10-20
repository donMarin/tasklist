@if (count($errors) > 0)
	<div class="alert alert-danger">
	<strong>uuups, nešto je pošlo krivo</strong>
	<br><br>
		<ul>
			@foreach ($errorrs->all() as $errors)
				<li>{{ $errors }}</li>
			@endforeach
		
		</ul>
	</div>

@endif