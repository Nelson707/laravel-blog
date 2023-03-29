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

                <h1 class="text-center">All Posts</h1>

                <table class="table-responsive">
                    <tr class="bg-info">
                        <th class="text-dark">Title</th>
                        <th class="text-dark">Details</th>
                        <th class="text-dark">Topic</th>
                        <th class="text-dark">Author</th>
                        <th class="text-dark">Tag</th>
                        <th class="text-dark">image</th>
                        <th class="text-dark">Created at</th>
                    </tr>

                    @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->details }}</td>
                            <td>{{ $post->topic }}</td>
                            <td>{{ $post->author }}</td>
                            <td>{{ $post->tag }}</td>
                            <td></td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                    @endforeach
                </table>


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
@include('admin.script')
</body>
</html>
