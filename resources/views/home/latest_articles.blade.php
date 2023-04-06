<div class="world-latest-articles">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="title">
                <h5>Latest Articles</h5>
            </div>

            <!-- Single Blog Post -->
            @foreach($post as $posts)
                @if($posts->tag=='latest')
                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="post_images/{{ $posts->image }}" alt="">
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
                @endif
            @endforeach

        </div>


    </div>
</div>
