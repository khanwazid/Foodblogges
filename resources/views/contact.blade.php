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
    .form-group {
    margin-bottom: 1rem;
    position: relative;
}

.invalid-feedback {
    color: #dc3545;
    font-size: 14px;
    margin-top: 5px;
    display: block;
}

.is-invalid {
    border-color: #dc3545;
}

.is-invalid:focus {
    border-color: #dc3545;
    box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

        
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
                                
                                   <li><a href="{{ route('show.posts', $post->p_id ?? 0) }}">View Post</a></li>
                              
                                <li><a href="{{url('/about')}}">About</a></li>
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
                    <div class="header__btn">
                        @if(Auth::check())
                            <h5 class="font-weight-bold"> {{ Auth::user()->username }}</h5>
                            @if (auth()->user()->isAdmin())
                                <a href="{{ url('/admin/dashboard') }}" class="custom-account-link">My Account</a>
                            @else
                                <a class="custom-account-link" style="color: #f4952f;">My Account</a>
                            @endif
                        @else
                            <a href="{{ url('/signin') }}" class="primary-btn">Subscribe</a>
                        @endif
                    </div>
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

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="contact__text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <h2>Contact</h2>
                            <a href="{{ url('/normal') }}" class="logout-button">BACK</a>
                            <div class="breadcrumb__option">
                                <a href="#">Home</a>
                                <span>Contact</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96748.5538666784!2d-74.25209557318462!3d40.73139236772185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25370329a0e1d%3A0xe1bcdc2adcfee473!2sNewark%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1585643782289!5m2!1sen!2sbd"
                                height="350" style="border:0;" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </div>
                        @auth
                        <div class="contact__widget">
                            <div class="contact__widget">
                                <ul>
                                   
                                  
                                </ul>
                            </div>
                            
                        </div>
                    @else
                        <div class="contact__widget">
                            <p>Please login to view your contact information</p>
                        </div>
                    @endauth
                    
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                            <div class="contact__form__title">
                                <h2>gET IN TOUCH</h2>
                                <p>My experience with Realy is absolutely positive. The themes are beautifully designed
                                    and well documented. Realy theme provides quick support.</p>
                            </div>
                       {{--      <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Website">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Submit</button>
                            </form>  --}}
                   {{--        <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                                @csrf
                                
                                <input type="text" name="full_name" placeholder="Name" 
                                      
                                       required minlength="2" maxlength="255" 
                                       pattern="[A-Za-z\s]+" 
                                       title="Name should only contain letters and spaces">
                            
                                <input type="email" name="email" placeholder="Email" 
                                       
                                       required maxlength="255" 
                                       pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" 
                                       title="Please enter a valid email address">
                            
                                <input type="text" name="website" placeholder="Website" 
                                       value="{{ old('website') }}" 
                                       pattern="https?://.*" 
                                       title="Please enter a valid URL, starting with http:// or https://">
                                
                                <textarea name="message" placeholder="Message" 
                                          required minlength="10" 
                                          maxlength="1000" 
                                          title="Message must be at least 10 characters long">{{ old('message') }}</textarea>
                                
                                <button type="submit" class="site-btn">Submit</button>
                            </form>
                             --}}  
                             <form action="{{ route('contact.store') }}" method="POST" id="contactForm" class="contact-form">
                                @csrf
                                
                                <div class="form-group">
                                    <input type="text" name="full_name" id="full_name" 
                                           class="form-control @error('full_name') is-invalid @enderror"
                                           value="{{ old('full_name') }}" placeholder="Enter your full name">
                                    @error('full_name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <input type="email" name="email" id="email" 
                                           class="form-control @error('email') is-invalid @enderror"
                                           value="{{ old('email') }}" placeholder="Enter your email">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <input type="url" name="website" id="website" 
                                           class="form-control @error('website') is-invalid @enderror"
                                           value="{{ old('website') }}" placeholder="Enter your website (optional)">
                                    @error('website')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                    
                                <div class="form-group">
                                    <textarea name="message" id="message" 
                                              class="form-control @error('message') is-invalid @enderror"
                                              rows="5" placeholder="Enter your message">{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                    
                               
                                <button type="submit" class="site-btn">Submit</button>
                            </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
    $("#contactForm").validate({
        rules: {
            full_name: {
                required: true,
                minlength: 2,
                maxlength: 255,
                pattern: /^[A-Za-z\s]+$/
            },
            email: {
                required: true,
                email: true,
                maxlength: 255
            },
            website: {
                url: true,
                maxlength: 255
            },
            message: {
                required: true,
                minlength: 10,
                maxlength: 1000
            }
        },
        messages: {
            full_name: {
                required: "Please enter your name",
                minlength: "Name must be at least 6 characters long",
                maxlength: "Name cannot exceed 255 characters",
                pattern: "Name can only contain letters and spaces"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
                maxlength: "Email cannot exceed 255 characters"
            },
            website: {
                url: "Please enter a valid website URL",
                maxlength: "Website URL cannot exceed 255 characters"
            },
            message: {
                required: "Please enter your message",
                minlength: "Message must be at least 10 characters long",
                maxlength: "Message cannot exceed 1000 characters"
            }
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        highlight: function(element) {
            $(element).addClass('is-invalid').removeClass('is-valid');
        },
        unhighlight: function(element) {
            $(element).addClass('is-valid').removeClass('is-invalid');
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        }
    });
});

    </script>
</body>

</html>