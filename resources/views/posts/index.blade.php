@extends('main')

@section('title', 'All Posts')

@section('content')
	
	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>

		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<hr>
		<div class="col-md-12">
			<hr>
		</div>
		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>#</th>
						<th>Title</th>
						<th>Body</th>
						<th>Created At</th>
						<th></th>
					</thead>
					<tbody>
						
						@foreach ($posts as $post)
							<tr>
								<td>{{ $post->id }}</td>
								<td><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></td>
								<td>{{ substr($post->body, 0, 20) }}{{ strlen($post->body) > 20 ? "..." : "" }}</td>
								<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
								<td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm">Edit</a></td>
							</tr>
						@endforeach

					</tbody>
				</table>
				<div class="text-center">
					{!! $posts->links(); !!}
				</div>
			</div>
		</div>
	</div>

@endsection