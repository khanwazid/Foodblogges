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
    <style>
        .custom-account-link {
            color:  #f4952f;
            font-style: italic;
            text-decoration: none;
            position: relative;
        }

        .custom-account-link::after {
            content: '';
            display: block;
            width: 180%;
            height: 4px;
            background-color: #f4952f;
            position: absolute;
            bottom: -8px;
            left: -10;
        }

       
        .form-control {
            width: 80%; /* Set the input fields to 80% width */
            margin-bottom: 15px;
        }

       /* .breadcrumb__text h2 {
            color: orange; 
        }*/
        .breadcrumb__text h2 {
    color: #000000;
}

.breadcrumb__text h2::after {
    content: 'My Account';
    color:  #f4952f;
    margin-left: 5px;
}
        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }

        .change-password-button {
            border: 2px solid #f4952f;
            background-color: transparent;
            color:#F9801A;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .change-password-button:hover {
            background-color: orange;
            color: white;
        }
        .welcome-admin {
    text-align: left;
    padding: 5px 0;
}

.welcome-text {
    display: block;
    color: #000;
    font-size: 14px;
    font-family: 'Nunito Sans', sans-serif;
    margin-bottom: 2px;
}

.admin-name {
    color: black;
    font-weight: 700;
    font-size: 18px;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

        .logout-button {
    display: inline-block;
    background-color: #f4952f; 
    color: white;
     border: none;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    margin-bottom: 10px;
    float: right; /* Aligns the button to the right */
    cursor: pointer;
    margin-top: -30px; /* Adjust this value as needed */
}

.logout-button:hover {
    background-color: #F9801A;
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
    background-color: #f4952f;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.management-button:hover {
    background-color: #F9801A;
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
    border: 2px solid #f4952f;
    transition: all 0.3s ease;
}

.management-button.add-new:hover {
    background-color: #F9801A;
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
    border: 2px solid #f4952f;
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
                             {{--  <li><a href="{{{{url('/index')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li> --}}
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

        <!-- Additional Header Content -->
        <div class="container">
            <div class="row align-items-center">
                <!-- User/Profile Section -->
               {{--   <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        @if(Auth::check())
                        <h5 class="font-weight-bold">{{ Auth::user()->username }}</h5>
                         <a href="{{ route('profile') }}" class="custom-account-link">My Account</a>
                        @else
                        <a href="{{ url('/signin') }}" class="primary-btn">Subscribe</a>
                        @endif
                    </div>
                </div>--}}
                <div class="col-lg-3 col-md-3">
                    <div class="header__btn">
                        @if(Auth::check())
                        <div class="welcome-admin">
                           
                            <h5 class="admin-name">{{ Auth::user()->username }}</h5>
                        </div>
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
                            <h2>Home:</h2>
                            @if(Auth::check())
                            <!-- Logout Form -->
                            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                                @csrf
                                <button type="submit" class="logout-button">LOGOUT</button>
                            </form>
                        @endif
                            <div class="breadcrumb__option">
                                <a href="#">Home</a>
                                <span>My Account</span>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="container">
                    <div class="management-section">
                        <!-- Manage Account Section -->
                        <div class="management-item">
                            <h3>ACCOUNT</h3>
                            <p>Manage your account from here</p>
                            <div class="button-row">
                                <a href="{{ route('admin.profile') }}" class="management-button">MANAGE ACCOUNT</a>
                               {{--  <a href="{{ route('users.index') }}" class="management-button user-account">MANAGE USERS ACCOUNT</a> --}} 
                            </div>
                        </div>
                
                        <!-- Manage Posts Section -->
                        <div class="management-item">
                            <h3>POSTS</h3>
                            <p>Manage your blog posts from here</p>
                            <div class="button-row">
                                <a href="{{ route('list.post') }}" class="management-button">MANAGE POSTS</a>
                                <a href="{{ route('admin.create') }}" class="management-button add-new">ADD NEW POST</a>
                            </div>
                        </div>
                        
                
                        <!-- Manage Comments Section -->
                        <div class="management-item">
                            <h3>COMMENTS</h3>
                            <p>Manage your comments from here</p>
                            <a href="{{ route('admin.comments.index') }}" class="management-button">MANAGE COMMENTS</a>
                        </div>

                        <div class="management-item">
                            <h3>CONTACTS</h3>
                            <p>Take a look at contacts </p>
                            <a href="{{ route('admin.contacts') }}" class="management-button">CONTACTS</a>
                        </div>
                    </div>
                </div>
                
                
                </div>
            </div>
        </div>
    </section>
<!-- Add this after the breadcrumb section, inside the contact__text div -->

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
    <!-- Search End -->
 
    </div>
</div>

<!-- Modal Trigger -->
<script>
    // Add an event listener to the 'Change Password' button
    document.querySelector('.change-password-button').addEventListener('click', function() {
        $('#changePasswordModal').modal('show');
    });
</script>


    <!-- Js Plugins -->
    <!-- Js Plugins -->
    <script>
        $(document).ready(function() {
            $('.set-bg').each(function() {
                var bg = $(this).data('setbg');
                $(this).css('background-image', 'url(' + bg + ')');
            });
            
            // Hide preloader
            $("#preloder").fadeOut();
            $(".loader").fadeOut();
        });
        </script>
        
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

