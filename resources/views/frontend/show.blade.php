@extends('frontend.layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="section-title">
            <h2 class="title">{{$post->category->name}}</h2>
        </div>
    </div>
    <!-- post -->
    <div class="col-md-12">
        {{-- share post in medsos --}}
        <div class="section-row">
            <div class="post-share">
                <a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
                <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                <a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
                <a href="#"><i class="fa fa-envelope"></i><span>Email</span></a>
            </div>
        </div>
        {{-- thumbnail from post --}}
        <div class="section-row">
            <div class="post-body">
                <figure>
                    <img src="{{ asset($post->image) }}" alt="">
                </figure>
            </div>
        </div>
        {{-- content from post --}}
        <div class="section-row">
            <div class="post-body">
                <h3 class="post-title title">
                    <a href="blog-post.html">{{ $post->title }}</a>
                </h3>
                <ul class="post-meta">
                    <li><a href="author.html">{{ $post->user->name }}</a></li>
                    <li>{{ date('d F Y', strtotime($post->created_at))}}</li>
                </ul>
                <hr>
                <p>
                    {!! $post->content !!}
                </p>
            </div>
        </div>
        {{-- Tags from post --}}
        <div class="section-row">
            <div class="post-tags">
                <ul>
                    <li>TAGS IN:</li>
                    @foreach ($post->tags as $tag)
                    <li><a href="#">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- About author --}}
        <div class="section-row">
            <div class="section-title">
                <h3 class="title">About <a href="author.html">{{$post->user->name}}</a></h3>
            </div>
            <div class="author media">
                <div class="media-left">
                    <a href="author.html">
                        <img class="author-img media-object" src="{{ asset('frontend/img/avatar-1.jpg') }}" alt="">
                    </a>
                </div>
                <div class="media-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    <ul class="author-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- Show reply --}}
        {{-- <div class="section-row">
            <div class="section-title">
                <h3 class="title">3 Comments</h3>
            </div>
            <div class="post-comments">
                <!-- comment -->
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="./img/avatar-2.jpg" alt="" data-pagespeed-url-hash="1211328891" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h4>John Doe</h4>
                            <span class="time">5 min ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="reply">Reply</a>
                        <!-- comment -->
                        <div class="media media-author">
                            <div class="media-left">
                                <img class="media-object" src="./img/avatar-1.jpg" alt="" data-pagespeed-url-hash="916828970" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>John Doe</h4>
                                    <span class="time">5 min ago</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <a href="#" class="reply">Reply</a>
                            </div>
                        </div>
                        <!-- /comment -->
                    </div>
                </div>
                <!-- /comment -->
                <!-- comment -->
                <div class="media">
                    <div class="media-left">
                        <img class="media-object" src="./img/avatar-3.jpg" alt="" data-pagespeed-url-hash="1505828812" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                    </div>
                    <div class="media-body">
                        <div class="media-heading">
                            <h4>John Doe</h4>
                            <span class="time">5 min ago</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#" class="reply">Reply</a>
                    </div>
                </div>
                <!-- /comment -->
            </div>
        </div> --}}
        {{-- Send reply for post --}}
        <div class="section-row">
            <div class="section-title">
                <h3 class="title">Leave a reply</h3>
            </div>
            <form class="post-reply">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="input" type="text" name="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="input" type="email" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <input class="input" type="text" name="website" placeholder="Website">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="input" name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button class="primary-button">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection