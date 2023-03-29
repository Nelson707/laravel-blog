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

                <h1 class="text-center">Add Topic</h1>

                <form class="row g-3" action="{{ url('create_topic') }}" method="post">
                    @csrf
                    <input class="form-control" type="text" placeholder="Enter Topic" aria-label="default input example" style="color: #fff" name="topic">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Add Topic</button>
                    </div>
                </form>

                <h1 class="text-center">All Topics</h1>

                <table class="table">
                    <tr class="bg-info">
                        <th class="text-dark">Topic Name</th>
                        <th class="text-dark">Actions</th>
                    </tr>

                    @foreach($data as $data)
                        <tr>
                            <td>{{ $data->topic_name }}</td>
                            <td>
                                <a onclick="return confirm('Are you sure you want to delete this topic?')" href="{{ url('delete_topic', $data->id) }}" class="btn btn-danger">Delete</a>
                            </td>
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
