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
.button-container {
    display: flex;
    gap: 10px;
    justify-content: flex-end;
}

.back-button {
    display: inline-block;
    background-color: #F9801A;
    color: white;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    margin-bottom: 10px;
}

.back-button:hover {
    background-color: #FF7000;
    color: white;
    text-decoration: none;
}

.header__btn h5 {
    color: #000000;
    text-transform: uppercase;
}

.custom-account-link {
    color: #F9801A;
}

        .custom-account-link {
    color: black; /* Make the link text black by default */
    font-style: italic;
    text-decoration: none;
    position: relative;
}

.custom-account-link:hover {
    color: orange; /* Change the color to orange on hover */
}

.custom-account-link::after {
    content: '';
    display: block;
    width: 180%;
    height: 4px;
   
    position: absolute;
    bottom: -8px;
    left: -10px;
    transition: all 0.3s ease; /* Add transition for smooth hover effect */
}

/* Welcome text styling */


       
        .form-control {
            width: 80%; /* Set the input fields to 80% width */
            margin-bottom: 15px;
        }

       
        .breadcrumb__text h2 {
    color: #000000;
}

.breadcrumb__text h2::after {
    content: 'My Account';
    color: #F9801A;
    margin-left: 5px;
}
       

        .button-group {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

.site-btn {
    background-color: #F9801A; /* Set background color to the desired orange */
    color: #FFFFFF; /* White text for better contrast */
    border: none; /* Remove border */
    padding: 10px 20px; /* Add some padding */
    border-radius: 5px; /* Optional: add rounded corners */
    cursor: pointer; /* Add pointer cursor for better UX */
    font-size: 16px; /* Set font size */
    font-weight: 600;
}

.site-btn:hover {
    background-color: #E67317; /* Slightly darker orange on hover */
}

        .change-password-button {
            border: 2px solid #F9801A;
            background-color: transparent;
            color: black;
            padding: 8px 16px;
            cursor: pointer;
            font-weight: 600;
            font-size: 16px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .change-password-button:hover {
            background-color: orange;
            color: white;
        }

        .logout-button {
    display: inline-block;
    background-color: #F9801A;
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
/* Custom Styles for Change Password Modal */
#changePasswordModal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    display: none;
    z-index: 1050;
}

#changePasswordModal .signin__content {
    max-width: 100%;
    padding: 20px;
}

#changePasswordModal .signin__logo img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
}

#changePasswordModal p {
    color: #333;
    margin: 15px 0;
    line-height: 1.5;
    display: block;
}

#changePasswordModal .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
}

#changePasswordModal.show {
    display: block;
}

#changePasswordModal .modal-content {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
}


#changePasswordModal .modal-header {
    background-color: #fff;
    border-bottom: 2px solid #ddd;
    color: #333;
    padding: 15px;
    text-align: center;
}

#changePasswordModal .modal-title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
}

#changePasswordModal .modal-body {
    padding: 20px;
}

#changePasswordModal .form-group label {
    font-size: 14px;
    font-weight: 500;
    color: #555;
}

#changePasswordModal .form-control {
    border-radius: 4px;
    border: 1px solid #ccc;
    padding: 10px;
    font-size: 14px;
}

#changePasswordModal .modal-footer {
    padding-top: 10px;
    padding-bottom: 10px;
    border-top: none; /* Removed the line above buttons */
}

#changePasswordModal .btn-secondary {
    background-color: white;
    color: black;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 4px;
    border: 2px solid #F9801A;
}


#changePasswordModal .btn-secondary:hover {
    background-color: #F9801A;
    color: white;
}

#changePasswordModal .btn-orange {
    background-color: #F9801A; 
    color: white;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 4px;
    border: 2px solid #F9801A;
}

#changePasswordModal .btn-orange:hover {
    background-color: darkorange;
    border-color: darkorange;
}

