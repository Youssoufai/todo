<!DOCTYPE html>
<html lang="en">

<head>
    <title>Versalink</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link href="{{ asset('img/4.png') }}" rel="icon" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/podcast.css') }}">

</head>

<body>

    <div class="site-wrap">

        <div class="site-mobile-menu">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar py-4 absolute transparent" role="banner">

            <div class="container">
                <div class="row align-items-center">


                    <div class="col-3" data-aos="fade-down">
                        <h1><a href="{{ route('home') }}" class="text-white h2">VL Post</a></h1>
                    </div>
                    <div class="col-9" data-aos="fade-down">
                        <nav class="navbar navbar-expand-md">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav ms-auto">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('about') }}">About</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('podcast') }}">Podcast</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('vdi') }}">Vdi</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>

                        <style>
                            /* Custom styles for submenu dropdown */
                            .dropdown-submenu {
                                position: relative;
                            }

                            .dropdown-submenu .dropdown-menu {
                                top: 0;
                                left: 100%;
                                margin-top: -1px;
                            }
                        </style>



                    </div>

                </div>
            </div>

        </header>

        <div class="site-blocks-cover overlay" style="background-image: url('img/hero_bg_1.jpg');" data-aos="fade">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="text-white font-weight-light mb-2 display-4">
                            Welcome to Versalink Post
                        </h1>
                        <h2 class="text-white mt-2 display-6">
                            Your Gateway to Inspiring Conversations
                        </h2>
                        <div class="text-white mb-4"><span class="text-white-opacity-05"><small>By Versalink | 13
                                    July 2024 |
                                    1:30:20</small></span></div>
                        <p><a href="single-post.html" class="btn btn-primary btn-sm py-3 px-4 small">Read The
                                Transcript</a></p>


                    </div>
                </div>
            </div>
        </div>


        <div class="site-section bg-light">
            <div class="container">

                <div class="row mb-5" data-aos="fade-up">
                    <div class="col-md-12 text-center">
                        <h2 class="font-weight-bold text-black">Recent Podcasts</h2>
                    </div>
                </div>
                <div class="d-flex justify-content-center podcast-entry mb-5 text-center" data-aos="fade-up"
                    style="background-color: transparent;">
                    <h1 class="text-black font-weight-bold text-center" style="background-color: transparent;">COMING
                        SOON!!</h1>
                </div>


            </div>
        </div>
        {{--  <div class="site-section">
            <div class="container" data-aos="fade-up">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h2 class="font-weight-bold text-black">Behind The Mic</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">

                            <img src="images/person_1.jpg" alt="Image" class="img-fluid">

                            <div class="text">

                                <h2 class="mb-2 font-weight-light h4">Megan Smith</h2>
                                <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam
                                    reprehenderit nemo.</p>
                                <p>
                                    <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">

                            <img src="images/person_2.jpg" alt="Image" class="img-fluid">

                            <div class="text">

                                <h2 class="mb-2 font-weight-light h4">Brooke Cagle</h2>
                                <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam
                                    reprehenderit nemo.</p>
                                <p>
                                    <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">

                            <img src="images/person_3.jpg" alt="Image" class="img-fluid">

                            <div class="text">

                                <h2 class="mb-2 font-weight-light h4">Philip Martin</h2>
                                <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam
                                    reprehenderit nemo.</p>
                                <p>
                                    <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">

                            <img src="images/person_4.jpg" alt="Image" class="img-fluid">

                            <div class="text">

                                <h2 class="mb-2 font-weight-light h4">Steven Ericson</h2>
                                <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam
                                    reprehenderit nemo.</p>
                                <p>
                                    <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">

                            <img src="images/person_5.jpg" alt="Image" class="img-fluid">

                            <div class="text">

                                <h2 class="mb-2 font-weight-light h4">Nathan Dumlao</h2>
                                <span class="d-block mb-2 text-white-opacity-05">Creative Director</span>
                                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit ullam
                                    reprehenderit nemo.</p>
                                <p>
                                    <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
                        <div class="team-member">

                            <img src="img/mj2.jpg" alt="Image" class="img-fluid">

                            <div class="text">

                                <div class="d-flex col justify-content-center podcast-entry mb-5 text-center"
                                    data-aos="fade-up" style="background-color: transparent;">
                                    <h1 class="text-black text-center h4" style="background-color: transparent;">
                                        Muhammad Jawwad</h1>
                                    <p>Director VDI</p>
                                </div>

                                <p>
                                    <a href="#" class="text-white p-2"><span class="icon-facebook"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-twitter"></span></a>
                                    <a href="#" class="text-white p-2"><span class="icon-linkedin"></span></a>
                                </p>
                            </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
 --}}
        {{--         <div class="site-section bg-light block-13">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h2 class="font-weight-bold text-black">Featured Guests</h2>
                    </div>
                </div>
                <div class="nonloop-block-13 owl-carousel">

                    <div class="text-center p-3 p-md-5 bg-white">
                        <div class="mb-4">
                            <img src="images/abba.jpg" alt="Image"
                                class="w-50 mx-auto img-fluid rounded-circle">
                        </div>
                        <div class="">
                            <h3 class="font-weight-light h5">Abba Ibrahim Jidda</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum
                                sed ea? Ducimus
                                quos, ea?</p>
                        </div>
                    </div>

                    <div class="text-center p-3 p-md-5 bg-white">
                        <div class="mb-4">
                            <img src="images/person_2.jpg" alt="Image"
                                class="w-50 mx-auto img-fluid rounded-circle">
                        </div>
                        <div class="">
                            <h3 class="font-weight-light h5">Muhammad Jawwad Abdulkadir</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum
                                sed ea? Ducimus
                                quos, ea?</p>
                        </div>
                    </div>

                    <div class="text-center p-3 p-md-5 bg-white">
                        <div class="mb-4">
                            <img src="images/person_3.jpg" alt="Image"
                                class="w-50 mx-auto img-fluid rounded-circle">
                        </div>
                        <div class="">
                            <h3 class="font-weight-light h5">Philip Martin</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum
                                sed ea? Ducimus
                                quos, ea?</p>
                        </div>
                    </div>

                    <div class="text-center p-3 p-md-5 bg-white">
                        <div class="mb-4">
                            <img src="images/person_4.jpg" alt="Image"
                                class="w-50 mx-auto img-fluid rounded-circle">
                        </div>
                        <div class="">
                            <h3 class="font-weight-light h5">Steven Ericson</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum
                                sed ea? Ducimus
                                quos, ea?</p>
                        </div>
                    </div>

                    <div class="text-center p-3 p-md-5 bg-white">
                        <div class="mb-4">
                            <img src="images/person_5.jpg" alt="Image"
                                class="w-50 mx-auto img-fluid rounded-circle">
                        </div>
                        <div class="">
                            <h3 class="font-weight-light h5">Nathan Dumlao</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum
                                sed ea? Ducimus
                                quos, ea?</p>
                        </div>
                    </div>

                    <div class="text-center p-3 p-md-5 bg-white">
                        <div class="mb-4">
                            <img src="images/person_6.jpg" alt="Image"
                                class="w-50 mx-auto img-fluid rounded-circle">
                        </div>
                        <div class="">
                            <h3 class="font-weight-light h5">Brook Smith</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iusto. Aliquam illo, cum
                                sed ea? Ducimus
                                quos, ea?</p>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}


        <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(img/hero_bg_1.jpg);"
            data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <h2>Subscribe</h2>
                        <p class="mb-5">Kindly fill in your email below to recieve our monthly newsletters</p>
                        <form action="#" method="post" class="site-block-subscribe">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control border-secondary text-white bg-transparent"
                                    placeholder="Enter Email" aria-label="Enter Email"
                                    aria-describedby="button-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button" id="button-addon2">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <footer class="site-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-4">About Podcast</h3>
                            <p>
                                Versalink Podcast is your go-to source for insightful discussions and deep dives into
                                the latest trends in technology, business, and culture. Each episode features interviews
                                with industry experts, thought leaders, and innovators who share their experiences and
                                knowledge on a wide range of topics.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Quick Menu</h3>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('vdi') }}">Vdi</a></li>
                                    <li><a href="{{ route('podcast') }}">Podcast</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Follow Us</h3>

                                <div>
                                    <a href="https://x.com/versalinkng?s=11" class="pl-3 pr-3"><span
                                            class="icon-twitter"></span></a>
                                    <a href="https://www.instagram.com/versalinkpost?igsh=dGhkMjNkMHB5Y3V6"
                                        class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                            <p>Kindly fill in your email below to to recieve newsletters</p>

                            <form action="#" method="post">
                                <div class="input-group mb-3">
                                    <input type="text"
                                        class="form-control border-secondary text-white bg-transparent"
                                        placeholder="Enter Email" aria-label="Enter Email"
                                        aria-describedby="button-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button"
                                            id="button-addon2">Send</button>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>

                </div>
                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12 fs-1">
                        <p class="fs-1">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made
                            with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>

                </div>
            </div>
        </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/mediaelement-and-player.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var mediaElements = document.querySelectorAll('video, audio'),
                total = mediaElements.length;

            for (var i = 0; i < total; i++) {
                new MediaElementPlayer(mediaElements[i], {
                    pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                    shimScriptAccess: 'always',
                    success: function() {
                        var target = document.body.querySelectorAll('.player'),
                            targetTotal = target.length;
                        for (var j = 0; j < targetTotal; j++) {
                            target[j].style.visibility = 'visible';
                        }
                    }
                });
            }
        });
    </script>


    <script src="js/main.js"></script>

</body>

</html>
