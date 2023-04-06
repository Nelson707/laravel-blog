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
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="world/style.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Header Area Start ***** -->
    @include('home.header')
    <!-- ***** Header Area End ***** -->

    <!-- ********** Hero Area Start ********** -->
    @include('home.hero')
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <!-- Catagory Area -->
                        @include('home.dont_miss')



                        <!-- Catagory Area -->
                        @include('home.trending')

                    </div>
                </div>

                <!-- ========== Sidebar Area ========== -->
                @include('home.sidebar')
            </div>

            <div class="row justify-content-center">
                <!-- ========== Single Blog Post ========== -->

                <!-- ========== Single Blog Post ========== -->

                <!-- ========== Single Blog Post ========== -->

            </div>

            @include('home.latest_articles')

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ***** Footer Area Start ***** -->
    @include('home.footer')
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="world/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="world/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="world/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="world/js/plugins.js"></script>
    <!-- Active js -->
    <script src="world/js/active.js"></script>

</body>

</html>
