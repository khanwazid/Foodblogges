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
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <style>
    /* Select2 Container Width */
.select2-container {
    width: 100% !important;
}

/* Select2 Multiple Selection Styling */
.select2-container--default .select2-selection--multiple {
    border: 2px solid #ced4da !important;
    border-radius: 4px !important;
    font-size: 14px !important;
    padding: 4px 8px !important;
    min-height: 40px !important;
    background-color: #f9f9f9 !important;
    display: flex !important;
    align-items: center !important;
}

/* Focus State Styling */
.select2-container--default.select2-container--focus .select2-selection--multiple {
    border-color: #f4952f !important;
    box-shadow: 0 0 5px rgba(244, 149, 47, 0.5) !important;
    outline: none !important;
}

/* Search Inline Styling */
.select2-container--default .select2-selection--multiple .select2-search--inline {
    width: auto !important;
    flex-grow: 1 !important;
}

.select2-container--default .select2-search--inline .select2-search__field {
    width: 100% !important;
    margin-left: 0 !important;
    margin-top: 0 !important;
    padding: 8px !important;
    font-size: 14px !important;
    min-height: 30px !important;
}

.select2-container--default.select2-container--focus .select2-search--inline .select2-search__field {
    width: 100% !important;
}

/* Selected Choices Styling */
.select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #f4952f !important;
    border: 1px solid #f4952f !important;
    color: white !important;
    border-radius: 4px !important;
    padding: 2px 8px !important;
    margin: 2px !important;
}

/* Remove Choice Button Styling */
.select2-container--default .select2-selection__choice__remove {
    color: white !important;
    margin-right: 5px !important;
    border-right: 1px solid rgba(255,255,255,0.3) !important;
    padding-right: 5px !important;
}

.select2-container--default .select2-selection__choice__remove:hover {
    background-color: #f4952f !important;
    color: white !important;
}.select2-container--default .select2-results__option:hover {
    background-color: #f4952f !important;
    color: black !important;
}

/* Dropdown Styling */
.select2-dropdown {
    border: 2px solid #f4952f !important;
    border-radius: 4px !important;
    margin-top: 5px !important;
}

/* Results Options Styling */
.select2-results__option {
    padding: 8px 12px !important;
    font-size: 14px !important;
}

.select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #f4952f !important;
    color: black !important;
}

.select2-container--default .select2-results__option[aria-selected=true] {
    background-color: #fff3e6 !important;
    color: #f4952f !important;
}

        /* Custom styling for file input placeholder */
.image-placeholder {
    display: block;
    width: 100%;
    padding: 30px;
    border: 2px dashed #ccc;
    border-radius: 8px;
    text-align: center;
    background-color: #f8f9fa;
    color: #888;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.image-placeholder:hover {
    background-color: #f1f1f1;
    border-color: #ff6600;
}

/* Optional icon for image upload */
.upload-icon {
    font-size: 40px;
    color: #ffa500;
    display: block;
    margin: 10px 0;
}

.image-placeholder p {
    margin: 0;
}

/* Image preview styling */
#imagePreview {
    display: block;
    width: 100%;
    max-width: 100%;
    height: auto;
    margin-top: 15px;
    border: 2px solid #ddd;
    border-radius: 8px;
}

/* For handling the file input click trigger from placeholder */
.image-placeholder {
    position: relative;
}

.image-placeholder input {
    display: none;  /* Hide the actual file input */
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
.header__btn h5 {
    color: black;
    text-transform: uppercase; /* Set the welcome text to orange */
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
    
    color: #f4952f;
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
    background-color: darkorange; 
    color: white;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 4px;
    border: 2px solid darkorange;
}

#changePasswordModal .btn-orange:hover {
    background-color: darkorange;
    border-color: darkorange;
}

