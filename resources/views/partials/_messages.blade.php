@if (Session::has('success'))
    
	<div class="alert alert-success alert-dismissable fade in">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		<strong>Success:</strong> {{ Session::get('success') }}
	</div>

@endif

@if (count($errors) > 0)
	<div class="alert alert-danger alert-dismissable" role="alert">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		<strong>Error:</strong>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif