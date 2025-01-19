<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodeiblog | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">


    <style>
 
.header__btn h5 {
    color: #000000;
    text-transform: uppercase;
}

.custom-account-link {
    color: #f4952f; 
}

.custom-account-link:hover {
    color: black; /* Change the color to orange on hover */
}
.header__btn {
    text-align: left;
    padding: 15px 0;
}

.header__btn h5 {
    margin-bottom: 1px;
    color: #333;
    font-size: 16px;
}

.custom-account-link {
    display: inline-block;
    font-size: 16px;
    text-decoration: none;
    transition: color 0.3s ease;
}

.custom-account-link:hover {
    color: #e67e22 !important;
    text-decoration: none;
}

.primary-btn {
    display: inline-block;
    padding: 8px 20px;
    background-color: #f4952f;
    color: white;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.primary-btn:hover {
    background-color: #e67e22;
    color: white;
    text-decoration: none;
}

.font-weight-bold {
    font-weight: 600;
    margin: 0;
    font-size: 16px;
}


           .logout-button {
    display: inline-block;
    background-color: #f4952f;
    color: white;
    padding: 8px 16px;
    border-radius: 0px;
    text-decoration: none;
    margin-bottom: 10px;
    float: right;
    margin-top: -30px;
    border: none;  /* This removes the border */
    cursor: pointer; /* This adds a pointer cursor on hover */
}

.logout-button:before {
    content: '←';
    font-size: 18px;
    margin-right: 5px;
}
.logout-button:hover {
    background-color: darkorange;
    transform: translateX(-3px);
}
    </style>
</head>

<body>

    @if (session('success'))
    <div id="success-message" class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div id="error-message" class="alert alert-danger" style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 5px; margin: 10px 0;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<script>
    // Function to fade out an element
    function fadeOutMessage(elementId) {
        setTimeout(function() {
            const message = document.getElementById(elementId);
            if (message) {
                message.style.transition = "opacity 1s ease";
                message.style.opacity = 0; // Gradually fades out
                setTimeout(function() {
                    message.style.display = 'none'; // Remove from display after fade-out
                }, 1000); // Wait for 1 second for the fade-out effect
            }
        }, 3000); // Display for 3 seconds before starting fade-out
    }

    // Apply fade-out to success and error messages
    fadeOutMessage('success-message');
    fadeOutMessage('error-message');
</script>

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="./hoindexme.html"><img src="img/humberger/humberger-logo.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
               
               
                <li><a href="{{url('/reguster')}}">Register</a></li>
                <li><a href="{{url('/login')}}">Login</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="humberger__menu__about">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>About me</h6>
            </div>
            <img src="img/humberger/humberger-about.jpg" alt="">
            <h6>Hi every one! I,m Lena Mollein.</h6>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            <div class="humberger__menu__about__social sidebar__item__follow__links">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-envelope-o"></i></a>
            </div>
        </div>
        <div class="humberger__menu__subscribe">
            <div class="humberger__menu__title sidebar__item__title">
                <h6>Subscribe</h6>
            </div>
            <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
            <form action="#">
                <input type="text" class="email-input" placeholder="Your email">
                <label for="agree-check">
                    I agree to the terms & conditions
                    <input type="checkbox" id="agree-check">
                    <span class="checkmark"></span>
                </label>
                
            </form>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-1 col-6 order-md-1 order-1">
                        <div class="header__humberger">
                           
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                
                                
                          {{-- a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>  --}}
                                <li><a href="{{url('/signup')}}">Register</a></li>
                                <li><a href="{{url('/login')}}">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        <div class="header__search">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                   
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__logo">
                        <a><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
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
   
                
            </div>
    <!-- Header Section End -->
   
    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="about__text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <h2>Please  Register or Login  To View the Post</h2>
                           
                            <div class="login-prompt">
                                <h2>🌟 Unlock a World of Delicious Recipes!</h2>
                                <p class="subtitle">Join our foodie community to discover amazing recipes and cooking tips</p>
                              {{--    <div class="cta-buttons">
                                    <a href="{{ route('login') }}" class="btn-login">Sign In</a>
                                    <a href="{{ route('register') }}" class="btn-register">Create Account</a>
                                </div>    .login-prompt {
    text-align: center;
    padding: 40px 20px;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
    max-width: 600px;
    margin: 40px auto;
}

.login-prompt h2 {
    color: #f4952f;
    font-size: 2.2rem;
    margin-bottom: 15px;
}

.subtitle {
    color: #666;
    font-size: 1.2rem;
    margin-bottom: 25px;
}

.cta-buttons {
    margin: 30px 0;
}

.btn-login, .btn-register {
    display: inline-block;
    padding: 12px 30px;
    margin: 0 10px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: bold;
    transition: transform 0.3s ease;
}

.btn-login {
    background: #f4952f;
    color: white;
}

.btn-register {
    background: white;
    color: #f4952f;
    border: 2px solid #f4952f;
}

.benefits {
    text-align: left;
    max-width: 400px;
    margin: 0 auto;
}

.benefits ul {
    list-style: none;
    padding: 0;
}

.benefits li {
    margin: 10px 0;
    font-size: 1.1rem;
    color: #555;
}
 --}}
                                <div class="benefits">
                                    <p>✨ Get exclusive access to:</p>
                                    <ul>
                                        <li>🍳 Premium recipes</li>
                                        <li>📝 Save your favorites</li>
                                        <li>💬 Share cooking tips</li>
                                        <li>👨‍🍳 Join our community</li>
                                </div>
                            </div>
                            
                      {{--     <div class="breadcrumb__option">
                                <a href="#">Home</a>
                                <span>About</span>
                                
                            </div>   --}} 
                        </div>
                    </div>
                </div>
                 
                            
                            
                        </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about__pic__item__large">
                            <img src="img/about/about-1.jpg" alt="">
                        </div>
                        <div class="about__pic">
                            <div class="about__pic__item">
                                <img src="img/about/about-2.jpg" alt="">
                            </div>
                            <div class="about__pic__item">
                                <img src="img/about/about-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__right__text">
                            <h2>Hello every one Welcome to Foodyblog !!!</h2>
                         {{--   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, incididunt ut labore et dolore
                                magna aliqua accusantium doloremque laudantium.</p>
                            <ul>
                                <li>Class aptent taciti sociosqu ad litora torquent per conubia nostra</li>
                                <li>Inceptos himenaeos mauris.Integer gravida tincidunt accumsan.</li>
                                <li>Vestibulum nulla mauris, condimentum id felis ac, volutpat volutpat mi.</li>
                                <li>In vitae tempor velit of the impenetrable foliage.</li>
                            </ul>
                            <p>Vestibulum commodo nulla eu augue tincidunt rutrum. Suspendisse interdum lacus in ligula
                                finibus luctus. Vivamus mollis libero vel orci finibus, sit amet malesuada lectus
                                aliquam. In auctor viverra eros. Maecenas elit mi, consectetur nec, sollicitudin sed
                                arcu. Curabitur tempor tempor pharetra ridiculus mus porta tincidunt, purus enim
                                laoreet.</p> --}}
                                <p>Welcome to our culinary journey where we explore the art of cooking and the joy of sharing delicious meals. Our passion for food drives us to create recipes that not only satisfy hunger but also bring people together around the table. From traditional family recipes to modern gastronomy, we're here to inspire your cooking adventures.</p>

<ul>
    <li>Discover mouthwatering recipes from around the world</li>
    <li>Learn professional cooking techniques and kitchen secrets</li>
    <li>Explore seasonal ingredients and their unique flavors</li>
    <li>Join our community of food enthusiasts and home chefs</li>
</ul>

<p>Whether you're a seasoned chef or just starting your culinary journey, our blog offers something for everyone. We believe that cooking is an expression of love and creativity. Through detailed recipes, cooking tips, and food stories, we aim to help you create memorable dining experiences. Join us as we explore the wonderful world of flavors, techniques, and food traditions that make every meal special.</p>

                            <div class="about__right__text__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer">
        <div class="container-fluid">
            <div class="footer__instagram">
                <div class="footer__instagram__avatar">
                    <div class="footer__instagram__avatar--pic">
                        <img src="img/footer/instagram-avatar.jpg" alt="">
                    </div>
                    <div class="footer__instagram__avatar--text">
                        <h5>@ foodieblog</h5>
                        <span>23,7k follower</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-1.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-2.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-3.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-4.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-5.jpg"></div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-4 col-6">
                        <div class="footer__instagram__item set-bg" data-setbg="img/footer/ip-6.jpg"></div>
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
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>