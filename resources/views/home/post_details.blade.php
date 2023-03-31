<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>World - Blog &amp; Magazine Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('world/style.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>

<!-- ***** Header Area Start ***** -->
@include('home.header')
<!-- ***** Header Area End ***** -->


<div class="main-content-wrapper section-padding-100">
    <div class="container">
        <div class="post-content">

            <div>
                <img src="/post_images/{{ $post->image }}" class="img-fluid img-thumbnail">
            </div>

            <div>
                <div class="text-muted mb-3 mt-3" style="display: flex">
                    <div style="color: red; margin-right: 10px">{{ $post->author }}</div> <div>{{ $post->created_at }}</div>
                </div>

                <div class="mb-3">
                    <h1>{{ $post->title }}</h1>
                </div>

                <div style="font-family: system-ui; font-size: 20px">
                    {{ $post->details }}
                </div>
            </div>


            <div style="margin-top: 50px">
                <h1>Comments</h1>
                <form action="{{ url('add_comment') }}" method="post">
                    @csrf
                    <textarea name="comment" placeholder="join the conversation..." style="height: 150px; width: 700px; padding: 5px; border: 1px solid #33a6ec; border-radius: 5px" data-CommentId="{{ $comment->id }}"></textarea>
                    <br>
                    <input type="submit" class="btn btn-primary mt-2" value="Comment">
                </form>

                <div>
                    <h1 class="mt-5">All Comments</h1>
                    @foreach($comment as $comment)
                        <div>
                            <b>{{ $comment->name }}</b>
                            <p>{{ $comment->comment }}</p>
                            <a href="javascript:void(0);" onclick="reply(this)">Reply</a>
                        </div>
                    @endforeach

                    <div style="padding-left: 3%; padding-bottom: 10px; padding-top: 10px">
                        <b>Nelson</b>
                        <p>This is an answer to a comment</p>
                        <a href="javascript:void(0);" onclick="reply(this)">Reply</a>
                    </div>
                </div>

                <div style="display: none" class="replyDiv">
                    <input type="text" name="" id="">
                    <form action="{{ url('reply_comment') }}" method="post">
                        @csrf
                        <textarea name="reply" id="" style="height: 70px; width: 350px; padding: 5px; border: 1px solid #33a6ec; border-radius: 5px"></textarea>
                        <br>
                        <a href="javascript:void(0);" class="btn btn-primary">Reply</a>

                        <a href="javascript:void(0);" class="btn" onclick="reply_close(this)">Close</a>
                    </form>
                </div>

            </div>

        </div>

    </div>
</div>

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <a href="#"><img src="img/core-img/logo.png" alt=""></a>
                    <div class="copywrite-text mt-30">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <p>Proudly distributed by <a href="https://themewagon.com" target="_blank">ThemeWagon</a></p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <ul class="footer-menu d-flex justify-content-between">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Gadgets</a></li>
                        <li><a href="#">Video</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer-single-widget">
                    <h5>Subscribe</h5>
                    <form action="#" method="post">
                        <input type="email" name="email" id="email" placeholder="Enter your mail">
                        <button type="button"><i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ***** Footer Area End ***** -->

<script type="text/javascript">
    function reply(caller)
    {
        $('.replyDiv').insertAfter($(caller));

        $('.replyDiv').show();
    }

    function reply_close(caller)
    {
        $('.replyDiv').hide();
    }
</script>

<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="{{ asset('world/js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('world/js/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('world/js/bootstrap.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ asset('world/js/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('world/js/active.js') }}"></script>

</body>

</html>
