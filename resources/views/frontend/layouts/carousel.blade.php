<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        
        <div class="item active">
            <img src="{{ asset('frontend/img/hot-post-1.jpg')}}" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
                <p><strong>Los Angeles</strong></p>
                <p>LA is always so much fun!</p>
            </div>
        </div>
        
        <div class="item">
            <img src="{{ asset('frontend/img/hot-post-2.jpg')}}" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
                <p><strong>Chicago</strong></p>
                <p>Thank you, Chicago!</p>
            </div>
        </div>
        
        <div class="item">
            <img src="{{ asset('frontend/img/hot-post-3.jpg')}}" alt="New York" style="width:100%;">
            <div class="carousel-caption">
                <p><strong>New York</strong></p>
                <p>We love the Big Apple!</p>
            </div>
        </div>
        
    </div>
    
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

{{-- @section('style')
<style>
    /*
    Fade content bs-carousel with hero headers
    Code snippet by maridlcrmn (Follow me on Twitter @maridlcrmn) for Bootsnipp.com
    Image credits: unsplash.com
    */
    
    /********************************/
    /*       Fade Bs-carousel       */
    /********************************/
    .fade-carousel {
        position: relative;
        height: 100vh;
    }
    .fade-carousel .carousel-inner .item {
        height: 100vh;
    }
    .fade-carousel .carousel-indicators > li {
        margin: 0 2px;
        background-color: #f39c12;
        border-color: #f39c12;
        opacity: .7;
    }
    .fade-carousel .carousel-indicators > li.active {
        width: 10px;
        height: 10px;
        opacity: 1;
    }
    
    /********************************/
    /*          Hero Headers        */
    /********************************/
    .hero {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 3;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        text-shadow: 1px 1px 0 rgba(0,0,0,.75);
        -webkit-transform: translate3d(-50%,-50%,0);
        -moz-transform: translate3d(-50%,-50%,0);
        -ms-transform: translate3d(-50%,-50%,0);
        -o-transform: translate3d(-50%,-50%,0);
        transform: translate3d(-50%,-50%,0);
    }
    .hero .title {
        font-size: 6em;    
        font-weight: bold;
        margin: 0;
        padding: 0;
    }
    
    .hero .title .subtitle {
        font-size: 5em;    
        margin: 0;
        padding: 0;
    }
    
    .fade-carousel .carousel-inner .item .hero {
        opacity: 0;
        -webkit-transition: 2s all ease-in-out .1s;
        -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
        -o-transition: 2s all ease-in-out .1s; 
        transition: 2s all ease-in-out .1s; 
    }
    .fade-carousel .carousel-inner .item.active .hero {
        opacity: 1;
        -webkit-transition: 2s all ease-in-out .1s;
        -moz-transition: 2s all ease-in-out .1s; 
        -ms-transition: 2s all ease-in-out .1s; 
        -o-transition: 2s all ease-in-out .1s; 
        transition: 2s all ease-in-out .1s;    
    }
    
    /********************************/
    /*            Overlay           */
    /********************************/
    .overlay {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 2;
        /* background-color: #080d15; */
        opacity: .7;
    }
    
    /********************************/
    /*          Custom Buttons      */
    /********************************/
    /* .btn.btn-lg {padding: 10px 40px;}
    .btn.btn-hero,
    .btn.btn-hero:hover,
    .btn.btn-hero:focus {
        color: #f5f5f5;
        background-color: #1abc9c;
        border-color: #1abc9c;
        outline: none;
        margin: 20px auto;
    } */
    
    /********************************/
    /*       Slides backgrounds     */
    /********************************/
    .fade-carousel .slides .slide-1, 
    .fade-carousel .slides .slide-2,
    .fade-carousel .slides .slide-3 {
        height: 100vh;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
    }
    .fade-carousel .slides .slide-1 {
        background-image: url({{asset('frontend/img/hot-post-1.jpg')}}); 
    }
    .fade-carousel .slides .slide-2 {
        background-image: url(https://ununsplash.imgix.net/photo-1416339684178-3a239570f315?q=75&fm=jpg&s=c39d9a3bf66d6566b9608a9f1f3765af);
    }
    .fade-carousel .slides .slide-3 {
        background-image: url(https://ununsplash.imgix.net/photo-1416339276121-ba1dfa199912?q=75&fm=jpg&s=9bf9f2ef5be5cb5eee5255e7765cb327);
    }
    
    /********************************/
    /*          Media Queries       */
    /********************************/
    @media screen and (min-width: 980px){
        .hero { width: 980px; }    
    }
    @media screen and (max-width: 640px){
        .hero .title { font-size: 4em; }    
    }
</style>
@endsection --}}
{{-- <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>
    
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item slides active">
            <div class="slide-1"></div>
            <div class="hero">
                <hgroup>
                    <p class="title">We are creative</p>        
                    <span class="subtitle">Get start your next awesome project</span class="subtitle">
                    </hgroup>
                    <a href="{{ url('/#post') }}" class="btn btn-hero btn-lg">See all features</a>
                </div>
            </div>
            <div class="item slides">
                <div class="slide-2"></div>
                <div class="hero">        
                    <hgroup>
                        <p class="title">We are smart</p>        
                        <span class="subtitle">Get start your next awesome project</span class="subtitle">
                        </hgroup>
                        <a href="{{ url('/#post') }}">Oh</a>       
                        <a href="{{ url('/#post') }}" class="btn btn-hero btn-lg">See all features</a>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">        
                        <hgroup>
                            <p class="title">We are amazing</p>        
                            <span class="subtitle">Get start your next awesome project</span class="subtitle">
                            </hgroup>
                            <a href="{{ url('/#post') }}" class="btn btn-hero btn-lg">See all features</a>
                        </div>
                    </div>
                </div> 
            </div> --}}
            {{-- <div id="hot-post" class="row hot-post shadow">
                <div class="post post-thumb">
                    <a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/hot-post-1.jpg') }}" alt=""></a>
                    <div class="post-body">
                        <div class="post-category">
                            <a href="category.html">Lifestyle</a>
                        </div>
                        <h3 class="post-title title-lg"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                        <ul class="post-meta">
                            <li><a href="author.html">John Doe</a></li>
                            <li>20 April 2018</li>
                        </ul>
                    </div>
                </div>
            </div> --}}
            
            {{-- <div id="hot-post" class="row hot-post shadow">
                
                <div class="col-md-8 hot-post-left">
                    <!-- post -->
                    <div class="post post-thumb">
                        <a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/hot-post-1.jpg')}}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title title-lg"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
                <div class="col-md-4 hot-post-right">
                    <!-- post -->
                    <div class="post post-thumb">
                        <a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/hot-post-2.jpg')}}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /post -->
                    
                    <!-- post -->
                    <div class="post post-thumb">
                        <a class="post-img" href="blog-post.html"><img src="{{ asset('frontend/img/hot-post-3.jpg')}}" alt=""></a>
                        <div class="post-body">
                            <div class="post-category">
                                <a href="category.html">Fashion</a>
                                <a href="category.html">Lifestyle</a>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                            <ul class="post-meta">
                                <li><a href="author.html">John Doe</a></li>
                                <li>20 April 2018</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /post -->
                </div>
                <!-- /container -->
            </div> --}}