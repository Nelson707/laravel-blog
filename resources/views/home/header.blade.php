<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="index.html"><img src="img/core-img/logo.png" alt="Logo"></a>
                    <!-- Navbar Toggler -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <!-- Navbar -->
                    <div class="collapse navbar-collapse" id="worldNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact</a>
                            </li>
                            @if (Route::has('login'))

                            @auth()
                                <li>
                                    <a class="nav-link" href="{{ url('/logout') }}">Logout</a>
                                </li>

                            @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Signup</a>
                            </li>
                            @endauth

                            @endif

                        </ul>
                        <!-- Search Form  -->
                        <div id="search-wrapper">
                            <form action="#">
                                <input type="text" id="search" placeholder="Search something...">
                                <div id="close-icon"></div>
                                <input class="d-none" type="submit" value="">
                            </form>
                        </div>

                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>