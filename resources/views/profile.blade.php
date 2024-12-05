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
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .user-profile {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 8px;
        }

        .user-profile h5, .user-profile p {
            margin-bottom: 10px;
        }

        .user-profile p {
            font-weight: normal;
        }

        .user-profile .font-weight-bold {
            font-weight: bold;

        }
       
.logout-btn {
    background-color: #f5a623; /* Yellowish-Red color */
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease;
}

/* Hover Effect */
.logout-btn:hover {
    background-color: #d57d00; /* Darker Yellowish-Red color */
    transform: scale(1.05); /* Slight scale effect on hover */
}
.btn-group.gap-2 {
    gap: 10px;
}

.btn-danger {
    background-color: #dc3545;
    border-color: #dc3545;
    color: white;
}

.btn-danger:hover {
    background-color: #bb2d3b;
    border-color: #b02a37;
}

.management-section {
    padding: 30px 0;
}

.management-item {
    margin-bottom: 30px;
    padding: 20px;
    border-radius: 8px;
    background-color: #fff;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.management-item h3 {
    color: #333;
    font-weight: 700;
    margin-bottom: 8px;
}

.management-item p {
    color: #666;
    margin-bottom: 15px;
}

.management-button {
    display: inline-block;
    padding: 12px 25px;
    background-color: orange;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.management-button:hover {
    background-color: darkorange;
    color: white;
    text-decoration: none;
    transform: translateY(-2px);
}

.button-row {
    display: flex;
    gap: 15px;
    align-items: center;
}

.management-button.add-new {
    background-color: white;
    color:  #000;
    border: 2px solid orange;
    transition: all 0.3s ease;
}

.management-button.add-new:hover {
    background-color: orange;
    color: white;
}

.button-row {
    display: flex;
    gap: 15px;
    align-items: center;
}

.management-button.user-account {
    background-color: white;
    color: #000;
    border: 2px solid orange;
    transition: all 0.3s ease;
}

.management-button.user-account:hover {
    background-color: orange;
    color: white;
}



    </style>
</head>

<body>
    @if (session('success'))
    <div id="success-message" class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;">
        {{ session('success') }}
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    {{--  <script>
        
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                
                successMessage.style.transition = "opacity 1s";
                successMessage.style.opacity = 0;

               
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 1000); 
            }
        }, 3000); 
    </script> --}}
    <script>
        setTimeout(function() {
            const successMessage = document.getElementById('success-message');
            if (successMessage) {
                successMessage.style.transition = "opacity 1s ease";
                successMessage.style.opacity = 0;
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 1000); // Wait for fade-out to complete
            }
        }, 3000); // Display for 3 seconds
    </script>
    
@endif

   



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

    <!-- Header Section Begin -->
    
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{url('/home')}}">Back</a></li>
                               {{--  <li><a href="{url('/index')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>

                    <!-- Removed the navigation section here -->

                    
                </div>
                
            </div>
        </div>

        <!-- Additional Header Content -->
        <div class="container">
            <div class="row align-items-center">
                <!-- User/Profile Section -->
                <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        @if(Auth::check())
                        <div class="user-profile">
                            <h5 class="font-weight-bold">Username: {{ Auth::user()->username }}</h5>
                            <p class="font-weight-bold">Full Name: {{ Auth::user()->full_name }}</p>
                            <p class="font-weight-bold">Email: {{ Auth::user()->email }}</p>
                            <p class="custom-account-link">My Account</a>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="logout-btn">Logout</button>
                                </form>
                        </div>
                        @else
                        <a href="{{ url('/signin') }}" class="primary-btn">Subscribe</a>
                        @endif
                    </div>
                </div> 

                <!-- Logo Section -->
                <div class="col-lg-6 col-md-6">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
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


    

    <!-- Categories Section Begin -->
    <section class="categories categories-grid spad">
        <div class="categories__post">
            <div class="container">
                <div class="categories__grid__post">
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <div class="breadcrumb__text">
                                <a href="#">Home</a>
                                <div class="breadcrumb__option">
                                    
                                </div>
                            </div>
                            <div class="management-item">
                                <h3>POSTS</h3>
                                <p>Manage your blog posts from here</p>
                                <div class="button-row">
                                   {{--   <a href="" class="management-button">MANAGE POSTS</a> --}}
                                    <a href="{{ route('posts.create') }}" class="management-button add-new">ADD NEW POST</a>
                                </div>
                            </div>
                            <!-- Add this section where you want to display the posts -->
<div class="container">
    <div class="categories__post">
        <h2 class="section-title">Your Recipe Posts</h2>
        
        @if($posts->isEmpty())
            <div class="alert alert-info">
                <p>You haven't created any recipes yet.</p>
            </div>
        @else
            <div class="row">
                @foreach($posts as $post)
                <div class="col-lg-6 col-md-6">
                    <div class="categories__post__item">
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
                            <ul class="post__label--large">
                                @foreach(explode(',', $post->categories) as $category)
                                <li>{{ trim($category) }}</li>
                                @endforeach
                            </ul>
                            
                            <h3><a href="#">{{ $post->title }}</a></h3>
                            
                            <ul class="post__widget">
                                <li><i class="fa fa-clock-o"></i> {{ $post->read_time }} min read</li>
                                <li><i class="fa fa-cutlery"></i> Serves {{ $post->serves }}</li>
                                <li><i class="fa fa-hourglass-half"></i> Prep {{ $post->prep_time }}min</li>
                            </ul>
                            
                            <p>{{ Str::limit($post->description, 150) }}</p>
                            
                            <div class="post__meta">
                                <div class="btn-group gap-2">
                                    <a href="{{ route('posts.edit', ['id' => $post->p_id]) }}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    
                                    
        <form action="{{ route('posts.destroy', ['id' => $post->p_id]) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                <i class="fa fa-trash"></i> Delete
            </button>
        </form>
                                </div>
                            </div>
                     
                                {{-- xbxbxbxbbbbb --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
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
                                            <h3><a href="#">The Best Grass Stain Remover Is Already In Your Pantry</a>
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
                                            <h3><a href="#">This Summer Snacking Cake Is theSweetest Excuse to...</a>
                                            </h3>
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
                                <div class="col-lg-6 col-md-6 col-sm-6">
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
                                            <h3><a href="#">17 Perfect Gifts for Your Vegan Friend Because
                                                    Sometimes...</a></h3>
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
                                            <h3><a href="#">A 5-Minute Peach Mug Cobbler That Just So Happens to...</a>
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
                                            <h3><a href="#">Fresh Herb Polenta with Parsnip Chips and Maple Butter</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    
  
</body>

</html>