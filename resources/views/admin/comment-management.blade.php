<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Comment Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
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
         .post-image {
    width: 100%;
    height: auto;
    min-height: 800px;
    max-height: 1000px;
    object-fit: contain;
    border-radius: 8px;
    margin: 20px 0;
    display: block;
}

.no-image-container {
    background: linear-gradient(45deg, #f8f9fa, #e9ecef);
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.no-image-content {
    padding: 2rem;
    color: #f4952f;
}

.no-image-content i {
    font-size: 64px;
    margin-bottom: 1.5rem;
}

.no-image-content h3 {
    font-size: 28px;
    margin-bottom: 1rem;
}

.no-image-content p {
    font-size: 18px;
}



         .no-image-container {
    background: linear-gradient(45deg, #f3f3f3, #e9e9e9);
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 8px;
}

.no-image-content {
    padding: 2rem;
    color: red;
}

.no-image-content i {
    margin-bottom: 1rem;
    color: #999;
}

.no-image-content h3 {
    font-size: 24px;
    margin-bottom: 0.5rem;
    color: red;
}

.no-image-content p {
    font-size: 16px;
    color: red;
}
        .no-image-container {
    background: linear-gradient(45deg, #f3f3f3, #e9e9e9);
    height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    border-radius: 8px;
}

.no-image-content {
    padding: 2rem;
    color: red;
}

.no-image-content i {
    margin-bottom: 1rem;
    color: #999;
}

.no-image-content h3 {
    font-size: 24px;
    margin-bottom: 0.5rem;
    color: red;
}

.no-image-content p {
    font-size: 16px;
    color: red;
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
    cursor: pointer;
}
.logout-button:before {
    content: '←';
    font-size: 18px;
    margin-right: 5px;
}
.logout-button:hover {
    background-color:  #F9801A;
    transform: translateX(-3px);
}
.modal-dialog {
    max-width: 500px;
    margin: 30px auto;
}

.modal-content {
    background-color: #fff;
    border-radius: 8px;
    padding: 20px;
}

.signin__logo {
    text-align: center;
    margin-bottom: 20px;
}

.signin__logo img {
    max-width: 200px;
    height: auto;
}

.signin__content p {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
    font-size: 14px;
    line-height: 1.6;
}

.modal-title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    width: 100%;
    text-align: center;
}

.modal-header {
    display: flex;
    justify-content: center;
    background-color: #fff;
    border-bottom: 2px solid #ddd;
    padding: 15px;
}


.form-control {
    border-radius: 4px;
    border: 1px solid #ccc;
    padding: 10px;
    font-size: 14px;
    width: 100%;
}

.modal-footer {
    padding: 15px 0;
    border-top: none;
}

.btn-secondary {
    background-color: white;
    color: black;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 4px;
    border: 2px solid #F9801A;
}

.btn-secondary:hover {
    background-color: #F9801A;
    color: white;
}

.btn-orange {
    background-color: #F9801A;
    color: white;
    font-weight: 600;
    padding: 8px 16px;
    border-radius: 4px;
    border: 2px solid #F9801A;
}

.btn-orange:hover {
    background-color: darkorange;
    border-color: darkorange;
}



/* Main Styles */
.pagination {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}
.btn-primary.orange-save {
    background-color: #f4952f;
    border-color: #f4952f;
    color: white;
}

.btn-primary.orange-save:hover {
    background-color: #e07f1f;
    border-color: #e07f1f;
}

.btn-secondary.black-close {
    background-color: white;
    border: 2px solid #f4952f;
    color: black;
    transition: all 0.3s ease;
}

.btn-secondary.black-close:hover {
    background-color: #f4952f;
    border-color: #f4952f;
    color: white;
}


.pagination .btn {
    padding: 10px 15px;
    font-size: 16px;
    background-color:  #f4952f; !important;
    color: white !important;
    border: none !important;
    transition: background-color 0.3s ease;
    outline: none !important;
    box-shadow: none !important;
    -webkit-tap-highlight-color: transparent; /* Remove highlight on touch devices */
    -webkit-user-select: none;
    user-select: none;
    text-decoration: none !important;
    -webkit-appearance: none;
    -moz-appearance: none;
}

.pagination .btn:hover,
.pagination .btn:focus,
.pagination .btn:active,
.pagination .btn:visited,
.pagination .btn:focus-visible,
.pagination .btn:focus-within,
.pagination .btn:-moz-focus-inner {
    background-color: #e65c00 !important; /* Dark orange */
    color: white !important;
    outline: none !important; /* Remove focus outline */
    box-shadow: none !important; /* Remove focus shadow */
    border: none !important;
    text-decoration: none !important;
}

.pagination .btn:focus {
    outline: none !important; /* Ensure no blue outline */
    box-shadow: none !important; /* Ensure no shadow */
}

.pagination .btn:active {
    background-color: #cc5200 !important; /* Slightly darker orange for active click */
    outline: none !important;
    box-shadow: none !important;
}

.pagination .btn.disabled {
    background-color: #ffb380 !important;
    cursor: not-allowed;
    outline: none !important;
    box-shadow: none !important;
}



.post-content {
    background: #fff;
    border-radius: 20px;
    padding: 30px;
    margin: 30px auto;
    max-width: 800px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    position: relative;
}

.post-number {
    position: absolute;
    top: -15px;
    left: -15px;
    background: #ff6600;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    box-shadow: 0 4px 8px rgba(255, 102, 0, 0.3);
}

.post-image {
    width: 100%;
    height: auto;
    max-height: 400px;
    object-fit: contain;
    border-radius: 15px;
    margin-bottom: 25px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
}
 Alert Messages */

.alert {
    max-width: 800px;
    margin: 20px auto;
    padding: 15px 25px;
    border-radius: 15px;
    animation: slideIn 0.5s ease-out;
}

.alert-success {
    background-color: #28a745;
    color: white;
    border-left: 5px solid #1e7e34;
    box-shadow: 0 4px 15px rgba(40, 167, 69, 0.2);
}
body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
.alert-error {
    background-color: #dc3545;
    color: white;
    border-left: 5px solid #bd2130;
    box-shadow: 0 4px 15px rgba(220, 53, 69, 0.2);
}
.description-section::before {
    content: '🍽️';
    display: block;
    text-align: center;
    font-size: 24px;
    margin-bottom: 10px;
}
.description-section {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 15px;
    margin: 15px 0;
   
}


@keyframes slideIn {
    from {
        transform: translateY(-20px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}


/* Recipe Styles */
.recipe-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: #ff6600;
    margin: 20px 0;
}

.recipe-meta {
    background: #f8f9fa;
    border-radius: 15px;
    padding: 25px;
    margin: 20px 0;
}

.meta-item {
    text-align: center;
    padding: 10px;
    border-radius: 12px;
    transition: all 0.3s ease;
}


.meta-item:hover {
    background:  orangered;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

/* Comments Section */
.comments-section {
    margin-top: 30px;
    padding: 15px;
    background: #fff;
    border-radius: 15px;
}

.comment-item {
    background: #f8f9fa;
    border-radius: 12px;
    padding: 15px;
    margin-bottom: 15px;
    transition: all 0.3s ease;
}

/* Buttons */
.btn-edit {
    background-color: #ffc107;
    color: #000;
    border: none;
    padding: 8px 20px;
    border-radius: 25px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(255, 193, 7, 0.3);
}

.btn-edit:hover {
    background-color: #ffc107;
    color: #000;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(255, 193, 7, 0.4);
}

.btn-delete {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 8px 20px;
    border-radius: 25px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 5px rgba(220, 53, 69, 0.3);
}

.btn-delete:hover {
    background-color: #dc3545;
    color: white;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(220, 53, 69, 0.4);
}

    </style>
</head>
<body>
    <div class="wrapper">

    
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
   
                </div>
            </div>
            <a href="{{ url('/admin/dashboard') }}" class="logout-button">BACK</a>
        </div>
        
    <div class="container mt-5">
        
        @if(session('success'))
    <div class="alert alert-success" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-error" role="alert">
        <i class="fas fa-exclamation-circle me-2"></i>
        {{ session('error') }}
    </div>
@endif
<div class="container">
    
<!-- Single Post Section Begin -->
<section class="single-post spad">
    @foreach ($posts as $post)
   
  {{--  <div class="single-post__hero">
        @if($post->header_pic && Storage::exists($post->header_pic))
            <div class="set-bg" data-setbg="{{ asset('storage/'.$post->header_pic) }}"></div>
        @else
            <div class="no-image-container">
                <div class="no-image-content">
                    <i class="fa fa-picture-o fa-4x"></i>
                    <h3>No Recipe Image Available</h3>
                    <p>Stay tuned for a visual treat coming soon!</p>
                </div>
            </div>
        @endif
    </div>  --}} 

    <div class="single-post__hero">
        @if($post->header_pic)
            <img src="{{ Storage::url($post->header_pic) }}" 
                 alt="{{ $post->title }}" 
                 class="img-fluid post-image">
        @else
            <div class="no-image-container post-image">
                <div class="no-image-content">
                    <i class="fa fa-picture-o fa-4x"></i>
                    <h3>No Recipe Image Available</h3>
                    <p>Stay tuned for a visual treat coming soon!</p>
                </div>
            </div>
        @endif
    </div>
    
    
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <!-- Post Title Section -->
                <div class="single-post__title">
                    <div class="single-post__title__meta">
                        <h2>{{ $post->created_at->format('d') }}</h2>
                        <span>{{ $post->created_at->format('M') }}</span>
                    </div>
              {{--      <div class="single-post__title__text">
                   
                        <ul class="label">
                            <li>
                                @php
                                    $categories = is_array($post->categories) ? $post->categories : json_decode($post->categories);
                                    echo implode(', ', $categories);
                                @endphp
                            </li>
                        </ul> --}} 

                        <div class="single-post__title__text">
                            <ul class="label">
                          {{--       <li>{{ $post->categories }}</li>  --}}
                                <li>
                                    @php
                                        $categories = is_string($post->categories) ? json_decode($post->categories, true) : $post->categories;
                                    @endphp
                                    
                                    @if(is_array($categories))
                                        {{ implode(', ', $categories) }}
                                    @else
                                        {{ $categories }}
                                    @endif
                                </li>
                                
                            </ul>
                        
                                                
                        <h4>{{ $post->title }}</h4>
                        <ul class="widget">
                            <li>by {{ $post->user->username }}</li>
                            <li>{{ $post->read_time }} min read</li>
                            <li>{{ $post->comments->count() }} Comments</li>
                        </ul>
                    </div>
                </div>

                <!-- Recipe Details Section -->
                <div class="single-post__recipe__details">
                    <div class="single-post__recipe__details__option">
                        <ul>
                            <li>
                                <h5><i class="fa fa-user-o"></i> SERVES</h5>
                                <span>{{ $post->serves }} people</span>
                            </li>
                            <li>
                                <h5><i class="fa fa-clock-o"></i> PREP TIME</h5>
                                <span>{{ $post->prep_time }} mins</span>
                            </li>
                            <li>
                                <h5><i class="fa fa-clock-o"></i> COOK TIME</h5>
                                <span>{{ $post->cook_time }} mins</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Description Section improved this section -->
               {{-- <div class="single-post__desc">
                    <h5><i class="fa fa-file-text-o"></i> DESCRIPTION</h5>
                    <p>{{ $post->description }}</p>
                </div>  --}}


                <div class="single-post__desc">
                    <h5><i class="fa fa-file-text-o"></i> DESCRIPTION</h5>
                    <p>{!! nl2br(e($post->description)) !!}</p>
                </div>
                

                <!-- Comments Section -->
                <div class="single-post__comment">
                    <div class="widget__title">
                        <h4>{{ $post->comments->count() }} Comments</h4>
                    </div>
                    
                    @foreach($post->comments as $comment)
                    <div class="single-post__comment__item">
                        <div class="single-post__comment__item__text">
                            <h5>{{ $comment->user->username }}</h5>
                            <span>{{ $comment->created_at->format('d M Y') }}</span>
                            <p>{{ $comment->content }}</p>
                            
                            {{--  @if(auth()->check() && auth()->id() === $comment->user_id) --}}
                            @if(auth()->check() && auth()->user()->role === 'admin')

                            
                          {{--   <ul>
                                <li>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ $comment->id }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </li>
                                <li>
                                    <form action="{{ route('admin.comments.destroy', $comment) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-link">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </li>
                            </ul> --}}
                            @endif
                        </div>
                    </div>
            {{--        
    <!-- Edit Modal - Place it here inside the foreach loop -->
    <div class="modal fade" id="editModal{{ $comment->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $comment->id }}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="password">
                <div class="signin__warp">
                    <div class="signin__content">
                        <div class="signin__logo">
                            <a href="#"><img src="{{ asset('img/siign-in-logo.png') }}" alt="Sign In Logo"></a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua viverra.</p>
                        
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $comment->id }}">EDIT COMMENT</h5>
                                
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('admin.comments.update', $comment) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <textarea class="form-control" name="content" rows="3" required>{{ $comment->content }}</textarea>
                                    </div>
                                    <div class="modal-footer">
                                        
                                        <button type="submit" class="btn btn-orange">SAVE CHANGES</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     --}} 
    
    </div>
    
    </div>
    
                    @endforeach
                </div>

                <!-- Comment Form -->
                @auth
                               {{--   <div class="single-post__leave__comment">
                                    <div class="widget__title">
                                        <h4>Leave a comment</h4>
                                    </div>
                                    <form action="{{ route('comments.store', ['postId' => $post->p_id]) }}" method="POST">
                                        @csrf
                                        <textarea name="content" placeholder="Share your thoughts..."></textarea>
                                        <button type="submit" class="site-btn">Submit</button>
                                    </form>
                                </div> --}}
                                
                            @else
                                <p class="text-center mb-4">
                                    <a href="{{ route('login') }}" style="color: #ff6600;">Login</a> to leave a comment
                                </p>
                            @endauth
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="pagination">
                @if ($posts->onFirstPage())
                    <span class="btn btn-secondary disabled">PREVIOUS</span>
                @else
                    <a href="{{ $posts->previousPageUrl() }}" class="btn btn-primary">Previous</a>
                @endif
    
                @if ($posts->hasMorePages())
                    <a href="{{ $posts->nextPageUrl() }}" class="btn btn-primary">NEXT</a>
                @else
                    <span class="btn btn-secondary disabled">Next</span>
                @endif
            </div>
</section>
<!-- Single Post Section End -->
                             
         
           {{--   <div class="d-flex justify-content-end">
                {{ $posts->links() }}
            </div> --}}
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
    </div> 
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
            document.addEventListener('DOMContentLoaded', function() {
                // Initialize Bootstrap modals properly
                var myModals = document.querySelectorAll('.modal');
                myModals.forEach(function(modal) {
                    modal.addEventListener('shown.bs.modal', function () {
                        document.body.classList.add('modal-open');
                    });
                    
                    modal.addEventListener('hidden.bs.modal', function () {
                        document.body.classList.remove('modal-open');
                    });
                });
            
                // Delete confirmation
                const deleteButtons = document.querySelectorAll('.btn-delete');
                deleteButtons.forEach(button => {
                    button.addEventListener('click', function(e) {
                        if (!confirm('Are you sure you want to delete this comment?')) {
                            e.preventDefault();
                        }
                    });
                });
            });
            </script>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
    // Auto dismiss alerts after 5 seconds
    const alerts = document.querySelectorAll('.alert');
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.opacity = '0';
            setTimeout(() => {
                alert.remove();
            }, 500);
        }, 5000);
    });
});

            </script>
            
           
            
    </body>
    </html>