<div class="col-12 col-md-8 col-lg-4">
    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
        <!-- Widget Area -->
        <div class="sidebar-widget-area">
            <h5 class="title">About World</h5>
            <div class="widget-content">
                <p>The mango is perfect in that it is always yellow and if it’s not, I don’t want to hear about it. The mango’s only flaw, and it’s a minor one, is the effort it sometimes takes to undress the mango, carve it up in a way that makes sense, and find its way to the mouth.</p>
            </div>
        </div>
        <!-- Widget Area -->
        <div class="sidebar-widget-area">
            <h5 class="title">Top Stories</h5>
            <div class="widget-content">
                <!-- Single Blog Post -->
                @foreach($post as $posts)
                    <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="post_images/{{ $posts->image }}" alt="">
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5 class="mb-0">{{ $posts->title }}</h5>
                            </a>
                        </div>
                    </div>
                @endforeach
                <!-- Single Blog Post -->

            </div>
        </div>


        <!-- Widget Area -->
        <div class="sidebar-widget-area">
            <h5 class="title">Stay Connected</h5>
            <div class="widget-content">
                <div class="social-area d-flex justify-content-between">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    <a href="#"><i class="fa fa-vimeo"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-google"></i></a>
                </div>
            </div>
        </div>
        <!-- Widget Area -->


        <div class="sidebar-widget-area">
            <h5 class="title">Today’s Pick</h5>
            <div class="widget-content">
                <!-- Single Blog Post -->
                <div class="single-blog-post todays-pick">
                    <!-- Post Thumbnail -->
                    <div class="post-thumbnail">
                        <img src="post_images/{{ $posts->image }}" alt="">
                    </div>
                    <!-- Post Content -->
                    <div class="post-content px-0 pb-0">
                        <a href="#" class="headline">
                            <h5>{{ $posts->title }}</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
