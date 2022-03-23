<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>TITLE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


    <!-- Stylesheets -->
       <link href="{{ asset('assets/fontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/css/swiper.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/fontend/css/ionicons.css') }}" rel="stylesheet">

    <link href=" {{ asset('assets/fontend/css/common-css/bootstrap.css') }} " rel="stylesheet">

    <link href="{{ asset('assets/fontend/css/common-css/ionicons.css') }} " rel="stylesheet">
    <link href=" {{ asset('assets/fontend/layout-1/css/styles.css') }} " rel="stylesheet">

    <link href="{{ asset('assets/fontend/layout-1/css/responsive.css') }} " rel="stylesheet">
    <link href="{{asset('custom/style.css')}}" rel="stylesheet">
</head>
<body >

        @php 
                $prefix = Request::route()->getprefix();
                $route = Route::current()->getname();
                @endphp 

    <header>
        <div class="container-fluid position-relative no-side-padding">

            <a href="#" class="logo">eLearning</a>

            <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

            <ul class="main-menu visible-on-click" id="main-menu">
                <li class="{{ ($route == 'home')?'active':'' }}">
                    <a href="{{ route('home') }}">Home</a></li>
                <li class="{{ ($route == 'allCourses')?'active':'' }}">

                    <a href="{{ route('allCourses') }}">Courses</a></li>

                <li><a href="#">About</a></li>
            </ul><!-- main-menu -->

            <div class="src-area">
                
                <form method="GET" action="{{ route('search') }}">
                    <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                    <input value="{{ isset($queryString) ? 
                        $queryString : '' }}" name="query" class="src-input" type="text" placeholder="Type of search">
                </form>
            </div>

        </div><!-- conatiner -->
    </header>

 
   
    @yield('frontend_content')


    <footer>

        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                  
                        <p class="copyright">eLearning @ 2022. All rights reserved.</p>
                        <p class="copyright">Designed by <a href="https://www.artofcse.com/" target="_blank">ARTOFCSE</a>.Visit here <a href="https://www.artofcse.com/" target="_blank"></a></p>
                        <ul class="icons">
                            <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                        </ul>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

        

                <div class="col-lg-4 col-md-6">
                    <div class="footer-section">

                        <h4 class="title"><b>SUBSCRIBE</b></h4>
                        <div class="input-area">
                            <form>
                                <input class="email-input" type="text" placeholder="Enter your email">
                                <button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
                            </form>
                        </div>

                    </div><!-- footer-section -->
                </div><!-- col-lg-4 col-md-6 -->

            </div><!-- row -->
        </div><!-- container -->
    </footer>


    <!-- SCIPTS -->

    <script src="{{ asset('assets/fontend/common-js/jquery-3.1.1.min.js') }} "></script>

    <script src="{{ asset('assets/fontend/common-js/tether.min.js') }} "></script>

      <script src="{{ asset('assets/fontend/common-js/bootstrap.js') }} "></script>

    <script src="{{ asset('assets/fontend/common-js/scripts.js') }} "></script>

</body>
</html>