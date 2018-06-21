@extends('main')

@section('title', 'Homepage')


@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron">
        <h1>Welcome to my Blog</h1>
        <p class="lead">Thank you for visiting. Let check our popular posts here.</p>
        <a href="#" class="btn btn-primary btn-lg">Popular Posts</a>
      </div>
    </div>
  </div> <!-- end Header block -->

  <div class="row">
    <div class="col-md-8">
      
      @foreach($posts as $post)

        <div class="post wow slideInLeft">
          <h3>{{ $post->title }}</h3>
          <p>{{ substr($post->body, 0, 100) }}{{ strlen($post->body) >100 ? "..." : "" }}</p>
          <a href="{{ route('blog.single', $post->slug) }}" class="btn btn-primary">Read More</a>
        </div>

        @if (!$loop->last)
            <hr>
        @endif

      @endforeach

    </div> <!-- end Content -->

    <div class="col-md-3 col-md-offset-1">
      <h2>Sidebar</h2>
    </div> <!-- end Sidebar -->
  </div> <!-- end Main -->
@stop