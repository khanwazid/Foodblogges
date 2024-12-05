<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodeiblog | {{ $post->title }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <style>
        .custom-account-link {
            color: orange;
            font-style: italic;
            text-decoration: none;
            position: relative;
        }

        .custom-account-link::after {
            content: '';
            display: block;
            width: 180%;
            height: 4px;
            background-color: yellow;
            position: absolute;
            bottom: -8px;
            left: -10;
        }

       
        .form-control {
            width: 80%; /* Set the input fields to 80% width */
            margin-bottom: 15px;
        }

        .breadcrumb__text h2 {
            color: orange; /* Make "My Account" text orange */
        }
        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }


        
/

    </style>
</head>

<body>
   

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                       
                    </div>
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{url('/list/post')}}">Back</a></li>
                               {{--  <li><a href="{{url('/index')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Header Content -->
         {{--  <div class="container">
            <div class="row align-items-center">
                <!-- User/Profile Section -->
               <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        @if(Auth::check())
                        <h5 class="font-weight-bold">{{ Auth::user()->username }}</h5>
                        <a href="{{ route('profile') }}" class="custom-account-link">My Account</a>
                        @else
                        <a href="{{ url('/signin') }}" class="primary-btn">Subscribe</a>
                        @endif
                    </div>
                </div> 
                <!-- Logo Section -->
                <div class="col-lg-6 col-md-6">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <!-- Social Section -->
                <div class="col-lg-3 col-md-3">
                    <div class="header__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-envelope-o"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <section class="contact spad">
        <div class="container">
            <div class="contact__text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                           {{--   <h2>Home:My Account</h2>
                            @if(Auth::check())
                            <!-- Logout Form -->
                            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                                @csrf
                                <button type="submit" class="logout-button">Logout</button>
                            </form>
                        @endif --}}
                        <section class="contact spad">
                            <div class="container">
                                <div class="contact__text">
                                    <div class="breadcrumb__text">
                                    <div class="row">
                                        <div class="col-lg-12">
                            <div class="breadcrumb__option">
                                <a href="#">Home</a>
                                <span>My Account</span>
                            </div>
                        </div>
                      
                                                       
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    
                                    <div class="post-content">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="categories__post__item">
                                                    <!-- Check if the post has a header image -->
                                                    @if($post->header_pic)
                                                        <div class="categories__post__item__pic set-bg" 
                                                             data-setbg="{{ asset('storage/' . $post->header_pic) }}">
                                                            <div class="post__meta">
                                                                <h4>{{ $post->created_at->format('d') }}</h4>
                                                                <span>{{ $post->created_at->format('M') }}</span>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    
                                                    <div class="categories__post__item__text">
                                                        <!-- Display categories associated with the post -->
                                                        <p><strong>By:</strong> {{ $post->user->username }}</p>
                                                        <ul class="post__label--large">
                                                            @foreach(explode(',', $post->categories) as $category)
                                                                <li>{{ trim($category) }}</li>
                                                            @endforeach
                                                        </ul>
                                                        
                                                        <!-- Display the title of the post -->
                                                        <h3>{{ $post->title }}</h3>
                                                        
                                                        <!-- Display additional information about the post -->
                                                        <ul class="post__widget">
                                                            <li><i class="fa fa-clock-o"></i> {{ $post->read_time }} min read</li>
                                                            <li><i class="fa fa-cutlery"></i> Serves {{ $post->serves }}</li>
                                                            <li><i class="fa fa-hourglass-half"></i> Prep {{ $post->prep_time }} min</li>
                                                        </ul>
                                                        
                                                        <!-- Display the description (shortened to 150 characters) -->
                                                        <p>{{ Str::limit($post->description, 150) }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        
    </section>
                                                     


    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="footer__instagram">
                <div class="footer__instagram__avatar">
                    <div class="footer__instagram__avatar--pic">
                        <img src="{{ asset('img/footer/instagram-avatar.jpg') }}" alt="">
                    </div>
                    <div class="footer__instagram__avatar--text">
                        <h5>@ foodieblog</h5>
                        <span>23,7k follower</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="{{ asset('img/footer/ip-1.jpg') }}"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="{{ asset('img/footer/ip-2.jpg') }}"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="{{ asset('img/footer/ip-3.jpg') }}"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="{{ asset('img/footer/ip-4.jpg') }}"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="{{ asset('img/footer/ip-5.jpg') }}"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="{{ asset('img/footer/ip-6.jpg') }}"></div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__text">
                        <div class="footer__logo">
                            <a href="#"><img src="img/logo.png" alt=""></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut<br /> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo viverra<br /> maecenas accumsan lacus vel facilisis. </p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                    <div class="footer__copyright">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    

        
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>



</body>

</html>

