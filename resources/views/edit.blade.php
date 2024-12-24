<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Foodeiblog Template">
    <meta name="keywords" content="Foodeiblog, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
.header__btn h5 {
    color: orange; /* Set the welcome text to orange */
}

.profile-form {
    width: 200%;
    margin: 0 auto;
    padding: 20px;
}  
        .form-control {
           

            width: 100%;
    height: 40px;
    padding: 8px 12px;
    font-size: 14px;
    box-sizing: border-box;
    margin-bottom: 15px;
        }
        .breadcrumb__text h2 {
    color: #000000;
}

.breadcrumb__text h2:after {
    
    color: #FFA500;
    margin-left: 5px;
}
.breadcrumb__text .home-text {
    color: #000000;
}

.breadcrumb__text .account-text {
    color: #FFA500;
}
.modal-header {
    border-bottom: none;
    text-align: center;
    padding: 20px;
}

.modal-title {
    width: 100%;
    text-align: center;
    font-size: 24px;
}

.button-group {
    display: flex;
    gap: 10px;
    justify-content: center;
    padding: 20px 0;
}

.site-btn {
    width: 150px;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/*.cancel-btn {
    background-color: #6c757d;
    color: white;
}*/

.modal {
    background-color: rgba(0, 0, 0, 0.5);
}



        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
        }
        

        .change-password-button {
            border: 2px solid orange;
            background-color: transparent;
            color: black;
            padding: 8px 16px;
            cursor: pointer;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }

        .change-password-button:hover {
            background-color: orange;
            color: white;
        }

        .logout-button {
    display: inline-block;
    background-color: orange;
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


.logout-button:hover {
    background-color: darkorange;
}
/* Custom Styles for Change Password Modal */
#changePasswordModal .modal-content {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
}

#changePasswordModal .modal-header {
    background-color: #f8f9fa;
    border-bottom: 2px solid #ddd;
    color: #333;
    padding: 15px;
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
    border-top: 2px solid #ddd;
    padding-top: 10px;
    padding-bottom: 10px;
}

/* Styling for Cancel and Save buttons */
#changePasswordModal .btn-secondary {
    background-color: #6c757d;
    border-color: #6c757d;
    color: #fff;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 4px;
}

#changePasswordModal .btn-secondary:hover {
    background-color: #5a6268;
    border-color: #545b62;
}

#changePasswordModal .btn-orange {
    background-color: orange; 
    color: white;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 4px;
    border: 2px solid orange;
}

#changePasswordModal .btn-orange:hover {
    background-color: darkorange;
    border-color: darkorange;
}


#changePasswordModal .modal-dialog {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}


.form-group {
    margin-bottom: 20px;
}
.form-control {
    width: 100%;
    height: 40px;
    padding: 8px 12px;
    font-size: 14px;
    box-sizing: border-box;
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
}
/* Add this to your existing style section */

/* Add this to your existing style section */
/*select.form-control:focus {
    border-color: orange !important;
    box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.25) !important;
}

select.form-control option:hover,
select.form-control option:checked {
    background-color: orange !important;
    color: white !important;
}

select.form-control:active,
select.form-control:hover {
    border-color: orange;
}

*/
/* Add this to your existing style section */


input::placeholder {
    font-size: 14px;
}

input {
    font-size: 14px;
}
.btn-orange {
    background-color: orange;
    color: white;
    border: none;
}