#changePasswordModal .modal-dialog {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
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
                            <i class="fa fa-bars humberger__open"></i>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                

                                @if(auth()->check())
                                @if(auth()->user()->isAdmin())
                                    <!-- Link for admin users -->
                                    <li><a href="{{url('/admin/dashboard')}}">Admin Dashboard</a></li>
                                @else
                                    <!-- Link for regular users -->
                                    <li><a href="{{url('/profile')}}">Profile</a></li>
                                    <li><a href="{{url('/posts')}}">View All post</a></li>
                                    <li><a href="{{url('/posts/create')}}">Create Posts</a></li>
                                    
                                @endif
                            @endif
                            
                               {{--  <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li>
                                
                                
                                @if (Auth::check())
    @if (!auth()->user()->isAdmin())
        <li><a href="{{url('/profile')}}">Profile</a></li>
    @endif
@else
    <li><a href="{{url('/signin')}}" onclick="event.preventDefault(); window.location.href='{{ route('login') }}'">Profile</a></li>
@endif
--}}
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

        <!-- Additional Header Content -->
        <div class="container">
            <div class="row align-items-center">
                <!-- User/Profile Section -->
                <div class="col-lg-3 col-md-3">
               {{--      <div class="header__btn">
                        @if(Auth::check())
                            <h5 class="font-weight-bold">Welcome {{ Auth::user()->username }}</h5>
                            <a href="{{ route('profile') }}" class="custom-account-link">Manage Ur post</a>
                        @else
                            <a href="{{ url('/signin') }}" class="primary-btn">Subscribe</a>
                        @endif
                    </div> --}} 
                    <div class="header__btn">
                        @if(Auth::check())
                            <h5 class="font-weight-bold"> {{ Auth::user()->username }}</h5>
                             @if (!auth()->user()->isAdmin())
                                <a href="{{ route('profile') }}" class="custom-account-link">Manage Ur post</a>
                            @endif
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

    <section class="contact spad">
        <div class="container">
            <div class="contact__text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <h2>Home:</h2>
                           {{--  @if(Auth::check())
                            <!-- Logout Form -->
                            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                                @csrf
                                <button type="submit" class="logout-button">Logout</button>
                            </form>

                        @endif  --}}
                        <a href="{{ url('/admin/dashboard') }}" class="logout-button">BACK</a>
                            <div class="breadcrumb__option">
                                <a href="#">Home</a>
                                <span>My Account/Account</span>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                            <div class="contact__form__title">
                                <h2>Account Data</h2>
                                <p>You Can Edit Your Account Data From Here</p>
                            </div>
                            <form action="{{ route('profile.update') }}" method="POST" class="profile-form">
                                @csrf
                                @method('PUT')
                            
                                <div class="form-group">
                                    <label for="full_name">Full Name</label>
                                    <input type="text" 
                                           name="full_name" 
                                           id="full_name"
                                           class="form-control @error('full_name') is-invalid @enderror" 
                                           placeholder="Full Name*" 
                                           value="{{ old('full_name', auth()->user()->full_name) }}">
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
                                           value="{{ old('username', auth()->user()->username) }}">
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
                                           value="{{ old('email', auth()->user()->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            
                                <div class="button-group">
                                    <button type="submit" class="site-btn">SUBMIT</button>
                                    <button type="button" class="change-password-button">CHANGE PASSWORD</button>
                                </div>
                            </form>
                            
                                    
                            {{--  --     
                            <form action="{{ route('profile.update') }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="full_name" class="form-control" placeholder="Full Name*" value="{{ auth()->user()->full_name }}">
                                <input type="text" name="username" class="form-control" placeholder="User Name*" value="{{ auth()->user()->username }}">
                                <input type="email" name="email" class="form-control" placeholder="Email Address*" value="{{ auth()->user()->email }}">
                            
                                <div class="button-group">
                                    <button type="submit" class="site-btn">Submit</button>
                                    <button type="button" class="change-password-button">Change Password</button>
                                </div>
                            </form>  --}} 
                        
                            
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
     

<!-- Modal Trigger -->

 <!-- Change Password Modal -->
   
 <div id="changePasswordModal" class="modal" tabindex="-1" role="dialog" >
    <div class="password">
        <div class="signin__warp">
            <div class="signin__content">
                <div class="signin__logo">
                    <a href="#"><img src="img/siign-in-logo.png" alt=""></a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua viverra.</p>
             
                <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">CHANGE PASSWORD</h5>
            </div>
   
           
            <div class="modal-body">
                <form id="changePasswordForm" action="{{ route('change.password') }}" method="POST">
                    @csrf
                    <div class="form-group">
                     
                        <input type="password" name="current_password" class="form-control" id="current_password"  placeholder="Current Password*"  required>
                    </div>
                   
                    <div class="form-group">
                       
                        <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password*"  required>
                    </div>
                    <div class="form-group">
                        
                        <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation"   placeholder="Confirm New Password*"  required>
                    </div>
                    <div class="modal-footer">
                        
                        <button type="submit" class="btn btn-orange">SAVE CHANGES </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCEL</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
   document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('changePasswordModal');
    
    // Show modal
    document.querySelector('.change-password-button').addEventListener('click', function() {
        modal.style.display = 'block';
        modal.classList.add('show');
        document.body.classList.add('modal-open');
    });

    // Close modal function
    function closeModal() {
        modal.style.display = 'none';
        modal.classList.remove('show');
        document.body.classList.remove('modal-open');
    }

    // Cancel button click handler
    document.querySelector('.btn-secondary').addEventListener('click', closeModal);

    // Close modal when clicking outside
    document.addEventListener('click', function(event) {
        if (event.target.closest('.modal-content') === null && 
            event.target.closest('.change-password-button') === null) {
            closeModal();
        }
    });

    // Close with ESC key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && modal.classList.contains('show')) {
            closeModal();
        }
    });
});


</script>


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Add these before closing </body> tag -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>