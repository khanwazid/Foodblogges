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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.0.0/css/bootstrap.min.css">

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
.users-table-container {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    margin: 30px 0;
}

.table-title {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid orange;
}

.custom-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
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

.action-buttons {
    display: flex;
    gap: 10px;
}

.btn-edit, .btn-delete {
    padding: 8px 15px;
    border-radius: 5px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 14px;
}

.btn-edit {
    background-color: #fff;
    color: #ffa500;
    border: 1px solid #ffa500;
}

.btn-edit:hover {
    background-color: #ffa500;
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

.alert-success {
    background-color: #d4edda;
    color: #155724;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 20px;
    border: 1px solid #c3e6cb;
}

@media (max-width: 768px) {
    .custom-table {
        display: block;
        overflow-x: auto;
    }
    
    .action-buttons {
        flex-direction: column;
        gap: 5px;
    }
}


.search-container {
    margin-bottom: 25px;
}

.search-input {
    border: 2px solid #ddd;
    border-radius: 5px 0 0 5px;
    padding: 10px 15px;
}

.btn-search {
    background-color: orange;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 0 5px 5px 0;
    transition: all 0.3s ease;
}

.btn-search:hover {
    background-color: darkorange;
    color: white;
}

.fade-out-message {
    animation: fadeOut 4s forwards;
}

@keyframes fadeOut {
    0% { opacity: 1; }
    75% { opacity: 1; }
    100% { opacity: 0; display: none; }
}




    </style>
</head>

<body>
    @if (session('success'))
    <div class="alert alert-success fade-out-message" style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 5px; margin: 10px 0;">
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
                                <li><a href="{{url('/admin/dashboard')}}">Admin page</a></li>
                            {{-- <li></li> <a href="{{url('/about')}}">About</a></li>
                                <li><a href="{{url('/contact')}}">Contact</a></li> --}}
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

    <section class="contact spad">
        <div class="container">
            <div class="contact__text">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__text">
                            <h2>Home:My Account</h2>
                            
                            <div class="breadcrumb__option">
                                <a href="#">Home</a>
                                <span>My Account</span>
                            </div>
                        </div>
                      
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="users-table-container">
            <h2 class="table-title">User Management</h2>
          
            <div class="search-container mb-4">
                <form action="{{ route('users.search') }}" method="GET" class="search-form">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control search-input" 
                               placeholder="Search users by name..." 
                               value="{{ request('search') }}">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="submit">
                                <i class="fa fa-search"></i> Search
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            @if(session('not_found'))
            <div class="alert alert-info fade-out-message" role="alert">
                {{ session('not_found') }}
            </div>
            @endif
            
    
            <div class="table-responsive">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->full_name }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td class="action-buttons">
                                <a href="{{ route('profile.edit', $user->id) }}" class="btn-edit">
                                    <i class="fa fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
            </tbody>
           
        </table>
        <div class="d-flex justify-content-end">
            {{ $users->links() }}
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
        
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto remove alert messages after 4 seconds
    setTimeout(function() {
        const alerts = document.querySelectorAll('.fade-out-message');
        alerts.forEach(function(alert) {
            alert.style.display = 'none';
        });
    }, 4000);
});
</script>

            
        
<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>

