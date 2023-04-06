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

                <h1 class="text-center">All users</h1>

                <table class="table">
                    <tr class="bg-info">
                        <th class="text-dark">Name</th>
                        <th class="text-dark">Email</th>
                        <th class="text-dark">Phone</th>
                        <th class="text-dark">Role</th>
                        <th class="text-dark">Actions</th>
                    </tr>
                    @foreach($user as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        @if($user->userType=='1')
                            <td>Admin</td>
                        @else
                            <td>User</td>
                        @endif
                        <td>
                            <a href="#" class="btn btn-primary">Edit</a>
                            <a href="{{ url('delete_user',$user->id) }}" class="btn btn-danger" onclick="confirm('Are you sure you want to delete the selected user?')">Delete</a>
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
