@extends('frontend.layouts.master')
@section('content')
<div class="section">
	<!-- container -->
	<div class="container">
        <!-- row -->
		<div class="row">
			<div class="col-md-8">
				<!-- post -->
                @foreach ($posts as $post)
                    <div class="post post-row">
                        <a class="post-img" href="{{ route('blog.show', $post->slug) }}"><img src="{{ asset($post->image) }}" alt="{{ $post->title }}" ></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="{{ route('blog.category', $post->category->slug) }}">{{ $post->category->name }}</a>
                            </div>
                            <h3 class="post-title"><a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">{{ $post->user->name }}</a></li>
                                <li>{{ date('d F Y', strtotime($post->created_at))}}</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                        </div>
                    </div>
                @endforeach
				<!-- /post -->
				<div class="section-row loadmore text-center">
					{{ $posts->links() }}
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
@endsection