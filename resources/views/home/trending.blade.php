<div class="world-catagory-area mt-50">
    <ul class="nav nav-tabs" id="myTab2" role="tablist">
        <li class="title">What's Trending</li>
    </ul>

    <div class="tab-content" id="myTabContent2">

        <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
            <div class="row">

                @foreach($post as $posts)
                    @if($posts->tag=='trending')
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="post_images/{{ $posts->image }}">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">{{ $posts->tag }}</a></div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="{{ url('post_details', $posts->id) }}" class="headline">
                                        <h5>{{ $posts->title }}</h5>
                                    </a>
                                    <p>{{ Str::limit($posts->details, 100) }}</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">{{ $posts->author }}</a> on <a href="#" class="post-date">{{ $posts->created_at }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach



                <div class="col-12">
                    <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- ========= Single Catagory Slide ========= -->
                        <div class="single-cata-slide">
                            <div class="row">
                                @foreach($post as $posts)
                                    @if($posts->tag=='trending')
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="post_images/{{ $posts->image }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('post_details', $posts->id) }}" class="headline">
                                                        <h5>{{ Str::limit($posts->details, 100) }}</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">{{ $posts->author }}</a> on <a href="#" class="post-date">{{ $posts->created_at }}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- ========= Single Catagory Slide ========= -->
                        <div class="single-cata-slide">
                            <div class="row">
                                @foreach($post as $posts)
                                    @if($posts->tag=='trending')
                                        <div class="col-12 col-md-6">
                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                                <!-- Post Thumbnail -->
                                                <div class="post-thumbnail">
                                                    <img src="post_images/{{ $posts->image }}" alt="">
                                                </div>
                                                <!-- Post Content -->
                                                <div class="post-content">
                                                    <a href="{{ url('post_details', $posts->id) }}" class="headline">
                                                        <h5>{{ Str::limit($posts->details, 100) }}</h5>
                                                    </a>
                                                    <!-- Post Meta -->
                                                    <div class="post-meta">
                                                        <p><a href="#" class="post-author">{{ $posts->author }}</a> on <a href="#" class="post-date">{{ $posts->created_at }}</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
