<!-- HEADER -->
<header id="header">
    <!-- NAV -->
    <div id="nav">
        <!-- Top Nav -->
        <div id="nav-top">
            <div class="container">
                <!-- social -->
                <ul class="nav-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
                <!-- /social -->

                <!-- logo -->
                <div class="nav-logo">
                    <a href="index.html" class="logo"><img src="{{ asset('frontend/img/logo.png')}}" alt=""></a>
                </div>
                <!-- /logo -->

                <!-- search & aside toggle -->
                <div class="nav-btns">
                    <button class="aside-btn"><i class="fa fa-bars"></i></button>
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <div id="nav-search">
                        <form action="{{ route('blog.search') }}" method="get">
                            <input class="input" name="search" placeholder="Enter your search...">
                        </form>
                        <button class="nav-close search-close">
                            <span></span>
                        </button>
                    </div>
                </div>
                <!-- /search & aside toggle -->
            </div>
        </div>
        <!-- /Top Nav -->

        <!-- Main Nav -->
        <div id="nav-bottom">
            <div class="container">
                <!-- nav -->
                <ul class="nav-menu">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li class="has-dropdown">
                        <a href="">Kategori</a>
                        <div class="dropdown">
                            <div class="dropdown-body">
                                <ul class="dropdown-list">
                                @foreach($categories as $category)
                                    <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="{{ route('blog.list') }}">List Post</a></li>
                </ul>
                <!-- /nav -->
            </div>
        </div>
        <!-- /Main Nav -->

        <!-- Aside Nav -->
        <div id="nav-aside">
            <ul class="nav-aside-menu">
                <li><a href="{{ url('/') }}">Beranda</a></li>
                <li class="has-dropdown"><a>Kategori</a>
                    <ul class="dropdown">
                        @foreach($categories as $category)
                            <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="{{ route('blog.list') }}">List Post</a></li>
            </ul>
            <button class="nav-close nav-aside-close"><span></span></button>
        </div>
        <!-- /Aside Nav -->
    </div>
    <!-- /NAV -->
</header>
<!-- /HEADER -->