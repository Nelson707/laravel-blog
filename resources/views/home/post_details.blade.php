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
                    <textarea name="comment" placeholder="join the conversation..." style="height: 150px; width: 700px; padding: 5px; border: 1px solid #33a6ec; border-radius: 5px"></textarea>
                    <br>
                    <input type="submit" class="btn btn-primary mt-2" value="Comment">
                </form>

                <div>
                    <h1 class="mt-5">All Comments</h1>
                    @foreach($comment as $comment)
                        <div>
                            <b>{{ $comment->name }}</b>
                            <p>{{ $comment->comment }}</p>
                            <a href="javascript:void(0);" onclick="reply(this)" data-CommentId="{{ $comment->id }}" style="color: #0a58ca">Reply</a>
                        </div>


                    @foreach($reply as $rep)
                        @if($rep->comment_id==$comment->id)
                            <div style="padding-left: 3%; padding-bottom: 10px; padding-top: 10px">
                                <b>{{ $rep->name }}</b>
                                <p style="color: grey">Replying to: {{ $comment->name }}</p>
                                <p>{{ $rep->reply }}</p>
                                <a href="javascript:void(0);" onclick="reply(this)" data-CommentId="{{ $comment->id }}" style="color: #0a58ca">Reply</a>
                            </div>
                        @endif
                    @endforeach

                    @endforeach
                </div>

                <div style="display: none" class="replyDiv">

                    <form action="{{ url('reply_comment') }}" method="post">
                        @csrf

                        <input type="text" name="commentId" id="commentId" hidden="">

                        <textarea name="reply" id="" style="height: 70px; width: 350px; padding: 5px; border: 1px solid #33a6ec; border-radius: 5px"></textarea>
                        <br>

                        <input type="submit" class="btn btn-primary" value="Reply">

                        <a href="javascript:void(0);" class="btn" onclick="reply_close(this)">Close</a>
                    </form>
                </div>

            </div>

        </div>

    </div>
</div>

<!-- ***** Footer Area Start ***** -->
@include('home.footer')
<!-- ***** Footer Area End ***** -->

<script type="text/javascript">
    function reply(caller)
    {
        document.getElementById('commentId').value = $(caller).attr('data-CommentId');

        $('.replyDiv').insertAfter($(caller));

        $('.replyDiv').show();
    }

    function reply_close(caller)
    {
        $('.replyDiv').hide();
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
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
