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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    


.invalid-feedback {
    display: none;
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
}

.form-control.is-invalid {
    border-color: #dc3545;
}

.form-control.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

    .nav-tabs {
    display: flex;
    justify-content: center;
    border-bottom: none;
    margin-bottom: 5px;
    font-weight: 100px;
}

.nav-tabs .nav-item {
    margin: 0 auto;
}

.nav-tabs .nav-link {
    font-size: 24px;
    font-weight: 600;
    color: #595959;
    border: none;
    padding: 10px 20px;
}

.nav-tabs .nav-link.active {

    background: none;
    border: none;
   
}
</style>
</head>

<body class="fixed-position">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
<!-- Sign In Section Begin -->
<div class="signin">
    <div class="signin__warp">
        <div class="signin__content">
            <div class="signin__logo">
                <a><img src="img/siign-in-logo.png" alt=""></a>
               


            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua viverra.</p>
            <div class="signin__form">
              {{--   <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="false">
                            Sign up
                        </a>
                    </li>
                    
                </ul> --}} 
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab" aria-selected="false">
                            Sign in
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <!-- Sign Up Tab -->
               {{--       <div class="tab-pane active" id="tabs-1" role="tabpanel"> --}}
                        <div class="tab-pane {{ !session('loginError') ? 'active' : '' }}" id="tabs-1" role="tabpanel">

                        <div class="signin__form__text">
                            @if(session('loginError'))
                            <div class="alert alert-danger">
                                {{ session('loginError') }}
                            </div>
                            @endif
                                    <!-- Sign In Form -->
                                    <form method="POST" action="{{ route('login') }}" id="loginForm" autocomplete="off" onsubmit="return validateLoginForm()">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <input type="email" 
                                                   class="form-control @error('email') is-invalid @enderror"
                                                   name="email" 
                                                   id="loginEmail"
                                                   placeholder="Email Address" 
                                                   value="{{ old('email') }}"
                                                   autocomplete="off">
                                            @error('email')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <div class="invalid-feedback" id="emailError"></div>
                                        </div>
                                    
                                        <div class="form-group">
                                            <input type="password" 
                                                   class="form-control @error('password') is-invalid @enderror"
                                                   name="password" 
                                                   id="loginPassword"
                                                   placeholder="Password" 
                                                   autocomplete="new-password">
                                            @error('password')
                                            <div class="invalid-feedback" style="display: block;">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                            <div class="invalid-feedback" id="passwordError"></div>
                                        </div>
                                
                                        <button type="submit" class="site-btn">Sign In</button>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

             
                    

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="./index.html"><img src="img/humberger/humberger-logo.png" alt=""></a>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li><a href="{{url('/index')}}">Home</a></li>
                <li><a href="#">Recipes</a></li>
                <li><a href="#">Dinner</a></li>
                <li><a href="#">Desserts</a></li>
                <li><a href="#">Vegan</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
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
                <button type="submit" class="site-btn">Subscribe</button>
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
                            <i class="fa fa-bars humberger__open"></i>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{url('/index')}}">Home</a></li>
                                <li><a href="#">Recipes</a>
                                    <div class="header__megamenu__wrapper">
                                        <div class="header__megamenu">
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-1.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-2.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-3.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-4.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="header__megamenu__item">
                                                <div class="header__megamenu__item--pic set-bg"
                                                    data-setbg="img/megamenu/p-5.jpg">
                                                    <div class="label">Vegan</div>
                                                </div>
                                                <div class="header__megamenu__item--text">
                                                    <h5><a href="#">How to Make a Milkshake With Any Ice Cream ...</a>
                                                    </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#">Dinner</a></li>
                                <li><a href="#">Desserts</a></li>
                                <li><a href="#">Vegan</a></li>
                                <li><a href="./about.html">About</a></li>
                                <li><a href="./contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        <div class="header__search">
                            <i class="fa fa-search search-switch"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        <a href="#" class="primary-btn">Subscribe</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
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
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="hero__inside__item hero__inside__item--wide set-bg"
                                data-setbg="img/hero/hero-1.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>s-
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h4>Vegan White Peach Mug Cobbler With CardamomVegan<br /> White Peach Mug
                                            Cobbler With Cardamom</h4>
                                        <ul class="widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 p-0">
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="img/hero/hero-2.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>How to Make a Milkshake With Any <br />Ice Cream, Any Toppings...</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="img/hero/hero-3.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Vintage Copper Preserve Pan with <br />Brass Handles, Mid 19th Century</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 p-0">
                            <div class="hero__inside__item set-bg" data-setbg="img/hero/hero-4.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Marinated Lentil Salad with Zucch <br />ini and Tomatoes</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="hero__inside__item hero__inside__item--wide set-bg"
                                data-setbg="img/hero/hero-1.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h4>Vegan White Peach Mug Cobbler With CardamomVegan<br /> White Peach Mug
                                            Cobbler With Cardamom</h4>
                                        <ul class="widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 p-0">
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="img/hero/hero-3.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>How to Make a Milkshake With Any <br />Ice Cream, Any Toppings...</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="hero__inside__item hero__inside__item--small set-bg"
                                data-setbg="img/hero/hero-2.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Vintage Copper Preserve Pan with <br />Brass Handles, Mid 19th Century</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 p-0">
                            <div class="hero__inside__item set-bg" data-setbg="img/hero/hero-4.jpg">
                                <div class="hero__inside__item__text">
                                    <div class="hero__inside__item--meta">
                                        <span>08</span>
                                        <p>Aug</p>
                                    </div>
                                    <div class="hero__inside__item--text">
                                        <ul class="label">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h5>Marinated Lentil Salad with Zucch <br />ini and Tomatoes</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-2.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-3.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-4.jpg">
                        <div class="categories__hover__text">
                            <h5>Dinner</h5>
                            <p>28 articles</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="categories__post">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="categories__post__item categories__post__item--large">
                            <div class="categories__post__item__pic set-bg"
                                data-setbg="img/categories/categories-post/cp-1.jpg">
                                <div class="post__meta">
                                    <h4>08</h4>
                                    <span>Aug</span>
                                </div>
                            </div>
                            <div class="categories__post__item__text">
                                <ul class="post__label--large">
                                    <li>Vegan</li>
                                    <li>Desserts</li>
                                </ul>
                                <h3><a href="#">The Absolute Best Way to Cook Steak Perfectly, According to Wayyy Too
                                        Many Tests</a></h3>
                                <ul class="post__widget">
                                    <li>by <span>Admin</span></li>
                                    <li>3 min read</li>
                                    <li>20 Comment</li>
                                </ul>
                                <p>Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur
                                    excepteur sint ...</p>
                                <a href="#" class="primary-btn">Read more</a>
                                <div class="post__social">
                                    <span>Share</span>
                                    <a href="#"><i class="fa fa-facebook"></i> <span>82</span></a>
                                    <a href="#"><i class="fa fa-twitter"></i> <span>24</span></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i> <span>08</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic small__item set-bg"
                                        data-setbg="img/categories/categories-post/cp-2.jpg">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Recipe</span>
                                        <h3><a href="#">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic set-bg"
                                        data-setbg="img/categories/categories-post/cp-4.jpg">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <ul class="post__label--large">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h3><a href="#">The Best Grass Stain Remover Is Already In Your Pantry</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                                <div class="categories__post__item__plain set-bg"
                                    data-setbg="img/categories/categories-post/cp-6.jpg">
                                    <div class="categories__post__item__text">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                        <ul class="post__label--large">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h3><a href="#">This Summer Snacking Cake Is theSweetest Excuse to...</a></h3>
                                        <div class="post__social">
                                            <span>Share</span>
                                            <a href="#"><i class="fa fa-facebook"></i> <span>82</span></a>
                                            <a href="#"><i class="fa fa-twitter"></i> <span>24</span></a>
                                            <a href="#"><i class="fa fa-envelope-o"></i> <span>08</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic smaller__large set-bg"
                                        data-setbg="img/categories/categories-post/cp-8.jpg">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Smoothie</span>
                                        <h3><a href="#">This 2-Ingredient Spread Makes Any Egg Sandwich So Much
                                                Better</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic smaller__large set-bg"
                                        data-setbg="img/categories/categories-post/cp-3.jpg">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Dinner</span>
                                        <h3><a href="#">17 Perfect Gifts for Your Vegan Friend Because Sometimes...</a>
                                        </h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                                <div class="categories__post__item__small">
                                    <img src="img/categories/categories-post/quote.png" alt="">
                                    <p>Lorem ipsum dolor amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt labore et dolore magna aliqua gravida.</p>
                                    <div class="posted__by">Elena T.Jaivy</div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic smaller__large set-bg"
                                        data-setbg="img/categories/categories-post/cp-5.jpg">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <span class="post__label">Drinks</span>
                                        <h3><a href="#">A 5-Minute Peach Mug Cobbler That Just So Happens to...</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                                <div class="categories__post__item">
                                    <div class="categories__post__item__pic set-bg"
                                        data-setbg="img/categories/categories-post/cp-7.jpg">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                    </div>
                                    <div class="categories__post__item__text">
                                        <ul class="post__label--large">
                                            <li>Vegan</li>
                                            <li>Desserts</li>
                                        </ul>
                                        <h3><a href="#">Fresh Herb Polenta with Parsnip Chips and Maple Butter</a></h3>
                                        <ul class="post__widget">
                                            <li>by <span>Admin</span></li>
                                            <li>3 min read</li>
                                            <li>20 Comment</li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt dolore magna aliqua. Quis ipsum suspendisse ultrices
                                            gravida...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 text-center">
                                <div class="load__more__btn">
                                    <a href="#">Load more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar__item">
                            <div class="sidebar__about__item">
                                <div class="sidebar__item__title">
                                    <h6>About me</h6>
                                </div>
                                <img src="img/sidebar/sidebar-about.jpg" alt="">
                                <h6>Hi every one! I,m <span>Lena Mollein.</span></h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#" class="primary-btn">Read more</a>
                            </div>
                            <div class="sidebar__follow__item">
                                <div class="sidebar__item__title">
                                    <h6>Follow me</h6>
                                </div>
                                <div class="sidebar__item__follow__links">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-envelope-o"></i></a>
                                </div>
                            </div>
                            <div class="sidebar__feature__item">
                                <div class="sidebar__item__title">
                                    <h6>Feature Posts</h6>
                                </div>
                                <div class="sidebar__feature__item__large set-bg"
                                    data-setbg="img/sidebar/feature-post.jpg">
                                    <div class="sidebar__feature__item__large--text">
                                        <span>Dinner</span>
                                        <h5><a href="#">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
                                    </div>
                                </div>
                                <div class="sidebar__feature__item__list">
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>08</h4>
                                            <span>Aug</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Dinner</span>
                                            <h5><a href="#">Grilled Potato and Green Bean Salad</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>05</h4>
                                            <span>Aug</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Smoothie</span>
                                            <h5><a href="#">The $8 French Rosé I Buy in Bulk Every Summer</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>26</h4>
                                            <span>jul</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Desert</span>
                                            <h5><a href="#">Ina Garten's Skillet-Roasted Lemon Chicken</a></h5>
                                        </div>
                                    </div>
                                    <div class="sidebar__feature__item__list__single">
                                        <div class="post__meta">
                                            <h4>16</h4>
                                            <span>jul</span>
                                        </div>
                                        <div class="post__text">
                                            <span>Vegan</span>
                                            <h5><a href="#">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar__item__banner">
                                <img src="img/sidebar/banner.jpg" alt="">
                            </div>
                            <div class="sidebar__item__categories">
                                <div class="sidebar__item__title">
                                    <h6>Categories</h6>
                                </div>
                                <ul>
                                    <li><a href="#">Recipes <span>128</span></a></li>
                                    <li><a href="#">Dinner <span>32</span></a></li>
                                    <li><a href="#">Dessert <span>86</span></a></li>
                                    <li class="p-left"><a href="#">Smothie <span>25</span></a></li>
                                    <li class="p-left"><a href="#">Drinks <span>36</span></a></li>
                                    <li class="p-left"><a href="#">Cakes <span>15</span></a></li>
                                    <li><a href="#">Vegan <span>63</span></a></li>
                                    <li><a href="#">Weightloss <span>27</span></a></li>
                                </ul>
                            </div>
                            <div class="sidebar__subscribe__item">
                                <div class="sidebar__item__title">
                                    <h6>Subscribe</h6>
                                </div>
                                <p>Subscribe to our newsletter and get our newest updates right on your inbox.</p>
                                <form action="#">
                                    <input type="text" class="email-input" placeholder="Your email">
                                    <label for="s-agree-check">
                                        I agree to the terms & conditions
                                        <input type="checkbox" id="s-agree-check">
                                        <span class="checkmark"></span>
                                    </label>
                                    <button type="submit" class="site-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

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
            <div class="footer__text">
                <div class="footer__logo">
                    <a href="#"><img src="img/logo.png" alt=""></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br />
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra<br />
                    maecenas accumsan lacus vel facilisis. </p>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Clear forms when switching tabs
            document.querySelectorAll('.nav-link').forEach(tab => {
                tab.addEventListener('click', function() {
                    document.getElementById('registerForm').reset();
                    document.getElementById('loginForm').reset();
                });
            });
        });
        </script>
        
            
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Show signin tab if there are login errors
                @if(session('loginError'))
                    document.querySelector('[data-toggle="tab"][href="#tabs-2"]').click();
                @endif
            
                // Clear forms when switching tabs
                document.querySelectorAll('.nav-link').forEach(tab => {
                    tab.addEventListener('click', function() {
                        document.getElementById('registerForm').reset();
                        document.getElementById('loginForm').reset();
                        // Clear error messages
                        document.querySelectorAll('.invalid-feedback').forEach(el => el.style.display = 'none');
                        document.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
                    });
                });
            });
            </script>
            <script>
               function validateLoginForm() {
    let isValid = true;
    const email = document.getElementById('loginEmail');
    const password = document.getElementById('loginPassword');
    
    // Reset previous error states
    email.classList.remove('is-invalid');
    password.classList.remove('is-invalid');
    document.getElementById('emailError').style.display = 'none';
    document.getElementById('passwordError').style.display = 'none';

    // Validate email
    if (!email.value.trim()) {
        email.classList.add('is-invalid');
        document.getElementById('emailError').textContent = 'Email is required';
        document.getElementById('emailError').style.display = 'block';
        isValid = false;
    } else if (!isValidEmail(email.value.trim())) {
        email.classList.add('is-invalid');
        document.getElementById('emailError').textContent = 'Please enter a valid email address';
        document.getElementById('emailError').style.display = 'block';
        isValid = false;
    }

    // Validate password
    if (!password.value.trim()) {
        password.classList.add('is-invalid');
        document.getElementById('passwordError').textContent = 'Password is required';
        document.getElementById('passwordError').style.display = 'block';
        isValid = false;
    }

    return isValid;
}

function isValidEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

// Add event listeners when document loads
document.addEventListener('DOMContentLoaded', function() {
    // Clear validation errors when input changes
    document.getElementById('loginEmail').addEventListener('input', function() {
        this.classList.remove('is-invalid');
        document.getElementById('emailError').style.display = 'none';
    });

    document.getElementById('loginPassword').addEventListener('input', function() {
        this.classList.remove('is-invalid');
        document.getElementById('passwordError').style.display = 'none';
    });
});

                </script>
                
</body>

</html>