.btn-secondary {
    background-color: white;
    color: black;
    border: 2px solid orange;
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
                            <h5 class="font-weight-bold">Welcome {{ Auth::user()->username }}</h5>
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
                        <a href="#">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo">
                        </a>
                        
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
                           {{--   <h2>Home:My Account</h2> --}}
                            <h2><span class="home-text">Home</span>:<span class="account-text">My Account</span></h2>
                        
                          {{--  @if(Auth::check())
                            <!-- Logout Form -->
                            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                                @csrf
                                <button type="submit" class="logout-button">LOGOUT</button>
                                <a href="{{ url('/home') }}" class="logout-button">Back</a>
                            </form>
                        @endif --}} 
                        <a href="{{ url('/home') }}" class="logout-button">Back</a>
                            <div class="breadcrumb__option">
                                <a href="#">Home</a>
                                <span>My Account</span>
                            </div>
                        </div>
                      
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact__form">
                            <div class="contact__form__title">
                                <h2>POST DATA</h2>
                                <p>You Can Edit Your Post Data From Here</p>
                            </div>
                            <form action="{{ route('posts.update', $post->p_id) }}" method="POST" enctype="multipart/form-data" class="profile-form">
                                @csrf
                                @method('PUT')
                
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" 
                                           name="title" 
                                           id="title"
                                           class="form-control @error('title') is-invalid @enderror" 
                                           placeholder="Title*" 
                                           value="{{ old('title', $post->title) }}"
                                           required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" 
                                              id="description"
                                              class="form-control @error('description') is-invalid @enderror" 
                                              placeholder="Description*" 
                                              required>{{ old('description', $post->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                
                         {{--         <div class="form-group">
                                    <label for="categories">Categories (comma-separated)</label>
                                    <input type="text" 
                                           name="categories" 
                                           id="categories"
                                           class="form-control @error('categories') is-invalid @enderror" 
                                           placeholder="Categories (comma-separated)*" 
                                           value="{{ old('categories', $post->categories) }}"
                                           required>
                                    @error('categories')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div> --}}

                                <div class="form-group">
                                    <label for="categories">Categories</label>
                                    <select name="categories" 
                                            id="categories"
                                            class="form-control @error('categories') is-invalid @enderror" 
                                            required>
                                        <option value="">Select Category*</option>
                                        <option value="breakfast" {{ old('categories', $post->categories) == 'breakfast' ? 'selected' : '' }}>Breakfast</option>
                                        <option value="lunch" {{ old('categories', $post->categories) == 'lunch' ? 'selected' : '' }}>Lunch</option>
                                        <option value="dinner" {{ old('categories', $post->categories) == 'dinner' ? 'selected' : '' }}>Dinner</option>
                                    </select>
                                    @error('categories')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="read_time">Read Time (min)</label>
                                            <input type="number" 
                                                   name="read_time" 
                                                   id="read_time"
                                                   class="form-control @error('read_time') is-invalid @enderror" 
                                                   placeholder="Read Time (min)*" 
                                                   value="{{ old('read_time', $post->read_time) }}"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="cook_time">Cook Time (min)</label>
                                            <input type="number" 
                                                   name="cook_time" 
                                                   id="cook_time"
                                                   class="form-control @error('cook_time') is-invalid @enderror" 
                                                   placeholder="Cook Time (min)*" 
                                                   value="{{ old('cook_time', $post->cook_time) }}"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="prep_time">Prep Time (min)</label>
                                            <input type="number" 
                                                   name="prep_time" 
                                                   id="prep_time"
                                                   class="form-control @error('prep_time') is-invalid @enderror" 
                                                   placeholder="Prep Time (min)*" 
                                                   value="{{ old('prep_time', $post->prep_time) }}"
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="serves">Serves</label>
                                            <input type="number" 
                                                   name="serves" 
                                                   id="serves"
                                                   class="form-control @error('serves') is-invalid @enderror" 
                                                   placeholder="Serves*" 
                                                   value="{{ old('serves', $post->serves) }}"
                                                   required>
                                        </div>
                                    </div>
                                </div>
                
                                <div class="form-group">
                                    <label for="header_pic">Header Image</label>
                                    @if($post->header_pic)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $post->header_pic) }}" alt="Current Image" class="img-thumbnail" id="currentImagePreview">
                                    </div>
                                @endif
                                    <input type="file" 
                                           name="header_pic" 
                                           id="header_pic"
                                           class="form-control @error('header_pic') is-invalid @enderror">
                                           <img id="imagePreview" class="img-thumbnail mt-2" style="display: none;" />
                                  

                                </div>
                
                                <div class="button-group">
                                    <button type="submit" class="site-btn">UPDATE </button>
                                  {{--  <a href="{{ route('profile') }}" class="change-password-button">CANCEL</a>  --}} 
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__text">
                        <div class="footer__logo">
                            <a href="#"><img src="{{ asset('img/logo.png') }}" alt="Logo"></a>
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
    <!-- Change Password Modal -->
  

    <script>
        // JavaScript to preview image before upload
        document.getElementById('header_pic').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const imagePreview = document.getElementById('imagePreview');
            const currentImagePreview = document.getElementById('currentImagePreview');
            
            // Check if file is an image
            if (file && file.type.startsWith('image')) {
                // Hide the old image if a new one is selected
                currentImagePreview.style.display = 'none';
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    imagePreview.style.display = 'block'; // Show image preview
                    imagePreview.src = e.target.result; // Set the image preview source
                };
                reader.readAsDataURL(file);
            } else {
                imagePreview.style.display = 'none'; // Hide image preview if not an image
                currentImagePreview.style.display = 'block'; // Show old image if no new image selected
            }
        });
    </script>




    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
    <!-- Add these before closing </body> tag -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>

