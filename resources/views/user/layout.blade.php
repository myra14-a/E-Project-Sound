<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
<<<<<<< HEAD
    <meta name="description" content="SOUND Template">
    <meta name="keywords" content="SOUND, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @php($site = \App\Models\SiteSetting::current())
    <title>{{ $site->site_name }} | {{ $site->tagline ?: 'Music' }}</title>
=======
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DJoz | Template</title>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="users/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="users/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="users/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="users/css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="users/css/rockville.css" type="text/css">
    <link rel="stylesheet" href="users/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="users/css/owl.carousel.min.css" type="text/css">
<<<<<<< HEAD
    <link rel="stylesheet" href="users/css/slicknav.min.css" type="text/css">
=======
    <link rel="stylesheet" href="users/csss/licknav.min.css" type="text/css">
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
    <link rel="stylesheet" href="users/css/style.css" type="text/css">
     <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<<<<<<< HEAD
<style>.header__logo img{width:170px;max-height:70px;object-fit:contain}.header__logo{display:flex;align-items:center;min-height:74px}</style>
</head>

@php($site = $site ?? \App\Models\SiteSetting::current())
=======
</head>

>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header header--normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
<<<<<<< HEAD
                        <a href="{{ route('home') }}"><img src="{{ asset('users/img/logo.png') }}" alt="{{ $site->site_name }}"></a>
=======
                        <a href="./index.html"><img src="users/img/logo.png" alt=""></a>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
<<<<<<< HEAD
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li class="active"><a href="/about">About</a></li>
                                <li><a href="{{ route('media.index',['type'=>'video']) }}">Videos</a></li>
                                <li><a href="/blogs">Blog</a></li>
=======
                                <li><a href="/index">Home</a></li>
                                <li class="active"><a href="/about">About</a></li>
                                <li><a href="./videos.html">Videos</a></li>
                                <li><a href="./blogs">Blog</a></li>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
                                
                                <li><a href="./contact">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__right__social">
<<<<<<< HEAD
                            @auth
                                @if(auth()->user()->is_admin)<a href="{{ route('admin.dashboard') }}">Admin</a>@endif
                                <a href="{{ route('dashboard') }}">Account</a>
                            @else
                                <a href="{{ route('register') }}">Sign up</a>
                                <a href="{{ route('login') }}" class="btn btn-light text-dark rounded-pill">Login</a>
                            @endauth
=======
                            <a href="#">Sign up</a>
                            <a href="#" class="btn btn-light text-dark rounded-pill">Login in</a>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

@yield('content')


     <!-- Footer Section Begin -->
    <footer class="footer footer--normal spad set-bg" data-setbg="users/img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>Phone</p>
<<<<<<< HEAD
                                <h6>{{ $site->phone ?: '—' }}</h6>
=======
                                <h6>1-677-124-44227</h6>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
<<<<<<< HEAD
                                <h6>{{ $site->email ?: '—' }}</h6>
=======
                                <h6>DJ.Music@gmail.com</h6>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
<<<<<<< HEAD
                        <h2>{{ $site->site_name }}</h2>
                        <div class="footer__social__links">
                            <a href="{{ $site->facebook_url ?: '#' }}"><i class="fa fa-facebook"></i></a>
                            <a href="{{ $site->twitter_url ?: '#' }}"><i class="fa fa-twitter"></i></a>
                            <a href="{{ $site->instagram_url ?: '#' }}"><i class="fa fa-instagram"></i></a>
                            <a href="{{ $site->youtube_url ?: '#' }}"><i class="fa fa-youtube-play"></i></a>
=======
                        <h2>DJoz</h2>
                        <div class="footer__social__links">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
<<<<<<< HEAD
                        <h4>{{ $site->footer_text ?: 'Stay With me' }}</h4>
=======
                        <h4>Stay With me</h4>
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
                        <form action="#">
                            <input type="text" placeholder="Email">
                            <button type="submit"><i class="fa fa-send-o"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="users/js/jquery-3.3.1.min.js"></script>
    <script src="users/js/bootstrap.min.js"></script>
    <script src="users/js/jquery.magnific-popup.min.js"></script>
    <script src="users/js/jquery.nicescroll.min.js"></script>
    <script src="users/js/jquery.barfiller.js"></script>
    <script src="users/js/jquery.countdown.min.js"></script>
    <script src="users/js/jquery.slicknav.js"></script>
    <script src="users/js/owl.carousel.min.js"></script>
    <script src="users/js/main.js"></script>

    <!-- Music Plugin -->
    <script src="users/js/jquery.jplayer.min.js"></script>
    <script src="users/js/jplayerInit.js"></script>

    <script>

    function scrollArtists() {

        const container =
            document.getElementById('artistsContainer');

        container.scrollBy({
            left: 500,
            behavior: 'smooth'
        });

    }
</script>

<script>
    function scrollSongs(direction) {
        const container = document.getElementById('songCards');

        container.scrollBy({
            left: direction * 250,
            behavior: 'smooth'
        });
    }
</script>
</body>

</html>