.logout-button:before {
    content: '←';
    font-size: 18px;
    margin-right: 5px;
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


input::placeholder {
    font-size: 14px;
}

input {
    font-size: 14px;
}
.btn-orange {
    background-color: darkorange;
    color: white;
    border: none;
}

.btn-secondary {
    background-color: white;
    color: black;
    border: 2px solid darkorange;
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
                        <a href="{{ url('/admin/dashboard') }}" class="logout-button">BACK</a>
                            <div class="breadcrumb__option">
                                <a href="#">Home</a>
                                <span>My Account</span>
                            </div>
                        </div>
                      <div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="contact__form">
            <div class="contact__form__title">
                <h2>POST DATA</h2>
                <p>You Can Create Your Post From Here</p>
            </div>
            <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="profile-form">
                @csrf

                <div class="form-group">
                   
                    <input type="text" 
                           name="title" 
                           id="title"
                           class="form-control @error('title') is-invalid @enderror" 
                           placeholder="Title*" 
                           value="{{ old('title') }}"
                           required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                <div class="form-group">
                    
                    <textarea name="description" 
                              id="description"
                              class="form-control @error('description') is-invalid @enderror" 
                              placeholder="Description*" 
                              required>{{ old('description') }}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

               {{-- <div class="form-group">
                    
                      <select name="categories[]"  
                            id="categories"
                            class="form-control @error('categories') is-invalid @enderror" 
                           multiple required>
                       <option value="">Select Category*</option>
                        <option value="breakfast" {{ old('categories') == 'breakfast' ? 'selected' : '' }}>Breakfast</option>
                        <option value="lunch" {{ old('categories') == 'lunch' ? 'selected' : '' }}>Lunch</option>
                        <option value="dinner" {{ old('categories') == 'dinner' ? 'selected' : '' }}>Dinner</option>
                        <option value="breakfast" {{ in_array('breakfast', $post->categories ?? []) ? 'selected' : '' }}>Breakfast</option>
                        <option value="lunch" {{ in_array('lunch', $post->categories ?? []) ? 'selected' : '' }}>Lunch</option>
                        <option value="dinner" {{ in_array('dinner', $post->categories ?? []) ? 'selected' : '' }}>Dinner</option>
                        <option value="desserts" {{ in_array('desserts', $post->categories ?? []) ? 'selected' : '' }}>Desserts</option>
                        <option value="appetizers" {{ in_array('appetizers', $post->categories ?? []) ? 'selected' : '' }}>Appetizers</option>
                        <option value="beverages" {{ in_array('beverages', $post->categories ?? []) ? 'selected' : '' }}>Beverages</option>
                        <option value="snacks" {{ in_array('snacks', $post->categories ?? []) ? 'selected' : '' }}>Snacks</option>
                    </select>
                   
                    @error('categories')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div> --}}
                <div class="form-group">
                    <select name="categories[]" 
                            id="categories" 
                            class="form-control select2 @error('categories') is-invalid @enderror" 
                            multiple>
                            <option value="">Select Category*</option>
                        <option value="breakfast">Breakfast</option>
                        <option value="lunch">Lunch</option>
                        <option value="dinner">Dinner</option>
                        <option value="desserts">Desserts</option>
                        <option value="appetizers">Appetizers</option>
                        <option value="beverages">Beverages</option>
                        <option value="snacks">Snacks</option>
                    </select>
                    @error('categories')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                
                

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            
                            <input type="number" 
                                   name="read_time" 
                                   id="read_time"
                                   class="form-control @error('read_time') is-invalid @enderror" 
                                   placeholder="Read Time (min)*" 
                                   value="{{ old('read_time') }}"
                                   required>
                                   @error('read_time')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                           
                            <input type="number" 
                                   name="cook_time" 
                                   id="cook_time"
                                   class="form-control @error('cook_time') is-invalid @enderror" 
                                   placeholder="Cook Time (min)*" 
                                   value="{{ old('cook_time') }}"
                                   required>
                                   @error('cook_time')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            
                            <input type="number" 
                                   name="prep_time" 
                                   id="prep_time"
                                   class="form-control @error('prep_time') is-invalid @enderror" 
                                   placeholder="Prep Time (min)*" 
                                   value="{{ old('prep_time') }}"
                                   required>
                                   @error('prep_time')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                   
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            
                            <input type="number" 
                                   name="serves" 
                                   id="serves"
                                   class="form-control @error('serves') is-invalid @enderror" 
                                   placeholder="Serves*" 
                                   value="{{ old('serves') }}"
                                   required>
                                   @error('serves')
                                   <div class="invalid-feedback">{{ $message }}</div>
                               @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group mb-3">
                  
                    <input type="file" 
                           name="header_pic" 
                           id="header_pic"
                           class="form-control @error('header_pic') is-invalid @enderror"
                           accept="image/*"
                           style="display: none;">
    
                           <!-- Custom placeholder for image upload -->
                           <div class="image-placeholder" id="imagePlaceholder">
                               <p>Click to Upload Header Image</p>
                               <span class="upload-icon">📸🍕</span> 
                           </div>
                           
                           
                    @error('header_pic')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    
                    <!-- Preview for the uploaded file -->
                    @if(session('header_pic_path'))
                        <div class="mt-2">
                            <p>Uploaded Image Preview:</p>
                            <img src="{{ asset('storage/' . session('header_pic_path')) }}" 
                                 alt="Uploaded Image" 
                                 class="img-thumbnail"
                                 style="max-width: 100%; height: auto;">
                        </div>
                    @endif
                    <img id="imagePreview" class="img-thumbnail mt-2" style="display: none;" />
                </div>
                

                <div class="button-group">
                    <button type="submit" class="site-btn">SUBMIT</button>
                </div>
            </form>
        </div>
    </div>
</div>

                    </div>
                </div>
                
                       
                
                                    
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
        document.getElementById("imagePlaceholder").addEventListener("click", function() {
    document.getElementById("header_pic").click();
});

document.getElementById("header_pic").addEventListener("change", function(e) {
    var reader = new FileReader();
    reader.onload = function(event) {
        // Show preview
        document.getElementById("imagePreview").style.display = "block";
        document.getElementById("imagePreview").src = event.target.result;
        
        // Keep the placeholder visible but update its content
        const placeholder = document.getElementById("imagePlaceholder");
        placeholder.style.display = "block"; // Keep it visible
        placeholder.innerHTML = `
            <p>Click to Change Image</p>
            <span class="upload-icon">🔄</span>
        `;
        
        // Add a preview below the placeholder
        const previewContainer = document.getElementById("imagePreview");
        previewContainer.style.marginTop = "15px";
    };
    
    if (e.target.files[0]) {
        reader.readAsDataURL(e.target.files[0]);
    }
});

    </script>
    {{--  <script>
        document.getElementById("imagePlaceholder").addEventListener("click", function() {
    document.getElementById("header_pic").click();  // Trigger the file input click
});

document.getElementById("header_pic").addEventListener("change", function(e) {
    var reader = new FileReader();
    reader.onload = function(event) {
        document.getElementById("imagePreview").style.display = "block";
        document.getElementById("imagePreview").src = event.target.result;
        document.getElementById("imagePlaceholder").style.display = "none";  // Hide placeholder
    };
    reader.readAsDataURL(e.target.files[0]);
});
    </script>--}}
  
    {{--  <script>
        document.getElementById('header_pic').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Create preview container if it doesn't exist
                    let previewContainer = document.getElementById('image-preview-container');
                    if (!previewContainer) {
                        previewContainer = document.createElement('div');
                        previewContainer.id = 'image-preview-container';
                        previewContainer.className = 'mt-3';
                        event.target.parentElement.appendChild(previewContainer);
                    }
                    
                    // Update preview container content
                    previewContainer.innerHTML = `
                        <h6 class="mb-2">Image Preview:</h6>
                        <img src="${e.target.result}" alt="Preview" style="max-width: 300px; max-height: 200px; object-fit: cover; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
                    `;
                };
                reader.readAsDataURL(file);
            }
        });
        </script> --}}

        <script>
        // Make sure jQuery and Select2 are loaded first
document.addEventListener('DOMContentLoaded', function() {
    if (jQuery && jQuery.fn.select2) {
        $('#categories').select2({
            placeholder: 'Select Categories (Max 5)*',
            allowClear: true,
            maximumSelectionLength: 5,
            width: '100%',
            multiple: true,
            closeOnSelect: false
        });

        // Force limit to 3 selections
        $('#categories').on('select2:select', function(e) {
            var element = $(this);
            var selected = element.val();
            
            if (selected && selected.length > 5) {
                selected = selected.slice(0, 5);
                element.val(selected).trigger('change');
                
                // Show message
                var warningDiv = $('<div class="alert alert-warning mt-2">Maximum 5 categories allowed</div>');
                element.after(warningDiv);
                setTimeout(function() {
                    warningDiv.fadeOut('slow', function() {
                        $(this).remove();
                    });
                }, 2000);
            }
        });
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>





</body>

</html>

