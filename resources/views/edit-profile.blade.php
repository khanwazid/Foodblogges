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

       

        
        .logout-button {
    display: inline-block;
    background-color: orange;
    color: white;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    margin-bottom: 10px;
    float: right; /* Aligns the button to the right */
    margin-top: -30px; /* Adjust this value as needed */
}

.logout-button:hover {
    background-color: darkorange;
}

.edit-profile-container {
    max-width: 800px;
    margin: 0 auto;
    margin-bottom: 100px; 
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
}

.section-title {
    color: #333;
    margin-bottom: 30px;
    padding-bottom: 15px;
    border-bottom: 2px solid orange;
}

.profile-form {
    margin-top: 20px;
}

.form-group {
    margin-bottom: 25px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: 500;
}

.form-control {
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

.form-control:focus {
    border-color: orange;
    box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.25);
}

.is-invalid {
    border-color: #dc3545;
}

.invalid-feedback {
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
}

.site-btn {
    background-color: orange;
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.site-btn:hover {
    background-color: darkorange;
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.alert-success {
    background-color: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

.fade-out-message {
    animation: fadeOut 4s forwards;
}

@keyframes fadeOut {
    0% { opacity: 1; }
    75% { opacity: 1; }
    100% { opacity: 0; }
}


    </style>
</head>

<body>
    @if (session('success'))
    <div class="alert alert-success" style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;">
        {{ session('success') }}
    </div>
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
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{url('/admin/dashboard')}}">Admin Page</a></li>
                                <li><a href="{{url('/users')}}">Back</a></li>
                             {{--  <li><a href="{{url('/contact')}}">Contact</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Header Content -->
        <div class="container">
            <div class="row align-items-center">
                <!-- User/Profile Section -->
               
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

   
    <div class="container">
        <div class="edit-profile-container">
            <h2 class="section-title">Edit Profile</h2>
    
            @if (session('success'))
                <div class="alert alert-success fade-out-message">
                    {{ session('success') }}
                </div>
            @endif
    
            <form action="{{ route('profiles.update', ['id' => $user->id]) }}" method="POST" class="profile-form">
                @csrf
                @method('PUT')
    
                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" 
                           name="full_name" 
                           id="full_name"
                           class="form-control @error('full_name') is-invalid @enderror" 
                           placeholder="Full Name*" 
                           value="{{ old('full_name', $user->full_name) }}">
                    @error('full_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" 
                           name="username" 
                           id="username"
                           class="form-control @error('username') is-invalid @enderror" 
                           placeholder="Username*" 
                           value="{{ old('username', $user->username) }}">
                    @error('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" 
                           name="email" 
                           id="email"
                           class="form-control @error('email') is-invalid @enderror" 
                           placeholder="Email Address*" 
                           value="{{ old('email', $user->email) }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="button-group">
                    <button type="submit" class="site-btn">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
    

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

