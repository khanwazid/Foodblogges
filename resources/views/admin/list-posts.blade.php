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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .badge-primary {
    background-color: #f4952f;
    color: white;
    padding: 5px 10px;
    border-radius: 4px;
    margin-right: 5px;
    font-weight: normal;
}

        /* Enhanced Pagination Styling */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2rem;
}

.pagination li {
    list-style: none;
    margin: 0 5px;
}

.pagination li .page-link {
    padding: 8px 16px;
    border: 1px solid orange;
    color: orange;
    background: white;
    border-radius: 4px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.pagination li.active .page-link {
    background: orange;
    color: white;
    border-color: orange;
}

.pagination li .page-link:hover {
    background: orange;
    color: white;
}

.pagination li.disabled .page-link {
    background: #f8f9fa;
    color: #6c757d;
    border-color: #dee2e6;
    cursor: not-allowed;
}

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
  
        .back-button-wrapper {
    position: relative;
    margin-top: 10px;
    margin-bottom: 10px;
}

.logout-button {
    position: absolute;
    right: 0; /* Positions the button at the far right */
    top: 0;
    display: inline-block;
    background-color: orange;
    color: white;
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    border: none;  /* This removes the border */
    cursor: pointer; 

}

.logout-button:hover {
    background-color: darkorange;
}
  

.logout-button:before {
    content: '←';
    font-size: 18px;
    margin-right: 5px;
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

        .change-password-button {
            border: 2px solid orange;
            background-color: transparent;
            color: orange;
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
    background-color: orange; /* Set the background color to orange */
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

/* Optional: Add a subtle shadow effect to the modal */
#changePasswordModal .modal-dialog {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
.posts-section.spad {
    padding: 50px 0;
}

.users-table-container {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.1);
    padding: 25px;
    margin: 20px 0;
}

.table-title {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid orange;
}

/* Search Input Styling */
.search-input {
    border: 2px solid #ddd;
    border-radius: 5px;
    padding: 10px 15px;
    transition: border-color 0.3s ease;
}

.search-input:focus {
    border-color: orange;
    box-shadow: 0 0 0 0.2rem rgba(255, 165, 0, 0.25);
}

.btn-search {
    background-color: orange;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn-search:hover {
    background-color: darkorange;
}

/* Table Styling */
.custom-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-top: 20px;
}

.custom-table thead th {
    background-color: #f8f9fa;
    color: #333;
    font-weight: 600;
    padding: 15px;
    text-transform: uppercase;
    font-size: 14px;
    border-bottom: 2px solid #dee2e6;
}

.custom-table tbody tr {
    transition: all 0.3s ease;
}

.custom-table tbody tr:hover {
    background-color: #fff8f0;
    transform: scale(1.01);
}

.custom-table td {
    padding: 15px;
    vertical-align: middle;
    border-bottom: 1px solid #dee2e6;
}

/* Image Styling */
.table-image {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 6px;
}

.no-image {
    color: #999;
    font-style: italic;
    font-size: 13px;
}

/* Action Buttons */
.action-buttons {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
}

.btn-edit, .btn-delete {
    padding: 8px 12px;
    border-radius: 4px;
    font-size: 13px;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 5px;
}

.btn-edit {
    background-color: #fff;
    color: orange;
    border: 1px solid orange;
}

.btn-edit:hover {
    background-color: orange;
    color: white;
}

.btn-delete {
    background-color: #fff;
    color: #dc3545;
    border: 1px solid #dc3545;
}

.btn-delete:hover {
    background-color: #dc3545;
    color: white;
}

/* Pagination Styling */
.pagination {
    margin: 20px 0;
    gap: 5px;
}

.page-link {
    color: orange;
    border: 1px solid orange;
    padding: 8px 16px;
    border-radius: 4px;
}

.page-link:hover {
    background-color: orange;
    color: white;
    border-color: orange;
}

.page-item.active .page-link {
    background-color: orange;
    border-color: orange;
}

/* Alert Styling */
.alert-info {
    background-color: #f8f9fa;
    border-left: 4px solid orange;
    color: #333;
    padding: 15px;
    border-radius: 4px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .custom-table {
        display: block;
        overflow-x: auto;
    }
    
    .action-buttons {
        flex-direction: column;
    }
    
    .users-table-container {
        padding: 15px;
    }
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
                        
                    </div>
                    <div class="col-lg-8 col-md-10 order-md-2 order-3">
                        <nav class="header__menu">
                            <ul>
                                <li><a href="{{url('/admin/dashboard')}}">Admin page</a></li>
                               {{--  <li><a href="{url('/index')}}">Home</a></li>
                                <li><a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li> --}}
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-md-1 col-6 order-md-3 order-2">
                        
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
                </div> --}}
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
                           {{--   <h2>Home:My Account</h2>
                            @if(Auth::check())
                            <!-- Logout Form -->
                            <form action="{{ route('logout') }}" method="POST" class="logout-form">
                                @csrf
                                <button type="submit" class="logout-button">Logout</button>
                            </form>
                        @endif --}}
                        <div class="back-button-wrapper">
                            <a href="{{ url('/admin/dashboard') }}" class="logout-button">BACK</a>
                        </div>
                        
                            <div class="breadcrumb__option">
                               
                                <a href="#">Home</a>
                              
                                <span>My Account</span>
                            </div>
                        </div>
                        <section class="posts-section spad">
                            <div class="container">
                                <div class="users-table-container">
                                    <h2 class="table-title">All Posts</h2>
                                    
                                    <div class="table-responsive custom-table-container">
                                        <div class="mb-4 px-3">
                                            <form action="{{ route('list.post') }}" method="GET">
                                                <div class="input-group">
                                                    <input type="text" 
                                                           name="search" 
                                                           class="form-control search-input"
                                                           placeholder="Search by title, description or author..." 
                                                           value="{{ request('search') }}">
                                                    <div class="input-group-append">
                                                        <button type="submit" class="btn btn-search">
                                                            <i class="fa fa-search"></i> Search
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                        
                                        @if($posts->count() > 0)
                                            <table class="custom-table">
                                                <thead>
                                                    <tr>
                                                        <th width="5%">ID</th>
                                                        <th width="8%">Author</th>
                                                        <th width="12%">Title</th>
                                                        <th width="15%">Description</th>
                                                        <th width="8%">Read Time</th>
                                                        <th width="8%">Cook Time</th>
                                                        <th width="8%">Prep Time</th>
                                                        <th width="5%">Serves</th>
                                                        <th width="10%">Categories</th>
                                                        <th width="8%">Image</th>
                                                        <th width="13%">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($posts as $post)
                                                        <tr class="table-row">
                                                            <td>{{ $post->p_id }}</td>
                                                            <td>{{ $post->user->username }}</td>
                                                            <td>{{ Str::limit($post->title, 30) }}</td>
                                                            <td>{{ Str::limit($post->description, 50) }}</td>
                                                            <td>{{ $post->read_time }} min</td>
                                                            <td>{{ $post->cook_time }} min</td>
                                                            <td>{{ $post->prep_time }} min</td>
                                                            <td>{{ $post->serves }}</td>
                                                           {{--   <td>{{ $post->categories }}</td> --}}
                                                           <td>
                                                            @php
                                                                $categories = is_string($post->categories) ? json_decode($post->categories, true) : $post->categories;
                                                            @endphp
                                                            
                                                            @if(is_array($categories))
                                                                {{ implode(', ', array_map('ucfirst', $categories)) }}
                                                            @endif
                                                        </td>
                                                        
                                                        
                                                            <td>
                                                                @if($post->header_pic)
                                                                    <img src="{{ asset('storage/' . $post->header_pic) }}" 
                                                                         alt="{{ $post->title }}" 
                                                                         class="table-image">
                                                                @else
                                                                    <span class="no-image">No Image</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                               <div class="action-buttons">
                                                                   {{--   <a href="{{ route('posts.show', $post->p_id) }}" 
                                                                       class="btn-edit">
                                                                       <i class="fa fa-eye"></i> View
                                                                    </a> --}}
                                                                    <a href="{{ route('admin.post', $post->p_id) }}" 
                                                                       class="btn-edit">
                                                                       <i class="fa fa-edit"></i> Edit
                                                                    </a>
                                                                    <form action="{{ route('admin.destroy', $post->p_id) }}" 
                                                                          method="POST" 
                                                                          class="d-inline">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" 
                                                                                class="btn-delete"
                                                                                onclick="return confirm('Are you sure?')">
                                                                            <i class="fa fa-trash"></i> Delete
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                        
                                            <div class="d-flex justify-content-end mt-4 px-3">
                                                {{ $posts->appends(request()->query())->links() }}
                                            </div>
                                        @else
                                            <div class="alert alert-info">
                                                <i class="fa fa-info-circle"></i> No posts found.
                                            </div>
                                        @endif
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

