<!DOCTYPE html>
<html lang="en">

<head>
    <title>Podca &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

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
                        <h1><a href="{{ route('home') }}" class="text-white h2">Podcast</a></h1>
                    </div>
                    <div class="col-9" data-aos="fade-down">
                        <nav class="site-navigation position-relative text-right text-md-right" role="navigation">



                            <div class="d-inline-block ml-md-0 mr-auto py-3"><a href="#"
                                    class="site-menu-toggle js-menu-toggle text-white"><span
                                        class="icon-menu h3"></span></a></div>

                            <ul class="site-menu js-clone-nav d-none">
                                <li class="has-children active">
                                    <a href="index.html">Home</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                        <li class="has-children">
                                            <a href="#">Sub Menu</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-children">
                                    <a href="#">Dropdown</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li><a href="#">Menu Three</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>


                    </div>

                </div>
            </div>

        </header>

        <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade"
            data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
                        <h1 class="text-white font-weight-light mb-2 display-4">
                            Welcome to Versalink Podcast
                        </h1>
                        <h2 class="text-white mt-2 display-6">
                            Your Gateway to Inspiring Conversations
                        </h2>
                        <div class="text-white mb-4"><span class="text-white-opacity-05"><small>By Versalink | 13
                                    July 2024 |
                                    1:30:20</small></span></div>
                        <p><a href="single-post.html" class="btn btn-primary btn-sm py-3 px-4 small">Read The
                                Transcript</a></p>

                        <div class="player">
                            <audio id="player2" preload="none" controls style="max-width: 100%">
                                <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3"
                                    type="audio/mp3">
                            </audio>
                        </div>

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

                <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                    <div class="image" style="background-image: url('images/img_1.jpg');"></div>
                    <div class="text">

                        <h3 class="font-weight-light"><a href="single-post.html">Episode 08: How To Create Web Page
                                Using Bootstrap
                                4</a></h3>
                        <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                        class="sep">/</span> 16 September 2017 <span class="sep">/</span>
                                    1:30:20</small></span></div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat
                            mollitia
                            consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>

                        <div class="player">
                            <audio id="player2" preload="none" controls style="max-width: 100%">
                                <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3"
                                    type="audio/mp3">
                            </audio>
                        </div>

                    </div>
                </div>


                <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                    <div class="image" style="background-image: url('images/img_2.jpg');"></div>
                    <div class="text">

                        <h3 class="font-weight-light"><a href="single-post.html">Episode 07: How To Create Web Page
                                Using Bootstrap
                                4</a></h3>
                        <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                        class="sep">/</span> 16 September 2017 <span class="sep">/</span>
                                    1:30:20</small></span></div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat
                            mollitia
                            consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>


                        <div class="player">
                            <audio id="player2" preload="none" controls style="max-width: 100%">
                                <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3"
                                    type="audio/mp3">
                            </audio>
                        </div>

                    </div>
                </div>


                <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                    <div class="image" style="background-image: url('images/img_3.jpg');"></div>
                    <div class="text">

                        <h3 class="font-weight-light"><a href="single-post.html">Episode 06: How To Create Web Page
                                Using Bootstrap
                                4</a></h3>
                        <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                        class="sep">/</span> 16 September 2017 <span class="sep">/</span>
                                    1:30:20</small></span></div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat
                            mollitia
                            consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>

                        <div class="player">
                            <audio id="player2" preload="none" controls style="max-width: 100%">
                                <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3"
                                    type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>


                <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                    <div class="image" style="background-image: url('images/img_4.jpg');"></div>
                    <div class="text">

                        <h3 class="font-weight-light"><a href="single-post.html">Episode 05: How To Create Web Page
                                Using Bootstrap
                                4</a></h3>
                        <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                        class="sep">/</span> 16 September 2017 <span class="sep">/</span>
                                    1:30:20</small></span></div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat
                            mollitia
                            consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>

                        <div class="player">
                            <audio id="player2" preload="none" controls style="max-width: 100%">
                                <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3"
                                    type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>


                <div class="d-block d-md-flex podcast-entry bg-white mb-5" data-aos="fade-up">
                    <div class="image" style="background-image: url('images/img_5.jpg');"></div>
                    <div class="text">

                        <h3 class="font-weight-light"><a href="single-post.html">Episode 04: How To Create Web Page
                                Using Bootstrap
                                4</a></h3>
                        <div class="text-white mb-3"><span class="text-black-opacity-05"><small>By Mike Smith <span
                                        class="sep">/</span> 16 September 2017 <span class="sep">/</span>
                                    1:30:20</small></span></div>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti repellat
                            mollitia
                            consequatur, optio nesciunt placeat. Iste voluptates excepturi tenetur, nesciunt.</p>

                        <div class="player">
                            <audio id="player2" preload="none" controls style="max-width: 100%">
                                <source src="http://www.largesound.com/ashborytour/sound/AshboryBYU.mp3"
                                    type="audio/mp3">
                            </audio>
                        </div>
                    </div>
                </div>


            </div>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="site-block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-section">
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

                            <img src="images/person_6.jpg" alt="Image" class="img-fluid">

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


                </div>
            </div>
        </div>

        <div class="site-section bg-light block-13">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12 text-center">
                        <h2 class="font-weight-bold text-black">Featured Guests</h2>
                    </div>
                </div>
                <div class="nonloop-block-13 owl-carousel">

                    <div class="text-center p-3 p-md-5 bg-white">
                        <div class="mb-4">
                            <img src="images/person_1.jpg" alt="Image"
                                class="w-50 mx-auto img-fluid rounded-circle">
                        </div>
                        <div class="">
                            <h3 class="font-weight-light h5">Megan Smith</h3>
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
                            <h3 class="font-weight-light h5">Brooke Cagle</h3>
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
        </div>


        <div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(images/hero_bg_1.jpg);"
            data-aos="fade" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center justify-content-center text-center">

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <h2>Subscribe</h2>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit nihil saepe libero
                            sit odio
                            obcaecati veniam.</p>
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
                            <h3 class="footer-heading mb-4">About Podca</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit
                                vero atque,
                                consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis
                                blanditiis, minima
                                minus odio!</p>
                        </div>

                        <div class="mb-5">
                            <h3 class="footer-heading mb-4">Recent Podcast</h3>
                            <div class="block-25">
                                <ul class="list-unstyled">
                                    <li class="mb-3">
                                        <a href="#" class="d-flex">
                                            <figure class="image mr-4">
                                                <img src="images/img_1.jpg" alt="" class="img-fluid">
                                            </figure>
                                            <div class="text">
                                                <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet
                                                    consectetur elit</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="#" class="d-flex">
                                            <figure class="image mr-4">
                                                <img src="images/img_1.jpg" alt="" class="img-fluid">
                                            </figure>
                                            <div class="text">
                                                <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet
                                                    consectetur elit</h3>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mb-3">
                                        <a href="#" class="d-flex">
                                            <figure class="image mr-4">
                                                <img src="images/img_1.jpg" alt="" class="img-fluid">
                                            </figure>
                                            <div class="text">
                                                <h3 class="heading font-weight-light">Lorem ipsum dolor sit amet
                                                    consectetur elit</h3>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Quick Menu</h3>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Matches</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Team</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-6">
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                    <li><a href="#">Membership</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="footer-heading mb-4">Follow Us</h3>

                                <div>
                                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="mb-5">
                            <h3 class="footer-heading mb-4">Watch Video</h3>

                            <div class="block-16">
                                <figure>
                                    <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
                                    <a href="https://vimeo.com/channels/staffpicks/93951774"
                                        class="play-button popup-vimeo"><span class="icon-play"></span></a>
                                </figure>
                            </div>

                        </div>

                        <div class="mb-5">
                            <h3 class="footer-heading mb-2">Subscribe Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit minima minus odio.</p>

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
                    <div class="col-md-12">
                        <p>
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
