<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Moe Card</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/preloader.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/circle.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fm.revealator.jquery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="{{ asset('css/skins/blue.css') }}" rel="stylesheet" />
    <!-- Modernizr JS File -->
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
</head>

<body class="home about contact">
    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        {{-- <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box active">
                <i class="fa fa-home"></i>
                <a href="index.html">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-user"></i>
                <a href="about.html">
                    <h2>About</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="portfolio.html">
                    <h2>Portfolio</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-envelope-open"></i>
                <a href="contact.html">
                    <h2>Contact</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-comments"></i>
                <a href="blog.html">
                    <h2>Blog</h2>
                </a>
            </li>
        </ul>
        <!-- Fixed Navigation Ends --> --}}
        <!-- Mobile Menu Starts -->
        <nav role="navigation" class="d-block d-lg-none">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="list-unstyled" id="menu">
                    <li class="active"><a href="index.html"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="about.html"><i class="fa fa-user"></i><span>About</span></a></li>
                    <li><a href="portfolio.html"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                    <li><a href="contact.html"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                    <li><a href="blog.html"><i class="fa fa-comments"></i><span>Blog</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <section class="main-content revealator-slideup revealator-once revealator-delay1">
        <div class="container">
            <div class="row home-details-container align-items-center">
                <div class="col-lg-4 bg d-none d-lg-block"></div>
                <div class="col-12 col-lg-8 home-details text-center text-sm-center text-lg-left">
                    <div>
                        <img src="img/img-mobile.jpg" class="img-fluid main-img-mobile d-sm-block d-lg-none" alt="my picture">
                        <h1 class="text-uppercase poppins-font">I'm steve milner.<span>web designer</span></h1>
                        <p class="open-sans-font">I'm a Tunisian based web designer & front‑end developer focused on
                            crafting clean & user‑friendly experiences, I am passionate about building excellent
                            software
                            that improves the lives of those around me.</p>
                    </div>
                </div>
            </div>
            <hr class="separator">
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-12 ">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="text-uppercase custom-title mb-0 ft-wt-600 text-center">personal infos</h3>
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">full name :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Steve</span>
                                </li>
                                <li> <span class="title">Age :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">27
                                        Years</span>
                                </li>

                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">Email :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">you@mail.com</span>
                                </li>
                                <li> <span class="title">phone :</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+21621184010</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-12">
                            <ul class="about-list list-unstyled open-sans-font">
                                <li> <span class="title">Address</span> <span
                                        class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Lorem ipsum
                                        dolor sit, amet consectetur adipisicing elit. Natus, saepe? Provident, qui magni
                                        reiciendis sapiente, inventore quaerat quasi ipsam quam veniam eius suscipit
                                        obcaecati recusandae voluptates repellendus? Beatae</span>
                                </li>
                            </ul>
                        </div>
                        <!-- Left Side Starts -->
                        <div class="col-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-4 col-lg-2 col-md-3 col-sm-3 mb-2">
                                    <a href="https://facebook.com/jionsix.hacknh">
                                        <span class="button-icon" style="background-image: url(https://cdn-icons-png.flaticon.com/512/5968/5968764.png)"></span>
                                    </a>
                                </div>
                                <div class="col-4 col-lg-2 col-md-3 col-sm-3 mb-2">
                                    <a href="https://twitter.com/j6dr23n">
                                        <span class="button-icon" style="background-image: url(https://cdn-icons-png.flaticon.com/512/2504/2504839.png)"></span>
                                    </a>
                                </div>
                                <div class="col-4 col-lg-2 col-md-3 col-sm-3 mb-2">
                                    <a href="mailto:j6dr23n@gmail.com">
                                        <span class="button-icon"
                                        style="background-image: url(https://cdn-icons-png.flaticon.com/512/732/732200.png)"></span>
                                    </a>
                                </div>
                                <div class="col-4 col-lg-2 col-md-3 col-sm-3 mb-2">
                                    <a href="tel:+959268201071">
                                        <span class="button-icon" style="background-image: url(https://cdn-icons-png.flaticon.com/512/724/724664.png)"></span>
                                    </a>
                                </div>
                                <div class="col-4 col-lg-2 col-md-3 col-sm-3 mb-2">
                                    <a href="https://facebook.com/jionsix.hacknh">
                                        <span class="button-icon" style="background-image: url(https://cdn-icons-png.flaticon.com/512/5968/5968841.png)"></span>
                                    </a>
                                </div>
                                <div class="col-4 col-lg-2 col-md-3 col-sm-3 mb-2">
                                    <a href="https://facebook.com/jionsix.hacknh">
                                        <span class="button-icon" style="background-image: url(https://cdn-icons-png.flaticon.com/512/3955/3955024.png)"></span>
                                    </a>
                                </div>

                            </div>
                        </div>
                        <!-- Left Side Ends -->
                    </div>
                </div>
            </div>
            <hr class="separator">
            <div class="row">
                <!-- Skills Starts -->
                <div class="col-12">
                    <h3
                        class="text-uppercase text-center pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">
                        My Skills</h3>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p25">
                        <span>25%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p89">
                        <span>89%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p70">
                        <span>70%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p66">
                        <span>66%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p95">
                        <span>95%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">wordpress</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p50">
                        <span>50%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p65">
                        <span>65%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">angular</h6>
                </div>
                <div class="col-6 col-md-3 mb-3 mb-sm-5">
                    <div class="c100 p45">
                        <span>45%</span>
                        <div class="slice">
                            <div class="bar"></div>
                            <div class="fill"></div>
                        </div>
                    </div>
                    <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">react</h6>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Main Content Ends -->

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


<!-- Mirrored from slimhamdi.net/tunis/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 07:06:31 GMT -->

</html>
