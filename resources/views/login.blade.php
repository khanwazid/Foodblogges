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
                    <a>
                        <img src="{{ asset('img/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut<br />
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra<br />
                    maecenas accumsan lacus vel facilisis. </p>
               
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>


<script>
    $(document).ready(function() {
    $("#loginForm").validate({
        rules: {
            email: {
                required: true,
                email: true,
                maxlength: 255
            },
            password: {
                required: true,
                minlength: 8,
                maxlength: 255
            }
        },
        messages: {
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address",
                maxlength: "Email cannot exceed 255 characters"
            },
            password: {
                required: "Please enter your password",
                minlength: "Password must be at least 8 characters long",
                maxlength: "Password cannot exceed 255 characters"
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
