<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')

</head>
<body>
<div class="container-scroller">

    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->

    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                        <button type="button" class="close" style="float: right; border: none" data-dismiss="alert" aria-hidden="true">X</button>
                    </div>
                @endif

                <h1 class="text-center">Add post</h1>

                <form action="{{ url('edit_post',$post->id) }}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="mb-3">
                        <label>Post title</label>
                        <input class="form-control text-light" type="text"  placeholder="Post Title..." name="title"  required value="{{ $post->title }}">
                    </div>

                    <div class="mb-3">
                        <label>Post Details</label>
                        <textarea class="form-control text-light" rows="10" cols="10"  placeholder="Post Details..." name="details"  required>{{ $post->details }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label>Post Topic</label>
                        <select class="form-select" name="topic">
                            <option value="{{ $post->topic }}" selected>{{ $post->topic }}</option>

                            @foreach($topic as $topic)
                                <option value="{{ $topic->topic_name }}">{{ $topic->topic_name }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label>Post Author</label>
                        <input class="form-control text-light" type="text" placeholder="Post Author..." name="author" required value="{{ $post->author }}">
                    </div>

                    <div class="mb-3">
                        <label>Post Tag</label>
                        <input class="form-control text-light" type="text" placeholder="Post Tag..." name="tag" required value="{{ $post->tag }}">
                    </div>

                    <div class="mb-3">
                        <label>Post Image: </label>
                        <img src="/post_images/{{ $post->image }}" height="100" width="100">
                    </div>

                    <div class="mb-3">
                        <label>Update Post Image: </label>
                        <input type="file" name="image">
                    </div>


                    <button type="submit" class="btn btn-primary mb-3 btn-lg btn-block">Update Post</button>



                </form>


            </div>
            <!-- content-wrapper ends -->








            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

{{--ck editor--}}
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
    // let postTitle;
    // let postDetails;

    ClassicEditor
        .create(document.querySelector(
            '#postTitle'
        ))

        .then(editor => {
            title = editor;
        }).
    catch(error => {
        console.error(error);
    });

    ClassicEditor
        .create(document.querySelector(
            '#postDetails'
        ))

        .then(editor => {
            title = editor;
        }).
    catch(error => {
        console.error(error);
    });

</script>

<!-- plugins:js -->
@include('admin.script')
</body>
</html>
