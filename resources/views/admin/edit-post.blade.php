<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        #imagePreview {
            max-height: 200px;
            max-width: 100%;
            margin-top: 10px;
        }
        #currentImagePreview {
            max-height: 200px;
            max-width: 100%;
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
                                <li><a href="{{url('/admin/dashboard')}}">Admin page</a></li>
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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Recipe</h2>
                    </div>
                    
                    <div class="card-body">
                        <form action="{{ route('admin.update', $post->p_id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" value="{{ $post->user->username }}" disabled>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}" required>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required>{{ old('description', $post->description) }}</textarea>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="categories">Categories (comma-separated)</label>
                                <input type="text" class="form-control" id="categories" name="categories" value="{{ old('categories', $post->categories) }}" required>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="read_time">Read Time (min)</label>
                                        <input type="number" class="form-control" id="read_time" name="read_time" value="{{ old('read_time', $post->read_time) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="cook_time">Cook Time (min)</label>
                                        <input type="number" class="form-control" id="cook_time" name="cook_time" value="{{ old('cook_time', $post->cook_time) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="prep_time">Prep Time (min)</label>
                                        <input type="number" class="form-control" id="prep_time" name="prep_time" value="{{ old('prep_time', $post->prep_time) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group mb-3">
                                        <label for="serves">Serves</label>
                                        <input type="number" class="form-control" id="serves" name="serves" value="{{ old('serves', $post->serves) }}" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label for="header_pic">Header Image</label>
                                @if($post->header_pic)
                                    <div class="mb-2">
                                        <img src="{{ asset('storage/' . $post->header_pic) }}" alt="Current Image" class="img-thumbnail" id="currentImagePreview">
                                    </div>
                                @endif
                                <input type="file" class="form-control" id="header_pic" name="header_pic">
                                <img id="imagePreview" class="img-thumbnail mt-2" style="display: none;" />
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update Recipe</button>
                                <a href="{{ route('list.post') }}" class="btn btn-secondary">Cancel</a>
                            </div>
                        </form>
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
        // ffffJavaScript to preview image before upload
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
</body>
</html>
