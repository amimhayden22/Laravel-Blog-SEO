<!-- FOOTER -->
<footer id="footer">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <div class="footer-logo">
                        <a href="index.html" class="logo"><img src="{{ asset('frontend/img/logo-alt.png') }}" alt=""></a>
                    </div>
                    <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
                    <ul class="contact-social">
                        <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="social-google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="social-instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Categories</h3>
                    <div class="category-widget">
                        <ul>
                            @foreach($categories as $category)
                                <li><a href="{{ route('blog.category', $category->slug) }}">{{ $category->name }} <span>{{ $category->posts->count() }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Tags</h3>
                    <div class="tags-widget">
                        <ul>
                            @foreach ($tags as $tag)
                                <li><a href="{{ route('blog.tag', $tag->slug) }}">{{$tag->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <h3 class="footer-title">Newsletter</h3>
                    <div class="newsletter-widget">
                        <form>
                            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
                            <input class="input" name="newsletter" placeholder="Enter Your Email">
                            <button class="primary-button">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

        <!-- row -->
        <div class="footer-bottom row">
            <div class="col-md-6 col-md-push-6">
                <ul class="footer-nav">
                    <li><a href="{{ url('/') }}">Beranda</a></li>
                    <li><a href="{{ route('blog.list') }}">List Post</a></li>
                    <li><a href="{{ url('/') }}">Kontak Kami</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-md-pull-6">
                <div class="footer-copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
                    All rights reserved <br> This template is made with 
                    <i class="fa fa-heart-o" aria-hidden="true"></i> by 
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</footer>
<!-- /FOOTER -->