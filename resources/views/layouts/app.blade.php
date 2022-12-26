<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Moe Card MM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- FAVICON -->
    <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/x-icon" />

    <!-- Template CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/preloader.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/circle.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2f51628552.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ asset('css/skins/blue.css') }}" rel="stylesheet" />
    <!-- Modernizr JS File -->
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
</head>

<body class="home about contact blog blog-post">

    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box active">
                <i class="fa fa-home"></i>
                <a href="#home">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box active">
                <i class="fa fa-info-circle"></i>
                <a href="#info">
                    <h2>Information</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-hashtag"></i>
                <a href="#socials">
                    <h2>Socials</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-bolt"></i>
                <a href="#skills">
                    <h2>Skills</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-comments"></i>
                <a href="#blogs">
                    <h2>Blog</h2>
                </a>
            </li>
        </ul>
        <!-- Fixed Navigation Ends -->
        <!-- Mobile Menu Starts -->
        <nav role="navigation" class="d-block d-lg-none">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="list-unstyled" id="menu">
                    <li class="active"><a href="{{ route('home.index') }}"><i
                                class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="{{ route('home.blog.index') }}"><i class="fa fa-blog"></i><span>Moe's Blog</span></a>
                    </li>
                    <li><a href="{{ route('login') }}"><i class="fa fa-key"></i><span>Login</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    {{ $slot }}
    <!-- Template JS Files -->
    <script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/styleswitcher.js') }}"></script>
    <script src="{{ asset('js/preloader.min.js') }}"></script>
    <script src="{{ asset('js/fm.revealator.jquery.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/classie.js') }}"></script>
    <script src="{{ asset('js/cbpGridGallery.js') }}"></script>
    <script src="{{ asset('js/jquery.hoverdir.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
