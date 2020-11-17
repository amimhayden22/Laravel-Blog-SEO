@extends('frontend.layouts.master')
@section('carousel')
	<div class="section">
		<div class="container">
			@include('frontend.layouts.carousel')
		</div>
	</div>
@endsection
@section('content')
	<div class="row">
		<div class="col-md-12">
			<div class="section-title">
				<h2 class="title" id="post">Postingan Terbaru</h2>
			</div>
		</div>
		<!-- post -->
		@foreach($posts as $post)
			<div class="col-md-6">
				<div class="post">
					<a class="post-img" href="{{ route('blog.show', $post->slug) }}"><img src="{{ asset($post->image) }}" alt="" style="height: 200px"></a>
					<div class="post-body">
						<div class="post-category">
							<a href="{{ route('blog.category', $post->category->name) }}">{{ $post->category->name }}</a>
						</div>
						<h3 class="post-title"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h3>
						<ul class="post-meta">
							<li><a href="#">{{ $post->user->name }}</a></li>
							<li>{{ $post->created_at->diffForHumans() }}</li>
						</ul>
					</div>
				</div>
			</div>
		@endforeach
	</div>
@endsection