<div class="world-catagory-area">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="title">Don’t Miss</li>
    </ul>

    <div class="tab-content" id="myTabContent">

        <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">

                        <!-- Single Blog Post -->
                        @foreach($post as $posts)
                            @if($posts->tag=='dont miss')
                                <div class="single-blog-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="post_images/{{ $posts->image }}" height="400" width="400">
                                        <!-- Topic -->
                                        <div class="post-cta"><a href="#">{{ $posts->tag }}</a></div>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5>{{ $posts->title }}</h5>
                                        </a>
                                        <p>{{ Str::limit($posts->details, 100) }}</p>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p><a href="#" class="post-author">{{ $posts->author }}</a> on <a href="#" class="post-date">{{ $posts->created_at }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        <!-- Single Blog Post -->



                        <!-- Single Blog Post -->

                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <!-- Single Blog Post -->
                    @foreach($post as $posts)
                        @if($posts->tag=='dont miss')
                            <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="post_images/{{ $posts->image }}">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>{{ $posts->title }}</h5>
                                    </a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">{{ $posts->author }}</a> on <a href="#" class="post-date">{{ $posts->created_at }}</a></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    <!-- Single Blog Post -->


                    <!-- Single Blog Post -->


                    <!-- Single Blog Post -->

                </div>
            </div>
        </div>

    </div>
</div>
