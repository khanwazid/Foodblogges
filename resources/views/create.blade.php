<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 0px;
            margin-bottom: 50px;

        }
        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .card-body {
            padding: 30px;
        }
        .form-label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #ff6600; /* Orange color */
            border-color: #ff6600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #cc5200; /* Darker orange */
            border-color: #cc5200;
        }
        .form-control:focus {
            border-color: #ff6600; /* Orange border on focus */
            box-shadow: 0 0 5px rgba(255, 102, 0, 0.5); /* Add orange glow */
        }
        h2 {
            color:  #ff6600;
        }
    </style>
</head>
<body>
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
                                <li><a href="{{url('/profile')}}">Back</a></li>
                        {{--  href="{{url('/index')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <h2 class="mb-4 text-center">Create a New Recipe</h2>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Recipe Title</label>
                        <input type="text" class="form-control" id="title" name="title" 
                               placeholder="Enter recipe title" 
                               value="{{ old('title') }}" required>
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="4" 
                                  placeholder="Write a brief description" required>{{ old('description') }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="header_pic" class="form-label">Header Picture</label>
                        <input type="file" class="form-control" id="header_pic" name="header_pic" accept="image/*">
                        @error('header_pic')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <!-- Preview for the uploaded file -->
                        @if(session('header_pic_path'))
                            <div class="mt-2">
                                <p>Uploaded Image Preview:</p>
                                <img src="{{ asset('storage/' . session('header_pic_path')) }}" alt="Uploaded Image" style="max-width: 100%; height: auto;">
                            </div>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label for="categories" class="form-label">Categories</label>
                        <input type="text" class="form-control" id="categories" name="categories" 
                               placeholder="Enter categories (comma-separated)" 
                               value="{{ old('categories') }}">
                        @error('categories')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="prep_time" class="form-label">Preparation Time (mins)</label>
                            <input type="number" class="form-control" id="prep_time" name="prep_time" 
                                   value="{{ old('prep_time') }}" required>
                            @error('prep_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="cook_time" class="form-label">Cooking Time (mins)</label>
                            <input type="number" class="form-control" id="cook_time" name="cook_time" 
                                   value="{{ old('cook_time') }}" required>
                            @error('cook_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="read_time" class="form-label">Reading Time (mins)</label>
                            <input type="number" class="form-control" id="read_time" name="read_time" 
                                   value="{{ old('read_time') }}">
                            @error('read_time')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="serves" class="form-label">Serves</label>
                        <input type="number" class="form-control" id="serves" name="serves" 
                               placeholder="How many people does it serve?" 
                               value="{{ old('serves') }}" required>
                        @error('serves')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Save Recipe</button>
                </form>
                
            </div>
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
                            <a href="#">
                                <img src="{{ asset('img/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                  {{--       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut<br /> labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus
                            commodo viverra<br /> maecenas accumsan lacus vel facilisis. </p>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div> --}} 
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
      <!-- Js Plugins -->
      <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
      <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
      <script src="{{ asset('js/main.js') }}"></script>
      
      <!-- Add these before closing </body> tag -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <script>
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
    </script>
</body>
</html>
