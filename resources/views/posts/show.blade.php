@extends('main')

@section('title', "$post->title")

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>
			<p class="lead">{{ $post->body }}</p>
		</div>

		<div class="col-md-4">
			<div class="well">
				<div class="dl-horizontal">
					<label>Url : </label>
					<p><a href="{{ route('blog.single', $post->slug) }}">{{ route('blog.single', $post->slug) }}</a></p>
				</div>

				<div class="dl-horizontal">
					<label>Created at: </label>
					<p>{{ date('M j, Y H:ia', strtotime($post->created_at)) }}</p>
				</div>

				<div class="dl-horizontal">
					<label>Last updated: </label>
					<p>{{ date('M j, Y H:ia', strtotime($post->updated_at)) }}</p>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block'))  !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE', 'class' => 'has-confirm', 'data-message' => 'Delete this Thing?']) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

<script>
	$("form.has-confirm").submit(function (e) {
  		var $message = $(this).data('message');
  		if(!confirm($message)){
    		e.preventDefault();
  		}
	});
</script>

@endsection